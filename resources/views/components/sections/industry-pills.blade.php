{{-- Industries marquee: India home wala hi design/classes (.industries_card, .ind_marquee ... style.css + responsive.css),
     isliye sab countries me same dikhta hai aur responsive India jaisa hi hai.
     rows = [ [[icon, text], ...], [[icon, text], ...] ] --}}
@props(['title', 'rows' => []])
<section class="industries mt-100">
    <div class="container">
        <div class="com_sec_head_top">
            <h2>{!! $title !!}</h2>
        </div>
    </div>

    <div class="industries_bot">
        <div class="ind_marquee">
            @foreach ($rows as $row)
                <div class="ind_row {{ $loop->odd ? 'ind_row_up' : 'ind_row_down' }}">
                    <div class="ind_track">
                        {{-- 2 baar: track seamless loop ho (-50% translate) --}}
                        @foreach ([1, 2] as $copy)
                            @foreach ($row as [$icon, $label])
                                <div class="industries_card">
                                    <div class="industries_icon"><img src="{{ $icon }}" loading="lazy" alt="{{ $label }}"></div>
                                    <p>{{ $label }}</p>
                                </div>
                            @endforeach
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
