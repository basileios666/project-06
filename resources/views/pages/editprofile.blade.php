@extends('pages.layout')



@section('content')
<section  >
    <div class="container py-5">
    
  
      <div class="row">
        <div class="col-lg-4">
          <div class="card mb-4">
            <div class="card-body text-center">
              <img style="width: 180px;border-radius: 15%" src="{{asset('uploads/images/'.Auth::user()->img)}}" alt="mentor image"
                class=" img-fluid" > <br><br>

                {{-- change image --}}
                <form method="POST" action="{{  route('image.update',Auth::user()->id) }} "enctype="multipart/form-data">
                  @method('PUT')

                  @csrf
                <div class="input-group">
              
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" name="img" id="img" 
                      aria-describedby="inputGroupFileAddon01">
                    <label class="custom-file-label" for="inputGroupFile01" >Change image</label>
                  </div>
                </div><br>

                <input class="btn btn-primary ml-2" type="submit" value="Save">
                </form>
               {{-- end change image --}}

              <h5 class="my-3">{{Auth::user()->name}}</h5>
              <h5 class="my-3">{{Auth::user()->email}}</h5>
              <p class="text-muted mb-1">{{Auth::user()->mentor_about}}</p>
              
             
                <a href="{{ route('profile.edit',Auth::user()->id) }}"  type="button" class="btn btn-outline-primary" >Back To Profile </a>
              </div>
            </div>
          </div>
          {{-- <div class="card mb-4 mb-lg-0">
            <div class="card-body p-0">
              <ul class="list-group list-group-flush rounded-3">
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <i class="fas fa-globe fa-lg text-warning"></i>
                  <p class="mb-0">https://mdbootstrap.com</p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <i class="fab fa-github fa-lg" style="color: #333333;"></i>
                  <p class="mb-0">mdbootstrap</p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
                  <p class="mb-0">@mdbootstrap</p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
                  <p class="mb-0">mdbootstrap</p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                  <p class="mb-0">mdbootstrap</p>
                </li>
              </ul>
            </div>
          </div>
        </div> --}}
        <div class="col-lg-8">
          <div class="card mb-4">
            <div class="card-body">

                <form method="POST" action="{{  route('profile.update',Auth::user()->id) }} "enctype="multipart/form-data">

                  @method('PATCH')
                  @csrf

              <div class="row">
                <div class="col-sm-3">
                  <label class="mb-0">Full Name</label>
                </div>
                <div class="col-sm-9">
                  <input class="form-control" type="text" name="name"  id="name"  value="{{Auth::user()->name}}" class="mb-0"> 
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <label class="mb-0">Email</label>
                </div>
                <div class="col-sm-9">
                    <input class="form-control" type="email" name="email"  id="email"  value="{{Auth::user()->email}}" class="text-muted mb-0"> 
                  
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <label class="mb-0">Password</label>
                </div>
                <div class="col-sm-9">
                  <input class="form-control" type="password" name="password"  id="email"  value="{{Auth::user()->password}}" class="text-muted mb-0"> 
                  
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <label class="mb-0">Field</label>
                </div>
                <div class="col-sm-9">
                    @php
                    use App\Models\category;
                    $cat = category::all();
                     @endphp
                 <select class="form-control" name="mentor_category" id="">
                  @foreach ($cat as $allCat)

                  <option value="1">{{$allCat->category_name}}</option>
                  @endforeach                 </select>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <label class="mb-0">About</label>
                </div>
                <div class="col-sm-9">
                  <textarea name="mentor_about" id="" rows="4" cols="50">{{Auth::user()->mentor_about}}</textarea> 
                  
                </div>
              </div>

              {{-- <div class="row">
                <div class="col-sm-3">
                  <label class="mb-0">change image</label>
                </div>
                <div class="col-sm-9">
                 <input type="file" name="img" id="img" value="{{Auth::user()->img}}">
                  
                </div>
              </div> --}}

              {{-- <div class="row">
                <div class="col-sm-3">
                  <label class="mb-0">Phone</label>
                </div>
                <div class="col-sm-9">
                    <input type="text" name="phonenumber" class="text-muted mb-0"> 
 
                </div> --}}
                
              </div>
              <input style="width:130px;margin-left:45%" type="submit" class="btn btn-primary" value="Update">

           
             <br><br>

                </form>
            
          {{-- <div class="row">
            <div class="col-md-6">
              <div class="card mb-4 mb-md-0">
                <div class="card-body">
                  <p class="mb-4"><span class="text-primary font-italic me-1">assigment</span> Project Status
                  </p>
                  <p class="mb-1" style="font-size: .77rem;">Web Design</p>
                  <div class="progress rounded" style="height: 5px;">
                    <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
                  <div class="progress rounded" style="height: 5px;">
                    <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
                  <div class="progress rounded" style="height: 5px;">
                    <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
                  <div class="progress rounded" style="height: 5px;">
                    <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
                  <div class="progress rounded mb-2" style="height: 5px;">
                    <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card mb-4 mb-md-0">
                <div class="card-body">
                  <p class="mb-4"><span class="text-primary font-italic me-1">assigment</span> Project Status
                  </p>
                  <p class="mb-1" style="font-size: .77rem;">Web Design</p>
                  <div class="progress rounded" style="height: 5px;">
                    <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
                  <div class="progress rounded" style="height: 5px;">
                    <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
                  <div class="progress rounded" style="height: 5px;">
                    <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
                  <div class="progress rounded" style="height: 5px;">
                    <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
                  <div class="progress rounded mb-2" style="height: 5px;">
                    <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div> --}}
        </div>
      </div>
    </div>
  </section>

@endsection