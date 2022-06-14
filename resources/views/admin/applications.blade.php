@extends('admin.master')



<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>


@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

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
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Applications</h4>
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
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->

    @if ($message = Session::get('success'))
    <div class="alert alert-success" role="alert">
        {{ $message }}
    </div>
    @endif
    <!-- Container fluid  -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->


        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title">Waiting Applications</h3>

                    <div class="table-responsive">
                        <table class="table text-nowrap">
                            <thead style="background-color: #343a40; color: #fff;">
                                <tr>
                                    <th class="border-top-0 " style="color: #fff;">Name </th>
                                    <th class="border-top-0" style="color: #fff;"> Email </th>
                                    <th class="border-top-0" style="color: #fff;"> Age</th>
                                    <th class="border-top-0" style="color: #fff;">Education</th>
                                    <th class="border-top-0 w-25" style="color: #fff;">Purpose</th>
                                    <th class="border-top-0" style="color: #fff;">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $value)
                                <tr>
                                    <td>{{ $value->name }}</td>
                                    <td>{{ $value->email }}</td>
                                    <td>{{ $value->age }}</td>
                                    <td>{{ $value->education }}</td>
                                    <td class="text-wrap">{{ $value->purpose }}</td>


                                    <td>
                                        <form method="post" action="{{ route('send-mail.store')}}">
                                            @csrf
                                            @method('POST')

                                            <input type="hidden" name="userName" value="{{ $value->name }}">
                                            <input type="hidden" name="userEmail" value="{{ $value->email }}">
                                            <input type="hidden" name="userAge" value="{{ $value->age }}">
                                            <input type="hidden" name="userEducation" value="{{ $value->education }}">
                                            <input type="submit" value="Accept" name="sender"
                                                class="btn btn-success btn-flat ">


                                        </form>

                                        <form method="post" action="/app/{{ $value->id }}" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <input name="_method" type="hidden" value="DELETE">
                                            <button type="submit" class="btn btn-danger btn-flat show_confirm"
                                                data-toggle="tooltip" title='Delete'>Ignore</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @if(Session('message'))
                            <div  style="background-color:aquamarine;width:290px">
                               <h3>{{Session('message')}}</h3> 
                            </div>
                            
                            @endif
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

    
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

<script type="text/javascript">
    $('.show_confirm').click(function (event) {
        var form = $(this).closest("form");
        var name = $(this).data("name");
        event.preventDefault();
        swal({
            title: `Are you sure you want to ignore this application?`,
            // text: "If you delete this",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    form.submit();
                }
            });
store
    });
</script>

    
@endsection