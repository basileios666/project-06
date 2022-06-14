@extends('admin.master')




@section('content')

<style>
    .btn-primary {
        color: #fff;
        background-color: #FF6600;
        border-color: #FF6600;
    }

    .btn-primary:hover {
        color: #FF6600;
        background-color: #fff;
        border-color: #cc5200;
    }
</style>

<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Profile page</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <div class="d-md-flex">
                    <ol class="breadcrumb ms-auto">
                        <li><a href="/dashboard" class="fw-normal">Dashboard</a></li>
                    </ol>

                </div>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- ============================================================== -->

    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <!-- Row -->
        <div class="row">
            <!-- Column -->
            <div class="col-lg-4 col-xlg-3 col-md-12">
                <div class="white-box">
                    <div class="user-bg">
                        <div class="overlay-box">
                            <div class="user-content">
                                <img src="https://icon-library.com/images/my-profile-icon-png/my-profile-icon-png-3.jpg" class="thumb-lg img-circle" alt="img">
                                <br><br>
                                <h4 class="text-white mt-2">{{$admin->admin_name}}</h4>
                                <h4 class="text-white mt-2">{{$admin->admin_email}}</h4>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-8 col-xlg-9 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form class="mb-5" method="post" action="/edit_admin/{{$admin->id}}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0"><b>Name</b></label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" name="name" value="{{$admin->admin_name}}" class="form-control p-0 border-0">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="example-email" class="col-md-12 p-0"><b>Email</b></label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="email" name="email" value="{{$admin->admin_email}}" class="form-control p-0 border-0" name="example-email" id="example-email">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0"><b>Password</b></label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="password" name="pass" value="{{$admin->admin_password}}" class="form-control p-0 border-0">
                                </div>
                            </div>

                            <div class="form-group mb-4">
                                <div class="col-sm-12">

                                    <button type="submit" class="btn btn-primary btn-flat ">Update Profile</button>

                                </div>
                            </div>
                        </form>
                        @if ($message = Session::get('success'))
                        <div class="alert alert-success" role="alert">
                            {{ $message }}
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
        <!-- Row -->
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->

    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
</div>


@endsection