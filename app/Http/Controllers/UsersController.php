<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('aurum.adminLTE.users', compact('users'));
    }


    public function create(Request $request)
    {
        if(!$request->input('name') || !$request->input('password') || !$request->input('email')) {
            return back()->with('message_error', 'Not valid data');
        }
        $create = User::create([
            'name' => $request->input('name'),
            'password' => bcrypt($request->input('password')),
            'email' => $request->input('email')
        ]);
        if($create) {
            return back()->with('message', 'User added!');
        }
        else {
            return back()->with('message_error', 'Error');
        }
    }


    public function destroy($id)
    {
        $isset = User::find($id);
        if(!$isset) {
            return back()->with('message_error','User not found!');
        }

        $delete = User::where('id', '=', $id)->delete();

        if($delete) {
            return back()->with('message', 'User delete!');
        }

    }
}
