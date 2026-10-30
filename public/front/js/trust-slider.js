/* Looping "trust slider" (blue section with image cards). Markup: #trustSliderTrack, .trust_slider_prev / .trust_slider_next,
   #trustSliderProgress .trust_slider_seg.

   The cards are cloned into three identical sets: [clones][originals][clones]. The track rests in the middle set, so the
   slider can be moved forwards and backwards (arrows, swipe or scroll) without ever reaching an end.

   Desktop / tablet: autoplay every 4 seconds, plus arrows and swipe/scroll.
   Phones (max-width 767px): no autoplay. The slider moves when the arrows are clicked or when a card is swiped.

   The loop jump is made only after scrolling has stopped, so a swipe is never interrupted mid-momentum.
   Cloned cards are hidden from assistive technology and their headings are plain blocks (each heading exists once). */
(function () {
    var AUTOPLAY_MS = 4000;
    var SETTLE_MS = 120;

    function init() {
        var track = document.getElementById('trustSliderTrack');
        var prevBtn = document.querySelector('.trust_slider_prev');
        var nextBtn = document.querySelector('.trust_slider_next');
        var segs = document.querySelectorAll('#trustSliderProgress .trust_slider_seg');
        if (!track || !segs.length) return;

        var originals = Array.prototype.slice.call(track.querySelectorAll('.trust_slide'));
        if (!originals.length) return;

        // Copy of a card for the loop: not focusable, hidden from screen readers, headings turned into styled blocks.
        function cloneCard(card) {
            var clone = card.cloneNode(true);
            clone.setAttribute('aria-hidden', 'true');
            clone.querySelectorAll('a, button, input, select, textarea, [tabindex]').forEach(function (el) {
                el.setAttribute('tabindex', '-1');
            });
            var sourceHeadings = card.querySelectorAll('h2, h3, h4');
            clone.querySelectorAll('h2, h3, h4').forEach(function (heading, i) {
                var block = document.createElement('div');
                var cs = window.getComputedStyle(sourceHeadings[i]);
                block.className = heading.className;
                block.innerHTML = heading.innerHTML;
                ['fontSize', 'fontWeight', 'lineHeight', 'color', 'fontFamily', 'letterSpacing', 'margin'].forEach(function (prop) {
                    block.style[prop] = cs[prop];
                });
                heading.replaceWith(block);
            });
            var img = clone.querySelector('img');
            if (img) img.setAttribute('alt', '');
            return clone;
        }

        var before = originals.map(cloneCard);
        var after = originals.map(cloneCard);
        before.forEach(function (clone) { track.insertBefore(clone, originals[0]); });
        after.forEach(function (clone) { track.appendChild(clone); });

        var offsetOf = function (card) { return card.offsetLeft - track.firstElementChild.offsetLeft; };
        // Width of one full set of cards (distance from the first clone to the first original).
        var cycleWidth = function () { return offsetOf(originals[0]); };

        // Change scrollLeft instantly (no snapping animation), used for the invisible loop jumps.
        function jumpTo(left) {
            track.style.scrollSnapType = 'none';
            track.scrollLeft = left;
            window.requestAnimationFrame(function () { track.style.scrollSnapType = ''; });
        }

        // Keep the position inside the middle set; every set is identical, so the jump is invisible.
        function normalise() {
            var width = cycleWidth();
            if (width <= 0) return;
            var left = track.scrollLeft;
            if (left >= width * 2 - 1) jumpTo(left - width);
            else if (left < width - 1) jumpTo(left + width);
        }

        function updateProgress() {
            var width = cycleWidth();
            if (width <= 0) return;
            var position = track.scrollLeft % width;
            var active = 0;
            var best = Infinity;
            originals.forEach(function (card, i) {
                var distance = Math.abs(position - (offsetOf(card) - width));
                distance = Math.min(distance, width - distance);
                if (distance < best) { best = distance; active = i; }
            });
            var activeIndex = Math.min(segs.length - 1, Math.round(active * (segs.length - 1) / Math.max(1, originals.length - 1)));
            segs.forEach(function (seg, i) { seg.classList.toggle('active', i === activeIndex); });
        }

        function scrollByCard(direction) {
            var gap = parseFloat(window.getComputedStyle(track).gap) || 0;
            track.scrollBy({ left: direction * (originals[0].offsetWidth + gap), behavior: 'smooth' });
        }

        var settleTimer = null;
        track.addEventListener('scroll', function () {
            updateProgress();
            window.clearTimeout(settleTimer);
            settleTimer = window.setTimeout(function () {
                normalise();
                updateProgress();
            }, SETTLE_MS);
        }, { passive: true });

        window.addEventListener('resize', function () {
            jumpTo(cycleWidth());
            updateProgress();
        });

        if (prevBtn) prevBtn.addEventListener('click', function () { scrollByCard(-1); });
        if (nextBtn) nextBtn.addEventListener('click', function () { scrollByCard(1); });

        // Autoplay only on larger screens.
        var phoneQuery = window.matchMedia('(max-width: 767px)');
        window.setInterval(function () {
            if (!phoneQuery.matches) scrollByCard(1);
        }, AUTOPLAY_MS);

        // Start in the middle set.
        jumpTo(cycleWidth());
        updateProgress();
    }

    if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', init);
    else init();
})();
