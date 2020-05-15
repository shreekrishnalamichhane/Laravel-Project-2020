@extends('layouts.app_logged')

@section('content')
<div class="login-page sidebar-collapse">
    <div class="page-header header-filter" style="background-image: url('../assets/img/bg7.jpg'); background-size:cover; background-position: top center;">
        <div class="container">
            <div class="space-30"></div>
            <h1 style="color: white;">Add a note</h1>
            <div class="row">
                <div class="col-lg-10 col-md-10 col-sm-12 ml-auto mr-auto">
                    <form class="form" method="POST" action="{{--{{ route('register') }}--}}">
                        <div class="md-form">
                            <input type="text" id="title" class="form-control" name="title">
                            <label for="title" class="">Note Title</label>
                        </div>
                        <div class="md-form">
                            <textarea type="text" id="description" name="description" class="md-textarea form-control" rows="3"></textarea>
                            <label for="description">Note Description</label>
                        </div>
                        <div class="md-form">
                                {{-- <span>Choose file</span> --}}
                                <input type="file" name="file" class="btn btn-secondary ">
                                {{-- <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="Upload your file">
                                </div> --}}
                        </div>
                        <button type="submit" class="btn btn-success">Share</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


{{-- @section('content')
<h1>Add New Blog</h1>
{!! Form::open(['action'=>'PostController@store','method'=>'POST']) !!} <div class ="form-group">
    {{Form::label('title','Title')}}
    {{Form::text('title','', ['class'=>'form-control','placeholder'=>'Title Text'])}} </div> <div class ="form-group">
    {{Form::label('content','Body')}}
    {{Form::textarea('content','', ['class' => 'form-control','placeholder' => 'Body Text'])}} </div> <div class ="form-group">
    {{Form::submit('submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection --}}
