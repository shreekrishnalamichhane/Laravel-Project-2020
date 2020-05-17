@extends('layouts.app_logged')

@section('additional_stylesheet')
@endsection


@section('content')
<a href="/notes/create" class="btn btn-success float-right btn-sm">Add Note</a>
<div class="container note-list">
    <section class="my-5 text-center text-lg-left">
      <h2 class="text-center h1">Recent Notes</h2>
      <h4 class="text-center mb-5 w-responsive mx-auto">These are the most recent notes uploaded by our members.</h4>
      @foreach ($notes as $note)
      <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="view overlay z-depth-1">
            <a href="{{url('/notes')}}/{{$note->id}}?{{$note->title}}"><img src="{{asset('assets_logged/img/Photos/Others/img%20(38).jpg')}}" class="img-fluid" alt="First sample image"></a>
          </div>
        </div>
        <div class="col-lg-7 mb-4">
          <a href="#" class="teal-text">
            <h6 class="pb-1"><i class="fas fa-heart"></i><strong> Lifestyle </strong></h6>
          </a>
          <a href="{{url('/notes')}}/{{$note->id}}?{{$note->title}}">
            <h4 class="mb-4" style="color: white;"><strong>{{$note->title}}</strong></h4>
        </a>
          <p>{{$note->description}}</p>
          <p>by <a><strong>Jessica Clark</strong></a>, 26/08/2016</p>
          <a href="{{url('/notes')}}/{{$note->id}}->{{$note->title}}" class="btn btn-primary">View Note</a>

        </div>
      </div>
      <div class="space-30"></div>
      @endforeach
      {{-- {{dd($notes)}} --}}
    </section>
  </div>
@endsection


@section('additional_scripts')
@endsection
