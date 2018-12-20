<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Profile;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)

    {

        if(!$user->profile){

            return redirect()->route('profile.create');

        } else {

            return view ('profile.show',['profile' => $user->profile]);

        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {

        $user = \Auth::user();

        return view ('profile.create',compact('user'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // 'name','email','firstname','lastname','age','birthdate','bio'

        $validated = $request->validate([

            'username' => 'required',

            'email' => 'required|email',

            'firstname' => 'required',

            'lastname' => 'required',

            'age' => 'required|numeric|max:150',

            'birthdate' => 'required|numeric',

            'bio' => 'required|min:30'

        ]);

        $profile = new Profile;

        $profile->user_id = \Auth::user()->id;
        $profile->username = $validated['username'];
        $profile->email = $validated['email'];
        $profile->firstname = $validated['firstname'];
        $profile->lastname = $validated['lastname'];
        $profile->age = $validated['age'];
        $profile->birthdate = $validated['birthdate'];
        $profile->bio = $validated['bio'];

        $profile->save();

        return redirect('/');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {

        return view ('profile.edit',['profile' => $user->profile]);

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
