<!-- Industries -->

<section class="industries mt-100">
    <div class="container">
        <div class="com_sec_head_top">
            <h2>Industries We Specialize In</h2>
        </div>
    </div>

    <div class="industries_bot">
        <div class="ind_marquee">
            <div class="ind_row ind_row_up">
                <div class="ind_track" id="indTrackUp"></div>
            </div>
            <div class="ind_row ind_row_down">
                <div class="ind_track" id="indTrackDown"></div>
            </div>
        </div>
    </div>
</section>

<script>
const industriesRowUp = [
    { img: "<?php echo e(asset('public/front/images/industries8.png')); ?>", text: "Manufacturing" },
    { img: "<?php echo e(asset('public/front/images/industries5.png')); ?>", text: "Law Firms" },
    { img: "<?php echo e(asset('public/front/images/e-commerce-retail-sector.png')); ?>", text: "E-commerce Retail Sector" },
    { img: "<?php echo e(asset('public/front/images/industries3.png')); ?>", text: "E-Sports" },
    { img: "<?php echo e(asset('public/front/images/trading.png')); ?>", text: "Trading" },
    { img: "<?php echo e(asset('public/front/images/strata-management.png')); ?>", text: "Strata Management" },
    { img: "<?php echo e(asset('public/front/images/industries7.png')); ?>", text: "Pharmaceuticals" }
];

const industriesRowDown = [
    { img: "<?php echo e(asset('public/front/images/education-institutions.png')); ?>", text: "Education Institutions" },
    { img: "<?php echo e(asset('public/front/images/industries1.png')); ?>", text: "Airlines" },
    { img: "<?php echo e(asset('public/front/images/industries4.png')); ?>", text: "Construction Business" },
    { img: "<?php echo e(asset('public/front/images/industries9.png')); ?>", text: "Consultants and Professionals" },
    { img: "<?php echo e(asset('public/front/images/property -management.png')); ?>", text: "Property Management" },
    { img: "<?php echo e(asset('public/front/images/hospitality-sector.png')); ?>", text: "Hospitality Sector" },
    { img: "<?php echo e(asset('public/front/images/gas-stations.png')); ?>", text: "Gas Stations" }
];

function renderIndustryRow(trackId, items) {
    const track = document.getElementById(trackId);
    if (!track) return;

    const cardsHtml = items.map(item => `
        <div class="industries_card">
            <div class="industries_icon"><img src="${item.img}" loading="lazy" alt="${item.text}"></div>
            <p>${item.text}</p>
        </div>
    `).join('');

    // duplicated so the track can loop seamlessly
    track.innerHTML = cardsHtml + cardsHtml;
}

document.addEventListener("DOMContentLoaded", () => {
    renderIndustryRow('indTrackUp', industriesRowUp);
    renderIndustryRow('indTrackDown', industriesRowDown);
});
</script>
<?php /**PATH C:\xampp\htdocs\pcs\resources\views/layouts/Industries-card.blade.php ENDPATH**/ ?>