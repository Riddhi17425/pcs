(function () {
    function stabilise(section) {
        var list = section.querySelector('.split_acc_list');
        if (!list) return;
        var bodies = Array.prototype.slice.call(list.querySelectorAll('.split_acc_body'));
        if (!bodies.length) return;

        list.style.minHeight = '';

        var openHeight = 0;
        bodies.forEach(function (body) {
            if (body.classList.contains('show')) openHeight += body.offsetHeight;
        });
        var closedHeight = list.offsetHeight - openHeight;

        var tallest = 0;
        bodies.forEach(function (body) {
            var copy = body.cloneNode(true);
            copy.removeAttribute('id');
            copy.className = 'split_acc_body';
            copy.style.cssText = 'position:absolute;visibility:hidden;display:block;height:auto;width:' + body.parentNode.clientWidth + 'px';
            list.appendChild(copy);
            tallest = Math.max(tallest, copy.offsetHeight);
            list.removeChild(copy);
        });

        list.style.minHeight = Math.ceil(closedHeight + tallest) + 'px';
    }

    function run() {
        document.querySelectorAll('.acc_why').forEach(stabilise);
    }

    if (document.readyState === 'complete') run();
    else window.addEventListener('load', run);

    var timer = null;
    window.addEventListener('resize', function () {
        window.clearTimeout(timer);
        timer = window.setTimeout(run, 150);
    });
})();
