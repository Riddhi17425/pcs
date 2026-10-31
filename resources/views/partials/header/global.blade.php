<header id="siteHeader">
    <div class="container">
        <nav class="pt-0  ">
            <div class="logo">
                <a href="{{ url('/') }}"><img src="{{ asset('public/front/images/logo.svg') }}" loading="lazy"
                        alt="logo"></a>
            </div>


            <div class="mobile_header_right d-lg-none">
                <div class="dropdown mobile_country_select">
                    <button class="mobile_country_btn" type="button" data-bs-toggle="dropdown" data-bs-display="static"
                        aria-expanded="false" aria-label="Select country">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <circle cx="12" cy="12" r="9" stroke="#182653" stroke-width="1.5" />
                            <path d="M3 12H21" stroke="#182653" stroke-width="1.5" />
                            <path
                                d="M12 3C14.5 5.5 15.75 8.5 15.75 12C15.75 15.5 14.5 18.5 12 21C9.5 18.5 8.25 15.5 8.25 12C8.25 8.5 9.5 5.5 12 3Z"
                                stroke="#182653" stroke-width="1.5" />
                        </svg>
                        <svg width="12" height="7" viewBox="0 0 18 10" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M17 1L9 9L1 1" stroke="#182653" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </button>
                    <ul class="dropdown-menu mobile_country_menu">
                        <li><a class="dropdown-item" href="{{ url('/') }}">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <circle cx="12" cy="12" r="9" stroke="#182653" stroke-width="1.5" />
                                    <path d="M3 12H21" stroke="#182653" stroke-width="1.5" />
                                    <path
                                        d="M12 3C14.5 5.5 15.75 8.5 15.75 12C15.75 15.5 14.5 18.5 12 21C9.5 18.5 8.25 15.5 8.25 12C8.25 8.5 9.5 5.5 12 3Z"
                                        stroke="#182653" stroke-width="1.5" />
                                </svg>
                                <span>Global</span></a></li>
                        <li><a class="dropdown-item" href="{{ url('au') }}"><img
                                    src="{{ asset('public/front/images/contry-icon/australia-icon.png') }}"
                                    alt="Australia"><span>AU</span></a></li>
                        <li><a class="dropdown-item" href="{{ url('uk') }}"><img
                                    src="{{ asset('public/front/images/contry-icon/uk-icon.png') }}"
                                    alt="UK"><span>UK</span></a></li>
                        <li><a class="dropdown-item" href="{{ url('us') }}"><img
                                    src="{{ asset('public/front/images/contry-icon/us-icon.png') }}"
                                    alt="US"><span>US</span></a></li>
                    </ul>
                </div>

                <div class="menu-toggle" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight">
                    <span></span><span></span><span></span>
                </div>
            </div>

            <div class="nav_links" id="navLinks">
                <ul class="nav_ul">
                    <li><a href="{{ route('about') }}">About Us</a></li>

                    <li class="dropdown position-relative">
                        <a class="nav-link" href="#" role="button" id="dropdownMenuLink"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                            <svg class="ms-1" width="16" height="8" viewBox="0 0 18 10" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M17 1L9 9L1 1" stroke="#333" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>

                        <ul class="dropdown-menu mega-menu p-0 m-0">

                            <li class="mega-item">
                                <a class="dropdown-item d-flex justify-content-between align-items-center"
                                    href="{{ route('white-label-accounting-services') }}">
                                    White Label Accounting Services
                                </a>

                            </li>
                            <li class="mega-item">
                                <a class="dropdown-item d-flex justify-content-between align-items-center"
                                    href="{{ route('pcs.global.bookkeeping') }}">
                                    Accounting Outsourcing Services
                                </a>

                            </li>

                            <li class="mega-item">
                                <a class="dropdown-item d-flex justify-content-between align-items-center"
                                    href="{{ route('hire.offshore.accountant') }}">
                                    Hire Offshore Accountants
                                </a>
                            </li>

                                <li class="mega-item">
                                    <a class="dropdown-item d-flex justify-content-between align-items-center"
                                       href="{{ route('bookkeeping.services') }}">
                                        Bookkeeping Outsourcing Services
                                    </a>
                                </li>

                                <li class="mega-item">
                                    <a class="dropdown-item d-flex justify-content-between align-items-center"
                                       href="{{ route('taxation.services') }}">
                                        Tax Outsourcing Services
                                    </a>

                            </li>

                            <li>
                                <a class="dropdown-item" href="{{ route('payroll.services') }}">
                                    Payroll Outsourcing Services
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="{{ route('recruitment.services') }}">
                                    Recruitment Outsourcing Services
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('it.automation') }}">
                                    IT Automation Services
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li><a href="{{ route('datasecurity') }}">Data Security</a></li>
                    <li><a href="{{ route('blog') }}">Blogs</a></li>
                </ul>
            </div>

            <div class="nav_actions">
                <a class="com_btn1 color-animated-button bubble-btn" href="{{ route('contact') }}"
                    data-hover-colors='["#B074BC","#CF7C7C","#7496BC","#7B9993","#9F7159","#EAD1DC","#D7BDE2","#D7BDE2","#FFD1BA","#D1F2EB","#A4C8F0","#F7A1A1","#A0E6E0","#F9B7B7","#E6FFB3","#FFF4B3","#FFE4B5","#FFD4B8","#FFCBA4","#FFB399"]'>

                    <span class="color-button__background"></span>
                    <span class="color-button__bubble-container">
                        <span class="color-button__bubble"></span>
                    </span>

                    <span class="color-button__label relative z-10 will-change-transform">Contact Us</span>
                </a>

                <div class="dropdown country_select">
                    <button class="country_select_btn dropdown-toggle" type="button" id="countrySelectBtn"
                        data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                        <svg class="country_select_globe" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="12" cy="12" r="9" stroke="#182653" stroke-width="1.5" />
                            <path d="M3 12H21" stroke="#182653" stroke-width="1.5" />
                            <path
                                d="M12 3C14.5 5.5 15.75 8.5 15.75 12C15.75 15.5 14.5 18.5 12 21C9.5 18.5 8.25 15.5 8.25 12C8.25 8.5 9.5 5.5 12 3Z"
                                stroke="#182653" stroke-width="1.5" />
                        </svg>
                        <span>Global</span>
                        <svg width="14" height="8" viewBox="0 0 18 10" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M17 1L9 9L1 1" stroke="#182653" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </button>
                    <ul class="dropdown-menu country_select_menu" aria-labelledby="countrySelectBtn">
                        <li>
                            <a class="dropdown-item" href="{{ url('au') }}">
                                <img src="{{ asset('public/front/images/contry-icon/australia-icon.png') }}"
                                    alt="Australia">
                                <span>AU</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ url('uk') }}">
                                <img src="{{ asset('public/front/images/contry-icon/uk-icon.png') }}" alt="UK">
                                <span>UK</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ url('us') }}">
                                <img src="{{ asset('public/front/images/contry-icon/us-icon.png') }}" alt="US">
                                <span>US</span>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>
    </div>
