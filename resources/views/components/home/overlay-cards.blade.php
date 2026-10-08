{{-- Photo cards with a white info box on top (slick, data-slider).
     cards = [['img','title','text'], ...] ; icon = small icon next to each title --}}
@props(['title', 'text' => '', 'cards' => [], 'icon' => null])
<section class="mt-100">
    <div class="container">
        <div class="com_sec_head_top">
            <h2 class="mb-2 mb-xxl-4">{!! $title !!}</h2>
            @if ($text)
                <p>{!! $text !!}</p>
            @endif
        </div>

        <div class="our_experts_cen">
            <div class="ov_slider" data-slider data-slider-controls="slider5" data-slider-show="3">
                @foreach ($cards as $card)
                    <div>
                        <div class="ov_card">
                            <img src="{{ $card['img'] }}" loading="lazy" alt="{{ $card['title'] }}">
                            <div class="ov_card_body">
                                <div class="ov_card_head">
                                    <h3>{!! $card['title'] !!}</h3>
                                    @if ($icon)
                                        <img src="{{ $icon }}" width="33" height="30" alt="">
                                    @endif
                                </div>
                                <p>{!! $card['text'] !!}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <x-home.slider-controls prefix="slider5" />
    </div>
</section>
