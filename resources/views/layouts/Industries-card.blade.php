<!-- Industries -->

<section class="industries mt-100">
    <div class="container">
        <div class="com_sec_head_top">
            <h2>Industries We Specialize In</h2>
        </div>

        <div class="industries_bot">
            <div class="ind_bot" id="imageGrid">
                 <div class="industries_card fixd_card">
                    <img src="{{ asset('public/front/images/accounting-and-auditing-firms.png') }}" alt="Accounting and Auditing Firms" loading="lazy">
                    <p>Accounting and Auditing Firms</p>
                </div>
                
                <div class="industries_card industries_card_bg">

                </div>

                <div class="industries_card">
                    <img src="{{ asset('public/front/images/industries2.png') }}" alt="Telecommunications and Gaming" loading="lazy">
                    <p>Telecommunications and Gaming</p>
                </div>

                <div class="industries_card">

                    <img src="{{ asset('public/front/images/industries3.png') }}" alt="E-Sports" loading="lazy">
                    <p>E-Sports</p>
                </div>

                <div class="industries_card industries_card_bg">
                    <!-- <img src="images/industries1.png" alt="image">
                        <p>Airlines</p> -->
                </div>

                <div class="industries_card">

                    <img src="{{ asset('public/front/images/industries4.png') }}" alt="Construction Business" loading="lazy">
                    <p>Construction Business</p>
                </div>

                <div class="industries_card">
                    <img src="{{ asset('public/front/images/industries5.png') }}" alt="Law Firms" loading="lazy">

                    <p>Law Firms</p>
                </div>

                <div class="industries_card industries_card_bg">
                    <!-- <img src="images/industries1.png" alt="image">
                        <p>Airlines</p> -->
                </div>
                
                <div class="industries_card fixd_card">
                    <img src="{{asset('public/front/images/strata-management.png') }}" alt="Strata Management" loading="lazy">
                    <p>Strata Management</p>
                </div>


                <div class="industries_card">
                    <img src="{{ asset('public/front/images/industries7.png') }}" alt="Pharmaceuticals" loading="lazy">
                    <p>Pharmaceuticals</p>
                </div>

                <div class="industries_card industries_card_bg">
                    <!-- <img src="images/industries1.png" alt="image">
                        <p>Airlines</p> -->
                </div>

                <div class="industries_card">

                    <img src="{{ asset('public/front/images/industries8.png') }}" alt="Manufacturing" loading="lazy">
                    <p>Manufacturing</p>
                </div>

                <div class="industries_card industries_card_bg">
                    <!-- <img src="images/industries1.png" alt="image">
                        <p>Airlines</p> -->
                </div>

                <div class="industries_card">
                    <img src="{{ asset('public/front/images/industries9.png') }}" alt="Consultants and Professionals" loading="lazy">
                    <p>Consultants and Professionals </p>
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
    // { img: "{{ asset('public/front/images/strata-management.png') }}", text: "Strata Management" },
    { img: "{{ asset('public/front/images/industries1.png') }}", text: "Airlines" },
    { img: "{{ asset('public/front/images/industries2.png') }}", text: "Telecommunications and Gaming" },
    { img: "{{ asset('public/front/images/industries3.png') }}", text: "E-Sports" },
    { img: "{{ asset('public/front/images/industries4.png') }}", text: "Construction Business" },
    { img: "{{ asset('public/front/images/industries5.png') }}", text: "Law Firms" },
    { img: "{{ asset('public/front/images/industries6.png') }}", text: "Recruitment Sector" },
    { img: "{{ asset('public/front/images/industries7.png') }}", text: "Pharmaceuticals" },
    { img: "{{ asset('public/front/images/industries8.png') }}", text: "Manufacturing" },
    { img: "{{ asset('public/front/images/industries9.png') }}", text: "Consultants and Professionals" },
    { img: "{{ asset('public/front/images/education-institutions.png') }}", text: "Education Institutions" },
    { img: "{{ asset('public/front/images/gas-stations.png') }}", text: "Gas Stations" },
    { img: "{{ asset('public/front/images/hospitality-sector.png') }}", text: "Hospitality Sector" },
    { img: "{{ asset('public/front/images/property -management.png') }}", text: "Property Management" },
    { img: "{{ asset('public/front/images/trading.png') }}", text: "Trading" },
    { img: "{{ asset('public/front/images/e-commerce-retail-sector.png') }}", text: "E-commerce Retail Sector" }
];

document.addEventListener('DOMContentLoaded', () => {
    const cards = document.querySelectorAll('.industries_card:not(.industries_card_bg):not(.fixd_card)');
    const currentVisible = new Set();

    // Initialize currentVisible
    cards.forEach(card => {
        const text = card.querySelector('p')?.textContent.trim();
        if (text) currentVisible.add(text);
    });

    function getRandomContent(currentText) {
        const available = industriesData.filter(item => !currentVisible.has(item.text) || item.text === currentText);
        if (available.length === 0) return null;
        return available[Math.floor(Math.random() * available.length)];
    }

    function randomUpdate() {
        const randomCard = cards[Math.floor(Math.random() * cards.length)];
        const imgTag = randomCard.querySelector('img');
        const pTag = randomCard.querySelector('p');

        const currentText = pTag?.textContent.trim();
        const newContent = getRandomContent(currentText);

        if (!newContent) {
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


