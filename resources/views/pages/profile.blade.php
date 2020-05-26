@extends('layouts.app_logged')

@section('additional_stylesheet')
<style>
.card {
    color: white;
    background-color: #2a2a2a;
}
</style>
@endsection
@section('content')
<div class="container-fluid">

    <!-- Section: Modals -->
    <section>

      <!-- Modal: modalEditProfile -->
      <div class="modal fade" id="modalEditProfile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog cascading-modal modal-lg" role="document">
          <!-- Content -->
          <div class="modal-content">

            <!-- Modal cascading tabs -->
            <div class="modal-c-tabs">

              <!-- Nav tabs -->
              <ul class="nav md-tabs tabs-2 light-blue darken-3" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#panel77" role="tab"><i class="fas fa-user mr-1"></i>
                    Public info</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#panel88" role="tab"><i class="fas fa-lock mr-1"></i>
                    Account</a>
                </li>
              </ul>

              <!-- Tab panels -->
              <div class="tab-content">
                <!-- Panel 7 -->
                <div class="tab-pane fade in show active" id="panel77" role="tabpanel">

                  <!-- Body -->
                  <div class="modal-body mb-1">

                    <!-- Grid row -->
                    <div class="row">

                      <!-- Grid column -->
                      <div class="col-md-6">

                        <!-- First Name -->
                        <div class="md-form form-sm">
                          <input type="text" id="editProfile1" class="form-control">
                          <label for="editProfile1" class="">First name</label>
                        </div>

                      </div>
                      <!-- Grid column -->

                      <!-- Grid column -->
                      <div class="col-md-6">

                        <!-- Last Name -->
                        <div class="md-form form-sm">
                          <input type="text" id="editProfile2" class="form-control">
                          <label for="editProfile2" class="">Last name</label>
                        </div>

                      </div>
                      <!-- Grid column -->

                      <!-- Grid column -->
                      <div class="col-md-6">

                        <!-- Position -->
                        <div class="md-form form-sm">
                          <input type="text" id="editProfile3" class="form-control">
                          <label for="editProfile3" class="">Position</label>
                        </div>

                      </div>
                      <!-- Grid column -->

                      <!-- Grid column -->
                      <div class="col-md-6">

                        <!-- Company Name -->
                        <div class="md-form form-sm">
                          <input type="text" id="editProfile4" class="form-control">
                          <label for="editProfile4" class="">Company name</label>
                        </div>

                      </div>
                      <!-- Grid column -->

                      <!-- Grid column -->
                      <div class="col-md-12">

                        <!-- Company website -->
                        <div class="md-form form-sm">
                          <input type="text" id="editProfile5" class="form-control">
                          <label for="editProfile5" class="">Company website</label>
                        </div>

                      </div>
                      <!-- Grid column -->

                      <!-- Grid column -->
                      <div class="col-md-6">

                        <!-- Country -->
                        <select class="mdb-select colorful-select dropdown-primary" searchable="Search here..">
                          <option value="" disabled selected>Choose your country</option>
                          <option value="1">USA</option>
                          <option value="2">Germany</option>
                          <option value="3">France</option>
                          <option value="3">Poland</option>
                          <option value="3">Japan</option>
                        </select>

                      </div>
                      <!-- Grid column -->

                      <!-- Grid column -->
                      <div class="col-md-6">

                        <!-- City -->
                        <div class="md-form form-sm mt-2">
                          <input type="text" id="editProfile6" class="form-control">
                          <label for="editProfile6" class="">City</label>
                        </div>

                      </div>
                      <!-- Grid column -->

                      <!-- Grid column -->
                      <div class="col-md-12">

                        <!-- Description -->
                        <div class="md-form ">
                          <textarea type="text" id="editProfile7" class="md-textarea col-12"></textarea>
                          <label for="editProfile7">Description</label>
                        </div>

                      </div>
                      <!-- Grid column -->

                      <!-- Grid column -->
                      <div class="col-md-6">

                        <!-- Facebook -->
                        <div class="md-form form-sm mt-2">
                          <input type="text" id="editProfile8" class="form-control">
                          <label for="editProfile8" class="">Facebook</label>
                        </div>

                      </div>
                      <!-- Grid column -->

                      <!-- Grid column -->
                      <div class="col-md-6">

                        <!-- Twitter -->
                        <div class="md-form form-sm mt-2">
                          <input type="text" id="editProfile9" class="form-control">
                          <label for="editProfile9" class="">Twitter</label>
                        </div>

                      </div>
                      <!-- Grid column -->

                      <!-- Grid column -->
                      <div class="col-md-6">

                        <!-- LinkedIn -->
                        <div class="md-form form-sm mt-2">
                          <input type="text" id="editProfile10" class="form-control">
                          <label for="editProfile10" class="">LinkedIn</label>
                        </div>

                      </div>
                      <!-- Grid column -->

                      <!-- Grid column -->
                      <div class="col-md-6">

                        <!-- Dribbble -->
                        <div class="md-form form-sm mt-2">
                          <input type="text" id="editProfile11" class="form-control">
                          <label for="editProfile11" class="">Dribbble</label>
                        </div>

                      </div>
                      <!-- Grid column -->

                    </div>
                    <!-- Grid row -->

                  </div>
                  <!-- Footer -->
                  <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes <i class="fas fa-check ml-1"></i></button>
                  </div>

                </div>
                <!-- Panel 7 -->

                <!-- Panel 8 -->
                <div class="tab-pane fade" id="panel88" role="tabpanel">

                  <!-- Body -->
                  <div class="modal-body">
                    <div class="md-form form-sm">
                      <input type="text" id="form224" class="form-control">
                      <label for="form24">User name</label>
                    </div>

                    <div class="md-form form-sm">
                      <input type="text" id="form24" class="form-control">
                      <label for="form24">Email address</label>
                    </div>

                    <p class="h5 text-center mt-5">Password change</p>

                    <div class="md-form form-sm">
                      <input type="password" id="form25" class="form-control">
                      <label for="form25">Current password</label>
                    </div>

                    <div class="md-form form-sm">
                      <input type="password" id="form26" class="form-control">
                      <label for="form26">New password</label>
                    </div>

                    <div class="md-form form-sm">
                      <input type="password" id="form27" class="form-control">
                      <label for="form27">Confirm new password</label>
                    </div>

                  </div>
                  <!-- Footer -->
                  <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes <i class="fas fa-check ml-1"></i></button>
                  </div>

                </div>
                <!-- Panel 8 -->
              </div>

            </div>
          </div>
          <!-- Content -->
        </div>
      </div>
      <!-- Modal: modalEditProfile -->

      <!-- Modal: modalFeedback -->
      <div class="modal fade" id="modalFeedback" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog cascading-modal modal-lg" role="document">

          <!-- Content -->
          <div class="modal-content">

            <!-- Header -->
            <div class="modal-header light-blue darken-3 white-text">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>

            <!-- Body -->
            <div class="modal-body mb-0">
            </div>

            <!-- Footer -->
            <div class="modal-footer justify-content-center">
              <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Send <i class="fas fa-paper-plane ml-1"></i></button>
            </div>

          </div>
          <!-- Content -->

        </div>
      </div>
      <!-- Modal: modalFeedback -->

      <!-- Modal: modalAchievment -->
      <div class="modal fade" id="modalAchievment" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog cascading-modal" role="document">

          <!-- Content -->
          <div class="modal-content">

            <!-- Header -->
            <div class="modal-header light-blue darken-3 white-text">
              <h4 class=""><i class="far fa-newspaper"></i> Bootstrap Master</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>

            <!-- Body -->
            <div class="modal-body mb-0">

              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam quibusdam modi veritatis non
                accusamus distinctio consequuntur aliquam, assumenda tempore in illum aspernatur quia,
                minus ex! Eius tenetur praesentium, consectetur quod!</p>

            </div>

            <!-- Footer -->
            <div class="modal-footer justify-content-center">
              <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Go to <i class="fas fa-arrow-right ml-1"></i></button>
            </div>

          </div>
          <!-- Content -->

        </div>
      </div>
      <!-- Modal: modalAchievment -->

      <!-- Modal: modalContactUser -->
      <div class="modal fade mt-lg-2" id="modalContactUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog cascading-modal modal-lg" role="document">

          <!-- Content -->
          <div class="modal-content">

            <!-- Header -->
            <div class="modal-header light-blue darken-3 white-text">
              <h4 class=""><i class="fas fa-envelope-o"></i> New Message</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>

            <!-- Body -->
            <div class="modal-body col-12">

              <!-- Basic textarea -->
              <div class="md-form">
                <textarea type="text" id="modalContactUser1" class="md-textarea col-12" style="height: 150px;"></textarea>
                <label for="modalContactUser1">Your message</label>
              </div>

            </div>

            <!-- Footer -->
            <div class="modal-footer justify-content-center">
              <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
              <button type="button" class="btn btn-primary">Send <i class="fas fa-paper-plane ml-1"></i></button>
            </div>

          </div>
          <!-- Content -->

        </div>
      </div>
      <!-- Modal: modalContactUser -->

      <!-- Modal: modalSubmitProject -->
      <div class="modal fade" id="modalSubmitProject" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog cascading-modal" role="document">

          <!-- Content -->
          <div class="modal-content">

            <!-- Header -->
            <div class="modal-header light-blue darken-3 white-text">
              <h4 class=""><i class="far fa-newspaper"></i> Submit new project</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>

            <!-- Body -->
            <div class="modal-body mb-0">

              <!-- Name -->
              <div class="md-form form-sm">
                <input type="text" id="newProject1" class="form-control">
                <label for="newProject1" class="">Project name</label>
              </div>

              <!-- Project URL address -->
              <div class="md-form form-sm">
                <input type="text" id="newProject2" class="form-control">
                <label for="newProject2" class="">Project URL address</label>
              </div>

              <!-- Image URL -->
              <div class="md-form form-sm">
                <input type="text" id="newProject3" class="form-control">
                <label for="newProject3" class="">Image URL</label>
              </div>

              <!-- Description -->
              <div class="md-form">
                <textarea type="text" id="newProject4" class="md-textarea"></textarea>
                <label for="newProject4">Description</label>
              </div>

            </div>

            <!-- Footer -->
            <div class="modal-footer justify-content-center">
              <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Submit <i class="fas fa-check ml-1"></i></button>
            </div>

          </div>
          <!-- Content -->

        </div>
      </div>
      <!-- Modal: modalSubmitProject -->

    </section>
    <!-- Section: Modals -->

    <!-- Section: Profile -->
    <section>

      <!-- Grid row -->
      <div class="row mt-5">

        <!-- Grid column -->
        <div class="col-lg-4 col-md-12">

          <!-- Section: Basic Info -->
          <section class="card profile-card card-dark mb-4 text-center">
            <div class="avatar z-depth-1-half">
              <img src="{{asset('assets_logged/img/Photos/Avatars/img%20(8).jpg')}}" alt="" class="img-fluid">
            </div>
            <!-- Card content -->
            <div class="card-body">
              <!-- Title -->
              <h4 class="card-title"><strong>John Doe</strong></h4>
              <h5>Web designer at <a href="#">MDBootstrap</a></h5>
              <p class="dark-grey-text">Warsaw, Poland</p>

              <!-- Social -->
              <a type="button" class="btn-floating btn-small"><i class="fab fa-facebook-f grey-text"></i></a>
              <a type="button" class="btn-floating btn-small"><i class="fab fa-twitter grey-text"></i></a>
              <a type="button" class="btn-floating btn-small"><i class="fab fa-linkedin-in grey-text"></i></a>

              <!-- Text -->
              <p class="card-text mt-3">Some quick example text to build on the card title and make up the bulk of
                the card's content.
              </p>
              <button type="button" class="btn btn-info btn-rounded btn-sm" data-toggle="modal" data-target="#modalEditProfile">Edit Profile<i
                  class="fas fa-paper-plane ml-2"></i></button>
            </div>

          </section>
          <!-- Section: Basic Info -->


          <!-- Section: Experience -->
          <section class="card mb-4">
            <div class="card-body">

              <h5 class="text-center mb-4"><strong>John's Contributions </strong></h5>

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
        <div class="col-lg-8 col-md-12 text-center">

          <!-- Heading -->
          <div class="text-center mt-3 mb-5">

            <h4 style="color: white;"><strong>John's Notes</strong></h4>

            <button type="button" class="btn btn-info btn-rounded mt-4" data-toggle="modal" data-target="#modalSubmitProject">Submit
              new note <i class="far fa-image ml-1"></i></button>

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


