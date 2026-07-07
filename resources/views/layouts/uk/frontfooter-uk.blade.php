
<footer class="mt-100 footer">
    <div class="container">
        <div class="footer_top">
            <div class="row gy-4 gy-lg-0">
                <div class="col-lg-4">
                    <div class="foot_lt">
                        <a href="{{ url('/')}}"><img class="ft_logo" src="{{asset('public/front/images/footer-log.svg')}}" alt="logo" loading="lazy"></a>
                        <p class="foot_lt_para">PCS Global is committed to delivering reliable and quality accounting
                            service and is driven
                            by long-term partnerships with clients, and employees based on strong values of integrity
                            and trust.</p>
                        <div class="foot_social">
                            
                            <!--<a href="https://api.whatsapp.com/send?phone=918460268698&text=Hello,%20I%27m%20visiting%20your%20website%20and%20would%20like%20to%20know%20more" target="_blank"><img src="{{asset('public/front/images/whatsapp.svg')}}" alt="whatsapp" loading="lazy"></a>-->
                            <a href="https://www.facebook.com/PCSGlobalGroup/" target="_blank"><img src="{{asset('public/front/images/facebook.svg')}}" alt="facebook" loading="lazy"></a>
                            <a href="https://www.instagram.com/pcsglobalgroup/" target="_blank"><img src="{{asset('public/front/images/insta.svg')}}" alt="insta" loading="lazy"></a>
                            <a href="https://www.linkedin.com/company/pcs-global-group/" target="_blank"><img src="{{asset('public/front/images/linkedin.svg')}}" alt="linkedin" loading="lazy"></a>
                        </div>
                        <div class=" mt-4">
                            <img src="{{asset('public/front/images/Logo_footer.png')}}" class="img-fluid" loading="lazy">
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-7">
                    <div class="footer_contant">
                       
                            <div class="foot_rt">
                                <h4 class="sub_head">Quick Links</h4>
                                <ul>
                                    <!--<li>-->
                                    <!--    <a href="{{ route('uk') }}">Home</a>-->
                                    <!--</li>-->
                                    <li>
                                        <a href="{{ route('uk.about') }}">About Us</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('blog') }}">Blogs</a>
                                    </li>
                                                                        <li>
                                        <a href="{{ route('contact') }}">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                      
                     
                            <div class="foot_rt">
                                <h4 class="sub_head">Accounting Services</h4>
                                <ul>
                                    
                                     <li>
                                        <a href="{{ route('accounting.outsourcing.services') }}">For Accountants</a>
                                    </li>
                                    
                                   
                                    <li>
                                        <a href="{{ route('small.business.accounting.services') }}">For SME's</a>
                                    </li>
                                   
                                </ul>
                                
                                <h4 class="sub_head mt-4">Taxation Services</h4>
                                 <ul>
                                    
                                    <li>
                                        <a href="{{ route('outsource.tax.preparation.services') }}">Tax Preparation Services</a>
                                    </li>
                                   
                                   
                                </ul>
                                
                            </div>
                            
                           
                        
                       
                             <div class="foot_rt border-end-0">
                                <h4 class="sub_head">Contact Us</h4>
                                <ul>
                                   <li>
                                        <a href="tel:(+44) 113 4034334"><b>UK :</b> (+44) 113 4034334 </a>
                                    </li>
                                  
                                </ul>

                                <h4 class="sub_head email-head mt-4">Email Us:</h4>

                                <ul>
                                    <li>
                                        <a href="mailto:info@pcsglobalgroup.com">info@pcsglobalgroup.com</a>
                                    </li>
                                </ul>
                            </div>
                      
                    </div>
                </div>

                
            </div>
        </div>

        <div class="footer_bot">
            <p>©<span><?php echo date('Y'); ?></span> Progressive Corporate Services Pvt. Ltd., All Rights Reserved.</p>
        </div>
    </div>
</footer>


