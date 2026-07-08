@include('layouts.frontheader', [
    'og_image' => asset('public/front/images/maps.png')
])

<section class="com_hero" style="background-image: url('{{ asset('public/front/images/blog-hero-bg.png') }}'); ">
    <div class="container">
        <div class="com_hero_child">
            <h1>Contact Us</h1>
            <p>We help you simplify accounting, streamline tax prep, and scale <br /> your workforce with
                tech-powered outsourcing.</p>
                <a class="com_btn1 color-animated-button bubble-btn mt-4" href="#jumpcontect"
                data-hover-colors='["#B074BC","#CF7C7C","#7496BC","#7B9993","#9F7159","#EAD1DC","#D7BDE2","#D7BDE2","#FFD1BA","#D1F2EB","#A4C8F0","#F7A1A1","#A0E6E0","#F9B7B7","#E6FFB3","#FFF4B3","#FFE4B5","#FFD4B8","#FFCBA4","#FFB399"]'>

                <!-- Bubble effect layers -->
                <span class="color-button__background"></span>
                <span class="color-button__bubble-container">
                  <span class="color-button__bubble"></span>
                </span>

                <!-- Label and Icon -->
                <span class="color-button__label relative z-10 will-change-transform me-2">Start the Conversation</span>

              </a>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="text-center">
        <img src="{{asset('public/front/images/maps.png')}}" usemap="#image-map" alt="USA, UK, and Australia" style="max-width:100%; height:auto;">

        </div>
    </div>
</section>

