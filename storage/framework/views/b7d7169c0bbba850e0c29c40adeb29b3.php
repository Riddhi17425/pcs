
<footer class="mt-100 footer">
    <div class="container">
        <div class="footer_top">
            <div class="footer_top_flex">
                <div class="foot_lt">
                    <a href="<?php echo e(url('/')); ?>"><img class="ft_logo" src="<?php echo e(asset('public/front/images/footer-log.svg')); ?>" alt="logo" loading="lazy"></a>
                    <p class="foot_lt_para">PCS Global is committed to delivering reliable and quality accounting
                        service and is driven
                        by long-term partnerships with clients, and employees based on strong values of integrity
                        and trust.</p>
                    <div class="foot_social">
                        <a href="https://www.linkedin.com/company/pcs-global-group/" target="_blank"><img src="<?php echo e(asset('public/front/images/linkedin.svg')); ?>" alt="linkedin" loading="lazy"></a>
                        <a href="https://www.facebook.com/PCSGlobalGroup/" target="_blank"><img src="<?php echo e(asset('public/front/images/facebook.svg')); ?>" alt="facebook" loading="lazy"></a>
                        <a href="https://www.instagram.com/pcsglobalgroup/" target="_blank"><img src="<?php echo e(asset('public/front/images/insta.svg')); ?>" alt="insta" loading="lazy"></a>
                    </div>
                </div>

                <div class="foot_links_group">
                    <div class="foot_rt">
                        <h4 class="sub_head">Quick Links</h4>
                        <ul>
                            <li>
                                <a href="<?php echo e(url('/')); ?>">Home</a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('about')); ?>">About Us</a>
                            </li>

                            <li>
                                <a href="<?php echo e(route('datasecurity')); ?>">Data Security</a>
                            </li>

                            <li>
                                <a href="<?php echo e(route('contact')); ?>">Contact Us</a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('blog')); ?>">Blogs</a>
                            </li>
                        </ul>
                    </div>

                    <div class="foot_rt">
                        <h4 class="sub_head">Our Services</h4>
                        <ul>

                             <li>
                                <a href="<?php echo e(route('pcs.global.bookkeeping')); ?>">Accounting & Bookkeeping</a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('strata.management')); ?>">Strata Property Management</a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('payroll.services')); ?>">Payroll Outsourcing Services</a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('taxation.services')); ?>">Taxation Services</a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('recruitment.services')); ?>">Recruitment Outsourcing Services</a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('it.automation')); ?>">IT Automation Services</a>
                            </li>

                        </ul>
                    </div>

                    <div class="foot_rt border-end-0">
                        <h4 class="sub_head">Contact Us</h4>

                        <div class="foot_contact_block">
                            <h6 class="foot_contact_label">Address:</h6>
                            <p class="foot_contact_value">22A Mort Street Blacktown<br>NSW 2148 Australia.</p>
                        </div>

                        <div class="foot_contact_block">
                            <h6 class="foot_contact_label">Call Us:</h6>
                            <ul class="foot_call_list">
                                <li>
                                    <a href="tel:(+613) 9998 0494">
                                        <img src="<?php echo e(asset('public/front/images/contry-icon/australia-icon.png')); ?>" alt="Australia" loading="lazy">
                                        <span><b>AUS :</b> (+613) 9998 0494</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="tel:(+1) 347 801 8715">
                                        <img src="<?php echo e(asset('public/front/images/contry-icon/us-icon.png')); ?>" alt="USA" loading="lazy">
                                        <span><b>USA :</b> (+1) 347 801 8715</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="tel:(+91) 796 826 0121">
                                        <img src="<?php echo e(asset('public/front/images/contry-icon/india-icon.svg')); ?>" alt="India" loading="lazy">
                                        <span><b>IND :</b> (+91) 796 826 0121</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="tel:(+44) 113 4034334">
                                        <img src="<?php echo e(asset('public/front/images/contry-icon/uk-icon.png')); ?>" alt="UK" loading="lazy">
                                        <span><b>UK :</b> (+44) 113 4034334</span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="foot_contact_block mb-0">
                            <h6 class="foot_contact_label">Email Us:</h6>
                            <p class="foot_contact_value">
                                <a href="mailto:info@pcsglobalgroup.com">info@pcsglobalgroup.com</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer_badges_wrap">
            <div class="footer_badges">
                <span class="badge_circle"><img src="<?php echo e(asset('public/front/images/figma-footer-badges/iso-9001.png')); ?>" alt="ISO 9001" loading="lazy"></span>
                <span class="badge_box"><img src="<?php echo e(asset('public/front/images/figma-footer-badges/sca-vic-member.png')); ?>" alt="Strata Community Association VIC" loading="lazy"></span>
                <span class="badge_circle"><img src="<?php echo e(asset('public/front/images/figma-footer-badges/iso-27001.png')); ?>" alt="ISO 27001" loading="lazy"></span>
                <span class="badge_box"><img src="<?php echo e(asset('public/front/images/figma-footer-badges/sca-wa-member.png')); ?>" alt="Strata Community Association WA" loading="lazy"></span>
                <span class="badge_circle"><img src="<?php echo e(asset('public/front/images/figma-footer-badges/gdpr.png')); ?>" alt="GDPR" loading="lazy"></span>
            </div>
        </div>

        <div class="footer_bot">
            <p>©<span><?php echo date('Y'); ?></span> Progressive Corporate Services Pvt. Ltd., All Rights Reserved.</p>

            <p class="Privacy_link"><a href="<?php echo e(route('privacy-policy')); ?>">Privacy Policy</a></p>

        </div>
    </div>
