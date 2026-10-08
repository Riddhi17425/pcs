{{-- "Trusted by" logo slider. images = TrustedPartner collection --}}
@props(['images', 'title' => 'Trusted By'])
<section class="clients mt-100">
    <div class="container">
        <h2 class="text-center">{!! $title !!}</h2>
    </div>
    <div class="client_slider_full">
        <div class="client_slider">
            @foreach ($images as $image)
                <div>
                    <img class="img-fluid" src="{{ asset('/' . $image->image) }}" loading="lazy" alt="{{ $image->name ?? 'client' }}">
                </div>
            @endforeach
        </div>
    </div>
</section>
