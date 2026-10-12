<!-- Request A Call modal (sab countries). Style: public/front/css/common/request-modal.css
     JS hooks same hain: #requestForm (.validated-form), #requestPhone, #requestFullPhone, #requestCountrySelect -->
@php
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
                            <p class="rq_head_title">Connect With Our Experts Today</p>
                            <p class="rq_head_sub">Tell us about your requirements and our team will contact you shortly.</p>
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

                            {{-- Country field form me nahi dikhta: phone number ke flag wali country yahan apne aap bharti hai --}}
                            <input type="hidden" name="country" id="requestCountrySelect" value="India">

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
