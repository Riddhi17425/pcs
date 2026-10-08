{{-- Latest blogs (3 cards). blogs = Blogs collection ; newTab = blog detail naye tab me kholo --}}
@props(['title', 'blogs', 'detailRoute' => 'blogs.detail', 'newTab' => false])
<section class="card_main mt-100 ">
    <div class="container">
        <div class="com_sec_head_top">
            <h2>{!! $title !!}</h2>
        </div>
        <div class="row g-4 g-xl-5">
            @foreach ($blogs->take(3) as $blog)
                <div class="col-sm-6 col-lg-4">
                    <div class="blog-img-home">
                        <img class="img-fluid" src="{{ asset('/' . $blog->front_image) }}" alt="image" loading="lazy">
                    </div>
                    <div class="ins_card">
                        <p>{{ \Carbon\Carbon::parse($blog->date)->format('F j, Y') }}</p>
                        <a href="{{ route($detailRoute, $blog->url) }}"@if ($newTab) target="_blank" rel="noopener"@endif><h4 class="sub_head">{{ $blog->title }}</h4></a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
