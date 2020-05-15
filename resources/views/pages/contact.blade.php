@extends('layouts.app_nonlogged')

@section('content')
<div class="sections-page sidebar-collapse">
    <div class="main">
      <div class="cd-section" id="contactus">
        <div class="contactus-1 section-image" style="background-image: url('assets_nonlogged/img/bg8.jpg')">
          <div class="container mt-5">
            <div class="row">
              <div class="col-md-5">
                <h2 class="title">Get in Touch</h2>
                <h5 class="description">You need more information? Check what other persons are saying about our product. They are very happy with their purchase.</h5>
                <div class="info info-horizontal">
                  <div class="icon icon-primary">
                    <i class="material-icons">pin_drop</i>
                  </div>
                  <div class="description">
                    <h4 class="info-title">Find us at the office</h4>
                    <p class="description"> Bld Mihail Kogalniceanu, nr. 8,
                      <br> 7652 Bucharest,
                      <br> Romania
                    </p>
                  </div>
                </div>
                <div class="info info-horizontal">
                  <div class="icon icon-primary">
                    <i class="material-icons">phone</i>
                  </div>
                  <div class="description">
                    <h4 class="info-title">Give us a ring</h4>
                    <p class="description"> Michael Jordan
                      <br> +40 762 321 762
                      <br> Mon - Fri, 8:00-22:00
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-5 ml-auto">
                <div class="card card-contact">
                  <form id="contact-form" method="POST">
                    <div class="card-header card-header-raised card-header-primary text-center">
                      <h4 class="card-title">Contact Us</h4>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group label-floating is-empty">
                            <label class="bmd-label-floating">First name</label>
                            <input type="text" name="name" class="form-control">
                            <span class="material-input"></span>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group label-floating is-empty">
                            <label class="bmd-label-floating">Last name</label>
                            <input type="text" name="name" class="form-control">
                            <span class="material-input"></span>
                          </div>
                        </div>
                      </div>
                      <div class="form-group label-floating is-empty">
                        <label class="bmd-label-floating">Email address</label>
                        <input type="email" name="email" class="form-control">
                        <span class="material-input"></span>
                      </div>
                      <div class="form-group label-floating is-empty">
                        <label class="bmd-label-floating">Subject</label>
                        <input type="text" name="subject" class="form-control">
                        <span class="material-input"></span>
                      </div>
                      <div class="form-group label-floating is-empty">
                        <label for="exampleMessage1" class="bmd-label-floating">Your Message</label>
                        <textarea name="message" class="form-control" id="exampleMessage1" rows="6"></textarea>
                        <span class="material-input"></span>
                      </div>
                    </div>
                    <div class="card-footer justify-content-center">
                      <button type="submit" class="btn btn-primary pull-right">Send Message</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
