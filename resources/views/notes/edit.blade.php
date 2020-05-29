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
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-1">
                        <div class="avatar ">
                            <img src="/storage/user_avatar/{{Auth::user()->avatar}}" class="rounded-circle img-fluid pl-2 pt-2" alt="{{auth()->user()->name}}'s avatar">
                        </div>
                    </div>
                    <div class="col-10">
                        <h5 class="mt-3 mb-1 text-white"></h5>
                        <p class="" style="font-size: 12px;"></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10 col-md-10 col-sm-12 ml-auto mr-auto">
                        {!! Form::open(['route'=>'notes.store','method'=>'POST','enctype'=> 'multipart/form-data']) !!}
                            <div class="md-form">
                                <input type="text" id="title" class="form-control" name="title" value="{{$note->title}}" style="color: rgb(182, 182, 182);">
                                <label for="title" class="text-white">Note Title</label>
                            </div>
                            <div class="md-form">
                                <input type="text" id="description" name="description" style="color: rgb(182, 182, 182);" value="{{$note->description}}" class="md-textarea form-control" rows="3">
                                <label for="description" class="text-white">Note Description</label>
                            </div>
                            <div class="row">
                                <select class="mdb-select colorful-select dropdown-info md-form col-5" name="semester" id="semester">
                                    <option value="" disabled selected>Choose Semester</option>
                                    @foreach ($semesters as $semester)
                                        <option value="{{$semester->id}}">{{$semester->name}}</option>
                                    @endforeach
                                </select>
                                <select class="mdb-select colorful-select dropdown-info md-form col-5 " name="subject" id="subject" >
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
<script src='https://unpkg.com/vue@2.6.10/dist/vue.js'></script>
<script src='https://unpkg.com/vuetify@1.5.16/dist/vuetify.min.js'></script>
<script id="rendered-js">
    Vue.prototype.$vuetify = Object.assign(Vue.prototype.$vuetify, {
      theme: {
        primary: '#3f51b5',
        secondary: '#b0bec5' },

      options: {
        customProperties: true } });
    new Vue({
      el: '#app',
      data: () => ({
        defaultButtonText: 'Upload File',
        selectedFile: null,
        isSelecting: false }),

      computed: {
        buttonText() {
          return this.selectedFile ? this.selectedFile.name : this.defaultButtonText;
        } },

      methods: {
        onButtonClick() {
          this.isSelecting = true;
          window.addEventListener('focus', () => {
            this.isSelecting = false;
          }, { once: true });

          this.$refs.uploader.click();
        },
        onFileChanged(e) {
          this.selectedFile = e.target.files[0];

          // do something
        } } });
    //# sourceURL=pen.js
</script>
@endsection










