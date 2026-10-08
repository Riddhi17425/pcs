{{-- Numbered process cards (drag to scroll on small screens). steps = [['title','text'], ...] --}}
@props(['title', 'text' => '', 'steps' => []])
<section class="process_sec mt-100">
    <div class="container">
        <div class="com_sec_head_top">
            <h2 class="mb-2 mb-xxl-4">{!! $title !!}</h2>
            @if ($text)
                <p>{!! $text !!}</p>
            @endif
        </div>

        <div class="process_steps" id="processSteps">
            @foreach ($steps as $step)
                <div class="process_card">
                    <div class="process_num">{{ $loop->iteration }}</div>
                    <div class="process_body">
                        <h3>{!! $step['title'] !!}</h3>
                        <p>{!! $step['text'] !!}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@once
<script>
document.addEventListener("DOMContentLoaded", () => {
    const slider = document.getElementById('processSteps');
    if (!slider) return;

    let isDown = false;
    let startX;
    let scrollLeft;
    let moved = false;

    slider.addEventListener('mousedown', (e) => {
        isDown = true;
        moved = false;
        slider.classList.add('dragging');
        startX = e.pageX - slider.offsetLeft;
        scrollLeft = slider.scrollLeft;
    });

    slider.addEventListener('mouseleave', () => {
        isDown = false;
        slider.classList.remove('dragging');
    });

    slider.addEventListener('mouseup', () => {
        isDown = false;
        slider.classList.remove('dragging');
    });

    slider.addEventListener('mousemove', (e) => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - slider.offsetLeft;
        const walk = x - startX;
        if (Math.abs(walk) > 5) moved = true;
        slider.scrollLeft = scrollLeft - walk;
    });

    // Prevent link/card click firing right after a drag
    slider.addEventListener('click', (e) => {
        if (moved) {
            e.preventDefault();
            e.stopPropagation();
        }
    }, true);
});
</script>
@endonce
