@extends('layouts.app_logged')

@section('additional_stylesheet')
<style>
body{
    color: white;
}
</style>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons'>
<link rel='stylesheet' href='{{asset('assets_logged/css/addons/vuetify.min.css')}}'>
@endsection


@section('content')
<div class="row d-flex">
    <div class="col-2"></div>
    <div class="col-7 justify-content-center">
        <div class="col-12">
            <a href="#" type="button" data-toggle="modal" data-target="#modalFeedback"style="width:100%;">
                <div class="card " style="width: 100%; background-color:#353b50;">
                    <div class="row">
                        <div class="col-2 ">
                            <div class="avatar ">
                                <img src="/storage/user_avatar/{{Auth::user()->avatar}}" style="height: auto;" class="rounded-circle img img-fluid p-3"  alt="{{auth()->user()->name}}'s avatar">
                            </div>
                        </div>
                        <div class="col-9">
                            <div class="md-form mt-5">
                                <input type="text"  class="form-control col-12 " name="title" style="color: rgb(206, 206, 206); border:1px solid rgb(165, 165, 165); border-radius:30px;">
                                <label for="title" class="text-white pl-3 " style="color: aqua;">Wanna Share Something??</label>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="space-40"></div>
        @if($filter_index)
            <div class="chip pink lighten-4 waves-effect waves-effect">
                {{$notes[0]->semester->name}}
                <a href="/notes"><i class="close fas fa-times"></i></a>
            </div>
            <div class="chip pink lighten-4 waves-effect waves-effect">
                {{$notes[0]->subject->name}}
                <a href="/notes"><i class="close fas fa-times"></i></a>
            </div>
          @endif
        @foreach ($notes as $note)
            <div class="col-12">
                <div class="card" style="width:100%; background-color:#353b50;">
                    <div class="row">
                        <div class="col-2">
                            <div class="avatar">
                                <img src="/storage/user_avatar/{{$note->user->avatar}}" style="height: auto;" class="rounded-circle img img-fluid p-3"  alt="First sample avatar image">
                            </div>
                        </div>
                        <div class="col-9">
                            <h4 class="mt-3 mb-1">{{$note->user->name}}</h4>
                            <h6 class="">{{$note->created_at}}</h6>
                        </div>
                        <div class="col-1">
                            <ul class="nav navbar-nav nav-flex-icons ml-auto">
                                <li class="nav-item dropdown">
                                    <button role="button" type="button" class="btn btn-link rounded" data-toggle="dropdown" style="padding:0px;">
                                        <i class="fas fa-ellipsis-v mt-4 text-white"></i>
                                    </button>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="/profile" >
                                            Profile
                                        </a>
                                        <a class="dropdown-item" href="/profile" >
                                            Profile
                                        </a>
                                        <a class="dropdown-item" href="/profile" >
                                            Profile
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="space-20"></div>
                    <div class="row ml-3">
                        <div class="col-12 ml-4">
                            <h4  class=" text-white">{{$note->title}}</h4>
                        </div>
                        <div class="col-12 ml-4">
                            <p>{{$note->description}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-10">
                            <a href="/notefilter/semester={{$note->semester_id}}&subject={{$note->subject_id}}" class="chip cyan  waves-effect waves-effect ml-5 text-white">
                                <i class="fas fa-book-reader"></i>  <strong>{{$note->subject->name}}</strong>
                            </a>
                        </div>
                        <div class="col-2">
                            <a href="{{url('/notes')}}/{{$note->id}}?{{$note->title}}"  target="_blank" type="button" class="btn-floating btn-small waves-effect waves-light btn-purple float-right" data-toggle="tooltip" data-placement="top" title="" data-original-title="View"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                    {{-- <div class="row">
                        <div class="col-5">
                            <a href="/notefilter/semester={{$note->semester_id}}&subject={{$note->subject_id}}" class="chip cyan  waves-effect waves-effect ml-5 text-white">
                                <i class="fas fa-book-reader"></i>  <strong>{{$note->subject->name}}</strong>
                            </a>
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="space-20"></div>
        @endforeach
        {{ $notes->links() }}
    </div>
    <div class="col-3"></div>
</div>
<div class="modal fade " style="margin-left:80px;" id="modalFeedback" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
