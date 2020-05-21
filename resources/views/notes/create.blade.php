@extends('layouts.app_logged')
@section('additional_stylesheet')
<style>
body{
    color: white;
}
</style>
@endsection
@section('content')
<div class="login-page sidebar-collapse">
    <div class="page-header header-filter" style="background-image: url('../assets/img/bg7.jpg'); background-size:cover; background-position: top center;">
        <div class="container">
            <div class="space-30"></div>
            <h1 style="color: white;">Add a note</h1>
            <div class="row">
                <div class="col-lg-10 col-md-10 col-sm-12 ml-auto mr-auto">
                    {!! Form::open(['route'=>'notes.store','method'=>'POST','enctype'=> 'multipart/form-data']) !!}
                {{-- <form class="form" method="POST" action="{{route('notes.store')}}"> --}}
                        <div class="md-form">
                            <input type="text" id="title" class="form-control" name="title">
                            <label for="title" class="">Note Title</label>
                        </div>
                        <div class="md-form">
                            <textarea type="text" id="description" name="description" class="md-textarea form-control" rows="3"></textarea>
                            <label for="description">Note Description</label>
                        </div>
                        <select class="mdb-select colorful-select dropdown-info md-form col-lg-4 col-md-6 col-sm-12 " name="semester" id="semester" >
                            <option value="" disabled selected>Choose Semester</option>
                            @foreach ($semesters as $semester)
                                <option value="{{$semester->id}}">{{$semester->name}}</option>
                                @endforeach
                          </select>
                        <div class="md-form">
                                <h6 style="color: white;">Upload your file</h6>
                                <input type="file" name="pdf_file" id="file" class="btn btn-secondary ">
                        </div>
                        <input type="submit" class="btn btn-success" value="Share Note">
                        <a class="btn btn-danger" href="/notes">Cancel</a>
                    {{-- </form> --}}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