<!-- Modal -->
<div class="modal fade request_modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="fs-5" id="exampleModalLabel">Request A
                    Call</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            @php
                use App\Models\Country;
                $countries = Country::all();
            @endphp
            <div class="modal-body">
                <div class="contact_bot">
                    <form id="requestForm" class="validated-form" action="{{ route('request.store') }}" method="POST">
                        @csrf
                        <div class="row gy-4 gy-lg-4 gy-xxl-4">

                            <div class="col-lg-12 form-group">
                                <input type="text" name="fullname" maxlength="70"
                                    oninput="this.value=this.value.replace(/[^a-zA-Z\s]/g,'').replace(/\s+/g,' ').trimStart();" placeholder=" ">
                                <label>Full Name<span class="text-danger">*</span></label>
                            </div>
                            <!-- Honeypot Field (hidden) -->
                            <div style="display:none;">
                                <label>Leave this field empty</label>
                                <input type="text" name="fax_number" autocomplete="off">
                            </div>

                            <div class="col-lg-12 form-group">
                                <input type="email" name="email" maxlength="70" placeholder=" ">
                                <label>Email Address<span class="text-danger">*</span></label>
                            </div>

                            <div class="col-lg-12 form-group">
                                <input type="tel" name="phone" maxlength="12" minlength="10" placeholder=" "
                                    oninput="this.value=this.value.replace(/[^0-9]/g,'').slice(0,15);">
                                <label>Phone Number<span class="text-danger">*</span></label>
                            </div>

                            <div class="col-lg-12 form-group">
                                <select name="country">
                                    <option value="" hidden>Select Country</option>
                                    @foreach($countries as $country)
                                        <option value="{{ $country->name }}">{{ $country->name }}</option>
                                    @endforeach
                                </select>
                                <!--<label>Choose Country<span class="text-danger">*</span></label>-->
                            </div>

                            <div class="col-lg-12 form-group">
                                <textarea rows="1" name="message" maxlength="100" placeholder=" "></textarea>
                                <label>Message:</label>
                            </div>

                            <div class="col-lg-12 form-group">
                                <div class="g-recaptcha"
                                    data-sitekey="6LfxJ7crAAAAAGJsj1iMJSQXpZLJE47H1h6StuUT"
                                    data-callback="onCaptchaSuccessRequest"></div>
                                <span class="captcha-error text-danger" style="display:none;">Please verify you are not a robot.</span>
                            </div>

                            <div class="col-lg-12">
                                <button type="submit" class="com_btn2 color-animated-button bubble-btn">
                                    <span class="color-button__background"></span>
                                    <span class="color-button__bubble-container">
                                        <span class="color-button__bubble"></span>
                                    </span>
                                    <span class="color-button__label relative z-10">Submit</span>
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div> 
    </div>
</div>
 <!--WhatsApp Floating Button -->
<!--<a href="https://api.whatsapp.com/send?phone=918460268698&text=Hello,%20I%27m%20visiting%20your%20website%20and%20would%20like%20to%20know%20more" class="whatsapp-float" target="_blank">-->
<!--    <img src="{{asset('public/front/images/WhatsApp-pcs.svg')}}" alt="WhatsApp">-->
<!--</a>-->
@include('layouts.whatsapp')

 <script src="https://www.google.com/recaptcha/api.js?onload=initAllRecaptchas&render=explicit" async defer></script>
<!-- jquery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<!-- bopotstrap css -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
<script src="https://unpkg.com/scrollreveal"></script>

<!-- fancybox -->
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>

<!-- slick js -->

<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<!-- animation -->

<!-- Lenis -->

<!-- GSAP & ScrollTrigger -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

<!-- custom js -->
<script src="{{ asset('public/front/js/main.js') }}"></script>

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
            if (typeof grecaptcha !== "undefined") {
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
    window.initAllRecaptchas = function () {
        document.querySelectorAll(".validated-form").forEach((form) => {
            const captchaDiv = form.querySelector(".g-recaptcha");
            if (captchaDiv) {
                const widgetId = grecaptcha.render(captchaDiv, {
                    sitekey: captchaDiv.getAttribute("data-sitekey")
                });
                initFormValidation(form, widgetId);
            }
        });
    };
});

</script>

