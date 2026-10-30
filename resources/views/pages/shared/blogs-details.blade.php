@extends('layouts.app', [
    'og_image' => asset('/'.$blog->detail_image)
])

@section('content')

<style>
    table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
    font-size: 16px;
    font-family: Arial, sans-serif;
}

table th,
table td {
    border: 1px solid #ddd;
    padding: 12px;
    text-align: left;
}

table th {
    background-color: #182653;
    font-weight: bold;
    color:#fff;
}

table tr:nth-child(even) {
    background-color: #fafafa;
}

table tr:hover {
    background-color: #f1f1f1;
}


.conclusion-title {
    line-height: 1.2;
}

.faq-title {
    font-size: calc(1.275rem + .3vw);
    line-height: 1.2;
    font-weight: 500;
    color: inherit;
}

@media (min-width: 1200px) {
    .faq-title {
        font-size: 1.5rem;
    }
}

.blogs_details h3 {
    font-size: 28px;
}

.blogs_details h4 {
    font-size: 22px;
    font-weight: 600;
    color: var(--black3);
}

.blogs_details p,
.blogs_details li {
    font-size: 16px;
    line-height: 28px;
}
/* Blog detail CTA button size */
    .blogs_details .com_inner_banner .com_btn1 {
        padding: 8px 18px;
        font-size: 14px;
    }
</style>

@php
    $faqItems = [];
@endphp

<section class="com_hero" style="background-image: url('{{ asset('public/front/images/blog-hero-bg.png') }}');">
    <div class="container">
        <div class="com_hero_child">
            <h1>{{$blog->title}}</h1>
            <p>{{ \Carbon\Carbon::parse($blog->date)->format('F j, Y') }}</p>
        </div>
    </div>
</section>

<section class="blogs_details">
    <div class="container">

        <!-- Detail Image -->
        <div class="text-center blog_hero_img">
            <img class="img-fluid" src="{{ asset('/'.$blog->detail_image) }}"
                alt="{{ $blog->detail_image_alt ?: $blog->title }}">
        </div>

        <div class="blog-guide-section">

            <!-- Sidebar (TOC) -->
            <aside class="blog-sidebar">
                <p class="toc_title">CONTENTS</p>
                <ul id="dynamic-sidebar">
                </ul>
            </aside>

            <!-- Main Content -->
            <div class="blog-content">

                <!-- Short Description -->
                <div class="blog-content-section">
                    {!! $blog->short_description !!}
                </div>

                <!-- Main Description -->
                <div class="blog-content-section">
                    {!! $blog->detail_description !!}
                </div>

                <!-- CTA Banner -->
                <div class="blog-content-section">
                    <div class="com_inner_banners my-4 my-lg-3">
                        <div class="row align-items-lg-end align-items-xxl-center">
                            <div class="col-lg-7">
                                <div class="com_inner_banner">
                                    <h2>{!! $blog->cta_text !!}</h2>

                                    <a class="com_btn1 color-animated-button bubble-btn" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                        data-hover-colors='["#B074BC","#CF7C7C","#7496BC","#7B9993","#9F7159","#EAD1DC","#D7BDE2","#D7BDE2","#FFD1BA","#D1F2EB","#A4C8F0","#F7A1A1","#A0E6E0","#F9B7B7","#E6FFB3","#FFF4B3","#FFE4B5","#FFD4B8","#FFCBA4","#FFB399"]'>

                                        <!-- Bubble effect layers -->
                                        <span class="color-button__background"></span>
                                        <span class="color-button__bubble-container">
                                            <span class="color-button__bubble"></span>
                                        </span>

                                        <!-- Label (phone icon removed, text dynamic) -->
                                        <span class="color-button__label relative z-10 will-change-transform">
                                            {{ $blog->cta_btn_text ?: 'Schedule a Free Consultation' }}
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-5 mt-4">
                                <div>
                                    <img class="img-fluid" src="{{ asset('/' . ($blog->cta_image ?? 'public/front/images/coman_tree1.png')) }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Conclusion -->
                <div class="blog-content-section" id="conclusion">
                    <h2 class="sub_head conclusion-title mt-lg-5">Conclusion</h2>
                    {!! $blog->conclusion !!}
                </div>

                <!-- FAQs -->
                @if (!empty($blog->blog_faq) && count($blog->blog_faq) > 0)
                    @php
                        $faqItems = [];

                        $decodedFaqItems = $blog->blog_faq;

                        if (is_array($decodedFaqItems)) {
                            foreach ($decodedFaqItems as $item) {
                                $question = trim(strip_tags($item['faq_title'] ?? ''));
                                $answer = trim(strip_tags($item['faq_description'] ?? ''));

                                if ($question && $answer) {
                                    $faqItems[] = [
                                        'question' => $question,
                                        'answer' => $answer,
                                    ];
                                }
                            }
                        }

                        $faqSchema = [
                            '@context' => 'https://schema.org',
                            '@type' => 'FAQPage',
                            'mainEntity' => array_map(function ($item) {
                                return [
                                    '@type' => 'Question',
                                    'name' => $item['question'],
                                    'acceptedAnswer' => [
                                        '@type' => 'Answer',
                                        'text' => $item['answer'],
                                    ],
                                ];
                            }, $faqItems),
                        ];
                    @endphp

                    <div class="blog-content-section accoding" id="faqs">
                        <h2 class="text-center mb-5 faq-title"><b>Frequently Asked Questions</b></h2>

                        <div id="accordionExample">
                            @foreach ($blog->blog_faq as $index => $faq)
                                <div class="faq-item mb-3">

                                    <h3 class="sub_head faq-header {{ $index !== 0 ? 'collapsed' : '' }}"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#collapse{{ $index }}"
                                        aria-expanded="{{ $index === 0 ? 'true' : 'false' }}"
                                        aria-controls="collapse{{ $index }}">

                                        <span>{{ $faq['faq_title'] }}</span>
                                        <span class="faq-icon"></span>
                                    </h3>

                                    <div id="collapse{{ $index }}"
                                        class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}"
                                        data-bs-parent="#accordionExample">

                                        <div class="faq-body">
                                            {!! $faq['faq_description'] !!}
                                        </div>
                                    </div>

                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif

            </div>
        </div>
    </div>