</footer>
<?php echo $__env->make('layouts.whatsapp', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<!-- Modal -->
<div class="modal fade request_modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <div class="request_modal_title">
                    <span class="request_modal_icon">
                        <svg width="20" height="20" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.51089 1L6.15002 1.13169C6.91653 1.15942 7.59676 1.64346 7.89053 2.3702L8.96656 5.03213C9.217 5.65159 9.1496 6.35837 8.78693 6.91634L7.40831 9.0375C8.22454 10.2096 10.4447 12.9558 12.7955 14.5633L14.5484 13.4845C14.9939 13.2103 15.5273 13.1289 16.0314 13.2581L19.5161 14.1517C20.4429 14.3894 21.0674 15.2782 20.9942 16.2552L20.7705 19.2385C20.6919 20.2854 19.8351 21.1069 18.818 20.9887C5.39245 19.4276 -2.48056 0.99997 2.51089 1Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </span>
                    <div>
                        <h5 class="fs-5" id="exampleModalLabel">Request A Call</h5>
                        <p class="request_modal_subtitle">We'll get back to you within 24 hours</p>
                    </div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <?php
                use App\Models\Country;
                $countries = Country::all();
            ?>
            <div class="modal-body">
                <div class="contact_bot">
                    <form id="requestForm" class="validated-form" action="<?php echo e(route('request.store')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="row gy-4 gy-lg-4 gy-xxl-4">

                            <div class="col-lg-12 form-group form-group-icon">
                                <span class="field_icon">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 12C14.4853 12 16.5 9.98528 16.5 7.5C16.5 5.01472 14.4853 3 12 3C9.51472 3 7.5 5.01472 7.5 7.5C7.5 9.98528 9.51472 12 12 12Z" stroke="#182653" stroke-width="1.5"/>
                                        <path d="M4 20.5C4 16.9101 7.58172 14 12 14C16.4183 14 20 16.9101 20 20.5" stroke="#182653" stroke-width="1.5" stroke-linecap="round"/>
                                    </svg>
                                </span>
                                <input type="text" name="fullname" maxlength="70"
                                    oninput="this.value=this.value.replace(/[^a-zA-Z\s]/g,'').replace(/\s+/g,' ').trimStart();" placeholder=" ">
                                <label>Full Name test<span class="text-danger">*</span></label>
                            </div>
                            <!-- Honeypot Field (hidden) -->
                            <div style="display:none;">
                                <label>Leave this field empty</label>
                                <input type="text" name="fax_number" autocomplete="off">
                            </div>
                            <div class="col-lg-12 form-group form-group-icon">
                                <span class="field_icon">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3 6.5C3 5.67157 3.67157 5 4.5 5H19.5C20.3284 5 21 5.67157 21 6.5V17.5C21 18.3284 20.3284 19 19.5 19H4.5C3.67157 19 3 18.3284 3 17.5V6.5Z" stroke="#182653" stroke-width="1.5"/>
                                        <path d="M3.5 6.5L12 13L20.5 6.5" stroke="#182653" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </span>
                                <input type="email" name="email" maxlength="70" placeholder=" ">
                                <label>Email Address<span class="text-danger">*</span></label>
                            </div>

                           <div class="col-lg-12 form-group">
                            <input type="tel" name="phone" id="requestPhone" maxlength="15" minlength="10" placeholder="Phone Number"
                                oninput="this.value=this.value.replace(/[^0-9]/g,'').slice(0,15);">
                            <label><span class="text-danger">*</span></label>
                            <input type="hidden" name="full_phone" id="requestFullPhone">
                        </div>

                            <div class="col-lg-12 form-group">
                                 <select name="country" id="requestCountrySelect">
                                    <option value="" hidden>Select Country</option>
                                    <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($country->name); ?>"><?php echo e($country->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <!--<label>Choose Country<span class="text-danger">*</span></label>-->
                            </div>

                            <div class="col-lg-12 form-group">
                                <textarea rows="1" name="message" placeholder=" "></textarea>
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
<!-- WhatsApp Floating Button -->
<!--<a href="https://api.whatsapp.com/send?phone=918460268698&text=Hello,%20I%27m%20visiting%20your%20website%20and%20would%20like%20to%20know%20more" class="whatsapp-float" target="_blank">-->
<!--    <img src="<?php echo e(asset('public/front/images/WhatsApp.svg')); ?>" alt="WhatsApp">-->
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
<!--                  <form method="POST" action="<?php echo e(route('whatsaapinquiry')); ?>" id="whatsappForm">-->
<!--                      <?php echo csrf_field(); ?>-->

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
<script src="<?php echo e(asset('public/front/js/main.js')); ?>"></script>


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
</style><?php /**PATH C:\xampp\htdocs\pcs\resources\views/layouts/frontfooter.blade.php ENDPATH**/ ?>