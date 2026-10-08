{{-- FAQ accordion (first item open). items = [['q','a'], ...] --}}
@props(['title' => 'Frequently asked questions', 'items' => [], 'id' => 'faqAccordion'])
<section class="mt-80">
    <div class="container">
        <div class="com_sec_head_top">
            <h4 class="faq-head mb-2 mb-xxl-4">{!! $title !!}</h4>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-11">
                <div class="fre_ques accordion" id="{{ $id }}">
                    @foreach ($items as $i => $item)
                        <div class="fre_que">
                            <h5 class="sub_head {{ $i === 0 ? '' : 'collapsed' }}" data-bs-toggle="collapse" data-bs-target="#{{ $id }}{{ $i }}"
                                aria-expanded="{{ $i === 0 ? 'true' : 'false' }}" aria-controls="{{ $id }}{{ $i }}">
                                {{ $item['q'] }}
                            </h5>
                            <div id="{{ $id }}{{ $i }}" class="accordion-collapse collapse {{ $i === 0 ? 'show' : '' }}" data-bs-parent="#{{ $id }}">
                                <p>{!! $item['a'] !!}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