<section class="contact mt-100" id="jumpcontect">
    <div class="container">
        <div class="contact_top">
            <h2 class="mb-4">Let’s Streamline Your <br /> Business <img src="{{asset('public/front/images/handshake.gif')}}" alt="icon" class="inner-gif"> Operations</h2>

            <p class="mb-0 col-xl-6 col-xxl-4 m-auto">We’re here to help you manage finance, IT, and recruitment—globally.
                Just fill out the form, or reach out via email at <a href="mailto:info@pcsglobalgroup.com"><b>info@pcsglobalgroup.com</b></a></p>
        </div>

        <div class="contact_bot">
            <form id="contactForm" class="validated-form" action="{{ route('contact.store') }}" method="POST">
                @csrf
                <div class="row gy-4 gy-xxl-5 gx-lg-4">

                    <div class="col-lg-6 form-group">
                        <input type="text" name="fullname" value="{{ old('fullname') }}" maxlength="70"
                        oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '').replace(/\s+/g, ' ').trimStart();" placeholder=" ">
                        <label>Full Name<span class="text-danger">*</span></label>
                        @error('fullname') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <!-- Honeypot Field (hidden) -->
                    <div style="display:none;">
                        <label>Leave this field empty</label>
                        <input type="text" name="fax_number" autocomplete="off">
                    </div>
                    <div class="col-lg-6 form-group">
                        <input type="email" name="email" value="{{ old('email') }}" maxlength="70" placeholder=" ">
                        <label>Email Address<span class="text-danger">*</span></label>
                        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="col-lg-6 form-group">
                        <input type="tel" name="phone" id="contactPhone" value="{{ old('phone') }}"
                            maxlength="20" minlength="10" placeholder="Phone Number">
                        <label><span class="text-danger">*</span></label>
                        @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                        <span id="mobile-error" style="color:red; display:none;">Please enter at least 10 digits</span>
                        <input type="hidden" name="full_phone" id="contactFullPhone">
                    </div>

                    <div class="col-lg-6 form-group">
                         <select name="country" id="countrySelect">
                            <option value="" hidden>Select Country</option>
                            @foreach($countries as $country)
                                <option value="{{ $country->name }}">{{ $country->name }}</option>
                            @endforeach
                        </select>
                        <!--<label>Choose Country<span class="text-danger">*</span></label>-->
                        @error('country') <span class="text-danger">{{ $message }}</span> @enderror
                        @error('country') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="col-lg-6">
                        <h6 class="mb-4">Select one or more services to see how PCS Global can support you.<span class="text-danger">*</span>:</h6>
                        <div class="checkbox-grid">
                            <div class="checkbox-item">
                                <input type="checkbox" name="services[]" value="Accounting And Finance" id="service1">
                                <label for="service1">Accounting And Finance</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="services[]" value="Payroll Outsourcing" id="service2">
                                <label for="service2">Payroll Outsourcing</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="services[]" value="Staffing & Recruitment" id="service3">
                                <label for="service3">Staffing & Recruitment</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="services[]" value="Taxation" id="service4">
                                <label for="service4">Taxation</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="services[]" value="IT Automation" id="service5">
                                <label for="service5">IT Automation</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="services[]"  value="Strata Management" id="service6">
                                <label for="service6">Strata Management</label>
                            </div>
                        </div>
                        @error('services') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-lg-6 d-none d-lg-block">
                        <div class="contact-icons">
                            <span><img id="service1-img" class="img-fluid" src="{{ asset('public/front/images/contact_image1.png') }}"
                                    alt="image"></span>
                            <span><img id="service2-img" class="img-fluid" src="{{ asset('public/front/images/contact_image2.png') }}"
                                    alt="image"></span>
                            <span><img id="service3-img" class="img-fluid" src="{{ asset('public/front/images/contact_image3.png') }}"
                                    alt="image"></span>
                            <span><img id="service4-img" class="img-fluid" src="{{ asset('public/front/images/contact_image4.png') }}"
                                    alt="image"></span>
                            <span><img id="service5-img" class="img-fluid" src="{{ asset('public/front/images/contact_image5.png') }}"
                                    alt="image"></span>
                            <span><img id="service6-img" class="img-fluid" src="{{ asset('public/front/images/contact_image6.png') }}"
                                    alt="image"></span>
                        </div>
                    </div>
                    <div class="col-lg-12 form-group">
                        <textarea rows="1" name="message"  placeholder=" ">{{ old('message') }}</textarea>
                        <label>Message:</label>
                    </div>
                    <div class="col-lg-12 form-group">
                        <div class="g-recaptcha"
                                id="contactCaptcha"
                                data-sitekey="6LfxJ7crAAAAAGJsj1iMJSQXpZLJE47H1h6StuUT"
                                data-callback="onCaptchaSuccessContact"></div>
                            <span class="captcha-error text-danger" style="display:none;">Please verify you are not a robot.</span>

                    </div>
                    <div class="col-lg-12">
                        <button type="submit" class="com_btn2 color-animated-button bubble-btn border-0"
                        data-hover-colors="[&quot;#B074BC&quot;,&quot;#CF7C7C&quot;,&quot;#7496BC&quot;,&quot;#7B9993&quot;,&quot;#9F7159&quot;,&quot;#EAD1DC&quot;,&quot;#D7BDE2&quot;,&quot;#D7BDE2&quot;,&quot;#FFD1BA&quot;,&quot;#D1F2EB&quot;,&quot;#A4C8F0&quot;,&quot;#F7A1A1&quot;,&quot;#A0E6E0&quot;,&quot;#F9B7B7&quot;,&quot;#E6FFB3&quot;,&quot;#FFF4B3&quot;,&quot;#FFE4B5&quot;,&quot;#FFD4B8&quot;,&quot;#FFCBA4&quot;,&quot;#FFB399&quot;]"
                        >
                            <span class="color-button__background"></span>
                            <span class="color-button__bubble-container">
                                <span class="color-button__bubble"></span>
                            </span>
                            <span class="color-button__label relative z-10 will-change-transform">Submit</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<section class="com_bg_cards_main mt-80">
    <div class="container">
        <div class="com_bg_cards_top">
            <h2>Global Offices</h2>
        </div>

        <div class="row g-4 g-lg-5">
            <div class="col-lg-6">
                <div class="com_bg_cards">
                    <img class="img-fluid " src="{{asset('public/front/images/contact-city-bg.png')}}" alt="bg1" />
                    <div class="com_bg_card">
                        <div class="com_bg_card_head">
                            <h3 class="sub_head">Ahmedabad</h3>
                            <span><img src="{{asset('public/front/images/trust_icon.png')}}" alt="icon" /></span>
                        </div>
                        <a style="color:#666666;" target="_blank" href="https://www.google.com/maps/place/Addor+Aspire/@23.0310612,72.5453407,17z/data=!3m1!4b1!4m6!3m5!1s0x395e84e962faaead:0xbc58384f03b957a!8m2!3d23.0310563!4d72.5479156!16s%2Fg%2F1q6jhvfdm?entry=ttu&g_ep=EgoyMDI1MDgxMy4wIKXMDSoASAFQAw%3D%3D">
                            Addor Aspire 2, 7th Floor, Opp. Old Passport Office, University Area, Ahmedabad - 380015
                            Gujarat, India</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="com_bg_cards">
                    <img class="img-fluid " src="{{asset('public/front/images/contact-city-bg1.png')}}" alt="bg1" />
                    <div class="com_bg_card">
                        <div class="com_bg_card_head">
                            <h3 class="sub_head">New York</h3>
                            <span><img src="{{asset('public/front/images/trust_icon.png')}}" alt="icon" /></span>
                        </div>
                        <a href="https://www.google.com/maps/place/One+Manhattan+Square,+225+Cherry+St+%2352k,+New+York,+NY+10002,+USA/@40.7104953,-73.9938242,17z/data=!4m13!1m7!3m6!1s0x89c25a2ee70bf327:0x87336e35fb47a354!2sOne+Manhattan+Square,+225+Cherry+St+%2352k,+New+York,+NY+10002,+USA!3b1!8m2!3d40.7104913!4d-73.9912493!3m4!1s0x89c25a2ee70bf327:0x87336e35fb47a354!8m2!3d40.7104913!4d-73.9912493?entry=ttu&g_ep=EgoyMDI1MDgxMy4wIKXMDSoASAFQAw%3D%3D" style="color:#666666;" target="_blank">225 Cherry Street, 52K New York, NY, <br>
                            10002</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="com_bg_cards">
                    <img class="img-fluid" src="{{asset('public/front/images/contact-city-bg2.png')}}" alt="bg1" />
                    <div class="com_bg_card">
                        <div class="com_bg_card_head">
                            <h3 class="sub_head">Australia</h3>
                            <span><img src="{{asset('public/front/images/trust_icon.png')}}" alt="icon" /></span>
                        </div>
                        <a href="https://www.google.com/maps/place/22A+Mort+St,+Blacktown+NSW+2148,+Australia/@-33.7598433,150.9160191,17z/data=!3m1!4b1!4m6!3m5!1s0x6b1298e5f2e3c8e1:0xeadec9c599aee8c!8m2!3d-33.7598478!4d150.918594!16s%2Fg%2F11csnzt4wj?entry=ttu&g_ep=EgoyMDI1MDgxMy4wIKXMDSoASAFQAw%3D%3D" style="color:#666666;" target="_blank">22A Mort Street Blacktown <br>
                            NSW 2148 Australia.</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="com_bg_cards">
                    <img class="img-fluid" src="{{asset('public/front/images/contact-city-bg3.png')}}" alt="bg1" />
                    <div class="com_bg_card">
                        <div class="com_bg_card_head">
                            <h3 class="sub_head">Ahmedabad </h3>
                            <span><img src="{{asset('public/front/images/trust_icon.png')}}" alt="icon" /></span>
                        </div>
                        <a href="https://www.google.com/maps/search/401,+Maurya+Complex,+CU+Shah+College,+++++++++++++++++++++++++++++Near+Income+Tax+Office,+Ashram+Road,+++++++++++++++++++++++++++++Ahmedabad+-+380014,+Gujarat,+India/@23.0333386,72.5389835,14z/data=!3m1!4b1?entry=ttu&g_ep=EgoyMDI1MDgxMy4wIKXMDSoASAFQAw%3D%3D" style="color:#666666;" target="_blank">401, Maurya Complex, CU Shah College,
                            Near Income Tax Office, Ashram Road,
                            Ahmedabad - 380014, Gujarat, India </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="com_bg_cards">
                    <img class="img-fluid" src="{{asset('public/front/images/contact-city-bg4.jpg')}}" alt="bg1" />
                    <div class="com_bg_card">
                        <div class="com_bg_card_head">
                            <h3 class="sub_head">United Kingdom</h3>
                            <span><img src="{{asset('public/front/images/trust_icon.png')}}" alt="icon" /></span>
                        </div>
                        <a href="https://www.google.com/maps/place/16+Field+Maple+Gdns,+High+Wycombe+HP10+9FN,+UK/@51.6139193,-0.7385789,17z/data=!3m1!4b1!4m6!3m5!1s0x487661eb483a447d:0x41bf4442102f4450!8m2!3d51.613916!4d-0.736004!16s%2Fg%2F11x0k22t1s?entry=ttu&g_ep=EgoyMDI1MDkxMC4wIKXMDSoASAFQAw%3D%3D" style="color:#666666;" target="_blank">
                            16 Field Maple Gardens, High Wycombe, Buckinghamshire, HP10 9FN,<br/> United Kingdom </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://www.google.com/recaptcha/api.js?onload=initAllRecaptchas&render=explicit" async defer></script>

