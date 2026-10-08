{{-- Country map with city photos, pins and labels (sab countries). Positions Figma ke design units me (canvas = size).
     size   = [width, height] of the Figma map canvas
     map    = ['src', 'x', 'y', 'w', 'opacity' (optional)]
     logo   = ['src', 'x', 'y', 'w'] (optional)
     photos = [[src, x, y, w], ...]   pins = [[x, y, w], ...]   labels = [[name, x, y], ...]
     label  = ['font' => 18, 'py' => 9.5, 'px' => 26.8]  (design px)
     Effects (home-sections.css): scroll par stagger entry, photos float + hover zoom, pins drop + pulse, labels hover. --}}
@props(['title', 'size', 'map', 'logo' => null, 'photos' => [], 'pins' => [], 'labels' => [], 'label' => [], 'id' => 'regionMap'])
@php
    [$W, $H] = $size;
    $x = fn ($v) => round($v / $W * 100, 3) . '%';
    $y = fn ($v) => round($v / $H * 100, 3) . '%';
    $label += ['font' => 18, 'py' => 9.5, 'px' => 26.8];
    // map bahut bada na lage: height ~540px aur width ~860px se zyada nahi
    $maxW = (int) round(min($W, 540 * $W / $H, 860));
    $pin = asset('public/front/images/common/pin.png');
@endphp
<section class="mt-100">
    <div class="container">
        <div class="com_sec_head_top">
            <h2>{!! $title !!}</h2>
        </div>

        <div class="region_map" id="{{ $id }}"
            style="max-width:{{ $maxW }}px;aspect-ratio:{{ $W }} / {{ $H }};--rm-w:{{ $W }};--rm-font:{{ $label['font'] }};--rm-py:{{ $label['py'] }};--rm-px:{{ $label['px'] }};--rm-land:{{ $map['opacity'] ?? 1 }}">
            <img class="region_map_land" src="{{ $map['src'] }}" style="left:{{ $x($map['x']) }};top:{{ $y($map['y']) }};width:{{ $x($map['w']) }}" loading="lazy" alt="{{ strip_tags($title) }}">
            @if ($logo)
                <img class="region_map_logo" src="{{ $logo['src'] }}" style="left:{{ $x($logo['x']) }};top:{{ $y($logo['y']) }};width:{{ $x($logo['w']) }}" loading="lazy" alt="PCS Global">
            @endif
            @foreach ($photos as $i => [$src, $px, $py, $pw])
                <div class="region_map_photo" style="left:{{ $x($px) }};top:{{ $y($py) }};width:{{ $x($pw) }};--d:{{ $i }}">
                    <img src="{{ $src }}" loading="lazy" alt="">
                </div>
            @endforeach
            @foreach ($pins as $i => [$px, $py, $pw])
                <span class="region_map_pin" style="left:{{ $x($px) }};top:{{ $y($py) }};width:{{ $x($pw) }};--d:{{ $i }}">
                    <img src="{{ $pin }}" loading="lazy" alt="">
                </span>
            @endforeach
            @foreach ($labels as $i => [$name, $px, $py])
                <span class="region_map_label" style="left:{{ $x($px) }};top:{{ $y($py) }};--d:{{ $i }}">{{ $name }}</span>
            @endforeach
        </div>
    </div>
</section>

@once
<script>
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.region_map').forEach(function (map) {
        // JS na chale to map normal dikhega; JS hone par hi entry animation lagti hai
        map.classList.add('region_map_anim');
        if (!('IntersectionObserver' in window)) { map.classList.add('is-in'); return; }
        const io = new IntersectionObserver(function (entries) {
            entries.forEach(function (e) {
                if (e.isIntersecting) { map.classList.add('is-in'); io.disconnect(); }
            });
        }, { threshold: 0.25 });
        io.observe(map);
    });
});
</script>
@endonce
