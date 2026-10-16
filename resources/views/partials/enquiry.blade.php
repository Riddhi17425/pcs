
<style>
/* Floating enquiry button */
.enquiry-btn {
  position: fixed;
  right: 94px;
  bottom: 28px;
  z-index: 1000;
  display: inline-flex;
  align-items: center;
  gap: 9px;
  min-height: 54px;
  background: #182653;
  color: #fff;
  border: none;
  padding: 0 18px;
  font: 600 14px/1 "Instrument Sans", sans-serif;
  font-weight: 600;
  cursor: pointer;
  border-radius: 8px;
  box-shadow: 0 5px 18px rgba(24, 38, 83, .25);
  transition: background .2s, transform .2s, box-shadow .2s;
}

.enquiry-btn:hover {
  background: #3555b9;
  box-shadow: 0 7px 22px rgba(24, 38, 83, .3);
  transform: translateY(-2px);
}

.enquiry-btn:focus-visible {
  outline: 3px solid #8ba6ff;
  outline-offset: 3px;
}

/* Popup Overlay */
.enquiry-overlay {
  position: fixed;
  inset: 0;
  z-index: 9999;
  background: rgba(7, 20, 43, .68);
  display: none;
  align-items: center;
  justify-content: center;
  /* padding: 12px; */
  backdrop-filter: blur(3px);
}

.enquiry-overlay.active {
  display: flex;
  animation: fadeIn .25s ease;
}

/* Popup */
.enquiry-modal {
  display: flex;
  flex-direction: column;
  width: min(680px, calc(100vw - 32px));
  max-height: calc(100dvh - 32px);
  overflow-y: auto;
  background: #fffff6;
  border-radius: 14px;
  box-shadow: 0 15px 50px #0004;
  animation: slideUp .3s ease;
}

.enquiry-header {
  background: linear-gradient(135deg, #182653, #3555b9);
  color: white;
  padding: 14px 22px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.enquiry-heading {
  display: flex;
  align-items: center;
  gap: 14px;
}

.enquiry-header-icon {
  display: flex;
  width: 40px;
  height: 40px;
  flex: 0 0 40px;
  align-items: center;
  justify-content: center;
  border-radius: 10px;
  background: rgba(255, 255, 255, .15);
}

.enquiry-header h2 {
  margin: 0;
  color: #fff;
  font-size: 20px;
  font-weight: 600;
}

.enquiry-close {
  color: #fff;
  background: transparent;
  border: none;
  font-size: 27px;
  line-height: 1;
  cursor: pointer;
  padding: 0 0 0 12px;
  opacity: .85;
}

.enquiry-body {
  display: flex;
  flex: 1;
  flex-direction: column;
  justify-content: space-between;
  min-height: 0;
  padding: 24px 36px 30px;
}

.enquiry-subtitle {
  font-size: 13px;
  color: #dbe0f0;
  margin: 2px 0 0;
  line-height: 1.5;
}

#enquiryForm .enquiry-field .js-error{
    font-size: 12px;
}


.enquiry-field {
  min-width: 0;
  margin-bottom: 0;
}

.enquiry-field label {
  display: block;
  font-size: 13px;

.enquiry-overlay.active {
  display: flex;
  animation: fadeIn .25s ease;

.enquiry-field input,
}

.enquiry-field input,
.enquiry-field textarea,
.enquiry-field select {
  display: block;
  width: 100%;
  box-sizing: border-box;
  min-height: 48px;
  border: 1px solid #d5d9e2;
  border-radius: 8px;
  padding: 10px 13px;
  font: inherit;
  font-size: 14px;
  color: #182653;
  background: #fffff6;
  outline: none;
  transition: border-color .2s, box-shadow .2s;
  max-height: calc(100dvh - 32px);
  overflow-y: auto;
  gap: 14px;
  min-height: 100px;
  width: 40px;

.enquiry-field select {
  justify-content: center;

}
  min-height: 78px;
}
}
  align-content: space-between;
  flex: 1;
  color: #fff;
  cursor: pointer;
}
}
#enquiryForm {
  display: grid;
  grid-template-columns: repeat(2, minmax(0, 1fr));
  gap: 12px 18px;

  position: absolute;
  left: -10000px;
