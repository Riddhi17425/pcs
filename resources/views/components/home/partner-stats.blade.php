{{-- Image + text + blue stats bar. stats = [[count, label], ...] --}}
@props(['image', 'title', 'alt' => '', 'paragraphs' => [], 'stats' => []])
<section class="mt-100">
    <div class="container">
        <div class="row gy-4 gy-lg-0 justify-content-between align-items-stretch">
            <div class="col-lg-5">
                <div class="partner_img">
                    <img class="img-fluid" src="{{ $image }}" loading="lazy" alt="{{ $alt }}">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="counter_lt">
                    <h2 class="mb-3 mb-xxl-4">{!! $title !!}</h2>
                    @foreach ($paragraphs as $paragraph)
                        <p>{!! $paragraph !!}</p>
                    @endforeach
                </div>

                <div class="counter partner_stats">
                    @foreach ($stats as [$count, $label])
                        <div class="counter_line partner_stats_line">
                            <h3 data-count="{{ $count }}">{{ $count }}+</h3>
                            <h5>{{ $label }}</h5>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
