@extends('admin.layouts.app')

@section('content')
    <style>
        .required-star {
            color: red;
        }
    </style>
    <div class="body d-flex py-lg-3 py-md-2">
        <div class="container-xxl">
            {{-- Page Header --}}
            <div class="row align-items-center">
                <div class="border-0 mb-4">
                    <div
                        class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                        <h3 class="fw-bold mb-0">Edit Data</h3>
                        <a href="{{ route('ourteam') }}" class="btn btn-primary btn-set-task">Back</a>
                    </div>
                </div>
            </div>

            {{-- Form Section --}}
            <div class="row clearfix g-3">
                <div class="col-sm-12">
                    <div class="card mb-3">
                        <div class="card-body">
                            <form action="{{ route('ourteam.update', $ourteam->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card mb-4 border">
                                    <div class="card-header bg-light"><strong>Our Team Information</strong></div>
                                    <div class="card-body row">
                                        {{-- Name --}}
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Name <span class="required-star">*</span></label>
                                            <input type="text" name="name"
                                                class="form-control @error('name') is-invalid @enderror"
                                                value="{{ old('name', $ourteam->name) }}" placeholder="Enter Name Here">
                                            @error('name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        {{-- Designation --}}
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Designation <span class="required-star">*</span></label>
                                            <input type="text" name="designation"
                                                class="form-control @error('designation') is-invalid @enderror"
                                                value="{{ old('designation', $ourteam->designation) }}" placeholder="Enter Designation Here">
                                            @error('designation')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        {{-- Title --}}
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Title <span class="required-star">*</span></label>
                                            <input type="text" name="title"
                                                class="form-control @error('title') is-invalid @enderror"
                                                value="{{ old('title', $ourteam->title) }}" placeholder="Enter Title Here">
                                            @error('title')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        {{-- Image --}}
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Image</label>
                                            <input type="file" name="image" id="ourteam_image"
                                                class="form-control color-image-input @error('image') is-invalid @enderror" onchange="validateAndPreviewImage()">
                                            @error('image')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                            @if($ourteam->image)
                                                <div class="mt-2">
                                                    <img id="preview_ourteam_image" src="{{ asset($ourteam->image) }}" width="150" height="120" alt="{{ $ourteam->alt_tag }}">
                                                </div>
                                            @endif
                                        </div>

                                        {{-- Status --}}
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Status <span class="required-star">*</span></label>
                                            <select name="status"
                                                class="form-control @error('status') is-invalid @enderror">
                                                <option value="Active" {{ old('status', $ourteam->status) == 'Active' ? 'selected' : '' }}>Active</option>
                                                <option value="In-Active" {{ old('status', $ourteam->status) == 'In-Active' ? 'selected' : '' }}>Inactive</option>
                                            </select>
                                            @error('status')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        {{-- Alt --}}
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Alt <span class="required-star">*</span></label>
                                            <input type="text" name="alt"
                                                class="form-control @error('alt') is-invalid @enderror"
                                                value="{{ old('alt', $ourteam->alt_tag) }}" placeholder="Enter Alt Here">
                                            @error('alt')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        {{-- Short Description --}}
                                        <div class="card mb-4 border">
                                            <div class="card-header bg-light"><strong>Short Description </strong><span class="required-star">*</span></div>
                                            <div class="card-body">
                                                <textarea name="short_description"
                                                    class="form-control @error('short_description') is-invalid @enderror"
                                                    rows="4" id="short_description">{{ old('short_description', $ourteam->short_description) }}</textarea>
                                                @error('short_description')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        {{-- Description --}}
                                        <div class="card mb-4 border">
                                            <div class="card-header bg-light"><strong>Description </strong><span class="required-star">*</span></div>
                                            <div class="card-body">
                                                <textarea name="description"
                                                    class="form-control @error('description') is-invalid @enderror"
                                                    rows="4" id="description">{{ old('description', $ourteam->description) }}</textarea>
                                                @error('description')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Submit --}}
                                    <div class="text-end mt-4">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                            </form>
                        </div> {{-- End Card Body --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- JS Section --}}
    <script src="{{ asset('public/admin/js/ourteam/ourteam.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#short_description,#description').summernote({
                placeholder: 'Enter Description here...',
                height: 300,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline', 'clear']],
                    ['fontname', ['fontname']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']],
                    ['insert', ['link', 'picture', 'hr']],
                    ['view', ['fullscreen', 'codeview']],
                    ['help', ['help']]
                ]
            });
        });
    </script>
@endsection
