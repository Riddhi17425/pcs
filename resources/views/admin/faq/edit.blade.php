@extends('admin.layouts.app')

@section('content')
<style>
    .required-star { color: red; }
</style>

<div class="container-xxl py-3">
    <div class="row align-items-center mb-4">
        <div class="card-header d-flex justify-content-between border-bottom">
            <h3 class="fw-bold">Edit FAQ</h3>
            <a href="{{ route('faq') }}" class="btn btn-primary">Back</a>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('faq.update', $faq->id) }}" method="POST">
                @csrf
                @method('PUT')

                {{-- Page URL --}}
                <div class="mb-3">
                    <label class="form-label">Page URL <span class="required-star">*</span></label>
                    <input type="text" name="faq_url" class="form-control" value="{{ old('faq_url', $faq->faq_url) }}" required>
                </div>

                {{-- Repeater for Title/Description --}}
                <div class="mb-3 d-flex justify-content-between">
                    <strong>FAQ Title & Description</strong>
                    <button type="button" id="addFaqBlock" class="btn btn-sm btn-success">+ Add More</button>
                </div>

                <div id="faqRepeater">
                    @php
                        $faqBlocks = is_array($faq->title_description) ? $faq->title_description : json_decode($faq->title_description, true);
                    @endphp

                    @foreach($faqBlocks ?? [] as $item)
                        <div class="faqGroup border p-3 mb-3 rounded">
                            <div class="mb-2">
                                <label class="form-label">Title <span class="required-star">*</span></label>
                                <input type="text" name="title[]" class="form-control" value="{{ $item['title'] ?? '' }}" required>
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Description <span class="required-star">*</span></label>
                                <textarea name="description[]" class="form-control summernote" rows="4" required>{{ $item['description'] ?? '' }}</textarea>
                            </div>
                            <div class="text-end">
                                <button type="button" class="btn btn-danger removeFaq">Remove</button>
                            </div>
                        </div>
                    @endforeach
                </div>

                {{-- Status --}}
                <div class="mb-3">
                    <label class="form-label">Status <span class="required-star">*</span></label>
                    <select name="status" class="form-control" required>
                        <option value="Active" {{ $faq->status == 'Active' ? 'selected' : '' }}>Active</option>
                        <option value="In-Active" {{ $faq->status == 'In-Active' ? 'selected' : '' }}>Inactive</option>
                    </select>
                </div>

                {{-- Submit --}}
                <div class="text-end">
                    <button type="submit" class="btn btn-primary">Update FAQ</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- Scripts --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('public/admin/js/summernote.min.js') }}"></script>
<link href="{{ asset('public/admin/css/summernote.min.css') }}" rel="stylesheet" />

<script>
    $(document).ready(function () {
        $('.summernote').summernote({ height: 200 });

        $('#addFaqBlock').click(function () {
            let block = `
                <div class="faqGroup border p-3 mb-3 rounded">
                    <div class="mb-2">
                        <label class="form-label">Title <span class="required-star">*</span></label>
                        <input type="text" name="title[]" class="form-control" required>
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Description <span class="required-star">*</span></label>
                        <textarea name="description[]" class="form-control summernote" rows="4" required></textarea>
                    </div>
                    <div class="text-end">
                        <button type="button" class="btn btn-danger removeFaq">Remove</button>
                    </div>
                </div>
            `;
            $('#faqRepeater').append(block);
            $('.summernote').summernote({ height: 200 });
        });

        $(document).on('click', '.removeFaq', function () {
            $(this).closest('.faqGroup').remove();
        });
    });
</script>
@endsection
