{{-- Tabs: Certifications (badges) / Tools & Technology (logo slider). certs = [[img, alt], ...] --}}
@props(['certs' => [], 'toolsCount' => 29])
<section class="clients cert_tools_sec mt-100">
    <div class="container">
        <div class="cert_tools_tabs">
            <button type="button" class="cert_tools_tab active" data-tab="certifications">Certifications</button>
            <button type="button" class="cert_tools_tab" data-tab="tools">Tools & Technology</button>
        </div>
    </div>

    <div class="cert_tools_panel active" data-panel="certifications">
        <div class="container">
            <div class="cert_badges_row">
                @foreach ($certs as [$img, $alt])
                    <span class="cert_badge"><img src="{{ $img }}" alt="{{ $alt }}" loading="lazy"></span>
                @endforeach
            </div>
        </div>
    </div>

    <div class="cert_tools_panel" data-panel="tools">
        <div class="client_slider_full">
            <div class="client_slider">
                @for ($i = 1; $i <= $toolsCount; $i++)
                    @php $tool = sprintf('Homepage_%02d', $i); @endphp
                    <div>
                        <img class="img-fluid" src="{{ asset('public/front/images/' . $tool . '.png') }}" loading="lazy" alt="{{ $tool }}">
                    </div>
                @endfor
            </div>
        </div>
    </div>
</section>

@once
<script>
document.addEventListener("DOMContentLoaded", () => {
    const tabs = document.querySelectorAll('.cert_tools_tab');
    const panels = document.querySelectorAll('.cert_tools_panel');

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            const target = tab.getAttribute('data-tab');

            tabs.forEach(t => t.classList.remove('active'));
            tab.classList.add('active');

            panels.forEach(p => p.classList.toggle('active', p.getAttribute('data-panel') === target));
        });
    });
});
</script>
@endonce
