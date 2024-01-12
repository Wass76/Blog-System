<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use App\Models\Post;
class HomeController extends Controller
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

        // $user = Auth::user();
        $user = User::find(Auth::user()->id);
        $posts= auth()->user()->post()->orderBy('created_at','desc')->paginate(10);
        return view('posts.index') ->with('posts' ,$posts);
    }
}
