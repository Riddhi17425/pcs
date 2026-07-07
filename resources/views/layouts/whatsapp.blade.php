<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@25.12.4/build/css/intlTelInput.min.css">

<style>
.WhatsAppButton_mpp {
  position: fixed;
  top: 50%;
  right: 0;
  z-index: 1000;
  display: flex;
  flex-direction: column;
  align-items: flex-end;
}

.whatsapp_img img {
  animation: pulse 1.5s infinite;
}

@keyframes pulse {
  0% {
    box-shadow: 0 0 0 0 rgba(20, 166, 20, 0.7);
  }
  70% {
    box-shadow: 0 0 0 15px rgba(20, 166, 20, 0);
  }
  100% {
    box-shadow: 0 0 0 0 rgba(20, 166, 20, 0);
  }
}

.whatsapp-popup {
  position: absolute;
  bottom: -100px;
  right: 60px;
  width: 320px;
  background: #fff;
  box-shadow: 0 8px 30px rgba(0,0,0,0.18);
  border-radius: 14px;
  transform: rotateY(90deg);
  transform-origin: 100% 100%;
  transition: transform 0.4s ease, opacity 0.4s ease, visibility 0.4s;
  opacity: 0;
  visibility: hidden;
}

.whatsapp-popup.active {
  transform: rotateY(0deg);
  opacity: 1;
  visibility: visible;
}

