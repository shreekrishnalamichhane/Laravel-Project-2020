@extends('layouts.app_logged')


@section('content')
<div class="login-page sidebar-collapse">
    <div class="page-header header-filter" style="background-image: url('../assets/img/bg7.jpg'); background-size:cover; background-position: top center;">
        <div class="container">
            <div class="space-30"></div>
            <h1 style="color: white;">Add a note</h1>
            <div class="row">
                <div class="col-lg-10 col-md-10 col-sm-12 ml-auto mr-auto">
                    {!! Form::open(['route'=>'subject.store','method'=>'POST','enctype'=> 'multipart/form-data']) !!}
                        <div class="md-form">
                            <input type="text" id="name" class="form-control" name="name">
                            <label for="name" class="">Subject Name</label>
                        </div>
                        <select class="mdb-select colorful-select dropdown-info md-form col-lg-4 col-md-6 col-sm-12 " name="semester" id="semester" >
                            <option value="" disabled selected>Choose Semester</option>
                            @foreach ($semesters as $semester)
                                <option value="{{$semester->id}}">{{$semester->name}}</option>
                                @endforeach
                          </select>
                        <input type="submit" class="btn btn-success" value="Add Semester">
                        <a class="btn btn-danger" href="/subject">Cancel</a>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

