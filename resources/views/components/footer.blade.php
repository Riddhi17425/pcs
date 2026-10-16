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
    'about' => 'PCS Global is committed to delivering reliable finance and accounting outsourcing solutions, building long-term partnerships with global accounting firms and businesses based on integrity, trust, and mutual growth.',
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
@include('partials.enquiry')
<script>
    (() => {
        const enquiryPhone = document.getElementById('enqPhone');
        if (!enquiryPhone) return;

        enquiryPhone.addEventListener('input', () => {
            enquiryPhone.value = enquiryPhone.value.replace(/\D/g, '').slice(0, 15);
        });
    })();
</script>
<style>
    body:has(.enquiry-overlay.active) {
        overflow-y: auto !important;
    }

    .enquiry-overlay {
        align-items: flex-start;
        justify-content: flex-end;
        padding: 60px 62px 16px 12px;
        background: rgba(7, 20, 43, .32);
        backdrop-filter: none;
    }

    .enquiry-modal {
        width: min(350px, calc(100vw - 82px));
        max-height: calc(100dvh - 76px);
        border: 0;
        border-top: 4px solid #3555b9;
        border-radius: 8px;
        background: #fffff6;
        box-shadow: 0 12px 36px rgba(0, 0, 0, .18);
        font-family: "Familjen Grotesk", sans-serif;
    }

    .enquiry-header {
        padding: 10px 14px 6px;
        color: #111111;
        background: #fffff6;
    }

    .enquiry-header-icon {
        display: none;
    }

    .enquiry-header h2 {
        color: #111111;
        font-size: 16px;
        font-family: "Public Sans", sans-serif;
    }

    .enquiry-close {
        display: grid;
        width: 30px;
        height: 30px;
        padding: 0;
        place-items: center;
        border: 1px solid #e1e4e8;
        border-radius: 50%;
        color: #333333;
        font-size: 22px;
    }

    .enquiry-close:hover {
        border-color: #182653;
        color: #182653;
    }

    .enquiry-body {
        overflow-y: auto;
        padding: 4px 14px 14px;
    }

    #enquiryForm {
        grid-template-columns: minmax(0, 1fr);
        gap: 6px;
    }

    .enquiry-field:has(#enqCompany) {
        display: none;
    }

    .enquiry-field label {
        margin-bottom: 3px;
        font-size: 11px;
    }

    .enquiry-field input,
    .enquiry-field textarea,
    .enquiry-field select {
        min-height: 40px;
        padding: 7px 11px;
        border-radius: 7px;
        border-color: #dddddd;
        color: #333333;
        background: #fffff6;
        font-size: 13px;
        font-family: "Familjen Grotesk", sans-serif;
    }

    .enquiry-field textarea {
        min-height: 58px;
    }

    .enquiry-captcha .g-recaptcha {
        transform: scale(.78);
        margin-bottom: -16px;
    }

    .enquiry-submit {
        min-height: 44px;
        padding: 10px 16px;
        border-radius: 7px;
        background: linear-gradient(135deg, #182653 0%, #3555b9 100%);
        font-size: 14px;
        font-family: "Public Sans", sans-serif;
    }

    .enquiry-submit:hover {
        background: #182653;
    }

    .enquiry-overlay.active {
        animation: enquiryBackdropIn 240ms ease-out both;
    }

    .enquiry-modal {
        transform-origin: top right;
        animation: enquiryPanelIn 300ms cubic-bezier(.2, .8, .2, 1) both;
        will-change: opacity, transform;
    }

    @keyframes enquiryBackdropIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    @keyframes enquiryPanelIn {
        from { opacity: 0; transform: translate3d(8px, -4px, 0) scale(.98); }
        to { opacity: 1; transform: translate3d(0, 0, 0) scale(1); }
    }

    @media (prefers-reduced-motion: reduce) {
        .enquiry-overlay.active,
        .enquiry-modal {
            animation: none;
            will-change: auto;
        }
    }

    @media (max-width: 480px) {
        .enquiry-btn {
            padding: 12px 10px;
        }

        .enquiry-overlay {
            align-items: center;
            justify-content: center;
            padding: 12px 8px;
        }

        .enquiry-modal {
            width: 100%;
            max-width: none;
            max-height: calc(100dvh - 24px);
            transform-origin: center;
        }

        .enquiry-body {
            padding: 4px 12px 12px;
        }

        #enquiryForm .captcha-error,
        #enquiryForm .enquiry-status {
            font-size: 10px;
            line-height: 1.35;
        }

        #enquiryForm .enquiry-field .js-error {
            margin-top: 3px;
            font-size: 11px;
            line-height: 1.3;
        }
    }
</style>

<footer class="mt-100 footer">
    <div class="container">
        <div class="footer_top">
            <div class="footer_top_flex">
                <div class="foot_lt">
                    <!-- <a href="{{ $homeUrl }}"><img class="ft_logo" src="{{ $logo }}" alt="logo" loading="lazy"></a> -->
                    <a href="{{ route('front.home') }}"><img class="ft_logo" src="{{ $logo }}" alt="logo" loading="lazy"></a>
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
