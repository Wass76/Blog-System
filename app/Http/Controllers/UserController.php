<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;
use Hash;

class UserController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }

    public function index()
    {
        $users = User::orderBy('created_at' ,'desc')->get();
        return view('users.index')->with('users' , $users);
    }


    public function create(Request $request)
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request , [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user= User::create([
            'name' =>$request ->name,
            'email' => $request ->email,
            'password' => Hash::make($request ->password),
        ]);

        $profile = Profile::create([
            'province' ,
            'user_id' =>$user->id ,
            'gender',
            'bio'  ,
            'facebook'
        ]);

        return redirect()->route('users');

        }

    public function destroy(string $id)
    {
        $user =User::find( $id);
        $user->profile()->delete( $id);
        $user->delete();
        return redirect()->route('users');
    }
}
