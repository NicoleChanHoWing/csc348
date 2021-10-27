<?php

namespace App\Http\Controllers;

use App\Models\CommentsPost;
use App\Models\Posts;
use Illuminate\Http\Request;

class CommentsPostController extends Controller
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
        if (!isset($user)){
            $errormessage['errormessage']="your session expired please log in again";
            return view('login.login',$errormessage);
        }
        $post['user'] =$user;


        return view('comments.commentlist',$post);
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
    public function store(Request $request,$postid)
    {
        //
        $commentvalues = request()->except('_token');
        CommentsPost::insert($commentvalues);
        return redirect()->action(
            [PostsController::class, 'show'], ['post' => $postid]
        );
        //return redirect()->route('posts', ['post' => $postid]);
        /*
        $post['post'] = Posts::findOrFail($postid);

        $post['comments'] = CommentsPost::where('id_post','=',$postid)->get();

        return view('comments.commentlist',$post);
        */
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CommentsPost  $commentsPost
     * @return \Illuminate\Http\Response
     */
    public function show(CommentsPost $commentsPost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CommentsPost  $commentsPost
     * @return \Illuminate\Http\Response
     */
    public function edit(CommentsPost $commentsPost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CommentsPost  $commentsPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CommentsPost $commentsPost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CommentsPost  $commentsPost
     * @return \Illuminate\Http\Response
     */
    public function destroy(CommentsPost $commentsPost)
    {
        //
    }
}
