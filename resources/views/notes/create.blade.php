@extends('layouts.app_logged')
@section('additional_stylesheet')
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons'>
<link rel='stylesheet' href='{{asset('assets_logged/css/addons/vuetify.min.css')}}'>
@endsection
@section('content')
<div class="container-fluid">
    <div class="login-page sidebar-collapse">
        <div class="page-header header-filter" style="background-image: url('../assets/img/bg7.jpg'); background-size:cover; background-position: top center;">
            <div class="container">
                <div class="space-30"></div>
                <h1 style="color: white;">Add a note</h1>
                {{-- <div class="row">
                    <div class="col-lg-10 col-md-10 col-sm-12 ml-auto mr-auto">
                        {!! Form::open(['route'=>'notes.store','method'=>'POST','enctype'=> 'multipart/form-data']) !!}
                            <div class="md-form">
                                <input type="text" id="title" class="form-control" name="title">
                                <label for="title" class="">Note Title</label>
                            </div>
                            <div class="md-form">
                                <textarea type="text" id="description" name="description" class="md-textarea form-control" rows="3"></textarea>
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
                            <div class="md-form">
                                    <h6 style="color: white;">Upload your file</h6>
                                    <input type="file" name="pdf_file" id="file" class="btn btn-secondary ">
                            </div>
                            <input type="submit" class="btn btn-success" value="Share Note">
                            <a class="btn btn-danger" href="/notes">Cancel</a>
                        {!! Form::close() !!}
                    </div>
                </div> --}}
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-1">
                        <div class="avatar ">
                            <img src="/storage/user_avatar/{{Auth::user()->avatar}}" class="rounded-circle img-fluid pl-2 pt-2" alt="{{auth()->user()->name}}'s avatar">
                        </div>
                    </div>
                    <div class="col-10">
                        <h5 class="mt-3 mb-1 text-white">{{auth()->user()->name}}</h5>
                        <p class="" style="font-size: 12px;"></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10 col-md-10 col-sm-12 ml-auto mr-auto">
                        {!! Form::open(['route'=>'notes.store','method'=>'POST','enctype'=> 'multipart/form-data']) !!}
                            <div class="md-form">
                                <input type="text" id="title" class="form-control" name="title" style="color: rgb(182, 182, 182);">
                                <label for="title" class="text-white">Note Title</label>
                            </div>
                            <div class="md-form">
                                <textarea type="text" id="description" name="description" style="color: rgb(182, 182, 182);" class="md-textarea form-control" rows="3"></textarea>
                                <label for="description" class="text-white">Note Description</label>
                            </div>
                            <div class="row">
                                <select class="mdb-select colorful-select dropdown-info md-form col-5" name="semester" id="semester" >
                                    <option value="" disabled selected>Choose Semester</option>
                                    @foreach ($semesters as $semester)
                                        <option value="{{$semester->id}}">{{$semester->name}}</option>
                                    @endforeach
                                </select>
                                <select class="mdb-select colorful-select dropdown-info md-form col-5 " name="subject" id="subject" >
                                    <option value="" disabled selected>Choose Subject</option>
                                </select>
                            </div>
                            {{-- <div class="md-form">
                                    <h6 style="color: white;">Upload your file</h6>

                                    <input type="file" name="pdf_file" id="file" class="btn btn-secondary btn-file ">
                            </div> --}}
                            {{-- <span class="btn btn-raised btn-round btn-default btn-file">
                                <span class="fileinput-new">Select image</span>
                                <input type="file" name="..." />
                              </span> --}}
                                <div id="app">
                                    <v-app>
                                        <v-btn color="primary" class="text-none" round depressed :loading="isSelecting" @click="onButtonClick">
                                            <v-icon left>
                                                cloud_upload
                                            </v-icon>
                                            @{{ buttonText }}
                                        </v-btn>
                                        <input ref="uploader" id="file" class="d-none" type="file" accept="application/pdf" @change="onFileChanged" name="pdf_file">
                                    </v-app>
                                </div>
                                <hr>
                                <div class="modal-footer justify-content-center d-flex">
                                    <input type="submit" class="btn  btn-cyan btn-round float-right " value="Share Note">
                                    {{-- <a class="btn btn-danger" href="/notes">Cancel</a> --}}
                                    {{-- <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button> --}}
                                </div>
                        {!! Form::close() !!}
                    </div>
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










