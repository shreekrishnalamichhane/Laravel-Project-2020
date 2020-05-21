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
            <h1 style="color: white;">{{$note->title}}</h1>
            <div class="row">
                <div class="col-lg-10 col-md-12 col-sm-12 ml-auto mr-auto">
                    <p>{{$note->description}}</p>
                    <a href="/storage/pdf_files/{{$note->pdf_file}}" class="btn btn-success btn-link-only btn-sm float-right" target="_blank">Open in seperate Window</a>
                    <object data="/storage/pdf_files/{{$note->pdf_file}}" type="application/pdf" width="100%" height="260%;">
                        <p>Alternative text - include a link <a href="/storage/pdf_files/{{$note->pdf_file}}">to the PDF!</a></p>
                    </object>
                    <a class="btn btn-primary btn-sm" href="{{url('notes/')}}/{{$note->id}}/edit" class="btn btn-primary">Edit</a>
                    {!! Form::open(['route'=>['notes.destroy',$note->id],'method'=>'POST']) !!}
                    @method('DELETE')
                    <button type="submit" role="button" class="btn btn-unique btn-sm" value="Delete">Delete</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