.enquiry-submit,
.enquiry-status {
  grid-column: 1 / -1;
}

.enquiry-field input::placeholder,
.enquiry-field textarea::placeholder {
  color: #929baa;
}

/* Google reCAPTCHA */
.enquiry-captcha {
  min-width: 0;
  padding: 0;
  margin: 0;
}

.enquiry-captcha .g-recaptcha {
  transform: scale(.9);
  transform-origin: left top;
  margin-bottom: -6px;
}

.captcha-error {
  margin: 8px 0 0;
  color: #a52020;
  font-size: 13px;
}

.enquiry-submit {
  width: 100%;
  min-height: 54px;
  padding: 15px 24px;
  border: none;
  border-radius: 8px;
  background: #182653;
  color: white;
  font-size: 16px;
  font-weight: 600;
  cursor: pointer;
  transition: background .2s;
}

.enquiry-submit:hover {
  background: #3555b9;
}

.enquiry-submit:disabled {
  opacity: .65;
  cursor: wait;
}

.enquiry-status {
  display: none;
  margin: 13px 0 0;
  padding: 11px;
  border-radius: 6px;
  font-size: 14px;
  line-height: 1.5;
}

.enquiry-status.success {
  display: block;
  background: #e9f8ef;
  color: #176537;
}

.enquiry-status.error {
  display: block;
  background: #fff0f0;
  color: #a52020;
}

.enquiry-status[hidden],
.captcha-error[hidden] {
  display: none;
}

@keyframes fadeIn {
  from { opacity: 0; }
  to { opacity: 1; }
}

@keyframes slideUp {
  from { opacity: 0; transform: translateY(20px); }
  to { opacity: 1; transform: translateY(0); }
}

@media (max-width: 480px) {
  .enquiry-overlay {
    padding: 8px;
  }

  .enquiry-btn {
    right: 91px;
    bottom: 27px;
    min-height: 48px;
    padding: 0 12px;
    font-size: 13px;
  }

  .enquiry-modal {
    width: calc(100vw - 16px);
    height: calc(100dvh - 16px);
  }

  .enquiry-body {
    padding: 16px 18px 20px;
  }

  .enquiry-header {
    padding: 12px 16px;
  }

  .enquiry-header h2 {
    font-size: 18px;
  }

  .enquiry-header-icon {
    width: 36px;
    height: 36px;
    flex-basis: 36px;
  }

  .enquiry-captcha .g-recaptcha {
    transform: scale(.82);
    transform-origin: left top;
    margin-bottom: -10px;
  }

  #enquiryForm {
    gap: 10px 12px;
  }

  .enquiry-captcha {
    grid-column: 1 / -1;
  }

  .enquiry-field input,
  .enquiry-field select {
    min-height: 46px;
    padding: 8px 10px;
    font-size: 13px;
  }

  .enquiry-field textarea {
    min-height: 70px;
    padding: 9px 10px;
  }
}

@media (max-height: 650px) {
  .enquiry-overlay {
    padding: 8px;
  }

  .enquiry-modal {
    height: calc(100dvh - 16px);
  }

  .enquiry-header {
    padding-top: 10px;
    padding-bottom: 10px;
  }

  .enquiry-body {
    padding-top: 12px;
    padding-bottom: 14px;
  }

  #enquiryForm {
    gap: 7px 12px;
  }

  .enquiry-field label {
    margin-bottom: 2px;
    font-size: 12px;
  }

  .enquiry-field input,
  .enquiry-field select {
    min-height: 40px;
    padding-top: 7px;
    padding-bottom: 7px;
  }

  .enquiry-field textarea {
    min-height: 52px;
  }

  .enquiry-captcha .g-recaptcha {
    transform: scale(.78);
    margin-bottom: -14px;
  }

  .enquiry-submit {
    min-height: 42px;
    padding: 9px 16px;
  }
}

@media (prefers-reduced-motion: reduce) {
  .enquiry-overlay.active,
  .enquiry-modal {
    animation: none;
  }
}
</style>

