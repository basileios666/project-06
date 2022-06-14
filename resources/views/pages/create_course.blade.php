@extends('pages.layout')

@section('content')
    <div class="text-center mb-5">
        <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;"></h5>
        <h1>Suggest A Course</h1>
    </div>

    @if ($message = Session::get('message'))
    <div class="container">
        <div class="alert alert-success" role="alert">
            {{$message}}
        </div>
    </div>
    @endif
        
    <div class="container" style="width: 50%">
        <form action="{{route('course.store')}}" method="POST">
            @csrf
            <div class="form-group">
              <label for="name">Course Name</label>
              <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="description">Course Description</label>
              <input name="description" type="text" class="form-control" id="name">
            </div>
            <div class="form-group">
                <label for="link">Course Link</label>
                <input name="link" type="text" class="form-control" id="link">
              </div>
            <button type="submit" class="btn btn-primary">Submit Course</button>
            <a class="btn btn-primary" href="/">Go To Home</a>
    </form>
    </div>
@endsection

