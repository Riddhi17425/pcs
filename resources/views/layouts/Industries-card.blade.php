<!-- Industries -->

<section class="industries mt-100">
    <div class="container">
        <div class="com_sec_head_top">
            <h2>Industries We Specialize In</h2>
        </div>

        <div class="industries_bot">
            <div class="ind_bot" id="imageGrid">

                <!-- Static Cards -->
                <div class="industries_card">
                    <img src="{{ asset('public/front/images/accounting-and-auditing-firms.png') }}">
                    <p>Accounting and Auditing Firms</p>
                </div>

                <div class="industries_card">
                    <img src="{{ asset('public/front/images/industries2.png') }}">
                    <p>Telecommunications and Gaming</p>
                </div>

                <div class="industries_card">
                    <img src="{{ asset('public/front/images/industries3.png') }}">
                    <p>E-Sports</p>
                </div>

                <div class="industries_card">
                    <img src="{{ asset('public/front/images/industries4.png') }}">
                    <p>Construction Business</p>
                </div>

                <div class="industries_card">
                    <img src="{{ asset('public/front/images/industries5.png') }}">
                    <p>Law Firms</p>
                </div>

                <!-- FIXED CARD (never change) -->
                <div class="industries_card fixd_card">
                    <img src="{{ asset('public/front/images/strata-management.png') }}">
                    <p>Strata Management</p>
                </div>

                <div class="industries_card">
                    <img src="{{ asset('public/front/images/industries7.png') }}">
                    <p>Pharmaceuticals</p>
                </div>

                <div class="industries_card">
                    <img src="{{ asset('public/front/images/industries8.png') }}">
                    <p>Manufacturing</p>
                </div>

                <!-- Dynamic cards (NO DUPLICATE TEXT HERE) -->
                <div class="industries_card"><img><p></p></div>
                <div class="industries_card"><img><p></p></div>
                <div class="industries_card"><img><p></p></div>
                <div class="industries_card"><img><p></p></div>
                <div class="industries_card"><img><p></p></div>
                <div class="industries_card"><img><p></p></div>

            </div>
        </div>
    </div>
</section>

<style>
@keyframes smoothFadeChange {
    0% { opacity: 1; transform: scale(1); }
    50% { opacity: 0; transform: scale(1.05); }
    100% { opacity: 1; transform: scale(1); }
}

.blink-content {
    animation: smoothFadeChange 0.8s ease;
}
</style>

<script>
const industriesData = [
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

document.addEventListener("DOMContentLoaded", () => {

    const cards = document.querySelectorAll('.industries_card:not(.fixd_card)');
    let usedIndexes = new Set();

    // INITIAL FILL (no duplicates)
    cards.forEach(card => {
        let index;

        do {
            index = Math.floor(Math.random() * industriesData.length);
        } while (usedIndexes.has(index));

        usedIndexes.add(index);

        card.querySelector("img").src = industriesData[index].img;
        card.querySelector("p").textContent = industriesData[index].text;
    });

    function changeRandomCard() {

        const randomCard = cards[Math.floor(Math.random() * cards.length)];
        const img = randomCard.querySelector("img");
        const text = randomCard.querySelector("p");

        let newIndex;

        do {
            newIndex = Math.floor(Math.random() * industriesData.length);
        } while ([...usedIndexes].includes(newIndex));

        // remove old
        const oldText = text.textContent;
        industriesData.forEach((item, i) => {
            if (item.text === oldText) usedIndexes.delete(i);
        });

        usedIndexes.add(newIndex);

        // animation
        img.classList.add("blink-content");
        text.classList.add("blink-content");

        setTimeout(() => {
            img.src = industriesData[newIndex].img;
            text.textContent = industriesData[newIndex].text;
        }, 400);

        setTimeout(() => {
            img.classList.remove("blink-content");
            text.classList.remove("blink-content");
        }, 800);

        setTimeout(changeRandomCard, 2000);
    }

    changeRandomCard();
});
</script>