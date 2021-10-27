<?php

namespace App\Http\Controllers;

use App\Models\CommentsPost;
use App\Models\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user=request()->session()->get('user');
        if (!isset($user['user'])){
            $errormessage['errormessage']="your session expired please log in again";
            return view('login.login',$errormessage);
        }


        $postsvalues['posts'] = Posts::all();
        $postsvalues['uservalue'] = $user['user'];

        return view('posts.index',$postsvalues);

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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        //
        $user=request()->session()->get('user');
        if (!isset($user['user'])){
            $errormessage['errormessage']="your session expired please log in again";
            return view('login.login',$errormessage);
        }


        $postsvalues['posts'] = Posts::all();
        $postsvalues['uservalue'] = $user['user'];

        return view('posts.index',$postsvalues);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }

     /**
     * Logout
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        Request()->session()->forget('user');
        return redirect('login');
    }

}
