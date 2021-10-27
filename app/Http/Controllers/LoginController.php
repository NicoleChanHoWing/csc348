<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //Show Login page
    public function index()
    {
        //

        $errormessage['errormessage']="";
        return view('login.login',$errormessage);
    }


     /**
     * verify a login session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function verifylogin(Request $request)
    {
        //
        $name=$request->input('name');
        $password=$request->input('password');
        $userarray['user'] = User::whereRaw('name = ? and password = ?', array($name, $password))->get();

        if (count($userarray['user'])==0){
            $errormessage['errormessage']="Username and Password Incorrect!";
            return view('login.login',$errormessage);
        }

       // request()->session()->put('user',$userarray);
        foreach($userarray['user'] as $user){
            request()->session()->put('user',$user);
           }
        return redirect('posts');



    }


}
