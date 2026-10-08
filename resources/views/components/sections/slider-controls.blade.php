{{-- Counter + progress ring + arrows. main.js ke slick sliders se jude hain: prefix = slider1 / slider3 / slider5 --}}
@props(['prefix'])
<div class="our_experts_bot {{ $prefix }}-controls">
    <div class="experts_info">
        <div class="circular-progress {{ $prefix }}-progress">
            <div class="inner-circle"></div>
        </div>
        <p class="experts_counter {{ $prefix }}-counter"></p>
    </div>
    <hr>
    <div class="slick_arrow">
        <span class="arrow-prev {{ $prefix }}-prev">
            <svg width="20" height="13" viewBox="0 0 20 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 6.32861L6 11.3286M1 6.32861L6 1.32861M1 6.32861H19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </span>
        <span class="arrow-next {{ $prefix }}-next">
            <svg width="20" height="13" viewBox="0 0 20 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M19 6.32861L14 11.3286M19 6.32861L14 1.32861M19 6.32861H1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </span>
    </div>
</div>
