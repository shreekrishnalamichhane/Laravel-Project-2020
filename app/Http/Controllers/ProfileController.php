<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Note;
use Image;
use Illuminate\Support\Facades\Storage;
class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profile.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
    /*
    *
    *
    *
    */

    public function change_avatar( Request $request){
        $this->validate($request,[
            'avatar'=> 'required|mimetypes:image/jpeg,image/png|max:1999',
        ]);
        //handle the user upload of avatar
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');

            $avatarNameWithExt = $request->file('avatar')->getClientOriginalName();

            $avatarName = pathinfo($avatarNameWithExt,PATHINFO_FILENAME);

            $extension = $request->file('avatar')->getClientOriginalExtension();

            $avatarNameToStore = $avatarName .'_'.time(). '.'. $extension;


            $user_id = Auth::user()->id;
            $user = User::find(Auth::user()->id);
            if($user->avatar != 'default.jpg'){
            Storage::delete('public/user_avatar/'.$user->avatar);
            }
            $user->avatar =  $avatarNameToStore;

            // $path = $request->file('avatar')->resize(150,150)->storeAs('public/user_avatar', $avatarNameToStore);
            Image::make($avatar)->resize(150,150)->save(public_path('/storage/user_avatar/' . $avatarNameToStore));
        $user->save();
        session()->flash('success','Avatar Updated Successfully.');
        return redirect('profile/'.$user_id);
    }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::where('id',$id)->get();
        $notes = Note::where('user_id',$id)->paginate(5);
        // dd($user);
        $user_id = $id;
        return view('profile.show')->with('user_id',  $user_id )->with('user',$user)->with('notes',$notes);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
