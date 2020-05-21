@extends('layouts.app_logged')


@section('content')
<div class="login-page sidebar-collapse">
    <div class="page-header header-filter" style="background-image: url('../assets/img/bg7.jpg'); background-size:cover; background-position: top center;">
        <div class="container">
            <div class="space-30"></div>
            <h1 style="color: white;">Add a note</h1>
            <div class="row">
                <div class="col-lg-10 col-md-10 col-sm-12 ml-auto mr-auto">
                    {!! Form::open(['route'=>'semester.store','method'=>'POST','enctype'=> 'multipart/form-data']) !!}
                        <div class="md-form">
                            <input type="text" id="name" class="form-control" name="name">
                            <label for="name" class="">Semester Name</label>
                        </div>
                        <input type="submit" class="btn btn-success" value="Add Semester">
                        <a class="btn btn-danger" href="/semester">Cancel</a>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