<style>
    .iti input#contactPhone {
        padding-left: 105px !important;
    }
    .form-group:has(#contactPhone) label {
        left: 90px !important;
    }
    .iti {
        width: 100%;
        display: block;
    }
    .iti__country-list {
        background-color: #fff !important;
        z-index: 50;
    }
    .iti__country-list .iti__country-name,
    .iti__country-list .iti__dial-code {
        color: #182653 !important;
    }
    .iti__country.iti__highlight {
        background-color: #f0f0f0 !important;
    }
     .iti__selected-dial-code{
      color:#fff !important;
    }
</style>

@if(!old('country'))
<script>
document.addEventListener('DOMContentLoaded', function () {
    const countrySelect = document.getElementById('countrySelect');
    const phoneInput = document.getElementById('contactPhone');
    const fullPhoneInput = document.getElementById('contactFullPhone');

    if (!phoneInput) return;

    const itiContact = window.intlTelInput(phoneInput, {
        initialCountry: "in",
        separateDialCode: true,
        preferredCountries: ["in", "ae", "us", "gb"],
        utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@25.12.4/build/js/utils.js"
    });

    fetch('https://ipwho.is/')
        .then(res => res.json())
        .then(data => {
            if (!data || data.success === false || !data.country) return;

            if (countrySelect) {
                const options = countrySelect.options;
                for (let i = 0; i < options.length; i++) {
                    if (options[i].text.trim().toLowerCase() === data.country.trim().toLowerCase()) {
                        countrySelect.value = options[i].value;
                        break;
                    }
                }
            }

            if (data.country_code) {
                itiContact.setCountry(data.country_code.toLowerCase());
            }
        })
        .catch(err => console.warn('Country auto-detect failed:', err));

    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function () {
            const countryData = itiContact.getSelectedCountryData();
            const number = phoneInput.value.replace(/\s+/g, "");
            fullPhoneInput.value = "+" + countryData.dialCode + number;
        });
    }
});
</script>
@endif

@include('layouts.frontfooter')
<script>



</script>
