# PCS website: file structure guide

4 country sites ek hi Laravel project me hain: **India** (main, `/`), **Australia** (`/australia`), **US** (`/us`), **UK** (`/uk`).

---

## 1. Kaunsa page kahan hai

| Page | URL | Route file | View / content |
|---|---|---|---|
| India home | `/` | `routes/countries/india.php` | `resources/views/countries/india/pages/dashboard.blade.php` |
| Australia / US / UK home | `/australia`, `/us`, `/uk` | `routes/countries/<country>.php` | **Content:** `resources/content/<country>/home.php` · **View:** `resources/views/shared/country-home.blade.php` |
| About (sab countries) | `/about`, `/australia/about`, `/us/about` | country route file | `resources/views/shared/about.blade.php` |
| Contact (sab countries) | `/contact-us`, `/<country>/contact-us` | country route file | `resources/views/shared/contact.blade.php` |
| Strata management | `/strata-management`, `/australia/strata-management` | country route file | `resources/views/shared/strata-management.blade.php` |
| Blogs + blog detail | `/blog`, `/blogs/{url}` | `routes/countries/india.php` | `resources/views/shared/blogs.blade.php`, `blogs-details.blade.php` |
| 404 | koi bhi galat URL | (Laravel khud) | `resources/views/errors/404.blade.php` |
| Baaki country pages | `/australia/taxation-services`, `/uk/about` ... | country route file | `resources/views/countries/<country>/pages/` |

> `shared/` pages ek hi file hain, header/footer country ke hisab se lagta hai (`$site = config('sites.<country>')`).

---

## 2. Folder map

```
config/
  sites.php              har country: header, footer, home ka meta title/description, team filter
  home.php               sab countries me same content: core team, testimonials, process steps, extra security cards

resources/content/       <-- PAGE KA DATA (text, images, links)
  australia/home.php
  us/home.php
  uk/home.php

resources/views/
  countries/<country>/
    layouts/header.blade.php   us country ka menu data ($nav) -> common header
    layouts/footer.blade.php   us country ka footer data -> common footer
    pages/                     sirf us country ke pages
  shared/                      sab countries ke common pages (about, contact, blogs, strata, country-home)
  components/
    layout/                    header, footer, footer-scripts (Request-a-Call modal, form JS), whatsapp
    sections/                  home page ke saare sections (neeche list)
    india/                     India pages ke purane include sections
  errors/404.blade.php

public/front/css/
  style.css, responsive.css    purana main CSS (India + bahut se shared sections)
  common/                      naye shared sections ka CSS (neeche list)
public/front/images/
  common/                      jo images 2+ countries me use hoti hain (icons, team, industries, hero bg)
  australia/  us/  uk/         sirf us country ki images
```

---

## 3. Home page sections (Australia / US / UK)

Page par order wahi hai jo `resources/content/<country>/home.php` ke `return [...]` me hai.
**Text badalna ho -> content file. Design badalna ho -> component + CSS.**

| # | Section (page par) | `type` (content file) | Component | CSS |
|---|---|---|---|---|
| 1 | Hero (blue, person image) | `hero-dark` | `components/sections/hero-dark.blade.php` | `css/common/hero-dark.css` |
| 2 | Why Partner + stats | `partner-stats` | `sections/partner-stats` | `style.css` (`.partner_*`, `.counter*`) |
| 3 | Services cards | `service-cards` | `sections/service-cards` | `style.css` (`.precision_*`) |
| 4 | Outsourcing solutions (dark slider/grid) | `trust-slider` | `sections/trust-slider` | `style.css` (`.trust_slide*`) + `responsive.css` + `common/home-sections.css` |
| 5 | Standards & compliance (accordion) | `split-accordion` | `sections/split-accordion` | `common/home-sections.css` (`.split_acc*`) |
| 6 | Industries marquee | `industry-pills` | `sections/industry-pills` | `style.css` (`.industries_*`, `.ind_*`) |
| 7 | How we work (steps) | `process-steps` | `sections/process-steps` | `style.css` (`.process_*`) |
| 8 | Certifications / Tools tabs | `cert-tools` | `sections/cert-tools` | `style.css` (`.cert_*`) |
| 9 | Data security cards | `overlay-cards` | `sections/overlay-cards` | `common/home-sections.css` (`.ov_*`) |
| 10 | Country map | `region-map` | `sections/region-map` | `common/home-sections.css` (`.region_map*`) |
| 11 | CTA banner | `cta-dark` | `sections/cta-dark` | `common/home-sections.css` (`.cta_dark*`) |
| 12 | Team slider | `team-slider` | `sections/team-slider` (+ `slider-controls`) | `style.css` (`.experts_*`) |
| 13 | Trusted by logos | `clients-slider` | `sections/clients-slider` | `style.css` (`.client_slider*`) |
| 14 | Testimonials | `testimonials` | `sections/testimonials` | `style.css` (`.testimonial_*`) |
| 15 | Blogs | `blog-cards` | `sections/blog-cards` | `style.css` (`.ins_card`, `.blog-img-home`) |
| 16 | FAQ | `faq-list` | `sections/faq-list` | `style.css` (`.fre_que*`) |
| 17 | Contact form | `contact-form` | `sections/contact-form` | `common/home-sections.css` (`.contact_band*`, `.cf_field`) |

Header, footer, modal:

| Cheez | File | CSS |
|---|---|---|
| Header (AU/US/UK) | `components/layout/header.blade.php` (data: `countries/<country>/layouts/header.blade.php`) | `style.css`, `common/header-overlay.css`, `common/buttons.css` |
| Header (India) | `countries/india/layouts/header.blade.php` | `style.css` |
| Footer (sab) | `components/layout/footer.blade.php` (data: `countries/<country>/layouts/footer.blade.php`) | `style.css` (`.foot_*`, `.footer_*`) + `responsive.css` |
| Request A Call modal + form JS + WhatsApp | `components/layout/footer-scripts.blade.php`, `components/layout/whatsapp.blade.php` | `common/request-modal.css` |

Sliders ka JS: `public/front/js/main.js` (slick, `data-slider` attribute).

---

## 4. Aam kaam kaise karein

- **Australia home ka koi text badalna:** `resources/content/australia/home.php` me wo text dhundo aur badlo.
- **Section ka order badalna / section hatana:** content file ke `return [...]` me us block ko upar-neeche karo ya hatao.
- **Sab countries me same text (testimonials, team, process steps):** `config/home.php`.
- **Menu ke links:** `resources/views/countries/<country>/layouts/header.blade.php` ka `$nav`.
- **Footer ke links / address / phone:** `resources/views/countries/<country>/layouts/footer.blade.php`.
- **Naya page jodna:** view `countries/<country>/pages/` me, route `routes/countries/<country>.php` me. Sab countries ka same page ho to `shared/` me rakho aur route par `->defaults('country', '<country>')`.
- **Nayi country jodna:** `config/sites.php` me entry, `countries/<country>/layouts/header|footer`, `resources/content/<country>/home.php`, aur `routes/countries/<country>.php`.

> Config badalne ke baad: `php artisan config:clear`. View cache ke liye: `php artisan view:clear`.
