@extends('admin.master')


@section('content')

<style>
    .page-wrapper {
        background-color: #fff
    }

    .borderdiv {
        background-color: rgba(255, 255, 255, 0.714);
        border: 1px solid #FF6600;
        margin-top: 30px;
        padding-bottom: 5%;
    }

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
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Add Categories</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <div class="d-md-flex">
                    {{-- <ol class="breadcrumb ms-auto">
                            <li><a href="#" class="fw-normal">Dashboard</a></li>
                        </ol>
                        <a href="https://www.wrappixel.com/templates/ampleadmin/" target="_blank"
                            class="btn btn-primary d-none d-md-block pull-right ms-3 hidden-xs hidden-sm  ">Save Updates</a> --}}
                </div>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <div class="borderdiv container-fluid w-75">
        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif



        <form action="{{ route('category.update',$categories->id) }}" method="POST" enctype="multipart/form-data">

            @csrf
            @method('put')
            <input type='hidden'name='id' value="{{$categories->id}}">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        <input type="text" value="{{$categories->category_name}}" name="category_name" class="form-control " style="height:50px" placeholder="Name">
                    </div>
                </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>description:</strong>
                        <input type="text" value="{{$categories->category_description}}" name="category_description" class="form-control " style="height:50px" placeholder="description">
                    </div>
                </div>


                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong class="form-label" for="customFile">Upload Category Image </strong>
                        <input type="file"   value="{{$categories->category_image}}" name="category_image" style="height:50px" class="form-control" id="customFile" />
                    </div>
                </div>


            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 ">
                <div class="form-group">

                    <button type="submit" style="height:50px" class="btn btn-primary" id="customFile"> Save Updates</button>
                </div>
            </div>

        </form>
    </div>
</div>

@endsection