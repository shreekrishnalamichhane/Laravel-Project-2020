<?php

namespace App\Http\Controllers;
use App\Note;
use App\User;
use App\Semester;
use App\Subject;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $notes = Note::all();
        $users = User::all();
        $semesters = Semester::all();
        $subjects = Subject::all();
        // $semester = DB::table('semesters')->where('id', '17');
        return view('dashboard')->withUser($users)->withNote($notes)->withSemesters($semesters)->withSubjects($subjects);
    }
}
