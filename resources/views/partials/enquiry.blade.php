<style>
/* Floating enquiry button */
.enquiry-btn {
  position: fixed;
  top: 50%;
  right: 0;
  bottom: auto;
  z-index: 1000;
  display: inline-flex;
  align-items: center;
  gap: 9px;
  padding: 24px 16px;
  border: none;
  border-radius: 0 8px 8px 0;
  color: #fff;
  background: #182653;
  font: 600 14px/1 "Instrument Sans", sans-serif;
  cursor: pointer;
  writing-mode: vertical-rl;
  transform: translateY(-50%) rotate(180deg);
  box-shadow: 0 4px 15px rgba(0, 0, 0, .25);
  transition: background .2s, box-shadow .2s;
}
.enquiry-btn svg { display: none; }
.enquiry-btn:hover { background: #3555b9; transform: translateY(-50%) rotate(180deg); }
.enquiry-btn:focus-visible { outline: 3px solid #8ba6ff; outline-offset: 3px; }

/* Overlay + modal */
.enquiry-overlay {
  position: fixed;
  inset: 0;
  z-index: 9999;
  display: none;
  align-items: center;
  justify-content: center;
  padding: 12px;
  background: rgba(7, 20, 43, .68);
  backdrop-filter: blur(3px);
}
.enquiry-overlay.active { display: flex; animation: fadeIn .25s ease; }

.enquiry-modal {
  display: flex;
  flex-direction: column;
  width: min(680px, calc(100vw - 32px));
  max-height: calc(100dvh - 32px);
  overflow-y: auto;
  background: #fffff6;
  border-radius: 14px;
  box-shadow: 0 15px 50px rgba(0, 0, 0, .25);
  animation: slideUp .3s ease;
}

.enquiry-header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 14px 22px;
  color: #fff;
  background: linear-gradient(135deg, #182653, #3555b9);
}
.enquiry-heading { display: flex; align-items: center; gap: 14px; }
.enquiry-header-icon {
  display: flex; flex: 0 0 40px; align-items: center; justify-content: center;
  width: 40px; height: 40px; border-radius: 10px; background: rgba(255, 255, 255, .15);
}
.enquiry-header h2 { margin: 0; color: #fff; font-size: 20px; font-weight: 600; }
.enquiry-close {
  padding: 0 0 0 12px; border: 0; color: #fff; background: transparent;
  font-size: 27px; line-height: 1; cursor: pointer;
}
.enquiry-body { padding: 20px 28px 24px; }

/* Form */
#enquiryForm {
  display: grid;
  grid-template-columns: repeat(2, minmax(0, 1fr));
  gap: 12px 18px;
}
.enquiry-field { min-width: 0; }
.enquiry-field-wide, .enquiry-submit, .enquiry-status, .enquiry-captcha { grid-column: 1 / -1; }

.enquiry-field label {
  display: block; margin-bottom: 4px; color: #26364f; font-size: 13px; font-weight: 600;
}
.enquiry-field input,
.enquiry-field textarea,
.enquiry-field select {
  display: block;
  box-sizing: border-box;
  width: 100%;
  min-height: 48px;
  padding: 10px 13px;
  border: 1px solid #d5d9e2;
  border-radius: 8px;
  outline: none;
  color: #182653;
  background: #fffff6;
  font: inherit;
  font-size: 14px;
  transition: border-color .2s, box-shadow .2s;
}
.enquiry-field input:focus,
.enquiry-field textarea:focus,
.enquiry-field select:focus {
  border-color: #3555b9;
  box-shadow: 0 0 0 3px rgba(24, 38, 83, .1);
}
.enquiry-field textarea { min-height: 78px; resize: vertical; }
.enquiry-field input::placeholder,
.enquiry-field textarea::placeholder { color: #929baa; }

/* Phone country flag + code */
.iti { width: 100%; display: block; }
.enquiry-field .iti input#enqPhone { padding-left: 100px !important; }
.iti .iti__selected-dial-code { color: #182653; }
.iti__country-list { background: #fff !important; }
.iti__country-list .iti__country-name,
.iti__country-list .iti__dial-code { color: #182653 !important; }
.iti--container { z-index: 10000 !important; }

/* Validation (jQuery Validate) */
.enquiry-field input.is-invalid,
.enquiry-field textarea.is-invalid { border-color: #a52020; }
p.js-error { display: block; margin: 4px 0 0; color: #a52020; font-size: 12px; line-height: 1.3; }

.enquiry-honeypot { position: absolute; left: -10000px; width: 1px; height: 1px; overflow: hidden; }

/* reCAPTCHA */
.enquiry-captcha { min-width: 0; }
.enquiry-captcha .g-recaptcha { transform: scale(.9); transform-origin: left top; margin-bottom: -6px; }
.captcha-error { margin: 8px 0 0; color: #a52020; font-size: 13px; }

.enquiry-submit {
  width: 100%; min-height: 48px; padding: 12px 20px; border: 0; border-radius: 8px;
  color: #fff; background: #182653; font-size: 16px; font-weight: 600; cursor: pointer;
  transition: background .2s;
}
.enquiry-submit:hover { background: #3555b9; }
.enquiry-submit:disabled { opacity: .65; cursor: wait; }

.enquiry-status { display: none; margin: 0; padding: 11px; border-radius: 6px; font-size: 14px; line-height: 1.5; }
.enquiry-status.success { display: block; color: #176537; background: #e9f8ef; }
.enquiry-status.error { display: block; color: #a52020; background: #fff0f0; }
.captcha-error[hidden] { display: none; }

@keyframes fadeIn { from { opacity: 0; } to { opacity: 1; } }
@keyframes slideUp { from { opacity: 0; transform: translateY(20px); } to { opacity: 1; transform: translateY(0); } }

@media (max-width: 480px) {
  .enquiry-overlay { padding: 8px; }
  .enquiry-modal { width: calc(100vw - 16px); max-height: calc(100dvh - 16px); }
  .enquiry-header { padding: 12px 16px; }
  .enquiry-header h2 { font-size: 18px; }
  .enquiry-header-icon { width: 36px; height: 36px; flex-basis: 36px; }
  .enquiry-body { padding: 16px 18px 18px; }
  #enquiryForm { gap: 9px 12px; }
  .enquiry-captcha .g-recaptcha { transform: scale(.82); margin-bottom: -10px; }
  .enquiry-field input, .enquiry-field select { min-height: 46px; padding: 8px 10px; font-size: 13px; }
  .enquiry-field textarea { min-height: 70px; padding: 9px 10px; }
}
@media (max-height: 650px) {
  .enquiry-modal { max-height: calc(100dvh - 16px); }
  .enquiry-header { padding-top: 10px; padding-bottom: 10px; }
  .enquiry-body { padding-top: 12px; padding-bottom: 14px; }
  #enquiryForm { gap: 7px 12px; }
  .enquiry-field input, .enquiry-field select { min-height: 40px; }
  .enquiry-field textarea { min-height: 52px; }
  .enquiry-captcha .g-recaptcha { transform: scale(.78); margin-bottom: -14px; }
  .enquiry-submit { min-height: 42px; padding: 9px 16px; }
}
@media (prefers-reduced-motion: reduce) {
  .enquiry-overlay.active, .enquiry-modal { animation: none; }
}
</style>

<!-- Floating Enquiry Button -->
<button type="button" class="enquiry-btn" id="openEnquiry"
  aria-haspopup="dialog" aria-controls="enquiryModal">
  Enquire Now
</button>

<!-- Popup -->
<div class="enquiry-overlay" id="enquiryOverlay">
  <section class="enquiry-modal" id="enquiryModal" role="dialog"
    aria-modal="true" aria-labelledby="enquiryTitle">

    <div class="enquiry-header">
      <div class="enquiry-heading">
        <span class="enquiry-header-icon" aria-hidden="true">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M4 5.5h16v13H4z" stroke="white" stroke-width="1.6" stroke-linejoin="round"/>
            <path d="m4.5 7 7.5 6 7.5-6" stroke="white" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </span>
        <h2 id="enquiryTitle">Enquire Now</h2>
      </div>
      <button type="button" class="enquiry-close" id="closeEnquiry" aria-label="Close enquiry form">&times;</button>
    </div>

    <div class="enquiry-body">
      {{-- "validated-form" class jaan-bunjh kar nahi lagayi (global main.js ke saath conflict se bachne ke liye) --}}
      <form id="enquiryForm" action="{{ route('request.store') }}" method="POST" novalidate>
        @csrf

        <div class="enquiry-honeypot" aria-hidden="true">
          <label for="enqFax">Leave this field empty</label>
          <input id="enqFax" name="fax_number" type="text" tabindex="-1" autocomplete="off">
        </div>

        <div class="enquiry-field">
          <label for="enqName">Full Name *</label>
          <input id="enqName" name="fullname" type="text" placeholder="Enter your full name"
            autocomplete="name" maxlength="70">
        </div>

        <div class="enquiry-field">
          <label for="enqEmail">Email Address *</label>
          <input id="enqEmail" name="email" type="email" placeholder="Enter your email address"
            autocomplete="email" maxlength="70">
        </div>

        <div class="enquiry-field">
          <label for="enqPhone">Phone Number *</label>
          <input id="enqPhone" name="phone" type="tel" placeholder="Enter your phone number"
            autocomplete="tel" maxlength="15" inputmode="numeric">
        </div>
        <input type="hidden" name="full_phone" id="enqFullPhone" value="">
        <input type="hidden" name="country" id="enqCountry" value="India">
        <input type="hidden" name="form_type" value="Enquire Now">

        <div class="enquiry-field">
          <label for="enqCompany">Company Name</label>
          <input id="enqCompany" name="company" type="text" placeholder="Enter your company name"
            autocomplete="organization" maxlength="120">
        </div>

        <div class="enquiry-field enquiry-field-wide">
          <label for="enqMessage">Message *</label>
          <textarea id="enqMessage" name="message" placeholder="How can we help you?" maxlength="1000"></textarea>
        </div>

        <div class="enquiry-captcha">
          <div class="g-recaptcha"
            data-sitekey="6LfxJ7crAAAAAGJsj1iMJSQXpZLJE47H1h6StuUT"
            data-callback="enquiryCaptchaSolved"
            data-expired-callback="enquiryCaptchaExpired"></div>
          <p class="captcha-error" role="alert" hidden>Please complete the CAPTCHA verification.</p>
        </div>

        <button type="submit" class="enquiry-submit" id="submitEnquiry">Submit Enquiry</button>

        <p class="enquiry-status" id="enquiryStatus" role="status" aria-live="polite"></p>
      </form>
    </div>
  </section>
</div>

<script>
window.addEventListener("load", function () {
  if (!window.jQuery || !jQuery.fn.validate) {
    console.error("jQuery ya jQuery Validate load nahi hui");
    return;
  }

  jQuery(function ($) {
    var $overlay    = $("#enquiryOverlay");
    var $form       = $("#enquiryForm");
    var $status     = $("#enquiryStatus");
    var $submitBtn  = $("#submitEnquiry");
    var $captchaErr = $form.find(".captcha-error");
    var $closeBtn   = $("#closeEnquiry");
    var previousFocus;

    /* ---------- Custom methods ---------- */
    $.validator.addMethod("nameOnly", function (value, element) {
      return this.optional(element) || /^[A-Za-z][A-Za-z .'-]{1,69}$/.test(value);
    }, "Enter a valid name (letters only, minimum 2 characters).");

    $.validator.addMethod("emailFull", function (value, element) {
      return this.optional(element) || /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/.test(value);
    }, "Please enter a valid email address.");

    $.validator.addMethod("digitsOnly", function (value, element) {
      return this.optional(element) || /^[0-9]{10,15}$/.test(value);
    }, "Phone number must be 10 to 15 digits.");

    /* ---------- Phone country code + IP detect ---------- */
    var phoneEl = $form.find('[name="phone"]')[0];
    var $country = $("#enqCountry");
    var siteCountry = @json($site['phone_country'] ?? 'in');
    var iti = null, detected = false;

    function syncCountry() {
      var d = iti && iti.getSelectedCountryData();
      if (d && d.name) $country.val(d.name.replace(/\s*\(.*\)\s*$/, ""));
    }

    function detectCountry() {
      if (detected) return;
      fetch("https://ipwho.is/")
        .then(function (r) { return r.json(); })
        .then(function (data) {
          if (!data || data.success === false || !data.country_code) return;
          iti.setCountry(data.country_code.toLowerCase());
          syncCountry();
          detected = true;
        })
        .catch(function (err) { console.warn("Country auto-detect failed:", err); });
    }

    function initPhone() {
      if (iti || !window.intlTelInput || !phoneEl) return;
      iti = window.intlTelInput(phoneEl, {
        initialCountry: siteCountry,          // IP detect fail ho to site ki country
        separateDialCode: true,
        dropdownContainer: document.body,     // modal ke andar clip na ho
        utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@25.12.4/build/js/utils.js"
      });
      phoneEl.addEventListener("countrychange", syncCountry);
      syncCountry();
      detectCountry();
    }

    /* ---------- Validate setup ---------- */
    var validator = $form.validate({
      // honeypot aur captcha textarea ko validation se bahar rakho
      ignore: ".enquiry-honeypot input, [name='g-recaptcha-response']",
      errorElement: "p",
      errorClass: "js-error",
      validClass: "is-valid",
      rules: {
        fullname: { required: true, nameOnly: true },
        email:    { required: true, emailFull: true },
        phone:    { required: true, digitsOnly: true },
        message:  { required: true, minlength: 5 }
      },
      messages: {
        fullname: { required: "Please enter your full name." },
        email:    { required: "Please enter your email address." },
        phone:    { required: "Please enter your phone number." },
        message:  {
          required:  "Please enter your message.",
          minlength: "Message must be at least 5 characters."
        }
      },
      errorPlacement: function ($error, $element) {
        var $iti = $element.closest(".iti");
        $error.insertAfter($iti.length ? $iti : $element); // field ke bilkul neeche
      },
      highlight: function (el) {
        $(el).addClass("is-invalid");
      },
      unhighlight: function (el) {
        $(el).removeClass("is-invalid");
      },
      onkeyup: function (el) {
        // error dikhne ke baad hi typing par live re-check
        if ($(el).hasClass("is-invalid")) this.element(el);
      },
      invalidHandler: function () {
        // captcha bhi check karo, taaki saare errors ek saath dikhein
        var token = $form.find('[name="g-recaptcha-response"]').val() || "";
        $captchaErr.text("Please complete the CAPTCHA verification.").prop("hidden", !!token);
      },
      submitHandler: function () {
        var token = $form.find('[name="g-recaptcha-response"]').val() || "";
        if (!token) {
          $captchaErr.text("Please complete the CAPTCHA verification.").prop("hidden", false);
          return false;
        }
        $captchaErr.prop("hidden", true);
        sendForm();
        return false;
      }
    });

    // Phone me sirf digits
    $form.find('[name="phone"]').on("input", function () {
      this.value = this.value.replace(/\D/g, "").slice(0, 15);
    });

    /* ---------- reCAPTCHA helpers ---------- */
    window.enquiryCaptchaSolved  = function () { $captchaErr.prop("hidden", true); };
    window.enquiryCaptchaExpired = function () {
      $captchaErr.text("Please complete the CAPTCHA verification.").prop("hidden", false);
    };

    function resetCaptcha() {
      if (typeof grecaptcha === "undefined") return;
      var id = $form.find(".g-recaptcha").data("widgetId");
      try { grecaptcha.reset(id); } catch (e) {}
    }

    /* ---------- Modal ---------- */
    function resetFormState() {
      validator.resetForm();
      $form.find(".is-invalid").removeClass("is-invalid");
      $captchaErr.prop("hidden", true);
      $status.attr("class", "enquiry-status").text("");
    }

    function openModal() {
      previousFocus = document.activeElement;
      $overlay.addClass("active");
      initPhone();
      $("body").css("overflow", "hidden");
      $closeBtn.trigger("focus");
    }

    function closeModal() {
      $overlay.removeClass("active");
      $("body").css("overflow", "");
      if (previousFocus) $(previousFocus).trigger("focus");
    }

    $("#openEnquiry").on("click", openModal);
    $closeBtn.on("click", closeModal);
    $overlay.on("click", function (e) { if (e.target === this) closeModal(); });
    $(document).on("keydown", function (e) {
      if (e.key === "Escape" && $overlay.hasClass("active")) closeModal();
    });

    /* ---------- AJAX submit ---------- */
    function sendForm() {
      $status.attr("class", "enquiry-status").text("");
      syncCountry();
      var dial = iti ? iti.getSelectedCountryData().dialCode : "";
      $form.find('[name="full_phone"]').val("+" + dial + $.trim($form.find('[name="phone"]').val()));
      $submitBtn.prop("disabled", true).text("Sending...");

      $.ajax({
        url: $form.attr("action"),
        method: "POST",
        data: new FormData($form[0]),
        processData: false,
        contentType: false,
        dataType: "json",
        headers: { "X-Requested-With": "XMLHttpRequest", "Accept": "application/json" }
      })
      .done(function (data) {
        // Success: thank-you page par bhejo
        $submitBtn.prop("disabled", true).text("Redirecting...");
        window.location.href = "{{ route('thank.you') }}";
      })
      .fail(function (xhr) {
        var res = xhr.responseJSON || {};

        if (xhr.status === 422 && res.errors) {
          var generic = "";
          var serverErrors = {};
          $.each(res.errors, function (key, msgs) {
            if (key === "g-recaptcha-response") {
              $captchaErr.text(msgs[0]).prop("hidden", false);
            } else if ($form.find('[name="' + key + '"]').length) {
              serverErrors[key] = msgs[0];
            } else if (!generic) {
              generic = msgs[0];
            }
          });
          if (!$.isEmptyObject(serverErrors)) validator.showErrors(serverErrors);
          if (generic) $status.text(generic).attr("class", "enquiry-status error");
        } else if (xhr.status === 419) {
          $status.text("Session expired. Please refresh the page and try again.")
                 .attr("class", "enquiry-status error");
        } else {
          $status.text("We could not send your enquiry. Please try again.")
                 .attr("class", "enquiry-status error");
        }
        resetCaptcha();
      })
      .always(function () {
        $submitBtn.prop("disabled", false).text("Submit Enquiry");
      });
    }
  });
});
</script>
