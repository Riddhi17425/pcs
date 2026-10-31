
<script src="https://www.google.com/recaptcha/api.js?onload=initAllRecaptchas&render=explicit" async defer></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/jquery.validate.min.js" integrity="sha512-KFHXdr2oObHKI9w4Hv1XPKc898mE4kgYx58oqsc/JqqdLMDI4YjOLzom+EMlW8HFUd0QfjfAvxSL6sEq/a42fQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/additional-methods.min.js" integrity="sha512-owaCKNpctt4R4oShUTTraMPFKQWG9UdWTtG6GRzBjFV4VypcFi6+M3yc4Jk85s3ioQmkYWJbUl1b2b2r41RTjA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
<script src="https://unpkg.com/scrollreveal"></script>

<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>

<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@25.12.4/build/js/intlTelInput.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

<script src="{{ asset('public/front/js/main.js') }}?v={{ filemtime(public_path('front/js/main.js')) }}"></script>


<script>
const tabs = document.querySelectorAll('.left-tabs .tab-item[data-tab]');

tabs.forEach(tab => {
  const panel = document.getElementById(tab.dataset.tab);

  if(!panel) return;

  tab.addEventListener('mouseenter', () => {
    panel.style.display = 'flex';
  });

  tab.addEventListener('mouseleave', () => {
    setTimeout(() => {
      if (!panel.matches(':hover')) {
        panel.style.display = 'none';
      }
    }, 50);
  });

  panel.addEventListener('mouseenter', () => {
    panel.style.display = 'flex';
  });

  panel.addEventListener('mouseleave', () => {
    panel.style.display = 'none';
  });
});



