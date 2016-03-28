<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;


class commentController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $posts = \DB::table('comments')->select('id', 'name','image','post','ups','downs')->get();

        //return var_dump( $posts);
        return view('/home',['posts' => $posts,'var1'=>3,'var2'=>3]);

    }

    public function newEntery(Request $request){


        //echo 'dharmveer baldoa';

        $email= Auth::user()->email;
        $message=Input::get('message');
        $image='http://bootdey.com/img/Content/user_1.jpg';


        $id=\DB::table('comments')->insertGetId(
            ['name'=> $email,'image'=> $image, 'post'=> $message, 'ups'=>0, 'downs'=>0]
        );

        //return redirect('./post');
        return redirect('./post')->with('message', 'post is made');
    }

}
