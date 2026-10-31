@extends('admin.layouts.app')
@section('content')
<div class="body d-flex py-3">
    <div class="container-xxl">
        <div class="row g-3 mb-3">

            <div class="col-lg-4 col-12">
                <div class="alert-success alert mb-0">
                    <div class="d-flex align-items-center">
                        <div class="avatar rounded no-thumbnail bg-success text-light">
                            <i class="fa fa-cubes fa-lg"></i>
                        </div>
                        <div class="flex-fill ms-3 text-truncate">
                            <div class="h6 mb-0">Total Products</div>
                            <span class="small"></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-12">
                <div class="alert-danger alert mb-0">
                    <div class="d-flex align-items-center">
                        <div class="avatar rounded no-thumbnail bg-danger text-light">
                            <i class="fa fa-envelope-open fa-lg"></i>
                        </div>
                        <div class="flex-fill ms-3 text-truncate">
                            <div class="h6 mb-0">Total Inquiries</div>
                            <span class="small"></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-12">
                <div class="alert-info alert mb-0">
                    <div class="d-flex align-items-center">
                        <div class="avatar rounded no-thumbnail bg-info text-light">
                            <i class="fa fa-clipboard fa-lg"></i>
                        </div>
                        <div class="flex-fill ms-3 text-truncate">
                            <div class="h6 mb-0">Total Applications</div>
                            <span class="small"></span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
