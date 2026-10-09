{{-- "How does PCS Global work" steps: sab cards ek saath grid me (3 / 2 / 1 per row), har card me icon + "Step 01".
     steps = [['title','text'], ...] ; icon order: discovery, team, workflow, support, review/scale. CSS: style.css (.process_*) --}}
@props(['title', 'text' => '', 'steps' => []])
@php
    $icons = [
        // discovery (search)
        '<circle cx="11" cy="11" r="7"/><path d="m20.5 20.5-4.5-4.5"/>',
        // tailored team (people)
        '<circle cx="9" cy="8" r="3.5"/><path d="M2.5 20c0-3.6 2.9-6 6.5-6s6.5 2.4 6.5 6"/><path d="M16 4.6a3.5 3.5 0 0 1 0 6.8"/><path d="M18 14.3c2.1.7 3.5 2.6 3.5 5.7"/>',
        // workflow integration (arrows)
        '<path d="M4 7h14m0 0-3.5-3.5M18 7l-3.5 3.5"/><path d="M20 17H6m0 0 3.5-3.5M6 17l3.5 3.5"/>',
        // support (headset)
        '<path d="M4 14v-2a8 8 0 0 1 16 0v2"/><rect x="3" y="13" width="4" height="6" rx="1.5"/><rect x="17" y="13" width="4" height="6" rx="1.5"/><path d="M20 19c0 1.7-1.8 3-4 3h-2"/>',
        // review & scale (growth chart)
        '<path d="M3 20h18"/><path d="m5 16 4-4 3 3 7-7"/><path d="M15 8h4v4"/>',
    ];
@endphp
<section class="process_sec mt-100">
    <div class="container">
        <div class="com_sec_head_top">
            <h2 class="mb-2 mb-xxl-4">{!! $title !!}</h2>
            @if ($text)
                <p>{!! $text !!}</p>
            @endif
        </div>

        <div class="process_steps">
            @foreach ($steps as $step)
                <div class="process_card">
                    <div class="process_head">
                        <span class="process_icon">
                            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">{!! $icons[$loop->index % count($icons)] !!}</svg>
                        </span>
                        <!-- <span class="process_step_label">Step {{ sprintf('%02d', $loop->iteration) }}</span> -->
                    </div>
                    <div class="process_body">
                        <h3>{!! $step['title'] !!}</h3>
                        <p>{!! $step['text'] !!}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
