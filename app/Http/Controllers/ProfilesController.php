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

        $user = User::find($id);
        return view('profiles.show', compact('user', 'id'));
    }

    public function destroy($id)
    {
        $user = User::find($id);
        // dd($user);
        $user->destroy($id);
        return redirect()->route('profiles.index')->with('success', 'Data deleted!');
    }
}
