# PCS website: file structure guide

4 country sites ek hi Laravel project me hain: **India / Global** (main, `/`), **Australia** (`/aus`), **US** (`/us`), **UK** (`/uk`).
Structure standard Laravel jaisa hai: **route group → controller → page view (`@extends` layout) → components / partials**.

---

## 1. Request kaise chalti hai

```
routes/countries/<country>.php      Route::middleware('country:<key>')->prefix('<url>')->group(...)
        │
        ├─ app/Http/Middleware/SetCountry.php   $site = App\Support\Site::get('<key>')  -> sab views me share
        │                                        (data: config/sites.php)
        ▼
app/Http/Controllers/Web/*Controller.php   DB data + meta_title / meta_description
        ▼
resources/views/pages/<country>/<page>.blade.php      @extends('layouts.app')  @section('content')
        ▼
resources/views/layouts/app.blade.php     <html>: head, header, @yield('content'), footer, scripts
```

---

## 2. Kaunsa page kahan hai

| Page | URL | View |
|---|---|---|
| India home | `/` | `pages/india/home.blade.php` |
| Australia / US / UK home | `/aus`, `/us`, `/uk` | `pages/<country>/home.blade.php` (controller: `CountryHomeController`) |
| About | `/about`, `/aus/about`, `/us/about` | `pages/shared/about.blade.php` (UK: `pages/uk/uk_about.blade.php`) |
| Contact | `/contact-us`, `/<country>/contact-us` | `pages/shared/contact.blade.php` |
| Strata management | `/strata-management`, `/aus/strata-management` | `pages/shared/strata-management.blade.php` |
| Blogs + blog detail | `/blog`, `/blogs/{url}` | `pages/shared/blogs.blade.php`, `blogs-details.blade.php` |
| 404 | koi bhi galat URL | `errors/404.blade.php` (`/aus/...` par Australia header/footer) |
| Baaki country pages | `/aus/taxation-services`, `/uk/...` ... | `pages/<country>/...` |

> `pages/shared/` ka ek hi page sab countries me chalta hai. Header/footer route group ki country ka lagta hai (`$site`).

---

## 3. Folder map

```
app/
  Http/Middleware/SetCountry.php   route group ki country -> $site (views me share)
  Support/Site.php                 config/sites.php ke route names -> URLs (menu, footer)
  Http/Controllers/Web/            pages ke controllers

config/
  sites.php     har country: header type, CSS files, phone, services, menu (nav), footer, home meta + team filter
  home.php      sab countries me same content: core team, testimonials, process steps

routes/
  web.php                   admin + forms, country files ko require karta hai
  countries/<country>.php   us country ke routes (ek group, middleware 'country:<key>')

resources/views/
  layouts/
    app.blade.php           master layout (<html>, head, header, footer, scripts) - sab pages isse extend karte hain
  partials/                 layout ke tukde (@include)
    head.blade.php          <head>: meta, CSS (list: config/sites.php 'css'), GTM, schema
    header/global.blade.php India header
    header/country.blade.php Australia / US / UK header (menu: config/sites.php 'nav')
    header-scripts.blade.php mobile menu, scroll par header hide, dropdown hover
    mobile-countries.blade.php mobile menu ka "Select Country"
    gtm-noscript.blade.php, whatsapp.blade.php
    request-modal.blade.php "Request A Call" popup form
    scripts.blade.php       form validation, recaptcha, CDN libraries, main.js
    india/                  India pages ke purane include sections
  components/               reusable UI (<x-...>)
    footer.blade.php        <x-footer> (data: config/sites.php 'footer')
  pages/
    india/  australia/  us/  uk/   us country ke pages
    shared/                        sab countries ke common pages
  errors/404.blade.php

public/front/css/
  style.css, responsive.css    purana main CSS (India + bahut se shared sections)
  common/                      naye shared sections ka CSS
public/front/images/
  common/                      jo images 2+ countries me use hoti hain
  australia/  us/  uk/         sirf us country ki images
```