</header>

<div class="offcanvas offcanvas-end d-lg-none" tabindex="-1" id="offcanvasRight">
    <div class="offcanvas-header">
        <a href="{{ url('/') }}" class="offcanvas-logo">
            <img src="{{ asset('public/front/images/logo.svg') }}" alt="PCS Global">
        </a>
        <div class="offcanvas-head-right">
            <span class="offcanvas-flag">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <circle cx="12" cy="12" r="9" stroke="#182653" stroke-width="1.5" />
                    <path d="M3 12H21" stroke="#182653" stroke-width="1.5" />
                    <path
                        d="M12 3C14.5 5.5 15.75 8.5 15.75 12C15.75 15.5 14.5 18.5 12 21C9.5 18.5 8.25 15.5 8.25 12C8.25 8.5 9.5 5.5 12 3Z"
                        stroke="#182653" stroke-width="1.5" />
                </svg>
            </span>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
        </div>
    </div>

    <div class="offcanvas-body">

        <div class="menu-level active" id="menu-main">
            <div class="menu-body">
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li><a href="#">Services <span class="next-menu"
                                data-target="menu-services">&rsaquo;</span></a></li>
                    <li><a href="{{ route('datasecurity') }}">Data Security</a></li>
                    <li><a href="{{ route('blog') }}">Blogs</a></li>
                </ul>


             <div class="mt-4 text-center">
                  <a class="com_btn1 color-animated-button bubble-btn" href="{{ route('contact') }}">
                <span class="color-button__background"></span>
                <span class="color-button__bubble-container"><span class="color-button__bubble"></span></span>
                <span class="color-button__label relative z-10 me-2">Contact Us</span>
                    </a>
                </div>

            </div>
        </div>

        <div class="menu-level" id="menu-services">
            <div class="menu-header">
                <button class="back-btn" data-back="menu-main">&lsaquo; Back</button>
                <p class="m-0 menu-services-title">Services</p>
            </div>
            <div class="menu-body">
                <ul>
                    <li><a href="{{ route('white-label-accounting-services') }}">White Label Accounting Services</a></li>
                    <li><a href="{{ route('pcs.global.bookkeeping') }}">Accounting Outsourcing Services</a></li>
                    <li><a href="{{ route('hire.offshore.accountant') }}">Hire Offshore Accountants</a></li>
                    <li><a href="{{ route('bookkeeping.services') }}">Bookkeeping Outsourcing Services</a></li>
                    <li><a href="{{ route('taxation.services') }}">Tax Outsourcing Services</a></li>
                    <li><a href="{{ route('payroll.services') }}">Payroll Outsourcing Services</a></li>


                    <li><a href="{{ route('recruitment.services') }}">Recruitment Outsourcing Services</a></li>
                    <li><a href="{{ route('it.automation') }}">IT Automation Services</a></li>

                </ul>
            </div>
        </div>
      </div>

    </div>
</div>
