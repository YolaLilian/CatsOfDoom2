<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfilesController extends Controller
{
    public function index() {
        // return view('index');
        // $users = User::all();
        // return view('profiles/index', compact('profiles'));

        $users = User::all();
        return view('profiles.index')->with('users', $users);
    }

    public function show($id) {
        // $user = User::find($user);
        // return view('show', [
        //     'user' => $user,
        // ]);

        $user = User::findOrFail($id);
        return view('profiles.show', compact('user', 'id'));
    }

    public function edit($id) {
        $user = User::find($id);
        return view('profiles.edit', compact('user', 'id'));
    }

    public function update(Request $request) {
        $this->validate($request, [
            'first_name'            => 'required',
            'last_name'             => 'required',
            'username'              => 'required'
        ]);
        $user = User::find($id);
          $user->first_name         = $request->get('first_name');  
          $user->last_name          = $request->get('last_name');
          $user->username           = $request->get('username');
          $user->save();
        return redirect()->route('profiles.{user}')->with('success', 'Data saved!');
    }



    public function destroy($id) {
        $user = User::find($id);
        $user->destroy($id);
        return redirect()->route('profiles.index')->with('success', 'Data deleted!');
    }
}
