{{-- Mobile menu (offcanvas) ka "Country" level: Global / Australia / UK / US.
     Dono headers (partials/header/global + country) isse include karte hain.
     Main menu me item: <a href="#" class="next-menu" data-target="menu-country"> --}}
@php
  $flagDir = asset('public/front/images/contry-icon');
  $mobileCountries = [
    ['Global', url('/'), null],
    ['Australia', url('aus'), "$flagDir/australia-icon.png"],
    ['UK', url('uk'), "$flagDir/uk-icon.png"],
    ['US', url('us'), "$flagDir/us-icon.png"],
  ];
@endphp
<div class="menu-level" id="menu-country">
  <div class="menu-header">
    <button class="back-btn" data-back="menu-main">&lsaquo; Back</button>
    <h6 class="m-0">Select Country</h6>
  </div>
  <div class="menu-body">
    <ul class="mobile_country_list">
      @foreach ($mobileCountries as [$name, $url, $flag])
        <li>
          <a href="{{ $url }}">
            <span class="mobile_country_name">
              @if ($flag)
                <img src="{{ $flag }}" width="24" alt="{{ $name }}">
              @else
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><circle cx="12" cy="12" r="9" stroke="#182653" stroke-width="1.5"/><path d="M3 12H21" stroke="#182653" stroke-width="1.5"/><path d="M12 3C14.5 5.5 15.75 8.5 15.75 12C15.75 15.5 14.5 18.5 12 21C9.5 18.5 8.25 15.5 8.25 12C8.25 8.5 9.5 5.5 12 3Z" stroke="#182653" stroke-width="1.5"/></svg>
              @endif
              {{ $name }}
            </span>
          </a>
        </li>
      @endforeach
    </ul>
  </div>
</div>
<style>
  .mobile_country_name { display: inline-flex; align-items: center; gap: 12px; }
  .mobile_country_name img { border-radius: 2px; }
</style>
