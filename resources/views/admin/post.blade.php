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
                    <h4 class="page-title">Questions</h4>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <div class="d-md-flex">
                        <ol class="breadcrumb ms-auto">
                            <li><a href="/dashboard" class="fw-normal">Dashboard</a></li>
                        </ol>

                        <a href="/addcategory"
                            class="btn btn-primary d-none d-md-block pull-right ms-3 hidden-xs hidden-sm  ">Add
                            Question</a>
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
        @elseif ($message = Session::get('status'))
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
                        <h3 class="box-title">Question Tables</h3>

                        <div class="table-responsive">
                            <table class="table text-nowrap">
                                <thead style="background-color: #343a40; color: #fff;">
                                    <tr>
                                        <th class="border-top-0 " style="color: #fff;">Question</th>
                                        <th class="border-top-0 " style="color: #fff;">description</th>
                                         <th class="border-top-0" style="color: #fff;">active</th>
                                        <th class="border-top-0" style="color: #fff;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $value)
                                        <tr>
                                            <td>{{ $value->title }}</td>
                                            <td>{{ $value->body }}</td>
                                            <td>{{ $value->active }}</td>
                                          
                                            <td>
                                                <!--  <form method="get" action="/editPost/{{ $value->id }}/edit" class="d-inline">
                                            @csrf
                                            @method('PUT') 
                                            
                                            <input class="btn btn-success btn-flat" type="submit" value="Edit" name="edit">
                                            </form> -->
                                             

                                                <form method="post" action="{{ route('post.destroy', $value->id) }}"
                                                    class="d-inline">
                                                    @csrf
                                                    <input name="_method" type="hidden" value="DELETE">
                                                    <button type="submit" class="btn btn-danger btn-flat show_confirm"
                                                        data-toggle="tooltip" title='Delete'>Delete</button>
                                                </form>
                                                <a href="{{ route('post.edit', $value->id) }}"
                                                    class="btn btn-primary btn-flat ">Update</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

    <script type="text/javascript">
        $('.show_confirm').click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                    title: `Are you sure you want to delete this category?`,
                    text: "If you delete this, it will delete all mentors under this category.",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    }
                });
        });
    </script>
@endsection