<style>
.enquiry-btn {
  top: 50%;
  right: 0;
  bottom: auto;
  min-height: 0;
  padding: 24px 16px;
  border-radius: 0 8px 8px 0;
  writing-mode: vertical-rl;
  transform: translateY(-50%) rotate(180deg);
  box-shadow: 0 4px 15px rgba(0, 0, 0, .25);
}

.enquiry-btn svg {
  display: none;
}

.enquiry-btn:hover {
  transform: translateY(-50%) rotate(180deg);
}

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

.enquiry-overlay.active {
  display: flex;
  animation: fadeIn .25s ease;
}

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

.enquiry-heading {
  display: flex;
  align-items: center;
  gap: 14px;
}

.enquiry-header-icon {
  display: flex;
  flex: 0 0 40px;
  align-items: center;
  justify-content: center;
  width: 40px;
  height: 40px;
  border-radius: 10px;
  background: rgba(255, 255, 255, .15);
}

.enquiry-header h2 {
  margin: 0;
  color: #fff;
  font-size: 20px;
  font-weight: 600;
}

.enquiry-subtitle {
  margin: 2px 0 0;
  color: #dbe0f0;
  font-size: 13px;
  line-height: 1.5;
}

.enquiry-close {
  padding: 0 0 0 12px;
  border: 0;
  color: #fff;
  background: transparent;
  font-size: 27px;
  line-height: 1;
  cursor: pointer;
}

.enquiry-body {
  padding: 20px 28px 24px;
}

#enquiryForm {
  display: grid;
  grid-template-columns: repeat(2, minmax(0, 1fr));
  gap: 12px 18px;
}

.enquiry-field {
  min-width: 0;
}

.enquiry-field-wide,
.enquiry-submit,
.enquiry-status {
  grid-column: 1 / -1;
}

.enquiry-field label {
  display: block;
  margin-bottom: 4px;
  color: #26364f;
  font-size: 13px;
  font-weight: 600;
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

.enquiry-field textarea {
  min-height: 78px;
  resize: vertical;
}

.enquiry-field select {
  cursor: pointer;
}

.enquiry-field input::placeholder,
.enquiry-field textarea::placeholder {
  color: #929baa;
}

.enquiry-honeypot {
  position: absolute;
  left: -10000px;
  width: 1px;
  height: 1px;
  overflow: hidden;
}

.enquiry-captcha {
  grid-column: 1 / -1;
  min-width: 0;
}

.enquiry-captcha .g-recaptcha {
  transform: scale(.9);
  transform-origin: left top;
  margin-bottom: -6px;
}

.captcha-error {
  margin: 8px 0 0;
  color: #a52020;
  font-size: 13px;
}

.enquiry-submit {
  width: 100%;
  min-height: 48px;
  padding: 12px 20px;
  border: 0;
  border-radius: 8px;
  color: #fff;
  background: #182653;
  font-size: 16px;
  font-weight: 600;
  cursor: pointer;
  transition: background .2s;
}

.enquiry-submit:hover {
  background: #3555b9;
}

.enquiry-submit:disabled {
  opacity: .65;
  cursor: wait;
}

.enquiry-status {
  display: none;
  margin: 0;
  padding: 11px;
  border-radius: 6px;
  font-size: 14px;
  line-height: 1.5;
}

.enquiry-status.success {
  display: block;
  color: #176537;
  background: #e9f8ef;
}

.enquiry-status.error {
  display: block;
  color: #a52020;
  background: #fff0f0;
}

.enquiry-status[hidden],
.captcha-error[hidden] {
  display: none;
}

@media (max-width: 480px) {
  .enquiry-overlay {
    padding: 8px;
  }

  .enquiry-modal {
    width: calc(100vw - 16px);
    max-height: calc(100dvh - 16px);
  }

  .enquiry-header {
    padding: 12px 16px;
  }

  .enquiry-header h2 {
    font-size: 18px;
  }

  .enquiry-header-icon {
    width: 36px;
    height: 36px;
    flex-basis: 36px;
  }

  .enquiry-body {
    padding: 16px 18px 18px;
  }

  #enquiryForm {
    gap: 9px 12px;
  }

  .enquiry-captcha {
    grid-column: 1 / -1;
  }

  .enquiry-captcha .g-recaptcha {
    transform: scale(.82);
    margin-bottom: -10px;
  }

  .enquiry-field input,
  .enquiry-field select {
    min-height: 46px;
    padding: 8px 10px;
    font-size: 13px;
  }

  .enquiry-field textarea {
    min-height: 70px;
    padding: 9px 10px;
  }
}

