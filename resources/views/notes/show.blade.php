@extends('layouts.app_logged')
@section('additional_stylesheet')
<style>
body{
    color: white;
}
</style>
<link rel="stylesheet" href="{{asset('assets_logged/css/pdf_render/pdf_render.css')}}">
@endsection
@section('content')
<div class="login-page sidebar-collapse">
    <div class="page-header header-filter" style="background-image: url('../assets/img/bg7.jpg'); background-size:cover; background-position: top center;">
        <div class="">
            <div class="space-30"></div>
            <div class="row">
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 ">
                                <div id="pdf-view">
                                    <div class="top-bar d-flex justify-content-center">
                                        <a class="" id="minus-five-page-top">
                                            <i class="fas fa-angle-double-left"></i>
                                        </a>
                                        <a class="" id="prev-page-top">
                                            <i class="fas fa-angle-left"></i>
                                        </a>
                                        <span class="page-info">
                                            Page <span id="page-num-top"></span> of <span id="page-count-top"></span>
                                        </span>
                                        <a class="" id="next-page-top">
                                            <i class="fas fa-angle-right"></i>
                                        </a>
                                        <a class="" id="plus-five-page-top">
                                            <i class="fas fa-angle-double-right"></i>
                                        </a>
                                    </div>
                                    <div id="dom-target" style="display: none;">
                                        <?php
                                            $pdf_file_link = "/storage/pdf_files/".$note->pdf_file;
                                            echo htmlspecialchars($pdf_file_link);
                                        ?>
                                    </div>
                                    <canvas id="pdf-render" style="width: 100%;"></canvas>
                                    <div class="top-bar d-flex justify-content-center">
                                        <a class="" id="minus-five-page-bottom">
                                            <i class="fas fa-angle-double-left"></i>
                                        </a>
                                        <a class="" id="prev-page-bottom">
                                            <i class="fas fa-angle-left"></i>
                                        </a>
                                        <span class="page-info">
                                            Page <span id="page-num-bottom"></span> of <span id="page-count-bottom"></span>
                                        </span>
                                        <a class="" id="next-page-bottom">
                                            <i class="fas fa-angle-right"></i>
                                        </a>
                                        <a class="" id="plus-five-page-bottom">
                                            <i class="fas fa-angle-double-right"></i>
                                        </a>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="row justify-content-end">
                        <a href="/notes/create" type="button" class="btn-floating btn-small waves-effect waves-light btn-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add a new note"><i class="fas fa-plus"></i></a>

                        @if($note->user_id == Auth::user()->id)
                        <a href="{{url('notes/')}}/{{$note->id}}/edit" type="button" class="btn-floating btn-small waves-effect waves-light btn-yellow" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit this note"><i class="fas fa-edit"></i></a>
                        {!! Form::open(['route'=>['notes.destroy',$note->id],'method'=>'POST']) !!}
                            @method('DELETE')
                            <button type="submit" class="btn-floating btn-small waves-effect waves-light btn-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete this note"><i class="fas fa-trash-alt"></i></button>
                        {!! Form::close() !!}
                        @endif

                        <a type="button" class="btn-floating btn-small waves-effect waves-light btn-purple" data-toggle="tooltip" data-placement="top" title="" data-original-title="More options"><i class="fas fa-ellipsis-h"></i></a>

                    </div>
                    <div class="row">
                        <div class="card" style="width:100%;">
                            <div class="row">
                                <div class="col-3">
                                    <div class="avatar ">
                                        <img src="/storage/user_avatar/{{$note->user->avatar}}" class="rounded-circle img-fluid pl-2 pt-2" alt="First sample avatar image">
                                    </div>
                                </div>
                                <div class="col-7">
                                    <h6 class="mt-3 mb-1">{{$note->user->name}}</h6>
                                    <p class="" style="font-size: 12px;">{{$note->created_at}}</p>
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
                            <div class="row">
                                <div class="col-12 ml-4">
                                    <h4  class=" text-white">{{$note->title}}</h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 ml-4">
                                    <p>{{$note->description}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="width: 100%;">
                        <?php
                        $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                        ?>
                        <div class="row d-none " id="show_shorten_url" >
                            <div class="col-10">
                                <div class="md-form">
                                    <input type="text" id="link" class="form-control mx-3" value="">
                                </div>
                            </div>
                            <div class="col-1">
                                <a type="button" id="ClipboardCopyBtn" class="btn-floating btn-small waves-effect waves-light btn-purple" data-toggle="tooltip" data-placement="top" title="" data-original-title="Copy Link to ClipBoard" onclick="CopyLinkToClipboard()"><i class="far fa-clipboard"></i></a>
                            </div>
                        </div>
                        <button class="btn btn-primary " type="button" id="shorten_request_btn" onclick="GetShortLink();">Get Short Url</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('additional_scripts')
<script src="https://mozilla.github.io/pdf.js/build/pdf.js"></script>
<script src="{{asset('assets_logged/js/pdf_render/pdf_render.js')}}"></script>
<script>
    function GetShortLink(){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var shorten_request_btn = document.getElementById("shorten_request_btn");
                shorten_request_btn.classList.add("d-none");
                var shorten_request_btn = document.getElementById("show_shorten_url");
                shorten_request_btn.classList.remove("d-none");
                var response = JSON.parse(xhttp.responseText);
                var output = response.short;
                document.getElementById('link').value = output;
            }
        };
        var url_to_shorten ='https://hackfiber.com/urlshortner/api/?key=NWGobVW3Bgze&url=' +window.location.href ;
        xhttp.open("GET", url_to_shorten, true);
        xhttp.send();
    }
    function CopyLinkToClipboard() {
    var copyText = document.getElementById("link");
    copyText.select();
    copyText.setSelectionRange(0, 99999)
    document.execCommand("copy");
    var ClipboardCopyBtn = document.getElementById("ClipboardCopyBtn");
    ClipboardCopyBtn.classList.remove('btn-purple');
    ClipboardCopyBtn.classList.add('btn-success');
    }
</script>
@endsection


{{-- <div class="row ml-3 d-flex flex-column">
    <h4  class=" text-white">{{$note->title}}</h4>
    <p>{{$note->description}}</p>
    <div class="row  ">
    <a class="btn btn-yellow btn-sm btn-rounded" href="{{url('notes/')}}/{{$note->id}}/edit" class="btn btn-primary "><i class="fas fa-edit"></i> Edit</a>
    {!! Form::open(['route'=>['notes.destroy',$note->id],'method'=>'POST']) !!}
    @method('DELETE')
    <button type="submit" role="button" class="btn btn-danger btn-sm btn-rounded" value="Delete"><i class="fas fa-trash-alt"></i> Delete</button>
    {!! Form::close() !!}
    <a href="/storage/pdf_files/{{$note->pdf_file}}" class="btn btn-success btn-sm btn-rounded" target="_blank"><i class="fas fa-compress"></i> Open in seperate Window</a>
    </div>
</div> --}}
