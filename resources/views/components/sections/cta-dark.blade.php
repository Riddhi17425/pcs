{{-- Dark gradient CTA banner with one outline button. phone diya ho to us number par call, warna request modal --}}
@props(['title', 'buttonText', 'bg' => null, 'icon' => null, 'phone' => null])
<section class="mt-100">
    <div class="container">
        <div class="cta_dark">
            @if ($bg)
                <img class="cta_dark_bg" src="{{ $bg }}" alt="" aria-hidden="true">
            @endif
            <div class="cta_dark_in">
                <h2>{!! $title !!}</h2>
                <a class="com_btn_outline com_btn_outline_light" @if ($phone) href="tel:{{ $phone }}" @else href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal" @endif>
                    @if ($icon)
                        <img src="{{ $icon }}" width="24" height="24" alt="">
                    @endif
                    {{ $buttonText }}
                </a>
            </div>
        </div>
    </div>
</section>
