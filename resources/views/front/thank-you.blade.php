@include('layouts.frontheader')
<section class="mt-80">
    <div class="container">
        
        <div class="text-center">
            
             <div class="com_hero_child mb-4">
                <h1>Thank you for contacting us.</h1>
                <h4 class="sub_head">We will be in touch shortly.</h4>
                <p class="col-lg-8 m-auto">At PCS Global, we believe that the strongest victories are built through unity and shared vision. Thank you for placing your trust in us — your partnership is the key to future success.</p>
          </div>
          
           <a class="com_btn1 color-animated-button bubble-btn" href="{{ url('/') }}" data-hover-colors="[&quot;#B074BC&quot;,&quot;#CF7C7C&quot;,&quot;#7496BC&quot;,&quot;#7B9993&quot;,&quot;#9F7159&quot;,&quot;#EAD1DC&quot;,&quot;#D7BDE2&quot;,&quot;#D7BDE2&quot;,&quot;#FFD1BA&quot;,&quot;#D1F2EB&quot;,&quot;#A4C8F0&quot;,&quot;#F7A1A1&quot;,&quot;#A0E6E0&quot;,&quot;#F9B7B7&quot;,&quot;#E6FFB3&quot;,&quot;#FFF4B3&quot;,&quot;#FFE4B5&quot;,&quot;#FFD4B8&quot;,&quot;#FFCBA4&quot;,&quot;#FFB399&quot;]">


                <svg class="me-3 z-2" width="25" height="14" viewBox="0 0 28 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.71029 12.2085L1.50196 7.00016M1.50196 7.00016L6.71029 1.79183M1.50196 7.00016H26.502" stroke="white" stroke-width="2.08333" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>

                <!-- Bubble effect layers -->
                <span class="color-button__background"></span>
                <span class="color-button__bubble-container">
                    <span class="color-button__bubble"></span>
                </span>

                <!-- Label and Icon -->
                <span class="color-button__label relative z-10 will-change-transform me-2">Back To Home</span>
            </a>
        
            <img class=" img-fluid " src="{{ asset('public/front/images/thank-you.png') }}" alt="thank-you">

        </div>
    </div>
</section>
@include('layouts.frontfooter')