@media (max-height: 650px) {
  .enquiry-modal {
    max-height: calc(100dvh - 16px);
  }

  .enquiry-header {
    padding-top: 10px;
    padding-bottom: 10px;
  }

  .enquiry-body {
    padding-top: 12px;
    padding-bottom: 14px;
  }

  #enquiryForm {
    gap: 7px 12px;
  }

  .enquiry-field input,
  .enquiry-field select {
    min-height: 40px;
  }

  .enquiry-field textarea {
    min-height: 52px;
  }

  .enquiry-captcha .g-recaptcha {
    transform: scale(.78);
    margin-bottom: -14px;
  }

  .enquiry-submit {
    min-height: 42px;
    padding: 9px 16px;
  }
}
</style>

<!-- Floating Enquiry Button -->
<button
  type="button"
  class="enquiry-btn"
  id="openEnquiry"
  aria-haspopup="dialog"
  aria-controls="enquiryModal">
  <svg width="19" height="19" viewBox="0 0 24 24" fill="none" aria-hidden="true" xmlns="http://www.w3.org/2000/svg">
    <path d="M4 5.5h16v13H4z" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round"/>
    <path d="m4.5 7 7.5 6 7.5-6" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/>
  </svg>
  Enquire Now
</button>

<!-- Popup -->
<div class="enquiry-overlay" id="enquiryOverlay">
  <section
    class="enquiry-modal"
    id="enquiryModal"
    role="dialog"
    aria-modal="true"
    aria-labelledby="enquiryTitle">

    <div class="enquiry-header">
      <div class="enquiry-heading">
        <span class="enquiry-header-icon" aria-hidden="true">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M4 5.5h16v13H4z" stroke="white" stroke-width="1.6" stroke-linejoin="round"/>
            <path d="m4.5 7 7.5 6 7.5-6" stroke="white" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </span>
        <div>
          <h2 id="enquiryTitle">Enquire Now</h2>
        </div>
      </div>
      <button type="button" class="enquiry-close"
        id="closeEnquiry" aria-label="Close enquiry form">&times;</button>
    </div>

    <div class="enquiry-body">
      @php($enquiryCountries = \App\Models\Country::orderBy('name')->get())
      <form id="enquiryForm" class="validated-form" action="{{ route('request.store') }}" method="POST">
        @csrf
        <div class="enquiry-honeypot" aria-hidden="true">
          <label for="enqFax">Leave this field empty</label>
          <input id="enqFax" name="fax_number" type="text" tabindex="-1" autocomplete="off">
        </div>
        <div class="enquiry-field">
          <label for="enqName">Full Name *</label>
          <input id="enqName" name="fullname" type="text"
            placeholder="Enter your full name"
            autocomplete="name" maxlength="70" pattern="[A-Za-z ]{2,70}" required>
        </div>

        <div class="enquiry-field">
          <label for="enqEmail">Email Address *</label>
          <input id="enqEmail" name="email" type="email"
            placeholder="Enter your email address"
            autocomplete="email" maxlength="70" required>
        </div>

        <div class="enquiry-field">
          <label for="enqPhone">Phone Number *</label>
          <input id="enqPhone" name="phone" type="tel"
            placeholder="Enter your phone number"
            autocomplete="tel" maxlength="15" inputmode="numeric"
            pattern="[0-9]{10,15}" required>
        </div>
        <input type="hidden" name="full_phone" value="">

        <div class="enquiry-field">
          <label for="enqCompany">Company Name</label>
          <input id="enqCompany" name="company_name" type="text"
            placeholder="Enter your company name"
            autocomplete="organization" maxlength="120">
        </div>

        <div class="enquiry-field enquiry-field-wide">
          <label for="enqMessage">Message *</label>
          <textarea id="enqMessage" name="message"
            placeholder="How can we help you?"
            maxlength="1000" required></textarea>
        </div>

        <div class="enquiry-captcha">
          <div class="g-recaptcha" data-sitekey="6LfxJ7crAAAAAGJsj1iMJSQXpZLJE47H1h6StuUT"></div>
          <p class="captcha-error" role="alert" hidden>Please complete the CAPTCHA verification.</p>
        </div>

        <button type="submit" class="enquiry-submit" id="submitEnquiry">
          Submit Enquiry
        </button>

        <p class="enquiry-status" id="enquiryStatus"
          role="status" aria-live="polite"></p>
      </form>
    </div>
  </section>
