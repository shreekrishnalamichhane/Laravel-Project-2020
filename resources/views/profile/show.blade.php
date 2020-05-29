@extends('layouts.app_logged')

@section('additional_stylesheet')
<style>
.card {
    color: white;
    background-color: #2a2a2a;
}
</style>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons'>
<link rel='stylesheet' href='{{asset('assets_logged/css/addons/vuetify.min.css')}}'>
@endsection
@section('content')
<div class="container-fluid">
    <!-- Section: Profile -->
    <section>
      <div class="row mt-5">

        <!-- Grid column -->
        <div class="col-lg-3 col-md-12">

          <!-- Section: Basic Info -->
          <section class="card profile-card card-dark mb-4 text-center">
            <div class="avatar z-depth-1-half">
              <img src="/storage/user_avatar/{{$user[0]->avatar}}" alt="" class="img-fluid">
            </div>
            @if($user[0]->id == Auth::user()->id)
            <form action="/profile/{{Auth::user()->id}}/change_avatar" enctype="multipart/form-data" method="POST">
                @csrf
                {{-- <label> Update Image</label>
                <input type="file" name="avatar">
                <input type="submit" class="btn btn-sm btn-pink"> --}}
                    <div id="app">
                        <v-app>
                            <v-btn color="primary" class="text-none" round depressed :loading="isSelecting" @click="onButtonClick">
                                <v-icon left>
                                    cloud_upload
                                </v-icon>
                                @{{ buttonText }}
                            </v-btn>
                            <input ref="uploader" id="file" class="d-none" type="file" accept="image/png,image/jpeg" @change="onFileChanged" name="avatar">
                        </v-app>
                    </div>
                    {{-- <input type="submit" class="fas fa-caret-square-right" > --}}
                    <button type="submit" class="text-success" > <i class="fas fa-caret-square-right"></i> Update</button>
            </form>
            @endif
            <!-- Card content -->
            <div class="card-body">
              <!-- Title -->
              <h4 class="card-title"><strong>{{$user[0]->name}}</strong></h4>
              {{-- <h5>Web designer at <a href="#">MDBootstrap</a></h5> --}}
              <p class="dark-grey-text">Kathmandu Nepal</p>

              <!-- Social -->
              <a type="button" class="btn-floating btn-small"><i class="fab fa-facebook-f grey-text"></i></a>
              <a type="button" class="btn-floating btn-small"><i class="fab fa-twitter grey-text"></i></a>
              <a type="button" class="btn-floating btn-small"><i class="fab fa-linkedin-in grey-text"></i></a>

              <!-- Text -->
              <p class="card-text mt-3">Some quick example text to build on the card title and make up the bulk of
                the card's content.
              </p>
                @if($user_id == Auth::user()->id)
                    <button type="button" class="btn btn-info btn-rounded btn-sm" data-toggle="modal" data-target="#modalEditProfile">Edit Profile<i class="fas fa-paper-plane ml-2"></i></button>
                @else
                <button type="button" class="btn btn-info btn-rounded btn-sm" data-toggle="modal" data-target="#modalEditProfile">Message<i class="fas fa-comment-alt ml-2"></i></button>
                @endif

                </div>

          </section>
          <!-- Section: Basic Info -->


          <!-- Section: Experience -->
          <section class="card mb-4">
            <div class="card-body">

              <h5 class="text-center mb-4"><strong>{{$user[0]->name}}'s Contributions </strong></h5>

              <ul class="list-unstyled pt-4">
                <li>
                  <p>Questions <span class="badge badge-primary pull-right">14</span></p>
                </li>
                <hr>
                <li>
                  <p>Answers <span class="badge badge-primary pull-right">14</span></p>
                </li>
                <hr>
                <li>
                  <p>Submited projects <span class="badge badge-primary pull-right">14</span></p>
                </li>
                <hr>
                <li>
                  <p>Pull requests <span class="badge badge-primary pull-right">14</span></p>
                </li>

              </ul>

            </div>
          </section>
          <!-- Section: Experience -->

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-lg-6 col-md-12 ">
            <div class="row d-flex">
                <div class=" justify-content-center">
                    <div class="space-40"></div>
                    {{-- {{dd($notes)}} --}}
                    @if(count($notes) < 1)
                    <h1 class="text-center text-white ">There is no notes


                    </h1>
                    @else
                    @foreach ($notes as $note)
                        <div class="col-12">
                            <div class="card" style="width:100%; background-color:#353b50;">

                                <div class="row">
                                    <div class="col-2">
                                        <div class="avatar">
                                            <img src="/storage/user_avatar/{{$note->user->avatar}}" style="height: auto;" class="rounded-circle img img-fluid p-3"  alt="First sample avatar image">
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <h4 class="mt-3 mb-1">{{$note->user->name}}</h4>
                                        <h6 class="">{{$note->created_at}}</h6>
                                    </div>
                                    <div class="col-1">
                                        <ul class="nav navbar-nav nav-flex-icons ml-auto">
                                            <li class="nav-item dropdown">
                                                <button role="button" type="button" class="btn btn-link rounded" data-toggle="dropdown" style="padding:0px;">
                                                    <i class="fas fa-ellipsis-v mt-4 text-white"></i>
                                                </button>

                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                    <a class="dropdown-item" href="/profile" >
                                                        Profile
                                                    </a>
                                                    <a class="dropdown-item" href="/profile" >
                                                        Profile
                                                    </a>
                                                    <a class="dropdown-item" href="/profile" >
                                                        Profile
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="space-20"></div>
                                <div class="row ml-3">
                                    <div class="col-12 ml-4">
                                        <h4  class=" text-white">{{$note->title}}</h4>
                                    </div>
                                    <div class="col-12 ml-4">
                                        <p>{{$note->description}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-10">
                                        <a href="/notefilter/semester={{$note->semester_id}}&subject={{$note->subject_id}}" class="chip cyan  waves-effect waves-effect ml-5 text-white">
                                            <i class="fas fa-book-reader"></i>  <strong>{{$note->subject->name}}</strong>
                                        </a>
                                    </div>
                                    <div class="col-2">
                                        <a href="{{url('/notes')}}/{{$note->id}}?{{$note->title}}"  target="_blank" type="button" class="btn-floating btn-small waves-effect waves-light btn-purple float-right" data-toggle="tooltip" data-placement="top" title="" data-original-title="View"><i class="fas fa-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="space-20"></div>
                    @endforeach
                    {{$notes->links()}}
                    @endif
                </div>
            </div>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </section>
    <!-- Section: Profile -->

  </div>
@endsection


