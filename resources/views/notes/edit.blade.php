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
                    {!! Form::model($note,['route'=>['notes.update',$note->id],'method'=>'POST','enctype'=> 'multipart/form-data']) !!}
                        @method('PATCH')
                        <div class="md-form">
                            <input type="text" id="title" class="form-control" value="{{$note->title}}" name="title">
                            <label for="title" class="">Note Title</label>
                        </div>
                        <div class="space-20"></div>
                        <div class="md-form">
                            <input type="text" id="description" name="description" class="md-textarea form-control" value="{{$note->description}}">
                            <label for="description">Note Description</label>
                        </div>
                        <select class="mdb-select colorful-select dropdown-info md-form col-lg-4 col-md-5 col-sm-12 " name="semester" id="semester" >
                            <option value="" disabled selected>Choose Semester</option>
                            @foreach ($semesters as $semester)
                                <option value="{{$semester->id}}">{{$semester->name}}</option>
                            @endforeach
                        </select>
                        <select class="mdb-select colorful-select dropdown-info md-form col-lg-4 col-md-5 col-sm-12 " name="subject" id="subject" >
                            <option value="" disabled selected>Choose Subject</option>
                        </select>
                        <div class="space-10"></div>
                        <div class="md-form">
                            <h6 style="color: white;">Upload your file</h6>
                            <input type="file" name="pdf_file" id="file" class="btn btn-secondary ">
                    </div>
                        <div class="space-20"></div>
                        <button type="submit" class="btn btn-cyan btn-round"><b>Share</b></button>
                        {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('additional_scripts')
<script>
    jQuery(document).ready(function(){
        jQuery('select[name="semester"]').on('change',function(){
            var semesterID = jQuery(this).val();
            if(semesterID){
                jQuery.ajax({
                    url : '/getSubjects/' +semesterID,
                    type : "GET",
                    dataType : "json",
                    success:function(data){
                        jQuery('select[name="subject"]').empty();
                        jQuery.each(data,function(key,value){
                            $('select[name="subject"]').append('<option value="' + key + '">' + value + '</option>');
                        });
                    }
                });
            }
            else{
                $('select[name="subject"]').empty();
            }
        });
    });
</script>
@endsection