</div>

<script>
(function () {
  const overlay = document.getElementById("enquiryOverlay");
  const openBtn = document.getElementById("openEnquiry");
  const closeBtn = document.getElementById("closeEnquiry");
  const form = document.getElementById("enquiryForm");
  const status = document.getElementById("enquiryStatus");
  const submitBtn = document.getElementById("submitEnquiry");
  const captchaError = form.querySelector(".captcha-error");
  const phone = document.getElementById("enqPhone");
  const fullPhone = form.querySelector("[name='full_phone']");
  const company = form.querySelector("[name='company_name']");
  const message = form.querySelector("[name='message']");
  let previousFocus;

  function openModal() {
    previousFocus = document.activeElement;
    overlay.classList.add("active");
    document.body.style.overflow = "hidden";
    closeBtn.focus();
  }

  function closeModal() {
    overlay.classList.remove("active");
    document.body.style.overflow = "";
    if (previousFocus) previousFocus.focus();
  }

  openBtn.addEventListener("click", openModal);
  closeBtn.addEventListener("click", closeModal);

  overlay.addEventListener("click", function (event) {
    if (event.target === overlay) closeModal();
  });

  document.addEventListener("keydown", function (event) {
    if (event.key === "Escape" &&
        overlay.classList.contains("active")) {
      closeModal();
    }
  });

  form.addEventListener("submit", async function (event) {
    if (event.defaultPrevented) return;
    event.preventDefault();

    status.className = "enquiry-status";
    status.textContent = "";

    if (!form.reportValidity()) return;

    const widgetId = Number(form.dataset.captchaWidgetId);
    const captchaToken = typeof grecaptcha !== "undefined" && Number.isInteger(widgetId)
      ? grecaptcha.getResponse(widgetId)
      : "";

    if (!captchaToken) {
      captchaError.hidden = false;
      status.textContent = "Please complete the CAPTCHA verification.";
      status.className = "enquiry-status error";
      return;
    }

    captchaError.hidden = true;
    fullPhone.value = phone.value;
    const originalMessage = message.value;
    if (company.value.trim()) {
      message.value = `${originalMessage}\n\nCompany: ${company.value.trim()}`.slice(0, 1000);
    }
    submitBtn.disabled = true;
    submitBtn.textContent = "Sending...";
    let submitted = false;

    try {
      const response = await fetch(form.action, {
        method: "POST",
        body: new FormData(form),
        headers: { "X-Requested-With": "XMLHttpRequest" },
        credentials: "same-origin"
      });
      const responseHtml = await response.text();
      const finalPath = new URL(response.url).pathname;

      if (response.ok && finalPath.endsWith("/thank-you")) {
        form.reset();
        submitted = true;
        if (typeof grecaptcha !== "undefined" && Number.isInteger(widgetId)) grecaptcha.reset(widgetId);
        status.textContent = "Thank you. Your enquiry has been received.";
        status.className = "enquiry-status success";
      } else {
        const responseDocument = new DOMParser().parseFromString(responseHtml, "text/html");
        const validationMessage = responseDocument.querySelector(".alert-danger")?.textContent.trim();
        throw new Error(validationMessage || "We could not send your enquiry. Please check your details and try again.");
      }
    } catch (error) {
      if (typeof grecaptcha !== "undefined" && Number.isInteger(widgetId)) grecaptcha.reset(widgetId);
      status.textContent = error.message || "A connection error occurred. Please try again.";
      status.className = "enquiry-status error";
    } finally {
      if (!submitted) message.value = originalMessage;
      submitBtn.disabled = false;
      submitBtn.textContent = "Submit Enquiry";
    }
  });
})();
</script>