.wa_head {
  background-color: #17367f;
  padding: 14px 16px;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.wa_head h5 {
  color: #fff;
  margin: 0;
  font-size: 15px;
  font-weight: 600;
}

.close-inquiry {
  font-size: 28px;
  cursor: pointer;
  color: #fff;
}

.wa_form {
  padding: 18px 16px 20px;
}

.wa_form textarea,
.wa_form input {
  width: 100%;
  padding: 9px 11px;
  border: 1px solid #ddd;
  border-radius: 8px;
  font-size: 13px;
  outline: none;
}

.wa_form textarea {
  height: 80px;
  resize: none;
}

.wa-btn {
  margin-top: 10px;
  width: 100%;
  padding: 11px;
  background: #17367f;
  color: #fff;
  border-radius: 10px;
  border: none;
  font-weight: 600;
  cursor: pointer;
}

.wa-btn:disabled {
  opacity: 0.7;
  cursor: not-allowed;
}

.whatsapp_img img {
  width: 56px;
  height: 56px;
  border-radius: 50%;
  cursor: pointer;
}

.iti {
  width: 100%;
}

.iti__search-input {
  padding-left: 30px !important;
}

.input-error {
  border: 1px solid red !important;
}

/*.text-danger {*/
/*  color: red;*/
/*  font-size: 13px;*/
/*  margin-top: 5px;*/
/*  display: block;*/
/*}*/
</style>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="WhatsAppButton_mpp">
  <div class="whatsapp_img">

    <div class="whatsapp-popup" id="whatsappPopup">
      <div class="wa_head">
        <h5>Contact on WhatsApp</h5>
        <span class="close-inquiry">&times;</span>
      </div>

      <form class="wa_form" method="POST" action="{{ route('whatsaapinquiry') }}" id="whatsappForm" target="_blank">
        @csrf

         <!-- Honeypot field (hidden from users) -->
        <div style="display:none;">
            <input type="text" name="website_honey_point" id="wa_website_honey_point">
        </div>

        <textarea id="waMessage" name="message" placeholder="Type your message"></textarea>
        <small class="text-danger waMessage-error"></small>

        <input 
          type="tel"
          id="wa_phone"
          name="number"
          placeholder="Enter phone number"
        />
        <small class="text-danger wa_phone-error"></small>

        <input type="hidden" name="full_number" id="wa_full_phone">
        <input type="hidden" name="country" id="wa_country_name">

        <button type="submit" class="wa-btn">Start Chat with Us</button>
      </form>
    </div>

    <img src="{{ asset('public/front/images/WhatsApp.svg') }}" id="whatsappBtn" alt="whatsapp">
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@25.12.4/build/js/intlTelInput.min.js"></script>

<script>
document.addEventListener("DOMContentLoaded", function () {

  const whatsappBtn = document.getElementById("whatsappBtn");
  const whatsappPopup = document.getElementById("whatsappPopup");
  const closeBtn = document.querySelector(".close-inquiry");
  const form = document.getElementById("whatsappForm");
  const input = document.getElementById("wa_phone");
  const fullPhone = document.getElementById("wa_full_phone");
  const countryName = document.getElementById("wa_country_name");
  const submitBtn = document.querySelector(".wa-btn");

  const iti = window.intlTelInput(input, {
    initialCountry: "in",
    separateDialCode: true,
    preferredCountries: ["in", "ae", "us", "gb"],
    utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@25.12.4/build/js/utils.js"
  });

  // Open popup
  whatsappBtn.addEventListener("click", () => {
    whatsappPopup.classList.toggle("active");
  });

  // Close popup
  closeBtn.addEventListener("click", () => {
    whatsappPopup.classList.remove("active");
  });

  // Allow only numbers in phone field
  input.addEventListener("input", function () {
    this.value = this.value.replace(/[^0-9]/g, '');
    this.classList.remove("input-error");
    document.querySelector(".wa_phone-error").textContent = "";
  });

  // Remove message error on typing
  document.getElementById("waMessage").addEventListener("input", function () {
    this.classList.remove("input-error");
    document.querySelector(".waMessage-error").textContent = "";
  });

  // Form validation
//   form.addEventListener("submit", function (e) {
//     let isValid = true;

//     const message = document.getElementById("waMessage").value.trim();
//     const phone = input.value.trim();
//     const websiteUrl = document.getElementById("website_url").value.trim();

//     // Clear old errors
//     document.querySelector(".waMessage-error").textContent = "";
//     document.querySelector(".wa_phone-error").textContent = "";
//     document.getElementById("waMessage").classList.remove("input-error");
//     input.classList.remove("input-error");

//     // Honeypot validation
//     if (websiteUrl !== "") {
//       e.preventDefault();
//       return false;
//     }

//     // // Message validation
//     // if (message === "") {
//     //   document.querySelector(".waMessage-error").textContent = "Message is required.";
//     //   document.getElementById("waMessage").classList.add("input-error");
//     //   isValid = false;
//     // } else if (message.length < 5) {
//     //   document.querySelector(".waMessage-error").textContent = "Message must be at least 5 characters.";
//     //   document.getElementById("waMessage").classList.add("input-error");
//     //   isValid = false;
//     // }

//     // Phone validation
//     if (phone === "") {
//       document.querySelector(".wa_phone-error").textContent = "Phone number is required.";
//       input.classList.add("input-error");
//       isValid = false;
//     } 

//     // Stop submit if invalid
//     if (!isValid) {
//       e.preventDefault();
//       submitBtn.disabled = false;
//       submitBtn.innerText = "Start Chat with Us";
//       return false;
//     }

//     // Set full number + country
//     const countryData = iti.getSelectedCountryData();
//     const number = input.value.replace(/\s+/g, "");
//     fullPhone.value = "+" + countryData.dialCode + number;
//     countryName.value = countryData.name;

//     // Disable button + submitting text
//     submitBtn.disabled = true;
//     submitBtn.innerText = "Submitting...";

//     // Close popup after valid submit
//     whatsappPopup.classList.remove("active");

//     // Reset form after short delay
//     setTimeout(function () {
//       form.reset();
//       input.value = "";
//       iti.setCountry("in");
//       submitBtn.disabled = false;
//       submitBtn.innerText = "Start Chat with Us";
//     }, 1000);
//   });

// URL validation
$.validator.addMethod("noUrl", function (value, element) {
    return this.optional(element) || !/(https?:\/\/|www\.)/i.test(value);
}, "Links are not allowed in message.");

// Cyrillic / Russian character validation
$.validator.addMethod("noCyrillic", function (value, element) {
    return this.optional(element) || !/[А-Яа-яЁё]/u.test(value);
}, "Invalid characters detected.");

// Spam keyword validation
$.validator.addMethod("noSpamWords", function (value, element) {
    let spamWords = [
        'seo',
        'crypto',
        'viagra',
        'casino',
        'furniture',
        'wholesale'
    ];
    let lowerValue = value.toLowerCase();
    for (let i = 0; i < spamWords.length; i++) {
        if (lowerValue.includes(spamWords[i])) {
            return false;
        }
    }
    return true;
}, "Spam content detected.");

$.validator.addMethod("noHtml", function (value, element) {
    return this.optional(element) || !(/<[^>]*>/g.test(value));
}, "HTML tags are not allowed.");

$("#whatsappForm").validate({

    rules: {
        number: {
            required: true,
            digits: true,
            minlength: 10,
            maxlength: 15
        },
        message: {
            noUrl: true,
            noCyrillic: true,
            noSpamWords: true,
            noHtml:true,
        },
        website_honey_point: {
            maxlength: 0   // honeypot
        }
    },

    messages: {
        number: {
            required: "Phone number is required.",
            digits: "Only digits allowed.",
            minlength: "Minimum 10 digits required.",
            maxlength: "Maximum 15 digits allowed."
        },
        message: {
            required: "Message is required.",
            minlength: "Message must be at least 5 characters."
        }
    },

    errorPlacement: function(error, element) {
        if (element.attr("name") === "number") {
            error.appendTo(".wa_phone-error");
        }
        else if (element.attr("name") === "message") {
            error.appendTo(".waMessage-error");
        }
        else {
            error.insertAfter(element);
        }
    },

    highlight: function(element) {
        $(element).addClass("input-error");
    },

    unhighlight: function(element) {
        $(element).removeClass("input-error");
    },
    submitHandler: function(form, event) {
    event.preventDefault();

    const countryData = iti.getSelectedCountryData();
    const number = input.value.replace(/\s+/g, "");

    fullPhone.value = "+" + countryData.dialCode + number;
    countryName.value = countryData.name;

    submitBtn.disabled = true;
    submitBtn.innerText = "Submitting...";

    whatsappPopup.classList.remove("active");

    // ✅ THIS IS IMPORTANT — actually submit form now
    form.submit();

    setTimeout(function () {
        form.reset();
        input.value = "";
        iti.setCountry("in");
        submitBtn.disabled = false;
        submitBtn.innerText = "Start Chat with Us";
    }, 1000);
}
});

});
</script>