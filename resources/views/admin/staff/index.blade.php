@extends('admin.layouts.app')


@section('main-section')

<style>
    /* The switch - the box around the slider */
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

/* Hide default HTML checkbox */
.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>

<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Students</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">All Student Data</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->
        <h6 class="mb-0 text-uppercase">All Students</h6>
        <hr>
        <div class="card">
            <div class="card-body">
                
                <table class="table table-striped" id="staff_table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Photo</th>
                            <th>status</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($all_data as $staff)
                            <tr>
                                <td>1</td>
                                <td>{{  $staff -> name }}</td>
                                <td><img style="width:60px; height:60px; object-fit:cover;" src="{{ url('storage/staff/' . $staff ->  photo ) }}" alt=""></td>
                                <td>
                                    <label class="switch">
                                        <input type="checkbox" @if($staff -> status)  checked @endif>
                                        <span class="slider round"></span>
                                    </label>
                                </td>
                                <td>
                                    <a href="{{ route('staff.show', $staff -> id ) }}" class="btn btn-sm btn-info">View</a>
                                    <a href="#" class="btn btn-sm btn-warning">Edit</a>
                                    <form action="{{ route('staff.destroy', $staff -> id ) }}" class="d-inline" method="POST">
                                        @csrf 
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>

                                </td>
                            </tr>
                        @empty
                            
                        @endforelse
                       

    
                    </tbody>
                </table>
                
            </div>
        </div>


    </div>
</div>  


@endsection