{{-- Footer (sab countries): <x-footer>. Layout (layouts/app) har country ka data config/sites.php -> 'footer' se deta hai:
     quickLinks = [[label, url, newTab (optional bool)], ...]
     services = [[label, url], ...]
     phones = [['number' => '(+613) 9998 0494', 'label' => 'AUS' (optional), 'icon' => url (optional), 'alt' => 'Australia'], ...]
     address = html string.  Baaki cheezein (logo, about, social, badges, copyright) ke defaults hain. --}}
@props([
    'homeUrl' => url('/'),
    'quickLinks' => [],
    'services' => [],
    'address' => '',
    'phones' => [],
    'email' => 'info@pcsglobalgroup.com',
    'privacyUrl' => route('privacy-policy'),
    'logo' => asset('public/front/images/footer-log.svg'),
    'about' => 'PCS Global is committed to delivering reliable and quality accounting service and is driven by long-term partnerships with clients, and employees based on strong values of integrity and trust.',
    'copyright' => 'Progressive Corporate Services Pvt. Ltd., All Rights Reserved.',
    'social' => null,
    'badges' => null,
])
@php
    $social ??= [
        ['https://www.linkedin.com/company/pcs-global-group/', asset('public/front/images/linkedin.svg'), 'linkedin'],
        ['https://www.facebook.com/PCSGlobalGroup/', asset('public/front/images/facebook.svg'), 'facebook'],
        ['https://www.instagram.com/pcsglobalgroup/', asset('public/front/images/insta.svg'), 'insta'],
    ];
    $badgeDir = asset('public/front/images/figma-footer-badges');
    // [file, alt, shape]
    $badges ??= [
        ["$badgeDir/iso-9001.png", 'ISO 9001', 'circle'],
        ["$badgeDir/sca-vic-member.png", 'Strata Community Association VIC', 'box'],
        ["$badgeDir/iso-27001.png", 'ISO 27001', 'circle'],
        ["$badgeDir/sca-wa-member.png", 'Strata Community Association WA', 'box'],
        ["$badgeDir/gdpr.png", 'GDPR', 'circle'],
    ];
@endphp
<footer class="mt-100 footer">
    <div class="container">
        <div class="footer_top">
            <div class="footer_top_flex">
                <div class="foot_lt">
                    <a href="{{ $homeUrl }}"><img class="ft_logo" src="{{ $logo }}" alt="logo" loading="lazy"></a>
                    <p class="foot_lt_para">{{ $about }}</p>
                    <div class="foot_social">
                        @foreach ($social as [$url, $icon, $alt])
                            <a href="{{ $url }}" target="_blank"><img src="{{ $icon }}" alt="{{ $alt }}" loading="lazy"></a>
                        @endforeach
                    </div>
                </div>

                <div class="foot_links_group">
                    <div class="foot_rt">
                        <h4 class="sub_head">Quick Links</h4>
                        <ul>
                            @foreach ($quickLinks as $link)
                                <li><a href="{{ $link[1] }}"@if (!empty($link[2])) target="_blank" rel="noopener"@endif>{{ $link[0] }}</a></li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="foot_rt">
                        <h4 class="sub_head">Our Services</h4>
                        <ul>
                            @foreach ($services as [$label, $url])
                                <li><a href="{{ $url }}">{!! $label !!}</a></li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="foot_rt border-end-0">
                        <h4 class="sub_head">Contact Us</h4>

                        <div class="foot_contact_block">
                            <h6 class="foot_contact_label">Address:</h6>
                            <p class="foot_contact_value">{!! $address !!}</p>
                        </div>

                        <div class="foot_contact_block">
                            <h6 class="foot_contact_label">Call Us:</h6>
                            <ul class="foot_call_list">
                                @foreach ($phones as $phone)
                                    <li>
                                        <a href="tel:{{ $phone['number'] }}">
                                            @if (!empty($phone['icon']))
                                                <img src="{{ $phone['icon'] }}" alt="{{ $phone['alt'] ?? '' }}" loading="lazy">
                                            @endif
                                            <span>@if (!empty($phone['label']))<b>{{ $phone['label'] }} :</b> @endif{{ $phone['number'] }}</span>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="foot_contact_block mb-0">
                            <h6 class="foot_contact_label">Email Us:</h6>
                            <p class="foot_contact_value">
                                <a href="mailto:{{ $email }}">{{ $email }}</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer_badges_wrap">
            <div class="footer_badges">
                @foreach ($badges as [$img, $alt, $shape])
                    <span class="badge_{{ $shape }}"><img src="{{ $img }}" alt="{{ $alt }}" loading="lazy"></span>
                @endforeach
            </div>
        </div>

        <div class="footer_bot">
            <p>©<span>{{ date('Y') }}</span> {{ $copyright }}</p>

            <p class="Privacy_link"><a href="{{ $privacyUrl }}">Privacy Policy</a></p>
        </div>
    </div>
</footer>
