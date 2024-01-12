<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use App\Notifications\PostNotification;
use Auth;
use Illuminate\Http\Request;
use Notification;


class PostController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware(['auth']);
    // }



    public function index()
    {

        $posts =auth()->user()->post()->orderBy('created_at','desc')->paginate(10);
        $post = Post::orderBy('created_at' , 'DESC')->get();
        return view('posts.index')->with('posts',$posts);
    }

    public function postsTrashed()
    {
        $posts = Post::onlyTrashed()->where('user_id', Auth::id())->get();
        //where is used to lock access someone to postsTrashed when he isn't his owner for example
        return view('posts.trashed')->with('posts',$posts);
    }

    public function create()
    {
        $posts = Post::all();
        $tags = Tag::all();
        if ($tags->count() == 0) {
            return   redirect()->route('tag.create');
        }
        return view('posts.create')->with('tags' ,  $tags)->with('posts' ,$posts);
    }

    public function store(Request $request)
    {
        $user=User::all();

        $this->validate($request,[
            'title' =>  'required',
            'body' =>  'required',
            'tags' =>  'required',
            'photo' =>  'required|image',
        ]);

        $photo = $request->photo;
        $newPhoto = time().$photo->getClientOriginalName();
        $photo->move('uploads/posts',$newPhoto);

        $post = Post::create([
            'user_id' =>  Auth::id(),
            'title' =>  $request->title,
            'body' =>   $request->body,
            'photo' =>  'uploads/posts/'.$newPhoto,
        ]);
        $post->tag()->attach($request->tags);
        // attach for apply the edition on tag also

        Notification::sendNow($user ,new PostNotification($request->title));

        return redirect()->back() ;

    }


    public function show( $id)
    {
        $tags = Tag::all();
        $post = Post::where('id' , $id )->first();
       // dd($post);
        // if ($post === null) {
        //     return redirect()->back() ;
        // }
        return view('posts.show')->with('post',$post)
        ->with('tags',$tags);
    }


    public function edit(  $id)
    {
        $tag = Tag::all();
       // $post = Post::find( $id ) ;
        $post = Post::where('id' , $id )->where('user_id', Auth::id())->first();
         if ($post === null) {
            return redirect()->back() ;
        }
        $this->authorize('view', $post);
        return view('posts.edit')->with('post',$post)
        ->with('tag',$tag);
    }

    public function update(Request $request,  $id)
    {
        $post = Post::find( $id ) ;
        $this->validate($request,[
            'title' =>  'required',
            'body' =>  'required'
        ]);

     //   dd($request->all());

    if ($request->has('photo')) {
        $photo = $request->photo;
        $newPhoto = time().$photo->getClientOriginalName();
        $photo->move('uploads/posts',$newPhoto);
        $post->photo ='uploads/posts/'.$newPhoto ;
    }

    $post->title = $request->title;
    $post->body = $request->body;
    $post->save();
    $post->tag()->sync($request->tags); //to apply the edition on tags also when we edit from post
    // we shoudl add sync here
    return redirect()->back() ;

    }

    public function destroy( $id)
    {
        //dd($id);
       // $post = Post::find( $id ) ;

        $post = Post::where('id' , $id )->where('user_id', Auth::id())->first();
        if ($post === null) {
           return redirect()->back() ;
       }

        $post->delete($id);
        return redirect()->back() ;
    }


    public function hdelete( $id)
    {
        $post = Post::withTrashed()->where('id' ,  $id )->first() ;
        $post->forceDelete();
        return redirect()->back() ;
    }

    public function restore( $id)
    {
        $post = Post::withTrashed()->where('id' ,  $id )->first() ;
        $post->restore();
        return redirect()->back() ;
    }
}
