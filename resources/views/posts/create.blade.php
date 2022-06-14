
@extends('pages.layout')




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
<hr>
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-12 col-md-4 col-sm-4 col-xs-12 mt-4">
             <h4 class="page-title mt-4"style='text-align:center'>Add Question</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <div class="d-md-flex">
                 
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


        <form action="{{ route('posts.store') }}" method="POST" >
            @csrf
            <div class="row ">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-4 ">
                    <div class="form-group ">
                        <strong >Question:</strong>
                        <input type="text" name="title" class="form-control" required style="height:50px" placeholder="">
                    </div>
                </div>


                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong class="form-label" for="customFile">Description </strong>
                          <textarea name="body" rows="10" cols="30" class="form-control" required></textarea>
                    </div>
                </div>


            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 ">
                <div class="form-group">

                    <button type="submit" style="height:50px" class="btn btn-primary" id="customFile"> submit</button>
                </div>
            </div>

        </form>
    </div>
</div>


@endsection