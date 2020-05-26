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
        <div class="col-lg-6 col-md-12 text-center">

          <!-- Heading -->
          <div class="text-center mt-3 mb-5">

            <h4 style="color: white;"><strong>{{$user[0]->name}}'s Notes</strong></h4>
            @if($user_id == Auth::user()->id)
                <button type="button" class="btn btn-info btn-rounded mt-4" data-toggle="modal" data-target="#modalSubmitProject">Submit new note <i class="far fa-image ml-1"></i></button>
            @endif


          </div>
          <!-- Heading -->

          <!-- Card row -->
          <div class="card-deck">

            <!-- Card -->
            <div class="card card-cascade narrower card-ecommerce mb-5">

              <!-- Card image -->
              <div class="view view-cascade overlay">
                <img src="{{asset('assets_logged/img/Mockups/Horizontal/6-col/pro-profile-page.jpg')}}" class="img-fluid"
                  alt="">
                <a href="#">
                  <div class="mask"></div>
                </a>
              </div>

              <!-- Card content -->
              <div class="card-body card-body-cascade">

                <!-- Title -->
                <h4 class="card-title">Note name</h4>

                <!-- Text -->
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's
                  content.
                </p>

              </div>

              <!-- Card footer -->
              <div class="card-footer links-light">
                <span class="float-left pt-2">
                  <a><i class="fas fa-share-alt mr-2"></i></a>
                  <a><i class="fas fa-heart-o mr-2"></i>10</a>
                </span>
                <span class="float-right">
                  <a href="#" class="waves-effect p-2">Live Preview <i class="far fa-image ml-1"></i></a>
                </span>
              </div>

            </div>
            <!-- Card -->

            <!-- Card -->
            <div class="card card-cascade narrower card-ecommerce d-flex mb-5">

              <!-- Card image -->
              <div class="view view-cascade overlay">
                <img src="{{asset('assets_logged/img/Mockups/Horizontal/6-col/pro-signup.jpg')}}" class="img-fluid" alt="">
                <a href="#">
                  <div class="mask"></div>
                </a>
              </div>

              <!-- Card content -->
              <div class="card-body card-body-cascade">

                <!-- Title -->
                <h4 class="card-title">Note name</h4>

                <!-- Text -->
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's
                  content.
                </p>
              </div>

              <!-- Card footer -->
              <div class="card-footer links-light">
                <span class="float-left pt-2">
                  <a><i class="fas fa-share-alt mr-2"></i></a>
                  <a><i class="fas fa-heart-o mr-2"></i>10</a>
                </span>
                <span class="float-right">
                  <a href="#" class="waves-effect p-2">Live Preview <i class="far fa-image ml-1"></i></a>
                </span>
              </div>

            </div>
            <!-- Card -->

          </div>
          <!-- Card row -->

          <!-- Card row -->
          <div class="card-deck">

            <!-- Card -->
            <div class="card card-cascade narrower card-ecommerce d-flex mb-5">

              <!-- Card image -->
              <div class="view view-cascade overlay">
                <img src="{{asset('assets_logged/img/Mockups/Horizontal/6-col/pro-pricing.jpg')}}" class="img-fluid" alt="">
                <a href="#">
                  <div class="mask"></div>
                </a>
              </div>

              <!-- Card content -->
              <div class="card-body card-body-cascade">

                <!-- Title -->
                <h4 class="card-title">Note name</h4>

                <!-- Text -->
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's
                  content.
                </p>

              </div>

              <!-- Card footer -->
              <div class="card-footer links-light">

                <span class="float-left pt-2">
                  <a><i class="fas fa-share-alt mr-2"></i></a>
                  <a><i class="fas fa-heart-o mr-2"></i>10</a>
                </span>

                <span class="float-right">
                  <a href="#" class="waves-effect p-2">Live Preview <i class="far fa-image ml-1"></i></a>
                </span>

              </div>

            </div>
            <!-- Card -->

            <!-- Card -->
            <div class="card card-cascade narrower card-ecommerce d-flex mb-5">

              <!-- Card image -->
              <div class="view view-cascade overlay">
                <img src="{{asset('assets_logged/img/Mockups/Horizontal/6-col/pro-landing.jpg')}}" class="img-fluid" alt="">
                <a href="#">
                  <div class="mask"></div>
                </a>
              </div>

              <!-- Card content -->
              <div class="card-body card-body-cascade">

                <!-- Title -->
                <h4 class="card-title">Note name</h4>

                <!-- Text -->
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's
                  content.
                </p>

              </div>

              <!-- Card footer -->
              <div class="card-footer links-light">

                <span class="float-left pt-2">
                  <a><i class="fas fa-share-alt mr-2"></i></a>
                  <a><i class="fas fa-heart-o mr-2"></i>10</a>
                </span>

                <span class="float-right">
                  <a href="#" class="waves-effect p-2">Live Preview <i class="far fa-image ml-1"></i></a>
                </span>
              </div>

            </div>
            <!-- Card -->

          </div>
          <!-- Card row -->

          <!-- Pagination -->
          <nav class="my-4 d-flex justify-content-center">

            <ul class="pagination pagination-circle pg-blue mb-0">

              <!-- First -->
              <li class="page-item disabled clearfix d-none d-md-block"><a class="page-link">First</a></li>

              <!-- Arrow left -->
              <li class="page-item disabled">
                <a class="page-link" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                  <span class="sr-only">Previous</span>
                </a>
              </li>

              <!-- Numbers -->
              <li class="page-item active"><a class="page-link">1</a></li>
              <li class="page-item"><a class="page-link">2</a></li>
              <li class="page-item"><a class="page-link">3</a></li>
              <li class="page-item"><a class="page-link">4</a></li>
              <li class="page-item"><a class="page-link">5</a></li>

              <!-- Arrow right -->
              <li class="page-item">
                <a class="page-link" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                  <span class="sr-only">Next</span>
                </a>
              </li>

              <!-- First -->
              <li class="page-item clearfix d-none d-md-block"><a class="page-link">Last</a></li>

            </ul>
          </nav>
          <!-- Pagination -->

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </section>
    <!-- Section: Profile -->

  </div>
@endsection


