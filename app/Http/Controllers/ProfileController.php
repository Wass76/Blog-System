<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Profile;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function __construct()
     {
         $this->middleware('auth');
     }

    public function index()
    {


        $user = Auth::user();
        $id = Auth::id();


        if($user->Profile == null){
            $profile = Profile::create([
                'province' ,
                'user_id' =>$id ,
                'gender',
                'bio'  ,
                'facebook'
            ]);

        }
        return view('users.profile')->with('user' , $user);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'province' => 'required',
            'facebook' => 'required',
            'gender'=>'required' ,
            'bio' =>'required'
        ]);
        $user = Auth::user();
        $user->name = $request->name;//in the profile blade
        $user -> profile->  province = $request->province; // in the first equal statement name should be same of database name
        $user -> profile ->  gender = $request->gender; // but in the second equal statement name should be same profile blade name
        $user -> profile ->  facebook = $request->facebook;
        $user  -> profile-> bio = $request->bio;
        $user->save();
        $user-> profile->save();



        if($request->has('password')){
            $user->password = bcrypt($request->password) ; //to code the password in db
            $user->save();
        }

return redirect()->back();
  }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

/*



*/
