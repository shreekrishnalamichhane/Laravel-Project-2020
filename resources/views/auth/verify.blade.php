@extends('layouts.app_nonlogged')

@section('content')
<div class="login-page sidebar-collapse">
    <div class="page-header header-filter" style="background-image: url('../assets_nonlogged/img/bg7.jpg'); background-size: cover; background-position: top center;">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
              <div class="card card-login card-hidden">
                <div class="card-header card-header-primary text-center">
                  <h4 class="card-title">{{ __('Verify Your Email Address') }}</h4>
                </div>
                <div class="card-body ">
                  <span class="bmd-form-group">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif
                        <div class="text-center">
                            <h5>Before proceeding, please check your email for a verification link.</h5>
                            <h5>If you did not receive the email</h5>
                        </div>
                  </span>
                </div>
                <div class="card-footer justify-content-center">
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-primary">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
