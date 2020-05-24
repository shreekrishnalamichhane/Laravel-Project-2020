@extends('layouts.app_logged')


@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-3 col-md-6 ">
            <div class="card card-cascade cascading-admin-card dark-card-admin text-white">
                <div class="admin-up">
                    <i class="fas fa-chart-line warning-color mr-3 z-depth-2 text-white"></i>
                    <div class="data">
                    <p class="text-uppercase text-white">Total Users</p>
                    <h4 class="font-weight-bold dark-grey-text text-white">{{count($user)}}</h4>
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
                    <h4 class="font-weight-bold dark-grey-text text-white">{{count($note)}}</h4>
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
@endsection

