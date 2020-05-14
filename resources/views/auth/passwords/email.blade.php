@extends('layouts.app_nonlogged')

@section('content')
<div class="login-page sidebar-collapse">
    <div class="page-header header-filter" style="background-image: url('../assets/img/bg7.jpg'); background-size: cover; background-position: top center;">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
            <form class="form" method="POST" action="{{ route('password.email') }}">
              @csrf
              <div class="card card-login card-hidden">
                <div class="card-header card-header-primary text-center">
                  <h4 class="card-title">Reset Password</h4>
                </div>
                <div class="card-body ">
                  <span class="bmd-form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">email</i>
                        </span>
                      </div>
                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email..." name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                      @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                  </span>
                </div>
                <div class="card-footer justify-content-center">
                  <button type="submit" class="btn btn-primary">
                    {{ __('Send Password Reset Link') }}
                </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
