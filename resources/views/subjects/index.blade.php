@extends('layouts.app_logged')

@section('additional_stylesheet')
@endsection

@section('content')
    <div class=" mb-5">
        <div class="col-md-12" >
            <h5 class="  text-white font-weight-bold ">Subject</h5>
            <div class="card">
                <a href="/subject/create" class=" col-lg-1 col-md-2 col-sm-2 float-right btn btn-success btn-sm">Add subject</a>
            <div class="card-body" style="overflow-x:scroll;">
              <table id="dtMaterialDesignExample" class="table table-striped" cellspacing="0" width="100%" >
                <div>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Notes</th>
                            <th>Semester Id</th>
                            <th>Updated At</th>
                            <th>Created At</th>
                            <th class="disabled-sorting">Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($subjects as $subject)
                        <tr>
                            <td>{{$subject->id}}</td>
                            <td>{{$subject->name}}</td>
                            <td>1200</td>
                            <td>{{$subject->semester_id}}</td>
                            <td>{{$subject->updated_at}}</td>
                            <td>{{$subject->created_at}}</td>
                            <td>
                            <div class="row">
                                <form action="{{url('subject/')}}/{{$subject->id}}/edit" >
                                    <button type="submit" role="button" class="btn btn-green btn-rounded btn-sm px-3 text-white " value="Edit"><i class="fas fa-edit"></i></button>
                                </form>
                                {!! Form::open(['route'=>['subject.destroy',$subject->id],'method'=>'POST']) !!}
                                    @method('DELETE')
                                    <button type="submit" role="button" class="btn btn-danger btn-rounded btn-sm px-3" value="Delete"><i class="fas fa-trash-alt"></i></button>
                                {!! Form::close() !!}
                            </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Notes</th>
                            <th>Semester Id</th>
                            <th>Updated At</th>
                            <th>Created At</th>
                            <th class="disabled-sorting">Actions
                            </th>
                        </tr>
                    </tfoot>
                </div>
              </table>
            </div>
          </div>
        </div>
    </div>
@endsection

@section('additional_scripts')
<script>
    $('#dtMaterialDesignExample').DataTable();
  </script>
@endsection

