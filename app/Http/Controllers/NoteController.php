<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;
use App\Semester;
use App\Subject;
use Illuminate\Support\Facades\Storage;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        return $this->middleware('auth');
    }


    public function index()
    {
        // $notes = auth()->user()->notes;
        $notes = Note::all();
        // $notes = Note::orderBy('created_at','desc');
        return view('notes.index')->withNotes($notes);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $semesters = Semester::all();
        $subjects = Subject::all();
        return view('notes.create')->withSemesters('$semesters')->withSubjects('$subjects');
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
            'title'=>'required|max:100|min:10',
            'description'=>'required',
            'pdf_file' => 'required'
        ]);

        //handle file upload
        if($request->hasFile('pdf_file')){
            //get file name with the extension
            $fileNameWithExt = $request->file('pdf_file')->getClientOriginalName();

            //get just file name
            $fileName = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //ger=t just extension
            $extension = $request->file('pdf_file')->getClientOriginalExtension();
            //Filename to Store
            $fileNameToStore = $fileName .'_'.time(). '.'. $extension;
            //Upload file
            $path = $request->file('pdf_file')->storeAs('public/pdf_files', $fileNameToStore);
        }

        $note = new Note;
        $note->title=$request->title;
        $note->description=$request->description;
        $note->user_id = auth()->user()->id;
        $note->pdf_file = $fileNameToStore;
        $note->save();
        session()->flash('success','Note Created successfully.');
        return redirect()->route('notes.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $note = Note::findOrFail($id);
        return view('notes.show')->withNote($note);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $note = Note::findOrFail($id);
        return view('notes.edit')->withNote($note);
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
            'title'=>'required|max:100|min:10',
            'description'=>'required',
            'pdf_file' => 'max:1999'
        ]);
            //handle file upload
        if($request->hasFile('pdf_file')){
            //get file name with the extension
            $fileNameWithExt = $request->file('pdf_file')->getClientOriginalName();

            //get just file name
            $fileName = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //ger=t just extension
            $extension = $request->file('pdf_file')->getClientOriginalExtension();
            //Filename to Store
            $fileNameToStore = $fileName .'_'.time(). '.'. $extension;
            //Upload file
            $path = $request->file('pdf_file')->storeAs('public/pdf_files', $fileNameToStore);
        }


        $note = Note::find($id);
        $note->title=$request->input('title');
        $note->description=$request->input('description');
        if($request->hasFile('pdf_file')){
            Storage::delete('public/pdf_files/'.$note->pdf_file);
            $note->pdf_file = $fileNameToStore;
        }
        $note->save();
        session()->flash('success','Note updated successfully.');
        return redirect()->route('notes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $note = Note::find($id);
        Storage::delete('public/pdf_files/'.$note->pdf_file);
        $note -> delete();
        session()->flash('success','Note Deleted Successfully');
        return redirect()->route('notes.index');
    }
}
