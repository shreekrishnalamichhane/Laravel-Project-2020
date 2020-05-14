@extends('layouts.app_nonlogged')

@section('content')
<div class="login-page sidebar-collapse">
    <div class="page-header header-filter" style="background-image: url('../assets/img/bg7.jpg'); background-size: cover; background-position: top center;">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
            <form class="form" method="POST" action="{{--{{ route('register') }}--}}">
              @csrf
              <div class="card card-login card-hidden">
                <div class="card-header card-header-primary text-center">
                  <h4 class="card-title">Update your Profile Picture</h4>
                </div>
                <div class="card-body ">
                  <p class="card-description text-center">Please upload your profile picture here.</p>

                  <div class="card-footer justify-content-center">
                  <div id="file-uploader">
                      <div class="row">
                        <div class="col-md-3 col-sm-4">
                          <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                            <div class="fileinput-new thumbnail img-circle img-raised">
                              <img src="assets/img/placeholder.jpg" alt="...">
                            </div>
                            <div class="fileinput-preview fileinput-exists thumbnail img-circle img-raised"></div>
                            <div>
                              <span class="btn btn-raised btn-round btn-success btn-file btn-sm">
                                <span class="fileinput-new">Add Photo</span>
                                <span class="fileinput-exists">Change</span>
                                <input type="file" name="..." /></span>
                              <br />
                              <a href="#pablo" class="btn btn-danger btn-round fileinput-exists btn-sm" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                            </div>
                          </div>
                        </div>
                        </div>
                      </div>
                  </div>
                </div>
                <div class="card-footer justify-content-center">
                  <button type="submit" class="btn btn-primary">
                    Update
                </button>
                </div>
                <div class="card-footer justify-content-end">
                    <p><a href="/home" class="text text-primary">Skip for now</a> </p>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
