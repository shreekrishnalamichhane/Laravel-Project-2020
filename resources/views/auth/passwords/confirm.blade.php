@extends('layouts.app_nonlogged')

@section('content')
<div class="login-page sidebar-collapse">
    <div class="page-header header-filter" style="background-image: url('../assets_nonlogged/img/bg7.jpg'); background-size: cover; background-position: top center;">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
            <form class="form" method="POST" action="{{ route('password.confirm') }}">
              @csrf
              <div class="card card-login card-hidden">
                <div class="card-header card-header-danger text-center">
                  <h4 class="card-title">Please Confirm your password</h4>
                  <h4 class="card-title">before proceeding.</h4>
                  {{-- <div class="social-line">
                    <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                      <i class="fa fa-facebook-square"></i>
                    </a>
                    <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                      <i class="fa fa-twitter"></i>
                    </a>
                    <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                      <i class="fa fa-google-plus"></i>
                    </a>
                  </div> --}}
                </div>
                <div class="card-body ">
                  <span class="bmd-form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">lock_outline</i>
                        </span>
                      </div>
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password..." name="password" required autocomplete="current-password">
                      @error('password')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                  </span>
                </div>
                <div class="card-footer justify-content-center">
                  <button type="submit" class="btn btn-danger">
                    {{ __('Confirm Password') }}
                </button>

                </div>
                @if (Route::has('password.request'))
                  <a class="btn btn-link" href="{{ route('password.request') }}">
                      {{ __('Forgot Your Password?') }}
                  </a>
                @endif
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
