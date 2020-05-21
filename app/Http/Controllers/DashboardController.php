<?php

namespace App\Http\Controllers;
use App\Note;
use App\User;
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
        $note = Note::all();
        $user = User::all();
        return view('dashboard')->withUser($user)->withNote($note);
    }
}
