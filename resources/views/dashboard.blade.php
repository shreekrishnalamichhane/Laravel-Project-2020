@extends('layouts.app_logged')


@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-3 col-md-6 ">

            <!-- Card -->
            <div class="card card-cascade cascading-admin-card dark-card-admin text-white">

            <!-- Card Data -->
            <div class="admin-up">
                <i class="far fa-money-bill-alt primary-color mr-3 z-depth-2 text-white"></i>
                <div class="data">
                <p class="text-uppercase text-white">sales</p>
                <h4 class="font-weight-bold dark-grey-text text-white">2000$</h4>
                </div>
            </div>

            <!-- Card content -->
            <div class="card-body card-body-cascade">
                <div class="progress mb-3">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="card-text text-white">Better than last week (25%)</p>
            </div>

            </div>
            <!-- Card -->

        </div>
        <div class="col-xl-3 col-md-6 ">

            <!-- Card -->
            <div class="card card-cascade cascading-admin-card dark-card-admin text-white">

            <!-- Card Data -->
            <div class="admin-up">
                <i class="fas fa-chart-line warning-color mr-3 z-depth-2 text-white"></i>
                <div class="data">
                <p class="text-uppercase text-white">subscriptions</p>
                <h4 class="font-weight-bold dark-grey-text text-white">200</h4>
                </div>
            </div>

            <!-- Card content -->
            <div class="card-body card-body-cascade">
                <div class="progress mb-3">
                <div class="progress-bar red accent-2" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="card-text text-white">Worse than last week (25%)</p>
            </div>

            </div>
            <!-- Card -->

        </div>
        <div class="col-xl-3 col-md-6 ">

            <!-- Card -->
            <div class="card card-cascade cascading-admin-card dark-card-admin text-white">

            <!-- Card Data -->
            <div class="admin-up">
                <i class="fas fa-chart-pie light-blue lighten-1 mr-3 z-depth-2 text-white"></i>
                <div class="data">
                <p class="text-uppercase text-white">traffic</p>
                <h4 class="font-weight-bold dark-grey-text text-white">20000</h4>
                </div>
            </div>

            <!-- Card content -->
            <div class="card-body card-body-cascade">
                <div class="progress mb-3">
                <div class="progress-bar red accent-2" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="card-text text-white">Worse than last week (75%)</p>
            </div>

            </div>
            <!-- Card -->

        </div>
        <div class="col-xl-3 col-md-6 ">

            <!-- Card -->
            <div class="card card-cascade cascading-admin-card dark-card-admin text-white">

            <!-- Card Data -->
            <div class="admin-up">
                <i class="fas fa-chart-bar red accent-2 mr-3 z-depth-2 text-white"></i>
                <div class="data">
                <p class="text-uppercase text-white">organic traffic</p>
                <h4 class="font-weight-bold dark-grey-text text-white">2000</h4>
                </div>
            </div>

            <!-- Card content -->
            <div class="card-body card-body-cascade">
                <div class="progress mb-3">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="card-text text-white">Better than last week (25%)</p>
            </div>

            </div>
            <!-- Card -->

        </div>
    </div>
    <div class="space-50"></div>
    <a href="/notes" class="btn btn-purple float-right">Notes</a>
    <div class="space-50"></div>
    <h3 class="text-center text " style="color: white;">Please Choose your Semester</h3>
    <div class="row justify-content-center">
      <div class="top-droppable folder tooltiper tooltiper-up" data-tooltip="0 file" id="folder2"><i class="fa fa-folder" aria-hidden="true"></i><i class="fa fa-check" aria-hidden="true"></i><p>Semester 1</p></div>
      <div class="top-droppable folder tooltiper tooltiper-up" data-tooltip="0 file" id="folder4"><i class="fa fa-folder" aria-hidden="true"></i><i class="fa fa-check" aria-hidden="true"></i><p>Semester 2</p></div>
      <div class="top-droppable folder tooltiper tooltiper-up" data-tooltip="0 file" id="folder3"><i class="fa fa-folder" aria-hidden="true"></i><i class="fa fa-check" aria-hidden="true"></i><p>Semester 3</p></div>
      <div class="top-droppable folder tooltiper tooltiper-up" data-tooltip="0 file" id="folder1"><i class="fa fa-folder" aria-hidden="true"></i><i class="fa fa-check" aria-hidden="true"></i><p>Semester 4</p></div>
      <div class="top-droppable folder tooltiper tooltiper-up" data-tooltip="0 file" id="folder2"><i class="fa fa-folder" aria-hidden="true"></i><i class="fa fa-check" aria-hidden="true"></i><p>Semester 5</p></div>
      <div class="top-droppable folder tooltiper tooltiper-up" data-tooltip="0 file" id="folder4"><i class="fa fa-folder" aria-hidden="true"></i><i class="fa fa-check" aria-hidden="true"></i><p>Semester 6</p></div>
      <div class="top-droppable folder tooltiper tooltiper-up" data-tooltip="0 file" id="folder3"><i class="fa fa-folder" aria-hidden="true"></i><i class="fa fa-check" aria-hidden="true"></i><p>Semester 7</p></div>
      <div class="top-droppable folder tooltiper tooltiper-up" data-tooltip="0 file" id="folder1"><i class="fa fa-folder" aria-hidden="true"></i><i class="fa fa-check" aria-hidden="true"></i><p>Semester 8</p></div>
    </div>
</div>
@endsection

