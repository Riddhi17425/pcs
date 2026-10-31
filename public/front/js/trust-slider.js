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
        var cycleWidth = function () { return offsetOf(originals[0]); };

        function jumpTo(left) {
            track.style.scrollSnapType = 'none';
            track.scrollLeft = left;
            window.requestAnimationFrame(function () { track.style.scrollSnapType = ''; });
        }

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

        var phoneQuery = window.matchMedia('(max-width: 767px)');
        window.setInterval(function () {
            if (!phoneQuery.matches) scrollByCard(1);
        }, AUTOPLAY_MS);

        jumpTo(cycleWidth());
        updateProgress();
    }

    if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', init);
    else init();
})();
