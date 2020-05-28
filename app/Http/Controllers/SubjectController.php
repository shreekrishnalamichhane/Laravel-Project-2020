<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;
use App\Semester;
use App\User;
use App\Note;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subjects = Subject::all();
        // $notes = Note::orderBy('created_at','desc');
        return view('subjects.index')->withSubjects($subjects);
    }
    public function subjects_filter($semester_id)
    {
        $notes = Note::all();
        $users = User::all();
        $semesters = Semester::all();
        $subjects = Subject::all();
        $subject_filter = Subject::where('semester_id',$semester_id)->get();
        return view('subjects.show')->with('users',$users)->with('notes',$notes)->with('semesters',$semesters)->with('subjects',$subjects)->with('subjectsoo',$subject_filter)->with('semester_id',$semester_id);
    }
    // ->withUser($user)->withNote($note)->withSemesters($semester)->withSubjects($subject)
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $semester = Semester::all();
        return view('subjects.create')->withSemesters($semester);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'semester'=>'required',
        ]);
        $subject = new Subject;
        $subject->name=$request->name;
        $subject->semester_id=$request->semester;
        $subject->save();
        session()->flash('success','Subject Added Successfully.');
        return redirect()->route('subject.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subject = Subject::findOrFail($id);
        return view('subjects.show')->withSubject($subject);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subject = Subject::findOrFail($id);
        $semester = Semester::all();
        return view('subjects.edit')->withSubject($subject)->withSemesters($semester);
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
        $this->validate($request,[
            'name'=>'required',
            'semester'=>'required',
        ]);
        $subject = Subject::find($id);
        $subject->name=$request->name;
        $subject->semester_id=$request->semester;
        $subject->save();
        session()->flash('success','Subject Updated Successfully.');
        return redirect()->route('subject.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subject = Subject::find($id);
        $subject -> delete();
        session()->flash('success','Subject Deleted Successfully');
        return redirect()->route('subject.index');
    }
}