</section>

<section class="mt-100">
    <div class="container">
        <div class="com_sec_head_top">
            <h2 class="mb-2 mb-xxl-4">More From Our Knowledge Hub</h2>
        </div>
        <div class="row g-4 g-xxl-5">
            @foreach ($blogs->take(3) as $data)
                <div class="col-lg-4">
                    <div>
                        <img class="img-fluid" src="{{ asset('/'.$data->front_image) }}"
     alt="{{ $data->front_image_alt ?: $data->title }}">
                    </div>
                    <div class="ins_card">
                        <p>{{ \Carbon\Carbon::parse($data->date)->format('F j, Y') }}</p>
                        <a href="{{ route($site['blog_detail'], $data->url) }}">
                            <h3 class="sub_head">{!! $data->title !!}</h3>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ===== BlogPosting schema (dynamic) ===== --}}
@php
    $blogUrl  = url()->current();
$blogDesc = trim(preg_replace('/\s+/', ' ', strip_tags($blog->meta_description ?: ($blog->short_description ?? ''))));
    $blogSchema = [
        '@context' => 'https://schema.org',
        '@type' => 'BlogPosting',
        'mainEntityOfPage' => [
            '@type' => 'WebPage',
            '@id' => $blogUrl,
        ],
        'headline' => \Illuminate\Support\Str::limit(strip_tags($blog->title), 110, ''),
        'description' => $blogDesc,
        'image' => [asset('/' . $blog->detail_image)],
        'datePublished' => \Carbon\Carbon::parse($blog->date)
    ->setTimeFrom(\Carbon\Carbon::parse($blog->created_at ?? $blog->date))
    ->toIso8601String(),
        'dateModified' => \Carbon\Carbon::parse($blog->updated_at ?? $blog->date)->toIso8601String(),
        'author' => [
            '@type' => 'Organization',
            'name' => 'PCS Global',
            'url' => url('/'),
        ],
        'publisher' => [
            '@type' => 'Organization',
            'name' => 'PCS Global',
            'logo' => [
                '@type' => 'ImageObject',
                'url' => asset('public/front/images/logo.svg'),
            ],
        ],
    ];
@endphp

