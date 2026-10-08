{{-- Heading + image on the left, accordion list on the right (first item open).
     items = [['title','text'], ...] ; text optional for items that only show a title --}}
@props(['title', 'text' => '', 'image', 'items' => [], 'id' => 'splitAcc'])
<section class="mt-100">
    <div class="container">
        <div class="com_sec_head_top">
            <h2 class="mb-2 mb-xxl-4">{!! $title !!}</h2>
            @if ($text)
                <p>{!! $text !!}</p>
            @endif
        </div>

        <div class="split_acc">
            <div class="split_acc_img">
                <img src="{{ $image }}" loading="lazy" alt="{{ strip_tags($title) }}">
            </div>
            <div class="split_acc_list accordion" id="{{ $id }}">
                @foreach ($items as $i => $item)
                    <div class="split_acc_item">
                        <button type="button" class="split_acc_head {{ $i === 0 ? '' : 'collapsed' }}" @if (!empty($item['text'])) data-bs-toggle="collapse" @endif
                            data-bs-target="#{{ $id }}{{ $i }}" aria-expanded="{{ $i === 0 ? 'true' : 'false' }}"
                            aria-controls="{{ $id }}{{ $i }}">
                            <span>{!! $item['title'] !!}</span>
                            <img src="{{ asset('public/front/images/common/icon-plus.svg') }}" width="32" height="32" alt="">
                        </button>
                        @if (!empty($item['text']))
                            <div id="{{ $id }}{{ $i }}" class="split_acc_body collapse {{ $i === 0 ? 'show' : '' }}" data-bs-parent="#{{ $id }}">
                                <p>{!! $item['text'] !!}</p>
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
