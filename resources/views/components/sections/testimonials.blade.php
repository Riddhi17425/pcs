{{-- Testimonial slider. items = [['text','name','role'], ...] --}}
@props(['title', 'items' => []])
<section class="mt-80">
    <div class="container">
        <div class="mb-5 text-center">
            <h2>{!! $title !!}</h2>
        </div>
        <div class="our_experts_cen row align-items-center">
            <div class="col-md-12">
                <div class="testimonial_slider" data-slider data-slider-controls="slider3" data-slider-show="2">
                    @foreach ($items as $item)
                        <div class="testimonial_card">
                            <img class="quote_icon" src="{{ asset('public/front/images/quotation-icon.svg') }}" loading="lazy" alt="quotation-icon">
                            <p>{!! $item['text'] !!}</p>
                            <hr>
                            <div class="testimonial_author">
                                <h4>{{ $item['name'] }}</h4>
                                <p>{{ $item['role'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <x-sections.slider-controls prefix="slider3" />
    </div>
</section>
