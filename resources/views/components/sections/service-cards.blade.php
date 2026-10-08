{{-- Heading + grid of image cards with red arrow. cards = [['title','text','img','url'], ...] --}}
@props(['title', 'text' => '', 'cards' => []])
<section class="comp_bus mt-100">
    <div class="container">
        <div class="com_sec_head_top">
            <h2 class="mb-2 mb-xxl-4">{!! $title !!}</h2>
            @if ($text)
                <p>{!! $text !!}</p>
            @endif
        </div>

        {{-- cards 3 ke multiple na hon to aakhri row center me --}}
        <div class="precision_grid {{ count($cards) % 3 ? 'precision_grid_center' : '' }}">
            @foreach ($cards as $card)
                <a href="{{ $card['url'] }}" class="precision_card">
                    <div class="precision_card_img">
                        <img src="{{ $card['img'] }}" loading="lazy" alt="{{ $card['title'] }}">
                    </div>
                    <span class="precision_card_arrow">
                        <img src="{{ asset('public/front/images/figma-precision/precision-arrow.svg') }}" alt="">
                    </span>
                    <div class="precision_card_body">
                        <h3>{!! $card['title'] !!}</h3>
                        <p>{!! $card['text'] !!}</p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>