document.addEventListener("DOMContentLoaded", function () {
    function initFormValidation(form, captchaWidgetId) {
        if (!form) return;

        const submitBtn = form.querySelector("button[type='submit']");

        const fields = {
            fullname: form.querySelector("[name='fullname']"),
            email: form.querySelector("[name='email']"),
            phone: form.querySelector("[name='phone']"),
            country: form.querySelector("[name='country']"),
            services: form.querySelectorAll("[name='services[]']"),
        };

        const spamDomains = [
          "tempmail.com","10minutemail.com","yopmail.com","mailinator.com","guerrillamail.com",
          "guerrillamail.net","maildrop.cc","maildrop.xyz","trashmail.com","trashmail.net",
          "getnada.com","nada.me","dispostable.com","disposablemail.com","mailnesia.com",
          "temp-mail.org","temp-mail.io","temporarymail.com","temp-mail.plus","mytemp.email",
          "throwawaymail.com","fakemailgenerator.com","tempemail.co","tempinbox.com",
          "spam4.me","mailcatch.com","mailboxtemporary.com","mintemail.com","10minutemail.net",
          "yopmail.fr","yopmail.net","nowmymail.com","mail-temporaire.com","spambox.us",
          "fakeinbox.com","spamgourmet.com","sharklasers.com","boun.cr","20minutemail.com",
          "emailondeck.com","mailinator2.com","mail-temp.com","temp-mail.org.uk","tempail.com",
          "mailexpire.com","pokemail.net","mailnull.com","instantemailaddress.com","tempmail.de",
          "tempmail.cc","tempmail.me","spamex.com","wegwerfemail.de","mailnesia.org"
        ];

        function showError(field, message) {
            let parent = field.closest(".form-group") || field.closest(".col-lg-6") || field.closest(".col-lg-12") || field.parentElement;
            let errorSpan = parent.querySelector(".js-error");
            if (!errorSpan) {
                errorSpan = document.createElement("span");
                errorSpan.classList.add("text-danger", "js-error");
                parent.appendChild(errorSpan);
            }
            errorSpan.textContent = message;
        }

        function removeError(field) {
            let parent = field.closest(".form-group") || field.closest(".col-lg-6") || field.closest(".col-lg-12") || field.parentElement;
            let errorSpan = parent.querySelector(".js-error");
            if (errorSpan) errorSpan.remove();
        }

        function validateField(field, name) {
            if (!field && name !== "services") return true;

            if (name === "services") {
                if (!fields.services.length) return true;
                const checked = Array.from(fields.services).some(chk => chk.checked);
                if (!checked) {
                    showError(fields.services[0].closest(".col-lg-6") || fields.services[0].parentElement, "Please select at least one service");
                    return false;
                } else {
                    removeError(fields.services[0].closest(".col-lg-6") || fields.services[0].parentElement);
                    return true;
                }
            }

            if (!field.value.trim()) {
                showError(field, `${name.charAt(0).toUpperCase() + name.slice(1)} is required`);
                return false;
            }

            if (name === "phone") {
                const cleaned = field.value.replace(/[^0-9]/g, "").slice(0, 15);
                field.value = cleaned;
                if (cleaned.length < 10) {
                    showError(field, "Phone number must be at least 10 digits");
                    return false;
                }
            }

            if (name === "email") {
                const emailVal = field.value.trim().toLowerCase();
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(emailVal)) {
                    showError(field, "Enter a valid email address");
                    return false;
                }
                const domain = emailVal.split("@")[1];
                if (spamDomains.includes(domain)) {
                    showError(field, "Temporary / spam emails are not allowed");
                    return false;
                }
            }

            removeError(field);
            return true;
        }

        const blurred = new Set();
        function attachValidation(field, name) {
            if (!field) return;
            field.addEventListener("blur", () => {
                blurred.add(field);
                validateField(field, name);
            });
            field.addEventListener("input", () => {
                removeError(field);
                if (blurred.has(field)) {
                    validateField(field, name);
                }
            });
        }

        attachValidation(fields.fullname, "fullname");
        attachValidation(fields.email, "email");
        attachValidation(fields.phone, "phone");
        if (fields.country) {
            fields.country.addEventListener("change", () => validateField(fields.country, "country"));
        }
        if (fields.services.length) {
            fields.services.forEach(chk => chk.addEventListener("change", () => validateField(chk, "services")));
        }

        form.addEventListener("submit", function (e) {
            let valid = true;
            if (fields.fullname && !validateField(fields.fullname, "fullname")) valid = false;
            if (fields.email && !validateField(fields.email, "email")) valid = false;
            if (fields.phone && !validateField(fields.phone, "phone")) valid = false;
            if (fields.country && !validateField(fields.country, "country")) valid = false;
            if (fields.services.length && !validateField(fields.services[0], "services")) valid = false;

            if (captchaWidgetId !== null && typeof grecaptcha !== "undefined") {
                const captchaResponse = grecaptcha.getResponse(captchaWidgetId);
                if (!captchaResponse) {
                    const errorEl = form.querySelector(".captcha-error");
                    if (errorEl) errorEl.style.display = "block";
                    valid = false;
                }
            }

            if (!valid) {
                e.preventDefault();
                return;
            }

            submitBtn.disabled = true;
            const label = submitBtn.querySelector(".color-button__label");
            if (label) {
                label.textContent = "Submitting...";
            } else {
                submitBtn.textContent = "Submitting...";
            }
        });
    }

    window.initAllRecaptchas = function () {
        const host = location.hostname;
        const isLocal = host === 'localhost' || host === '127.0.0.1' || host.endsWith('.test');
        const TEST_KEY = '6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI';

        document.querySelectorAll('.g-recaptcha').forEach(function (captchaDiv) {
            if (captchaDiv.querySelector('iframe')) return;

            const cbName  = captchaDiv.getAttribute('data-callback');
            const expName = captchaDiv.getAttribute('data-expired-callback');

            const widgetId = grecaptcha.render(captchaDiv, {
                sitekey: isLocal ? TEST_KEY : captchaDiv.getAttribute('data-sitekey'),
                callback: function () {
                    if (cbName && typeof window[cbName] === 'function') window[cbName]();
                },
                'expired-callback': function () {
                    if (expName && typeof window[expName] === 'function') window[expName]();
                }
            });
            captchaDiv.dataset.widgetId = widgetId;

            const form = captchaDiv.closest('.validated-form');
            if (form) initFormValidation(form, widgetId);
        });

        document.querySelectorAll('.validated-form').forEach(function (form) {
            if (!form.querySelector('.g-recaptcha')) initFormValidation(form, null);
        });
    };
});
</script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const requestModal = document.getElementById('exampleModal');
    const countrySelect = document.getElementById('requestCountrySelect');
    const phoneInput = document.getElementById('requestPhone');
    const fullPhoneInput = document.getElementById('requestFullPhone');
    const requestForm = document.getElementById('requestForm');

    if (!requestModal || !phoneInput) return;

    const siteCountry = @json($site['phone_country'] ?? 'in');
    const isGlobal = siteCountry === 'in';

    let itiRequest = null;
    let countryDetected = false;

    function syncCountry() {
        const name = itiRequest && itiRequest.getSelectedCountryData().name;
        if (countrySelect && name) countrySelect.value = name.replace(/\s*\(.*\)\s*$/, '');
    }

    requestModal.addEventListener('shown.bs.modal', function () {
        if (!itiRequest) {
            itiRequest = window.intlTelInput(phoneInput, {
                initialCountry: siteCountry,
                separateDialCode: true,
                preferredCountries: ["in", "ae", "us", "gb"],
                utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@25.12.4/build/js/utils.js"
            });
            phoneInput.addEventListener('countrychange', syncCountry);
            syncCountry();
        }

        if (!isGlobal || countryDetected) return;

        fetch('https://ipwho.is/')
            .then(res => res.json())
            .then(data => {
                if (!data || data.success === false || !data.country) return;

                if (data.country_code && itiRequest) {
                    itiRequest.setCountry(data.country_code.toLowerCase());
                    syncCountry();
                }

                countryDetected = true;
            })
            .catch(err => console.warn('Country auto-detect failed:', err));
    });

    if (requestForm) {
        requestForm.addEventListener('submit', function () {
            if (!itiRequest) return;
            const countryData = itiRequest.getSelectedCountryData();
            const number = phoneInput.value.replace(/\s+/g, "");
            fullPhoneInput.value = "+" + countryData.dialCode + number;
        });
    }
});
</script>

<style>
    .iti input#requestPhone {
        padding-left: 105px !important;
    }
    .form-group:has(#requestPhone) label {
        left: 90px !important;
    }
    .iti {
        width: 100%;
        display: block;
    }
    .iti__country-list {
        background-color: #fff !important;
        z-index: 1060;
    }
    .iti__country-list .iti__country-name,
    .iti__country-list .iti__dial-code {
        color: #182653 !important;
    }
    .iti__country.iti__highlight {
        background-color: #f0f0f0 !important;
    }
    .iti .iti__selected-dial-code{
        color:#111111;
    }
    #requestPhone::placeholder {
        color: #111111;
        opacity: 1;
    }
</style>

<button type="button" id="backToTop" class="back_to_top" aria-label="Back to top">
  <svg width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
    <path d="M12 19V5M12 5L5 12M12 5L19 12" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
  </svg>
</button>

<script>
document.addEventListener('DOMContentLoaded', function () {
  const btn = document.getElementById('backToTop');
  if (!btn) return;

  function toggleBtn() {
    btn.classList.toggle('show', window.scrollY > 400);
  }

  window.addEventListener('scroll', toggleBtn, { passive: true });
  toggleBtn();

  btn.addEventListener('click', function () {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });
});
</script>
