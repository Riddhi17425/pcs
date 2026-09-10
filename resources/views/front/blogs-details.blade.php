@include('layouts.frontheader', [
    'og_image' => asset('/'.$blog->detail_image)
])


<section class="com_hero" style="background-image: url('{{ asset('public/front/images/blog-hero-bg.png') }}');">
    <div class="container">
        <div class="com_hero_child">
            <h1>{{$blog->title}}</h1>
            <p>{{ \Carbon\Carbon::parse($blog->date)->format('F j, Y') }}</p>
        </div>
    </div>
</section>

<section class="blogs_details">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-12 col-xxl-12 text-center">
                <img class="img-fluid" src="{{asset('/'.$blog->detail_image)}}" alt="image">
            </div>
            <div class="col-lg-12 col-xxl-12">
                <div>
                    {!! $blog->short_description !!}
                </div>
            </div>

            <div class="col-lg-12">
                <div >
                    {!! $blog->detail_description !!}
                    
                        <!--management company. These experts bring years of experience and expertise to the table, ensuring-->
                        <!--that your startup adheres to best practices and navigates any challenges effectively. Their-->
                        <!--guidance can be invaluable in establishing a strong foundation for strata administration.</p>-->
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="com_inner_banners my-4 my-lg-3">
            <div class="row align-items-lg-end align-items-xxl-center">
                <div class="col-lg-7">
                    <div class="com_inner_banner">
                        <h2>{!! $blog->cta_text !!}</h2>

                        <a class="com_btn1 color-animated-button bubble-btn" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal"
                            data-hover-colors='["#B074BC","#CF7C7C","#7496BC","#7B9993","#9F7159","#EAD1DC","#D7BDE2","#D7BDE2","#FFD1BA","#D1F2EB","#A4C8F0","#F7A1A1","#A0E6E0","#F9B7B7","#E6FFB3","#FFF4B3","#FFE4B5","#FFD4B8","#FFCBA4","#FFB399"]'>

                            <!-- Bubble effect layers -->
                            <span class="color-button__background"></span>
                            <span class="color-button__bubble-container">
                                <span class="color-button__bubble"></span>
                            </span>

                            <!-- Label and Icon -->
                            <svg width="20" height="20" viewBox="0 0 22 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M2.51089 1L6.15002 1.13169C6.91653 1.15942 7.59676 1.64346 7.89053 2.3702L8.96656 5.03213C9.217 5.65159 9.1496 6.35837 8.78693 6.91634L7.40831 9.0375C8.22454 10.2096 10.4447 12.9558 12.7955 14.5633L14.5484 13.4845C14.9939 13.2103 15.5273 13.1289 16.0314 13.2581L19.5161 14.1517C20.4429 14.3894 21.0674 15.2782 20.9942 16.2552L20.7705 19.2385C20.6919 20.2854 19.8351 21.1069 18.818 20.9887C5.39245 19.4276 -2.48056 0.99997 2.51089 1Z"
                                    stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span class="color-button__label relative z-10 will-change-transform ms-2">Schedule a Free
                                Consultation</span>

                        </a>
                    </div>
                </div>
                <div class="col-lg-5 mt-4">
                    <div>
                        <img class="img-fluid" src="{{ asset('/' . ($blog->cta_image ?? 'public/front/images/coman_tree1.png')) }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <h5 class="sub_head mt-lg-5">Conclusion</h5>
    {!! $blog->conclusion !!}
</div>
<section class="accoding" >
   <div class="container">
@if (!empty($blog->blog_faq) && count($blog->blog_faq) > 0)
<div class="row">
    <div class="col-lg-12">
        <h2 class="text-center my-3">Frequently Asked Questions</h2>

        <div id="accordionExample">
            @foreach ($blog->blog_faq as $index => $faq)
                <div class="faq-item mb-3">
                    
                    <h3 class="faq-header {{ $index !== 0 ? 'collapsed' : '' }}"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapse{{ $index }}"
                        aria-expanded="{{ $index === 0 ? 'true' : 'false' }}"
                        aria-controls="collapse{{ $index }}">
                        
                        <span>{{ $faq['faq_title'] }}</span>
                        <span class="faq-icon"></span>
                    </h3>

                    <div id="collapse{{ $index }}"
                        class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}"
                        data-bs-parent="#accordionExample">

                        <div class="faq-body">
                            {!! $faq['faq_description'] !!}
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
</div>
@endif
</div>
</section>

<section class="mt-100">
    <div class="container">
        <div class="com_sec_head_top">
            <h2 class="mb-2 mb-xxl-4">More From Our Knowledge Hub</h2>
        </div>
        <div class="row g-4 g-xxl-5">
            @foreach ($blogs->take(3) as $data)
                <div class="col-lg-4">
                    <div>
                        <img class="img-fluid" src="{{asset('/'.$data->front_image)}}" alt="imah3ge">
                    </div>
                    <div class="ins_card">
                        <p>{{ \Carbon\Carbon::parse($data->date)->format('F j, Y') }}</p>
                        <a href="{{ route('blogs.detail', $data->url) }}">
                            <h4 class="sub_head">{!! $data->title !!}</h4>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@include('layouts.frontfooter')

<script>
// Add sub_head to ALL h5 across the page
document.querySelectorAll('h5').forEach(h5 => {
    h5.classList.add('sub_head');
});

// Then handle the special case inside blogs_details .col-lg-12
const block = document.querySelector('.blogs_details .col-lg-12');
if (block) {
    const firstH5 = block.querySelector('h5'); // only first h5 in that block
    if (firstH5) {
        firstH5.classList.add('mt-0');
    }
}
</script>