@include('layouts.frontheader', [
    'og_image' => asset('public/admin/blogs/what-are-the-duties-of-a-strata-manager-in-australia-6982d986039b2.jpg')
])

<section class="com_hero" style="background-image: url(' {{ asset('public/front/images/blog-hero-bg.png') }}'); ">
    <div class="container">
        <div class="com_hero_child">
            <h1>Blogs</h1>
            <p>Insights That Drive Smarter Business Decisions</p>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row g-4 g-lg-5">
            @foreach ($blogs as $blog)
                <div class="col-sm-6 col-lg-4">
                    <div>
                        <img class="img-fluid" src="{{asset('/'.$blog->front_image)}}" alt="imah3ge">
                    </div>
                    <div class="ins_card">
                        <p>{{ \Carbon\Carbon::parse($blog->date)->format('F j, Y') }}</p>
                        <a href="{{ route('blogs.detail', $blog->url) }}">
                            <h4 class="sub_head">{{$blog->title}}</h4>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@include('layouts.frontfooter')