{{-- Country home page (Australia, US, UK). Is file me koi text nahi hai:
     - Sections ka order + saara content: resources/content/<country>/home.php
     - Har section ka HTML: resources/views/components/sections/<type>.blade.php
     - Header / footer: config/sites.php -> countries/<country>/layouts/ --}}
@include($site['header'], ['header_overlay' => true])

@foreach ($sections as $section)
    <x-dynamic-component :component="'sections.' . $section['type']" :attributes="new \Illuminate\View\ComponentAttributeBag($section['props'])" />
@endforeach

@include($site['footer'])
