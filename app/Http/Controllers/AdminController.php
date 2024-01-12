<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {

        $posts = Post::orderBy("created_at","desc")->paginate(10);
        return view("admin.index", compact("posts"));

    }
}
