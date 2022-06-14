@extends('pages.layout')


@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5 mb-5">
        {{-- <a id="logout-form" href="{{  Auth::logout()}}"  class="">logout </a> --}}
        {{-- @csrf --}}
        {{-- @method('HEAD') --}}
        {{-- <input type="submit"  href="{{  Auth::logout()}}" value="logout"> --}}
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel" id="mycarousel">
            <ol class="carousel-indicators">
                <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#header-carousel" data-slide-to="1"></li>
                <li data-target="#header-carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active" style="max-height: 90vh;">
                    <img class="position-relative w-100" src="/img/fotis-fotopoulos-DuHKoV44prg-unsplash.jpg"
                        style="min-height: 300px; object-fit: cover;">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 70%;">
                            <h5 class="text-white text-uppercase mb-md-3">Choose a mentor and learn <span
                                    class="font-weight-semi-bold " style="background-color: #ff660057">Programming for
                                    free</span></h5>
                            <h1 class="display-4 text-white mb-md-4">Volunteer Mentors At Your Service</h1>
                            <a href="{{ route('profile.index') }}"
                                class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">View our mentors</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="max-height: 90vh;">
                    <img class="position-relative w-100" src="img/james-harrison-vpOeXr5wmR4-unsplash.jpg"
                        style="min-height: 300px; object-fit: cover;">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">

                        <div class="p-5" style="width: 100%; max-width: 70%;">
                            <h5 class="text-white text-uppercase mb-md-3">Looking for volunteering as a <span
                                    class="font-weight-semi-bold " style="background-color: #ff660057"> programming
                                    mentor!</span></h5>
                            <h1 class="display-4 text-white mb-md-4">Join Our Team of Volunteer Mentors</h1>
                            <a href="{{ route('register') }}"
                                class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Join Us</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="max-height: 90vh;">
                    <img class="position-relative w-100" src="img/fotis-fotopoulos-LJ9KY8pIH3E-unsplash.jpg"
                        style="min-height: 300px; object-fit: cover;">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 80%;">
                            <h5 class="text-white text-uppercase mb-md-3">Providing you with all the best mentors for your
                                needs</h5>
                            <h1 class="display-4 text-white mb-md-4">New Way To Learn Programming From Home and for free
                            </h1>
                            <a href="#about" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Learn
                                More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    @php
    use App\Models\category;
    $data = category::all();

    @endphp




    <!-- Category Start -->

    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Services</h5>
                <h1>Explore Our Topics</h1>
            </div>



            <div class="row">
                @foreach ($data as $data) 
                    <div class="col-lg-4 col-md-6 mb-4 "  >
                        <div class="cat-item position-relative overflow-hidden rounded mb-2">
                            <img class="img-fluid " src="{{ asset('/uploads/Category/' . $data->category_image) }}"
                                class="cat-overlay text-white text-decoration-none" href="" width="100%" style="height: 250px;" >
                         
                                <a class="cat-overlay text-white text-decoration-none" href="">
                                <h4 class="text-white font-weight-medium">{{ $data->category_name }}</h4>
                                <p class="text-white font-weight-medium">{{ $data->category_description }}</p>
                   


                            </a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Category Start -->
    @php
    use App\Models\Course;
    $courses = Course::all();
    @endphp

    <!-- Courses Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Free Online Courses</h5>
                <h1>Mentors Recommend Courses</h1>
            </div>
            <div class="row">
                @foreach ($courses as $course)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="rounded overflow-hidden mb-2">
                            <img class="img-fluid"
                                src="https://online.ejabi.org.jo/wp-content/uploads/2021/08/online-course-blog-header-1.jpg"
                                alt="">
                            <div class="bg-secondary p-4">

                                <p class="h5" href="">{{ $course->name }} Course</p>
                                <p class="h5" href="">{{ $course->description }}</p><br>
                                <a class="h5" href="{{ $course->link }}" target="_blank"
                                    style="text-decoration: underline">Go To The Course</a>
                                <div class="border-top mt-4 pt-4">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5

                                        </h6>
                                        @if (Auth::check())
                                            <form action="{{ route('course.destroy', $course->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete Course</button>
                                            </form>
                                        @endif

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Courses End -->



    {{-- <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Mentors</h5>
                <h1>Meet Our New Volunteer Mentors</h1>
            </div>
            @php
                use App\Models\User;
                $users = User::all();
            @endphp
            <div class="row">

                @foreach ($users as $user)
                    <div style="padding: 20px" class="col-md-6 col-lg-3 text-center team mb-4">
                        <div class="team-item rounded overflow-hidden mb-2">
                            <div class="team-img position-relative">
                                <img style="height: 240px;width:250px" class="img-fluid"
                                    src="{{ asset('uploads/images/' . $user->img) }}" alt="">
                                <div class="team-social">
                                    <a class="btn btn-outline-light  mx-1" href="#">View </a>

                                </div>
                                <div style="background-color: rgb(237, 235, 245)
                                    " class="team-item " class="bg-secondary p-4">
                                    <h3>{{ $user->name }}</h3>
                                    <h6>{{ $user->email }}</h6>
                                    <p class="m-0">{{ $user->mentor_about }}</p>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </div>
    <!-- Team End -->
 --}}


    <!-- About Start -->
    <div id="about" class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img class="img-fluid rounded mb-4 mb-lg-0" src="img/oskar-yildiz-cOkpTiJMGzA-unsplash.jpg" alt="">
                </div>
                <div class="col-lg-7">
                    <div class="text-left mb-4">
                        <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">About Us</h5>
                        <h1>Innovative Way To Learn</h1>
                    </div>
                    <p>Online learning is the newest and most popular form of 
                        distance education today. Within the past decade it has 
                        had a major impact on postsecondary education and the 
                        trend is only increasing. 
                        In this workshop we will explore what the experience of 
                        online learning is like for students and how it has
                        changed the role of the instructor.</p>
                    <a href="{{ route('profile.index') }}"
                        class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">View our mentors</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
@endsection