<script type="application/ld+json">
    {!! json_encode($blogSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
</script>

{{-- ===== FAQPage schema ===== --}}
@if(!empty($faqItems))
    <script type="application/ld+json">
        {!! json_encode($faqSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
    </script>
@endif
@endsection

@push('scripts')
<script>
document.querySelectorAll('h5').forEach(h5 => {
    h5.classList.add('sub_head');
});

const block = document.querySelector('.blogs_details .blog-content');
if (block) {
    const firstH5 = block.querySelector('h5');
    if (firstH5) {
        firstH5.classList.add('mt-0');
    }
}
</script>

<script>
// ===== Dynamic TOC (Contents sidebar) + scroll spy =====
document.addEventListener("DOMContentLoaded", function () {
    const sidebar = document.querySelector(".blog-sidebar");
    const sidebarList = document.getElementById("dynamic-sidebar");
    const content = document.querySelector(".blog-content");
    if (!sidebar || !sidebarList || !content) return;

    const headings = Array.from(content.querySelectorAll("h2, h3")).filter(function (h) {
        return !h.closest(".faq-item, .com_inner_banners") && h.textContent.trim() !== "";
    });

    if (headings.length === 0) {
        sidebar.style.display = "none";
        return;
    }

    const sections = [];
    const allDropdowns = [];
    let currentH2Li = null;
    let currentH3Ul = null;

    function openMenu(item) {
        item.ul.classList.add("open");
        item.btn.classList.add("open");
    }

    function closeMenu(item) {
        item.ul.classList.remove("open");
        item.btn.classList.remove("open");
    }

    headings.forEach(function (heading, index) {
        let targetId = heading.id;
        if (!targetId) {
            targetId = heading.tagName.toLowerCase() + "-heading-" + index;
            heading.id = targetId;
        }

        const a = document.createElement("a");
        a.href = "#" + targetId;
        a.className = "nav-link";
        a.textContent = heading.textContent.trim();

        const isH3 = heading.tagName.toLowerCase() === "h3";

        if (!isH3 || !currentH2Li) {
            const li = document.createElement("li");
            const wrapper = document.createElement("div");
            wrapper.className = "heading-wrapper";
            wrapper.appendChild(a);
            li.appendChild(wrapper);

            sidebarList.appendChild(li);
            currentH2Li = li;
            currentH3Ul = null;
            sections.push(heading);
        }
        else {
            if (!currentH3Ul) {
                const ul = document.createElement("ul");
                ul.className = "sub-menu";

                const btn = document.createElement("button");
                btn.type = "button";
                btn.className = "dropdown-toggle-btn";
                btn.setAttribute("aria-label", "Toggle sub menu");
                btn.innerHTML = '<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3 4.5L6 7.5L9 4.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>';

                const item = { ul: ul, btn: btn };
                allDropdowns.push(item);

                if (currentH2Li === sidebarList.firstElementChild) {
                    openMenu(item);
                }

                btn.addEventListener("click", function (e) {
                    e.preventDefault();
                    e.stopPropagation();
                    const wasOpen = ul.classList.contains("open");
                    allDropdowns.forEach(closeMenu);
                    if (!wasOpen) openMenu(item);
                });

                currentH2Li.querySelector(".heading-wrapper").appendChild(btn);
                currentH2Li.appendChild(ul);
                currentH3Ul = ul;
            }

            const subLi = document.createElement("li");
            a.classList.add("sub-link");
            subLi.appendChild(a);
            currentH3Ul.appendChild(subLi);
            sections.push(heading);
        }
    });

    const links = sidebarList.querySelectorAll("a.nav-link");
    if (links.length > 0) links[0].classList.add("active");

    let isClickScrolling = false;

    function keepLinkVisible(link, onlyIfHidden) {
        const containerRect = sidebar.getBoundingClientRect();
        const linkRect = link.getBoundingClientRect();

        if (onlyIfHidden && linkRect.top >= containerRect.top && linkRect.bottom <= containerRect.bottom) {
            return;
        }

        const relativeTop = linkRect.top - containerRect.top + sidebar.scrollTop;
        const centerOffset = relativeTop - (sidebar.clientHeight / 2) + (linkRect.height / 2);
        sidebar.scrollTo({ top: centerOffset > 0 ? centerOffset : 0, behavior: "smooth" });
    }

    links.forEach(function (link) {
        link.addEventListener("click", function (e) {
            e.preventDefault();
            isClickScrolling = true;

            links.forEach(function (l) { l.classList.remove("active"); });
            this.classList.add("active");

            const target = document.querySelector(this.getAttribute("href"));
            if (target) {
                const headerOffset = 100;
                const top = target.getBoundingClientRect().top + window.pageYOffset - headerOffset;
                window.scrollTo({ top: top, behavior: "smooth" });
            }

            keepLinkVisible(this, false);

            setTimeout(function () { isClickScrolling = false; }, 800);
        });
    });

    // Scroll spy
    let ticking = false;

    function onScroll() {
        let current = "";

        sections.forEach(function (section) {
            const sectionTop = section.getBoundingClientRect().top + window.scrollY;
            if (window.scrollY >= sectionTop - 180) {
                current = section.id;
            }
        });

        let currentLink = null;

        if (current) {
            links.forEach(function (link) {
                const isCurrent = link.getAttribute("href") === "#" + current;
                link.classList.toggle("active", isCurrent);
                if (isCurrent) currentLink = link;
            });
        } else if (links.length > 0) {
            links.forEach(function (l) { l.classList.remove("active"); });
            links[0].classList.add("active");
            currentLink = links[0];
        }

        if (currentLink) {
            const parentUl = currentLink.closest(".sub-menu");
            const li = currentLink.closest("li");
            const ownUl = li ? li.querySelector(":scope > .sub-menu") : null;
            const targetUl = parentUl || ownUl;

            allDropdowns.forEach(function (item) {
                if (item.ul === targetUl) {
                    openMenu(item);
                } else {
                    closeMenu(item);
                }
            });

            if (!isClickScrolling) keepLinkVisible(currentLink, true);
        }
    }

    window.addEventListener("scroll", function () {
        if (ticking) return;
        ticking = true;
        window.requestAnimationFrame(function () {
            onScroll();
            ticking = false;
        });
    });
});
</script>
@endpush
