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
        <div class="container-fluid">
            <div class="space-30"></div>
            <div class="row">
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 ">
                            {{-- <object data="/storage/pdf_files/{{$note->pdf_file}}" type="application/pdf" width="100%" height="500%;">
                                <p>Alternative text - include a link <a href="/storage/pdf_files/{{$note->pdf_file}}">to the PDF!</a></p>
                            </object> --}}
                            <embed src="/storage/pdf_files/{{$note->pdf_file}}" width="100%" height="500vh" alt="pdf" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html"frameborder="0">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="row ml-3 d-flex flex-column">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
