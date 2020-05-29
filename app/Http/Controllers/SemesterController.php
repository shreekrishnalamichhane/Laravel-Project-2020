<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Semester;

class SemesterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth()->user()->user_role != "admin"){
            abort(404);
        }
        // $notes = auth()->user()->notes;
        $semesters = Semester::all();
        // $notes = Note::orderBy('created_at','desc');
        return view('semester.index')->withSemesters($semesters);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(auth()->user()->user_role != "admin"){
            abort(404);
        }
        return view('semester.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(auth()->user()->user_role != "admin"){
            abort(404);
        }
        $this->validate($request,[
            'name'=>'required|unique:semesters',
        ]);
        $semester = new Semester;
        $semester->name=$request->name;
        $semester->save();
        session()->flash('success','Semester Added Successfully.');
        return redirect()->route('semester.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     $semester = Semester::findOrFail($id);
    //     return view('semester.show')->withsemester($semester);
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(auth()->user()->user_role != "admin"){
            abort(404);
        }
        $semester = Semester::findOrFail($id);
        return view('semester.edit')->withSemester($semester);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(auth()->user()->user_role != "admin"){
            abort(404);
        }
        $this->validate($request,[
            'name'=>'required|unique:semesters',
        ]);
        $semester = Semester::find($id);
        $semester->name=$request->name;
        $semester->save();
        session()->flash('success','Semester Updated Successfully.');
        return redirect()->route('semester.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(auth()->user()->user_role != "admin"){
            abort(404);
        }
        $semester = Semester::find($id);
        $semester -> delete();
        session()->flash('success','Semester Deleted Successfully');
        return redirect()->route('semester.index');
    }
}
