@props(['title', 'text' => '', 'cities' => [], 'services' => [], 'country' => 'Australia', 'phoneCountry' => 'au'])
<section class="contact_band mt-100" id="consultation">
    <div class="container">
        <div class="contact_band_head">
            <h2>{!! $title !!}</h2>
            @if ($text)
                <p>{!! $text !!}</p>
            @endif
        </div>

        <form id="contactBandForm" class="validated-form contact_band_form" action="{{ route('request.store') }}" method="POST" novalidate>
            @csrf
            <input type="hidden" name="country" value="{{ $country }}">
            <input type="hidden" name="full_phone" id="cfFullPhone">
            <input type="hidden" name="form_type" value="Request a Consultation">
            <div style="display:none;">
                <label>Leave this field empty</label>
                <input type="text" name="fax_number" autocomplete="off">
            </div>

            <div class="row g-4">
                <div class="col-lg-6 col-12 cf_field">
                    <input type="text" name="fullname" maxlength="70" placeholder="Full Name*:" aria-label="Full Name"
                        oninput="this.value=this.value.replace(/[^a-zA-Z\s]/g,'').replace(/\s+/g,' ').trimStart();">
                </div>
                <div class="col-lg-6 col-12 cf_field">
                    <input type="email" name="email" maxlength="70" placeholder="Email Address*:" aria-label="Email Address">
                </div>
                <div class="col-lg-6 col-12 cf_field">
                    <input type="text" name="company" maxlength="100" placeholder="Company Name*:" aria-label="Company Name" required>
                </div>
                <div class="col-lg-6 col-12 cf_field">
                    <input type="tel" name="phone" id="cfPhone" maxlength="15" minlength="10" placeholder="Phone Number*:" aria-label="Phone Number"
                        oninput="this.value=this.value.replace(/[^0-9]/g,'').slice(0,15);">
                </div>
                <div class="col-lg-6 col-12 cf_field">
                    <select name="city" aria-label="Select City" required>
                        <option value="" hidden>Select City*:</option>
                        @foreach ($cities as $city)
                            <option value="{{ $city }}">{{ $city }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-lg-6 col-12 cf_field">
                    <select name="service" aria-label="Choose Service" required>
                        <option value="" hidden>Choose Service*:</option>
                        @foreach ($services as $service)
                            <option value="{{ $service }}">{{ $service }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-12 cf_field">
                    <textarea name="message" rows="3" placeholder="Message:" aria-label="Message"></textarea>
                </div>
                <div class="col-12 cf_field">
                    <div class="g-recaptcha"
                      data-sitekey="{{ app()->environment('local') ? '6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI' : '6LfxJ7crAAAAAGJsj1iMJSQXpZLJE47H1h6StuUT' }}"></div>
                    <span class="captcha-error text-danger" style="display:none;">Please verify you are not a robot.</span>
                </div>
            </div>

            <div class="contact_band_btn">
                <button type="submit" class="com_btn2 color-animated-button bubble-btn">
                    <span class="color-button__background"></span>
                    <span class="color-button__bubble-container">
                        <span class="color-button__bubble"></span>
                    </span>
                    <span class="color-button__label relative z-10">Request a Consultation</span>
                </button>
            </div>
        </form>
    </div>
</section>

@once

<script>
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('contactBandForm');
    const phone = document.getElementById('cfPhone');
    const fullPhone = document.getElementById('cfFullPhone');
    if (!form || !phone || !window.intlTelInput) return;

    const iti = window.intlTelInput(phone, {
        initialCountry: @json($phoneCountry),
        separateDialCode: true,
        utilsScript: 'https://cdn.jsdelivr.net/npm/intl-tel-input@25.12.4/build/js/utils.js'
    });

    const rules = {
        fullname: v => !v.trim() ? 'Full name is required'
                : v.trim().length < 3 ? 'Name must be at least 3 characters' : '',
        company: v => !v.trim() ? 'Company name is required'
                    : v.trim().length < 2 ? 'Enter a valid company name' : '',
        city:    v => !v ? 'Please select a city' : '',
        service: v => !v ? 'Please choose a service' : ''
    };

    function setError(field, msg) {
        
        const box = field.closest('.cf_field');
         box.querySelectorAll('.js-error').forEach(e => {
        if (e.dataset.cf !== '1') e.remove();
    });
        let err = box.querySelector('.js-error');
        if (!msg) { if (err) err.remove(); return true; }
        if (!err) {
            err = document.createElement('span');
            err.className = 'text-danger js-error';
            err.style.display = 'block';
            box.appendChild(err);
        }
        err.textContent = msg;
        return false;
    }

    function validate(name) {
        const field = form.elements[name];
        return setError(field, rules[name](field.value));
    }

    Object.keys(rules).forEach(name => {
        const field = form.elements[name];
        const blurred = { v: false };
        field.addEventListener('blur', () => { blurred.v = true; validate(name); });
        field.addEventListener('input', () => { setError(field, ''); if (blurred.v) validate(name); });
        field.addEventListener('change', () => validate(name));
    });

    form.addEventListener('submit', function (e) {
        fullPhone.value = '+' + iti.getSelectedCountryData().dialCode + phone.value.replace(/\s+/g, '');

        let firstBad = null;
        Object.keys(rules).forEach(name => {
            if (!validate(name) && !firstBad) firstBad = form.elements[name];
        });

        if (firstBad) {
            e.preventDefault();
            firstBad.focus();

            setTimeout(() => {
                const btn = form.querySelector("button[type='submit']");
                btn.disabled = false;
                const label = btn.querySelector('.color-button__label');
                if (label) label.textContent = 'Request a Consultation';
            }, 0);
        }
    });
});
</script>

@endonce