---

## 4. Home page sections (Australia / US / UK)

Har home page (`pages/<country>/home.blade.php`) me upar `@php` me data (cards, FAQs...) hai, neeche har section seedha Blade/HTML me likha hai (koi component/props nahi), usi order me jaise page par dikhte hain.
**Text badalna ho -> page file me wo section. Design badalna ho -> us section ki CSS.**

| # | Section (page par) | Page me comment | CSS |
|---|---|---|---|
| 1 | Hero (blue, person image) | `{{-- Hero Dark --}}` | `css/common/hero-dark.css` |
| 2 | Why Partner + stats | `{{-- Partner Stats --}}` | `style.css` (`.partner_*`, `.counter*`) |
| 3 | Services cards | `{{-- Service Cards --}}` | `style.css` (`.precision_*`) |
| 4 | Outsourcing solutions (dark slider/grid) | `{{-- Trust Slider --}}` | `style.css` (`.trust_slide*`) + `responsive.css` + `common/home-sections.css` |
| 5 | Standards & compliance (accordion) | `{{-- Split Accordion --}}` | `common/home-sections.css` (`.split_acc*`) |
| 6 | Industries marquee | `{{-- Industry Pills --}}` | `style.css` (`.industries_*`, `.ind_*`) |
| 7 | How we work (steps) | `{{-- Process Steps --}}` | `style.css` (`.process_*`) |
| 8 | Certifications / Tools tabs | `{{-- Cert Tools --}}` | `style.css` (`.cert_*`) |
| 9 | Data security cards | `{{-- Overlay Cards --}}` | `common/home-sections.css` (`.ov_*`) |
| 10 | Country map | `{{-- Region Map --}}` | `common/home-sections.css` (`.region_map*`) |
| 11 | CTA banner | `{{-- Cta Dark --}}` | `common/home-sections.css` (`.cta_dark*`) |
| 12 | Team slider | `{{-- Team Slider --}}` | `style.css` (`.experts_*`) |
| 13 | Trusted by logos | `{{-- Clients Slider --}}` | `style.css` (`.client_slider*`) |
| 14 | Testimonials | `{{-- Testimonials --}}` | `style.css` (`.testimonial_*`) |
| 15 | Blogs | `{{-- Blog Cards --}}` | `style.css` (`.ins_card`, `.blog-img-home`) |
| 16 | FAQ | `{{-- Faq List --}}` | `style.css` (`.fre_que*`) |
| 17 | Contact form | `{{-- Contact Form --}}` | `common/contact-form.css` |

Sliders ka JS: `public/front/js/main.js` (slick, `data-slider` attribute).

---

## 5. Aam kaam kaise karein

- **Australia home ka koi text badalna:** `resources/views/pages/australia/home.blade.php` me wo text dhundo aur badlo.
- **Section ka order badalna / hatana:** home page file me us section ke `{{-- Section Name --}}` comment se agle comment tak ka block upar-neeche karo ya hatao.
- **Sab countries me same text (testimonials, team, process steps):** `config/home.php`.
- **Menu / footer links, address, phone:** `config/sites.php` (us country ka `nav`, `services`, `footer`, `phone`). Links route names hain (`routes/countries/*.php` me `->name(...)`).
- **Naya page jodna:** view `pages/<country>/` me (`@extends('layouts.app')` + `@section('content')`), route `routes/countries/<country>.php` ke group me, controller method `return view('pages.<country>.<page>', ...)`. Page-specific JS: `@push('scripts')`, CSS: `@push('styles')`.
- **Nayi country jodna:** `config/sites.php` me entry, `routes/countries/<country>.php` (group + `middleware('country:<key>')`, `web.php` me require), `pages/<country>/home.blade.php`.

> Config badalne ke baad: `php artisan config:clear`. View cache ke liye: `php artisan view:clear`.
