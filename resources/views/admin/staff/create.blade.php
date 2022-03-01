@extends('admin.layouts.app')
@section('main-section')

<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Create Data</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Staff</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->
        <div class="row row-cols-1 row-cols-2">


            <div class="col">
                <h6 class="mb-0 text-uppercase">Add new Staff</h6>
                <br>

                @if( $errors -> any() )
                    
                    <div class="alert border-0 border-start border-5 border-danger alert-dismissible fade show py-2">
                        <div class="d-flex align-items-center">
                            <div class="font-35 text-danger"><i class="bx bxs-message-square-x"></i>
                            </div>
                            <div class="ms-3">
                                <h6 class="mb-0 text-danger">Danger Alerts</h6>
                                <div>{{ $errors -> first() }}</div>
                            </div>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if( Session::has('success') )
                    <p class="alert alert-success d-flex justify-content-between">{{ Session::get('success') }} <button class="btn-close" data-bs-dismiss="alert"></button></p>
                @endif

                <hr>
                <div class="card border-top border-0 border-4 border-primary">
                    <div class="card-body p-5">
                        <div class="card-title d-flex align-items-center">
                            <div><i class="bx bxs-user me-1 font-22 text-primary"></i>
                            </div>
                            <h5 class="mb-0 text-primary">Create a staff</h5>
                        </div>
                        <hr>
                        <form class="row g-3" action="{{ route('staff.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf 

                            <div class="col-md-12">
                                <label for="inputFirstName" class="form-label">Staff Name</label>
                                <input name="name" type="text" class="form-control" id="inputFirstName">
                            </div>
                            <div class="col-md-12">
                                <label for="inputFirstName" class="form-label">Facebook</label>
                                <input name="fb" type="text" class="form-control" id="inputFirstName">
                            </div>

                            <div class="col-md-12">
                                <label for="inputFirstName" class="form-label">Twitter</label>
                                <input name="tw" type="text" class="form-control" id="inputFirstName">
                            </div>

                            <div class="col-md-12">
                                <label for="inputFirstName" class="form-label">Linked</label>
                                <input name="lin" type="text" class="form-control" id="inputFirstName">
                            </div>

                            <div class="col-md-12">
                                <label for="inputFirstName" class="form-label">Instagram</label>
                                <input name="ins" type="text" class="form-control" id="inputFirstName">
                            </div>

                            <div class="mb-3">
                                <label for="formFile" class="form-label">Upload Staff photo</label>
                                <input name="photo" class="form-control" type="file" id="formFile">
                            </div>
                            
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary px-5">Create new Staff</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>



        </div>

    </div>
</div>



@endsection