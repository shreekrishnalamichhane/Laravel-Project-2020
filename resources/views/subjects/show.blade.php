@extends('layouts.app_logged')

@section('additional_stylesheet')
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons'>
<link rel='stylesheet' href='{{asset('assets_logged/css/addons/vuetify.min.css')}}'>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-3 col-md-6 ">
            <div class="card card-cascade cascading-admin-card dark-card-admin text-white">
                <div class="admin-up">
                    <i class="fas fa-chart-line warning-color mr-3 z-depth-2 text-white"></i>
                    <div class="data">
                    <p class="text-uppercase text-white">Total Users</p>
                    <h4 class="font-weight-bold dark-grey-text text-white">{{count($users)}}</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 ">
            <div class="card card-cascade cascading-admin-card dark-card-admin text-white">
                <div class="admin-up">
                    <i class="far fa-money-bill-alt primary-color mr-3 z-depth-2 text-white"></i>
                    <div class="data">
                    <p class="text-uppercase text-white">Total Notes</p>
                    <h4 class="font-weight-bold dark-grey-text text-white">{{count($notes)}}</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 ">
            <div class="card card-cascade cascading-admin-card dark-card-admin text-white">
                <div class="admin-up">
                    <i class="fas fa-chart-pie light-blue lighten-1 mr-3 z-depth-2 text-white"></i>
                    <div class="data">
                    <p class="text-uppercase text-white">Total Subjects</p>
                    <h4 class="font-weight-bold dark-grey-text text-white">{{count($subjects)}}</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 ">
            <div class="card card-cascade cascading-admin-card dark-card-admin text-white">
                <div class="admin-up">
                    <i class="fas fa-chart-bar red accent-2 mr-3 z-depth-2 text-white"></i>
                    <div class="data">
                    <p class="text-uppercase text-white">organic traffic</p>
                    <h4 class="font-weight-bold dark-grey-text text-white">2000</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="space-50"></div>
    <div class="row justify-content-center">
        <a href="#" type="button" data-toggle="modal" data-target="#modalFeedback">
            <div class="card " style="width: 70vh; background-color:#353b50;">
                <div class="row">
                    <div class="col-2 ">
                        <div class="avatar ">
                            <img src="/storage/user_avatar/{{Auth::user()->avatar}}" style="height: auto;" class="rounded-circle img img-fluid p-3"  alt="{{auth()->user()->name}}'s avatar">
                        </div>
                    </div>
                    <div class="col-9">
                        <div class="md-form mt-4">
                            <input type="text"  class="form-control col-12 " name="title" style="color: rgb(206, 206, 206); border:1px solid rgb(165, 165, 165); border-radius:30px;">
                            <label for="title" class="text-white pl-3 " style="color: aqua;">Wanna Share Something??</label>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="space-50"></div>
    <a href="/notes" class="btn btn-purple float-right">Notes</a>
    <a href="/semester" class="btn btn-purple float-right">Semester</a>
    <a href="/subject" class="btn btn-purple float-right">Subject</a>
    <div class="space-100"></div>

    <h3 class="text-center text " style="color: white;">Please Choose your Subject</h3>
    <div class="row justify-content-center">
        @foreach ($subjectsoo as $subject)
            <a href="/notefilter/semester={{$semester_id}}&subject={{$subject->id}}"><div class="top-droppable folder tooltiper tooltiper-up" data-tooltip="0 file" id="{{'folder'.($subject->id%4)}}"><i class="fa fa-folder" aria-hidden="true"></i><i class="fa fa-check" aria-hidden="true"></i><p>{{$subject->name}}</p></div></a>
        @endforeach
    </div>
</div>

{{-- modal    --}}
<div class="modal fade" style="margin-left:150px;" id="modalFeedback" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog cascading-modal modal-lg" role="document">
        <div class="modal-content bg-dark">
            <div class="modal-header grey darken-3 white-text ">
                <h5 class="text-center">Add a note</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body mb-0">
                <div class="row">
                    <div class="col-2">
                        <div class="avatar ">
                            <img src="/storage/user_avatar/{{Auth::user()->avatar}}" class="rounded-circle img-fluid pl-2 pt-2" alt="First sample avatar image">
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
                            <select class="mdb-select colorful-select dropdown-info md-form col-6" name="semester" id="semester" >
                                <option value="" disabled selected>Choose Semester</option>
                                @foreach ($semesters as $semester)
                                    <option value="{{$semester->id}}">{{$semester->name}}</option>
                                @endforeach
                            </select>
                            <select class="mdb-select colorful-select dropdown-info md-form col-6 " name="subject" id="subject" >
                                <option value="" disabled selected>Choose Subject</option>
                            </select>
                        </div>
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

