<div class="dropdown country_select mobile_country_select">
  <button class="country_select_btn mobile_country_select_btn dropdown-toggle" type="button" id="mobileCountrySelectBtn" data-bs-toggle="dropdown" data-bs-display="static" aria-label="Select country" aria-expanded="false">
    @if (!empty($currentCountry['flag']))
      <img class="country_select_flag" src="{{ asset('public/front/images/contry-icon/' . $currentCountry['flag']) }}" alt="{{ $currentCountry['name'] }}">
    @else
      <svg class="country_select_globe" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
        <circle cx="12" cy="12" r="9" stroke="#182653" stroke-width="1.5"/>
        <path d="M3 12H21" stroke="#182653" stroke-width="1.5"/>
        <path d="M12 3C14.5 5.5 15.75 8.5 15.75 12C15.75 15.5 14.5 18.5 12 21C9.5 18.5 8.25 15.5 8.25 12C8.25 8.5 9.5 3 12 3Z" stroke="#182653" stroke-width="1.5"/>
      </svg>
    @endif
  </button>
  <ul class="dropdown-menu country_select_menu" aria-labelledby="mobileCountrySelectBtn">
    <li>
      <a class="dropdown-item" href="{{ url('/') }}">
        <svg class="country_select_globe" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
          <circle cx="12" cy="12" r="9" stroke="#182653" stroke-width="1.5"/>
          <path d="M3 12H21" stroke="#182653" stroke-width="1.5"/>
          <path d="M12 3C14.5 5.5 15.75 8.5 15.75 12C15.75 15.5 14.5 18.5 12 21C9.5 18.5 8.25 15.5 8.25 12C8.25 8.5 9.5 3 12 3Z" stroke="#182653" stroke-width="1.5"/>
        </svg>
        <span>Global</span>
      </a>
    </li>
    <li><a class="dropdown-item" href="{{ url('au') }}"><img src="{{ asset('public/front/images/contry-icon/australia-icon.png') }}" alt=""><span>AU</span></a></li>
    <li><a class="dropdown-item" href="{{ url('uk') }}"><img src="{{ asset('public/front/images/contry-icon/uk-icon.png') }}" alt=""><span>UK</span></a></li>
    <li><a class="dropdown-item" href="{{ url('us') }}"><img src="{{ asset('public/front/images/contry-icon/us-icon.png') }}" alt=""><span>US</span></a></li>
  </ul>
</div>