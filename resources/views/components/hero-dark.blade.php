{{-- Common hero (blue gradient). Header ko overlay karke ispe rakhna: ['header_overlay' => true] --}}
@props([
    'title',
    'mark' => null,
    'text' => '',
    'features' => [],
    'primaryText' => null,
    'primaryAttrs' => 'href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal"',
    'secondaryText' => null,
    'secondaryUrl' => '#',
    'bg' => null,
    'person' => null,
])
<section class="hero_dark">
    @if ($bg)
        <img class="hero_dark_bg" src="{{ $bg }}" alt="" aria-hidden="true">
    @endif
    @if ($person)
        <img class="hero_dark_person" src="{{ $person }}" alt="">
    @endif
    <div class="container">
        <div class="hero_dark_content">
            <div class="hero_dark_text">
                <div>
                    <h1>{{ $title }}@if ($mark) <span class="hero_dark_mark">{{ $mark }}</span>@endif</h1>
                    <p class="hero_dark_para">{{ $text }}</p>
                </div>
                @if (count($features))
                    <ul class="hero_dark_features">
                        @foreach ($features as $feature)
                            <li><img src="{{ asset('public/front/images/common/icon-check.svg') }}" width="16" height="16" alt="">{{ $feature }}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
            <div class="hero_dark_btns">
                @if ($primaryText)
                    <a class="com_btn2" {!! $primaryAttrs !!}>{{ $primaryText }}</a>
                @endif
                @if ($secondaryText)
                    <a class="com_btn_outline com_btn_outline_light" href="{{ $secondaryUrl }}">{{ $secondaryText }}
                        <img src="{{ asset('public/front/images/common/icon-arrow-right.svg') }}" width="20" height="20" alt=""></a>
                @endif
            </div>
        </div>
    </div>
</section>
