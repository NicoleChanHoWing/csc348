<?php

namespace App\Http\Controllers;

use App\Models\CommentsPost;
use App\Models\Posts;
use App\Models\PostsViews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        if (!isset($user)){
            $errormessage['errormessage']="your session expired please log in again";
            return view('login.login',$errormessage);
        }


        //$postsvalues['posts'] = Posts::all();
        $postsvalues['posts'] = DB::table('posts')->select(DB::raw('*, (select count(id) from posts_views v where v.id_post=posts.id) as views,(select count(id) from comments_posts p where p.id_post=posts.id) as comments'))->get();
        $postsvalues['user'] = $user;

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
        $user=request()->session()->get('user');
        if (!isset($user)){
            $errormessage['errormessage']="your session expired please log in again";
            return view('login.login',$errormessage);
        }
        $postsvalues['user'] = $user;


        return view('posts.createpost',$postsvalues);


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

        $postsvalues = request()->except('_token');
        Posts::insert($postsvalues);
        //return response()->json($postsvalues);

        $user=request()->session()->get('user');
        $post['user'] = $user;

        return view('posts.createpost',$post);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user=request()->session()->get('user');
        if (!isset($user)){
            $errormessage['errormessage']="your session expired please log in again";
            return view('login.login',$errormessage);
        }


        //Inserting Viewes
        $viewvalues = array('id_post' => $id,'userid' => $user->id);
        PostsViews::insert($viewvalues);


        $post['post'] = Posts::findOrFail($id);
        $post['comments'] = CommentsPost::where('id_post','=',$id)->get();
        $post['user'] = $user;

        return view('comments.commentlist',$post);
        //return response()->json($posts);

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
        $post['post'] = Posts::findOrFail($id);
        $user=request()->session()->get('user');
        $post['user'] = $user;

        return view('posts.update',$post);
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
        $postsvalues = request()->except(['_token','_method','posts.updated_at']);
        Posts::where('id','=',$id)->update($postsvalues);

        $user=request()->session()->get('user');
        $post['post'] = Posts::findOrFail($id);
        $post['user'] = $user;
        return view('posts.update',$post);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $comments = CommentsPost::where('id_post','=',$id)->delete();
        Posts::destroy($id);
        return redirect('posts');
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
