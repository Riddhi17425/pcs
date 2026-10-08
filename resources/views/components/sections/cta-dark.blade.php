{{-- Dark gradient CTA banner with one outline button (opens the request modal) --}}
@props(['title', 'buttonText', 'bg' => null, 'icon' => null])
<section class="mt-100">
    <div class="container">
        <div class="cta_dark">
            @if ($bg)
                <img class="cta_dark_bg" src="{{ $bg }}" alt="" aria-hidden="true">
            @endif
            <div class="cta_dark_in">
                <h2>{!! $title !!}</h2>
                <a class="com_btn_outline com_btn_outline_light" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    @if ($icon)
                        <img src="{{ $icon }}" width="24" height="24" alt="">
                    @endif
                    {{ $buttonText }}
                </a>
            </div>
        </div>
    </div>
</section>
