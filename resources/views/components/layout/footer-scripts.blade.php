{{-- Sab countries ke footer ke baad ka common part: WhatsApp button, Request-a-Call modal, form validation, recaptcha, scripts, </body></html> --}}
@include('components.layout.whatsapp')

<!-- Request A Call modal (sab countries). Style: public/front/css/common/request-modal.css
     JS hooks same hain: #requestForm (.validated-form), #requestPhone, #requestFullPhone, #requestCountrySelect -->
@php
    use App\Models\Country;
    $countries = Country::all();
    $rqBadges = asset('public/front/images/figma-footer-badges');
@endphp
<div class="modal fade rq_modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <button type="button" class="rq_close" data-bs-dismiss="modal" aria-label="Close">
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 1L13 13M13 1L1 13" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
            </button>

            <div class="rq_grid">
                {{-- Left: brand panel --}}
                <aside class="rq_side">
                    <span class="rq_eyebrow">Free Consultation</span>
                    <h5 class="rq_title" id="exampleModalLabel">Let’s talk about your accounting needs</h5>
                    <p class="rq_lead">Share a few details and one of our accounting experts will call you back within 24 hours.</p>

                    <ul class="rq_points">
                        <li>Free, no-obligation consultation</li>
                        <li>Response within 24 hours</li>
                        <li>Dedicated, experienced accounting team</li>
                        <li>Secure &amp; confidential, NDA on request</li>
                    </ul>

                    <div class="rq_contact">
                        <a href="mailto:info@pcsglobalgroup.com">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3 6.5C3 5.67 3.67 5 4.5 5h15c.83 0 1.5.67 1.5 1.5v11c0 .83-.67 1.5-1.5 1.5h-15c-.83 0-1.5-.67-1.5-1.5v-11Z" stroke="currentColor" stroke-width="1.5"/><path d="M3.5 6.5 12 13l8.5-6.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            info@pcsglobalgroup.com
                        </a>
                    </div>

                    <div class="rq_badges">
                        <img src="{{ $rqBadges }}/iso-9001.png" alt="ISO 9001" loading="lazy">
                        <img src="{{ $rqBadges }}/iso-27001.png" alt="ISO 27001" loading="lazy">
                        <img src="{{ $rqBadges }}/gdpr.png" alt="GDPR" loading="lazy">
                    </div>
                </aside>

                {{-- Right: form --}}
                <div class="rq_main">
                    <div class="rq_head">
                        <span class="rq_head_icon">
                            <svg width="20" height="20" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2.51 1l3.64.13c.77.03 1.45.51 1.74 1.24l1.08 2.66c.25.62.18 1.33-.18 1.88L7.41 9.04c.82 1.17 3.04 3.92 5.39 5.52l1.75-1.08c.45-.27.98-.36 1.48-.23l3.49.89c.93.24 1.55 1.13 1.48 2.1l-.22 2.99c-.08 1.05-.95 1.87-1.96 1.75C5.39 19.43-2.48 1 2.51 1Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </span>
                        <div>
                            <p class="rq_head_title">Request A Call</p>
                            <p class="rq_head_sub">Fields marked <span>*</span> are required</p>
                        </div>
                    </div>

                    <form id="requestForm" class="validated-form rq_form" action="{{ route('request.store') }}" method="POST" novalidate>
                        @csrf
                        {{-- Honeypot (bots ke liye) --}}
                        <div style="display:none;">
                            <label>Leave this field empty</label>
                            <input type="text" name="fax_number" autocomplete="off">
                        </div>

                        <div class="row g-3">
                            <div class="col-lg-12 rq_field">
                                <label for="rqName">Full Name <span>*</span></label>
                                <div class="rq_input">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 12a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9Z" stroke="currentColor" stroke-width="1.5"/><path d="M4 20.5C4 16.91 7.58 14 12 14s8 2.91 8 6.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
                                    <input type="text" id="rqName" name="fullname" maxlength="70" placeholder="e.g. John Smith" autocomplete="name"
                                        oninput="this.value=this.value.replace(/[^a-zA-Z\s]/g,'').replace(/\s+/g,' ').trimStart();">
                                </div>
                            </div>

                            <div class="col-lg-12 rq_field">
                                <label for="rqEmail">Email Address <span>*</span></label>
                                <div class="rq_input">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3 6.5C3 5.67 3.67 5 4.5 5h15c.83 0 1.5.67 1.5 1.5v11c0 .83-.67 1.5-1.5 1.5h-15c-.83 0-1.5-.67-1.5-1.5v-11Z" stroke="currentColor" stroke-width="1.5"/><path d="M3.5 6.5 12 13l8.5-6.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                    <input type="email" id="rqEmail" name="email" maxlength="70" placeholder="you@company.com" autocomplete="email">
                                </div>
                            </div>

                            <div class="col-lg-12 rq_field">
                                <label for="requestPhone">Phone Number <span>*</span></label>
                                <div class="rq_input rq_input_phone">
                                    <input type="tel" name="phone" id="requestPhone" maxlength="15" minlength="10" placeholder="Phone number" autocomplete="tel"
                                        oninput="this.value=this.value.replace(/[^0-9]/g,'').slice(0,15);">
                                </div>
                                <input type="hidden" name="full_phone" id="requestFullPhone">
                            </div>

                            <div class="col-lg-12 rq_field">
                                <label for="requestCountrySelect">Country <span>*</span></label>
                                <div class="rq_input rq_input_select">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="1.5"/><path d="M3 12h18M12 3c2.5 2.5 3.75 5.5 3.75 9S14.5 18.5 12 21c-2.5-2.5-3.75-5.5-3.75-9S9.5 5.5 12 3Z" stroke="currentColor" stroke-width="1.5"/></svg>
                                    <select name="country" id="requestCountrySelect">
                                        <option value="" hidden>Select your country</option>
                                        @foreach ($countries as $country)
                                            <option value="{{ $country->name }}">{{ $country->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-12 rq_field">
                                <label for="rqMessage">How can we help? <em>(optional)</em></label>
                                <div class="rq_input rq_input_area">
                                    <textarea id="rqMessage" name="message" rows="3" placeholder="Tell us briefly about your requirement"></textarea>
                                </div>
                            </div>

                            <div class="col-lg-12 rq_field">
                                <div class="g-recaptcha" data-sitekey="6LfxJ7crAAAAAGJsj1iMJSQXpZLJE47H1h6StuUT" data-callback="onCaptchaSuccessRequest"></div>
                                <span class="captcha-error text-danger" style="display:none;">Please verify you are not a robot.</span>
                            </div>

                            <div class="col-lg-12">
                                <button type="submit" class="rq_submit">
                                    <span class="color-button__label">Request a Call Back</span>
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5 12h14M13 6l6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                </button>
                                <p class="rq_note">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="4" y="10" width="16" height="11" rx="2" stroke="currentColor" stroke-width="1.6"/><path d="M8 10V7a4 4 0 1 1 8 0v3" stroke="currentColor" stroke-width="1.6"/></svg>
                                    Your details are safe with us. We never share your information.
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- WhatsApp Floating Button -->
<!--<a href="https://api.whatsapp.com/send?phone=918460268698&text=Hello,%20I%27m%20visiting%20your%20website%20and%20would%20like%20to%20know%20more" class="whatsapp-float" target="_blank">-->
<!--    <img src="{{asset('public/front/images/WhatsApp.svg')}}" alt="WhatsApp">-->
<!--</a>-->

<!--<style>-->
      <!--/* ===== MODAL DESIGN ===== */-->
<!--      .Whats_mpp_modal .popup-box_whatsapp {-->
<!--          border-radius: 16px;-->
          <!--/* overflow: hidden;   */-->
<!--      }-->

      <!--/* Header */-->
<!--      .Whats_mpp_modal .popup-header {-->
<!--          background: #182653;-->
<!--          color: #fff;-->
<!--          padding: 15px 20px;-->
<!--      }-->

<!--      .Whats_mpp_modal .popup-header h5 {-->
<!--          margin: 0;-->
<!--          font-weight: 600;-->
<!--      }-->

<!--      .Whats_mpp_modal .white-close {-->
<!--          filter: invert(1);-->
<!--      }-->

      <!--/* Body */-->
<!--      .Whats_mpp_modal .popup-box_whatsapp .modal-body {-->
<!--          padding: 25px;-->
<!--      }-->

      <!--/* Inputs */-->
<!--      .Whats_mpp_modal .popup-input {-->
<!--          border-radius: 12px;-->
<!--          height: 50px;-->
<!--          border: 1px solid #ddd;-->
<!--          box-shadow: none !important;-->
<!--      }-->

<!--      .Whats_mpp_modal .popup-input:focus {-->
<!--          border-color: #182653;-->
<!--      }-->

      <!--/* Textarea */-->
<!--      .Whats_mpp_modal textarea.popup-input {-->
<!--          height: 90px;-->
<!--      }-->

      <!--/* Button */-->
<!--      .Whats_mpp_modal .popup-btn {-->
<!--          background: #182653;-->
<!--          color: #fff;-->
<!--          height: 50px;-->
<!--          border-radius: 12px;-->
<!--          font-weight: 600;-->
<!--          border: none;-->
<!--      }-->

<!--      .Whats_mpp_modal .popup-btn:hover {-->
<!--          background: #182653;-->
<!--          color: #fff;-->
<!--      }-->

      <!--/* intl tel input full width */-->
<!--      .Whats_mpp_modal .iti {-->
<!--          width: 100%;-->
<!--      }-->

<!--      .Whats_mpp_modal .iti__selected-flag {-->
<!--          border-radius: 10px 0 0 10px;-->
<!--      }-->

      <!--/* Remove modal scroll */-->
<!--      .Whats_mpp_modal .modal-dialog {-->
<!--          max-width: 420px;-->
<!--      }-->

<!--      .Whats_mpp_modal .modal-content {-->
          <!--/* overflow: hidden; */-->
<!--      }-->
<!--.WhatsAppButton_mpp {-->
<!--    background: #14a614;-->
<!--    position: fixed;-->
<!--    bottom: 35px;-->
<!--    right: 0px;-->
<!--    z-index: 9999;-->
<!--    width: 45px;-->
<!--    height: 45px;-->
<!--    border-radius: 5px 0 0 5px;-->
<!--  cursor: pointer;-->
<!--    animation: pulse 1.5s infinite;-->
<!--}-->

<!--@keyframes pulse {-->
<!--    0% {-->
<!--        box-shadow: 0 0 0 0 rgba(20, 166, 20, 0.7);-->
<!--    }-->
<!--    70% {-->
<!--        box-shadow: 0 0 0 15px rgba(20, 166, 20, 0);-->
<!--    }-->
<!--    100% {-->
<!--        box-shadow: 0 0 0 0 rgba(20, 166, 20, 0);-->
<!--    }-->
<!--}-->

<!--.WhatsAppButton_mpp img {-->
<!--    width: 100%;-->
<!--    height: 100%;-->
<!--}-->




<!--  </style>-->

<!--    <div class="modal fade Whats_mpp_modal" id="exampleModal-4" tabindex="-1">-->
<!--      <div class="modal-dialog modal-dialog-centered">-->
<!--          <div class="modal-content popup-box popup-box_whatsapp">-->

<!--               HEADER -->
<!--              <div class="modal-header popup-header">-->
<!--                  <h5 style="color:white;">Chat with us on WhatsApp</h5>-->
<!--                  <button type="button" class="btn-close white-close" data-bs-dismiss="modal"></button>-->
<!--              </div>-->

<!--               BODY -->
<!--              <div class="modal-body">-->
<!--                  <form method="POST" action="{{ route('whatsaapinquiry') }}" id="whatsappForm">-->
<!--                      @csrf-->

<!--                       Message -->
<!--                      <div class="mb-3">-->
<!--                          <label class="form-label">Message</label>-->
<!--                          <textarea class="form-control popup-input" name="message" placeholder="Type your message"></textarea>-->
<!--                      </div>-->

<!--                       Phone -->
<!--                      <div class="mb-3">-->
<!--                          <label class="form-label">Contact No. <span class="text-danger">*</span></label>-->

<!--                          <input type="tel" id="wa_phone" class="form-control popup-input"-->
<!--                              oninput="this.value=this.value.replace(/[^0-9]/g,'').slice(0,15);">-->
<!--                            <small class="text-danger d-none" id="wa_error">-->
<!--                                Contact number must be required-->
<!--                            </small>-->

<!--                           hidden -->
<!--                          <input type="hidden" name="number" id="wa_full_phone">-->
<!--                          <input type="hidden" name="country" id="wa_country_name">-->
<!--                      </div>-->

<!--                      <div class="d-grid">-->
<!--                          <button type="submit" class="btn popup-btn">-->
<!--                              Start Chat with Us-->
<!--                          </button>-->
<!--                      </div>-->

<!--                  </form>-->
<!--              </div>-->

<!--          </div>-->
<!--      </div>-->
<!--  </div>-->

<!--   WhatsApp floating button -->
<!--  <div class="WhatsAppButton_mpp">-->
<!--      <a data-bs-toggle="modal" data-bs-target="#exampleModal-4" target="_blank">-->
<!--          <img src="https://www.mmpfilter.com/public/images/whatsapp.png" alt="whatsapp">-->
<!--      </a>-->
<!--  </div>-->



<!--  <script>-->
<!--document.addEventListener("DOMContentLoaded", function () {-->

<!--    const input = document.getElementById("wa_phone");-->
<!--    const error = document.getElementById("wa_error");-->
<!--    const form = document.getElementById("whatsappForm");-->
<!--    const fullPhone = document.getElementById("wa_full_phone");-->
<!--    const countryName = document.getElementById("wa_country_name");-->

<!--    const iti = window.intlTelInput(input, {-->
<!--        initialCountry: "auto",-->
<!--        separateDialCode: true,-->
<!--        preferredCountries: ["in", "ae", "us", "gb"],-->
<!--        geoIpLookup: function (callback) {-->
<!--            fetch("https://ipapi.co/json/")-->
<!--                .then(res => res.json())-->
<!--                .then(data => callback(data.country_code))-->
<!--                .catch(() => callback("in"));-->
<!--        },-->
<!--        utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@25.12.4/build/js/utils.js",-->
<!--    });-->

    <!--// numbers only + live hide error-->
<!--    input.addEventListener("input", function () {-->
<!--        this.value = this.value.replace(/[^0-9]/g, '');-->

<!--        if (this.value.length >= 10) {-->
<!--            error.classList.add("d-none");-->
<!--        }-->
<!--    });-->

    <!--// submit validation-->
<!--    form.addEventListener("submit", function (e) {-->

<!--        if (input.value.trim() === "") {-->
<!--            error.innerText = "Contact number must be required";-->
<!--            error.classList.remove("d-none");-->
<!--            input.focus();-->
<!--            e.preventDefault();-->
<!--            return;-->
<!--        }-->

<!--        if (input.value.length < 10 || input.value.length > 15) {-->
<!--            error.innerText = "Contact number must be 10 to 15 digits";-->
<!--            error.classList.remove("d-none");-->
<!--            input.focus();-->
<!--            e.preventDefault();-->
<!--            return;-->
<!--        }-->

        <!--// ✅ valid-->
<!--        error.classList.add("d-none");-->

<!--        const countryData = iti.getSelectedCountryData();-->
<!--        fullPhone.value = "+" + countryData.dialCode + input.value;-->
<!--        countryName.value = countryData.name;-->
<!--    });-->

<!--});-->
<!--</script>-->





 <script src="https://www.google.com/recaptcha/api.js?onload=initAllRecaptchas&render=explicit" async defer></script>
<!-- jquery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/jquery.validate.min.js" integrity="sha512-KFHXdr2oObHKI9w4Hv1XPKc898mE4kgYx58oqsc/JqqdLMDI4YjOLzom+EMlW8HFUd0QfjfAvxSL6sEq/a42fQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/additional-methods.min.js" integrity="sha512-owaCKNpctt4R4oShUTTraMPFKQWG9UdWTtG6GRzBjFV4VypcFi6+M3yc4Jk85s3ioQmkYWJbUl1b2b2r41RTjA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- bopotstrap css -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
<script src="https://unpkg.com/scrollreveal"></script>

<!-- fancybox -->
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>

<!-- slick js -->

<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@25.12.4/build/js/intlTelInput.min.js"></script>

<!-- animation -->

<!-- Lenis -->

<!-- GSAP & ScrollTrigger -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

<!-- custom js -->
<script src="{{ asset('public/front/js/main.js') }}?v={{ filemtime(public_path('front/js/main.js')) }}"></script>


</body>


</html>
<script>
const tabs = document.querySelectorAll('.left-tabs .tab-item[data-tab]');

tabs.forEach(tab => {
  const panel = document.getElementById(tab.dataset.tab);

  if(!panel) return;

  // Show panel on hover
  tab.addEventListener('mouseenter', () => {
    panel.style.display = 'flex';
  });

  // Hide panel only if not hovering over panel
  tab.addEventListener('mouseleave', () => {
    setTimeout(() => {
      if (!panel.matches(':hover')) {
        panel.style.display = 'none';
      }
    }, 50);
  });

  // Keep panel visible if mouse is over panel
  panel.addEventListener('mouseenter', () => {
    panel.style.display = 'flex';
  });

  panel.addEventListener('mouseleave', () => {
    panel.style.display = 'none';
  });
});



document.addEventListener("DOMContentLoaded", function () {
    // === COMMON VALIDATION HANDLER FOR ALL FORMS ===
    function initFormValidation(form, captchaWidgetId) {
        if (!form) return;

        const submitBtn = form.querySelector("button[type='submit']");

        // Collect fields
        const fields = {
            fullname: form.querySelector("[name='fullname']"),
            email: form.querySelector("[name='email']"),
            phone: form.querySelector("[name='phone']"),
            country: form.querySelector("[name='country']"),
            services: form.querySelectorAll("[name='services[]']"),
            // message: form.querySelector("[name='message']"),
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

        // Show error
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

        // Remove error
        function removeError(field) {
            let parent = field.closest(".form-group") || field.closest(".col-lg-6") || field.closest(".col-lg-12") || field.parentElement;
            let errorSpan = parent.querySelector(".js-error");
            if (errorSpan) errorSpan.remove();
        }

        // Validation logic
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

        // Blur + input listeners
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
        // attachValidation(fields.message, "message");
        if (fields.country) {
            fields.country.addEventListener("change", () => validateField(fields.country, "country"));
        }
        if (fields.services.length) {
            fields.services.forEach(chk => chk.addEventListener("change", () => validateField(chk, "services")));
        }

        // On form submit
        form.addEventListener("submit", function (e) {
            let valid = true;
            if (fields.fullname && !validateField(fields.fullname, "fullname")) valid = false;
            if (fields.email && !validateField(fields.email, "email")) valid = false;
            if (fields.phone && !validateField(fields.phone, "phone")) valid = false;
            if (fields.country && !validateField(fields.country, "country")) valid = false;
            if (fields.services.length && !validateField(fields.services[0], "services")) valid = false;


            // Captcha validation with widgetId
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

            // Disable submit + change text
            submitBtn.disabled = true;
            const label = submitBtn.querySelector(".color-button__label");
            if (label) {
                label.textContent = "Submitting...";
            } else {
                submitBtn.textContent = "Submitting...";
            }
        });
    }

    // === RENDER RECAPTCHA FORMS ===
    // window.initAllRecaptchas = function () {
    //     document.querySelectorAll(".validated-form").forEach((form) => {
    //         const captchaDiv = form.querySelector(".g-recaptcha");
    //         if (captchaDiv) {
    //             const widgetId = grecaptcha.render(captchaDiv, {
    //                 sitekey: captchaDiv.getAttribute("data-sitekey")
    //             });
    //             initFormValidation(form, widgetId);
    //         }
    //     });
    // };

    window.initAllRecaptchas = function () {
        document.querySelectorAll(".validated-form").forEach((form) => {
            const captchaDiv = form.querySelector(".g-recaptcha");
            if (captchaDiv) {
                const widgetId = grecaptcha.render(captchaDiv, {
                    sitekey: captchaDiv.getAttribute("data-sitekey")
                });
                initFormValidation(form, widgetId);
            } else {
                initFormValidation(form, null);
            }
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

    let itiRequest = null;
    let countryDetected = false;

    requestModal.addEventListener('shown.bs.modal', function () {
        // Init intl-tel-input only once, the first time the modal opens
        if (!itiRequest) {
            itiRequest = window.intlTelInput(phoneInput, {
                initialCountry: "in",
                separateDialCode: true,
                preferredCountries: ["in", "ae", "us", "gb"],
                utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@25.12.4/build/js/utils.js"
            });
        }

        if (countryDetected) return;

        fetch('https://ipwho.is/')
            .then(res => res.json())
            .then(data => {
                if (!data || data.success === false || !data.country) return;

                if (countrySelect && !countrySelect.value) {
                    const options = countrySelect.options;
                    for (let i = 0; i < options.length; i++) {
                        if (options[i].text.trim().toLowerCase() === data.country.trim().toLowerCase()) {
                            countrySelect.value = options[i].value;
                            break;
                        }
                    }
                }

                if (data.country_code && itiRequest) {
                    itiRequest.setCountry(data.country_code.toLowerCase());
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
        z-index: 1060; /* higher than modal's z-index so dropdown isn't clipped */
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