@extends('layouts.app_logged')


@section('content')
<div class="login-page sidebar-collapse">
    <div class="page-header header-filter" style="background-image: url('../assets/img/bg7.jpg'); background-size:cover; background-position: top center;">
        <div class="container">
            <div class="space-30"></div>
            <h1 style="color: white;">Add a note</h1>
            <div class="row">
                <div class="col-lg-10 col-md-10 col-sm-12 ml-auto mr-auto">
                    {!! Form::model($semester,['route'=>['semester.update',$semester->id],'method'=>'POST','enctype'=> 'multipart/form-data']) !!}
                        @method('PATCH')
                        <div class="md-form">
                            <input type="text" id="name" class="form-control" name="name" value="{{$semester->name}}">
                            <label for="name" class="">Semester Name</label>
                        </div>
                        <button type="submit" class="btn btn-cyan btn-round"><b>Update Semester</b></button>
                        <a class="btn btn-danger" href="/semester">Cancel</a>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

