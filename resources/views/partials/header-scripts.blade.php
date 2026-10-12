{{-- Header JS (sab sites): mobile menu levels, scroll par header hide, dropdown hover --}}
 <script>
    // Next level navigation
    document.querySelectorAll('.next-menu').forEach(link => {
      link.addEventListener('click', e => {
        e.preventDefault();
        const target = link.getAttribute('data-target');
        document.querySelectorAll('.menu-level').forEach(menu => menu.classList.remove('active'));
        document.getElementById(target).classList.add('active');
      });
    });

    // Back navigation
    document.querySelectorAll('.back-btn').forEach(btn => {
      btn.addEventListener('click', () => {
        const backTarget = btn.getAttribute('data-back');
        document.querySelectorAll('.menu-level').forEach(menu => menu.classList.remove('active'));
        document.getElementById(backTarget).classList.add('active');
      });
    });
  </script>

  <script>
    // Hide header on scroll down, show it on scroll up
    (function () {
      const header = document.getElementById('siteHeader');
      if (!header) return;

      let lastScrollY = window.scrollY;
      const hideThreshold = 80; // don't hide until scrolled past header height
      const delta = 5; // ignore tiny scroll jitters

      window.addEventListener('scroll', () => {
        const currentScrollY = window.scrollY;

        if (Math.abs(currentScrollY - lastScrollY) < delta) return;

        if (currentScrollY > lastScrollY && currentScrollY > hideThreshold) {
          header.classList.add('header_hidden');
        } else {
          header.classList.remove('header_hidden');
        }

        lastScrollY = currentScrollY;
      }, { passive: true });
    })();
  </script>

  <script>
    // Open header dropdowns (Services, country select) on hover instead of click
    document.addEventListener('DOMContentLoaded', function () {
      if (typeof bootstrap === 'undefined') return;

      document.querySelectorAll('header .dropdown').forEach(function (dropdown) {
        const toggle = dropdown.querySelector('[data-bs-toggle="dropdown"]');
        if (!toggle) return;

        const instance = bootstrap.Dropdown.getOrCreateInstance(toggle);
        let closeTimer;

        dropdown.addEventListener('mouseenter', function () {
          clearTimeout(closeTimer);
          instance.show();
        });

        dropdown.addEventListener('mouseleave', function () {
          closeTimer = setTimeout(function () {
            instance.hide();
          }, 150);
        });
      });
    });
  </script>
