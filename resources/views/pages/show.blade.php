@extends('pages.layout')


@section('content')

<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <div class="text-center mb-5">
            <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Mentors</h5>
            <h1>Meet Our Volunteer Mentors </h1>
        </div>
        <div class="row">

            @foreach ($users as $user)
            
                <div class="col-md-6 col-lg-3 text-center team mb-4 ">
                    <div class="team-item rounded overflow-hidden mb-2 ">
                        <div class="team-img position-relative">
                            <img style="height: 240px;width:250px" class="img-fluid" src="{{asset('uploads/images/'.$user->img)}}" alt="">
                            <div class="team-social">
                                <a class="btn btn-outline-light  mx-1" href="/mentorSingle/{{ $user->id }}">View </a>
                                
                            </div>
                            <div class="bg-secondary p-4">
                                <h3>{{$user->name}}</h3>
                                <h6>{{$user->email}}</h6>
                                <p class="m-0">{{$user->mentor_about}}</p>
                            </div>
                        </div>
                       
                    </div>
                </div>
                @endforeach
        {{-- <div class="row">

        @foreach ($users as $user)
            
            <div class="col-md-6 col-lg-3 text-center team mb-4">
                <div class="team-item rounded overflow-hidden mb-2">
                    <div class="team-img position-relative">
                        <img class="img-fluid" src="{{asset('uploads/images/'.$user->img)}}" alt="">
                        <div class="team-social">
                            <a class="btn btn-outline-light  mx-1" href="#">View </a>
                            
                        </div>
                    </div>
                    <div class="bg-secondary p-4">
                        <h3>{{$user->name}}</h3>
                        <h6>{{$user->email}}</h6>
                        <p class="m-0">{{$user->mentor_about}}</p>
                    </div>
                </div>
            @endforeach
        </div> --}}




            {{-- <div class="col-md-6 col-lg-3 text-center team mb-4">
                <div class="team-item rounded overflow-hidden mb-2">
                    <div class="team-img position-relative">
                        <img class="img-fluid" src="img/team-2.jpg" alt="">
                        <div class="team-social">
                            <a class="btn btn-outline-light  mx-1" href="#">View </a>
                            
                        </div>
                    </div>
                    <div class="bg-secondary p-4">
                        <h5>Jhon Doe</h5>
                        <p class="m-0">Web Designer</p>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="col-md-6 col-lg-3 text-center team mb-4">
                <div class="team-item rounded overflow-hidden mb-2">
                    <div class="team-img position-relative">
                        <img class="img-fluid" src="img/team-3.jpg" alt="">
                        <div class="team-social">
                            <a class="btn btn-outline-light  mx-1" href="#">View </a>
                            
                        </div>
                    </div>
                    <div class="bg-secondary p-4">
                        <h5>Jhon Doe</h5>
                        <p class="m-0">Web Designer</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 text-center team mb-4">
                <div class="team-item rounded overflow-hidden mb-2">
                    <div class="team-img position-relative">
                        <img class="img-fluid" src="img/team-4.jpg" alt="">
                        <div class="team-social">
                            <a class="btn btn-outline-light  mx-1" href="#">View </a>
                            
                        </div>
                    </div>
                    <div class="bg-secondary p-4">
                        <h5>Jhon Doe</h5>
                        <p class="m-0">Web Designer</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 text-center team mb-4">
                <div class="team-item rounded overflow-hidden mb-2">
                    <div class="team-img position-relative">
                        <img class="img-fluid" src="img/team-1.jpg" alt="">
                        <div class="team-social">
                            <a class="btn btn-outline-light  mx-1" href="#">View </a>
                            
                        </div>
                    </div>
                    <div class="bg-secondary p-4">
                        <h5>Jhon Doe</h5>
                        <p class="m-0">Web Designer</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 text-center team mb-4">
                <div class="team-item rounded overflow-hidden mb-2">
                    <div class="team-img position-relative">
                        <img class="img-fluid" src="img/team-2.jpg" alt="">
                        <div class="team-social">
                            <a class="btn btn-outline-light  mx-1" href="#">View </a>
                            
                        </div>
                    </div>
                    <div class="bg-secondary p-4">
                        <h5>Jhon Doe</h5>
                        <p class="m-0">Web Designer</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 text-center team mb-4">
                <div class="team-item rounded overflow-hidden mb-2">
                    <div class="team-img position-relative">
                        <img class="img-fluid" src="img/team-3.jpg" alt="">
                        <div class="team-social">
                            <a class="btn btn-outline-light  mx-1" href="#">View </a>
                            
                        </div>
                    </div>
                    <div class="bg-secondary p-4">
                        <h5>Jhon Doe</h5>
                        <p class="m-0">Web Designer</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 text-center team mb-4">
                <div class="team-item rounded overflow-hidden mb-2">
                    <div class="team-img position-relative">
                        <img class="img-fluid" src="img/team-4.jpg" alt="">
                        <div class="team-social">
                            <a class="btn btn-outline-light  mx-1" href="#">View </a>
                            
                        </div>
                    </div>
                    <div class="bg-secondary p-4">
                        <h5>Jhon Doe</h5>
                        <p class="m-0">Web Designer</p>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</div>
<!-- Team End -->

@endsection
