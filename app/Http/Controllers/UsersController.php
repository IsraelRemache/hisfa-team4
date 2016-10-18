<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use Image;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function index() {
        return view('pages/profile', array('users'=> Auth::user()) );
    }

    public function update(Request $request){


        if($_FILES['picture']['size'] != 0){

            $request->picture->move(public_path('uploads'),"profile.jpg");
            DB::table('users')->where('id',Auth::user()->id)->update(['img' => 'profile.jpg']);
        }
        else{
            return view('home');
        }

    }
    
}
