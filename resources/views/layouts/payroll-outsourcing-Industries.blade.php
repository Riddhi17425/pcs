<!-- Industries -->

<section class="industries mt-100">
    <div class="container">
        <div class="com_sec_head_top">
            <h2>Industries We Serve with Payroll Outsourcing</h2>
            <p>PCS Global delivers Trusted Payroll Outsourcing across industries:</p>
        </div>

        <div class="industries_bot">
            <div class="ind_bot" id="imageGrid">
                 <div class="industries_card">
                    <img src="{{ asset('public/front/images/manufacturing.png') }}" alt="Manufacturing & Engineering" loading="lazy">
                    <p>Manufacturing & Engineering</p>
                </div>
                <div class="industries_card">
                    <img src="{{ asset('public/front/images/medical-services.png') }}" alt="Healthcare & Medical Services" loading="lazy">
                    <p>Healthcare & Medical Services</p>
                </div>
                <div class="industries_card industries_card_bg">

                </div>

                <div class="industries_card">
                    <img src="{{ asset('public/front/images/E-commerce.png') }}" alt="TRetail & E-commerce" loading="lazy">
                    <p>TRetail & E-commerce</p>
                </div>
                <div class="industries_card industries_card_bg">
                    <!-- <img src="images/industries1.png" alt="image">
                        <p>Airlines</p> -->
                </div>
                <div class="industries_card">

                    <img src="{{ asset('public/front/images/Insurance.png') }}" alt="Financial Services & Insurance" loading="lazy">
                    <p>Financial Services & Insurance</p>
                </div>

                

                <div class="industries_card">

                    <img src="{{ asset('public/front/images/transportation.png') }}" alt="Logistics & Transportation" loading="lazy">
                    <p>Logistics & Transportation</p>
                </div>

                <div class="industries_card">
                    <img src="{{ asset('public/front/images/real-estate.png') }}" alt="Construction & Real Estate" loading="lazy">

                    <p>Construction & Real Estate</p>
                </div>

                <div class="industries_card industries_card_bg">
                    <!-- <img src="images/industries1.png" alt="image">
                        <p>Airlines</p> -->
                </div>
                
                <div class="industries_card">
                    <img src="{{asset('public/front/images/IT-technology.png') }}" alt="IT & Technology Services" loading="lazy">
                    <p>IT & Technology Services</p>
                </div>


                <div class="industries_card">
                    <img src="{{ asset('public/front/images/hospitality.png') }}" alt="Hospitality & Tourism" loading="lazy">
                    <p>Hospitality & Tourism</p>
                </div>
                
                <div class="industries_card">

                    <img src="{{ asset('public/front/images/education.png') }}" alt="Education & Training Institutions" loading="lazy">
                    <p>Education & Training Institutions</p>
                </div>


                <div class="industries_card industries_card_bg">
                    <!-- <img src="images/industries1.png" alt="image">
                        <p>Airlines</p> -->
                </div>

                <div class="industries_card">
                    <img src="{{ asset('public/front/images/professional-services-consulting.png') }}" alt="Professional Services & Consulting" loading="lazy">
                    <p>Professional Services & Consulting </p>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
/* @keyframes blinkChange {
  0%   { opacity: 1; }
  50%  { opacity: 0.3; transform: scale(1.03); }
  100% { opacity: 1; transform: scale(1); }
}

.industries_card.blink {
  animation: blinkChange 0.5s ease;
} */

@keyframes smoothFadeChange {
    0% {
        opacity: 1;
        transform: scale(1);
    }

    30% {
        opacity: 0;
        transform: scale(1.05);
    }

    60% {
        opacity: 0;
        transform: scale(1.05);
    }

    100% {
        opacity: 1;
        transform: scale(1);
    }
}

.blink-content {
    animation: smoothFadeChange 1.2s ease-in-out;
    z-index: 2;
    position: relative;
}
</style>
<script>
const industriesData = [
    { img: "{{ asset('public/front/images/manufacturing.png') }}", text: "Manufacturing & Engineering" },
    { img: "{{ asset('public/front/images/medical-services.png') }}", text: "Healthcare & Medical Services" },
    { img: "{{ asset('public/front/images/E-commerce.png') }}", text: "Retail & E-commerce" },
    { img: "{{ asset('public/front/images/Insurance.png') }}", text: "Financial Services & Insurance" },
    { img: "{{ asset('public/front/images/transportation.png') }}", text: "Logistics & Transportation" },
    { img: "{{ asset('public/front/images/real-estate.png') }}", text: "Construction & Real Estate" },
    { img: "{{ asset('public/front/images/IT-technology.png') }}", text: "IT & Technology Services" },
    { img: "{{ asset('public/front/images/hospitality.png') }}", text: "Hospitality & Tourism" },
    { img: "{{ asset('public/front/images/education.png') }}", text: "Education & Training Institutions" },
    { img: "{{ asset('public/front/images/professional-services-consulting.png') }}", text: "Professional Services & Consulting" }
];

document.addEventListener('DOMContentLoaded', () => {
    const cards = document.querySelectorAll('.industries_card:not(.industries_card_bg):not(.fixd_card)');
    const currentVisible = new Set();

    // Initialize currentVisible
    cards.forEach(card => {
        const text = card.querySelector('p')?.textContent.trim();
        if (text) currentVisible.add(text);
    });

    function getRandomContent(excludeText) {
        // Allow only items not already visible
        const available = industriesData.filter(item => !currentVisible.has(item.text));
        // If all are used, allow reset except excludeText
        const pool = available.length > 0 ? available : industriesData.filter(item => item.text !== excludeText);

        return pool[Math.floor(Math.random() * pool.length)];
    }

    function randomUpdate() {
        const randomCard = cards[Math.floor(Math.random() * cards.length)];
        const imgTag = randomCard.querySelector('img');
        const pTag = randomCard.querySelector('p');

        const currentText = pTag?.textContent.trim();
        const newContent = getRandomContent(currentText);

        if (!newContent || newContent.text === currentText) {
            setTimeout(randomUpdate, 1000);
            return;
        }

        // Animation
        imgTag.classList.add('blink-content');
        pTag.classList.add('blink-content');

        setTimeout(() => {
            currentVisible.delete(currentText);
            currentVisible.add(newContent.text);

            imgTag.setAttribute('src', newContent.img);
            pTag.textContent = newContent.text;
        }, 500);

        setTimeout(() => {
            imgTag.classList.remove('blink-content');
            pTag.classList.remove('blink-content');
        }, 1200);

        setTimeout(randomUpdate, 2000 + Math.random() * 2000);
    }

    randomUpdate();
});
</script>



