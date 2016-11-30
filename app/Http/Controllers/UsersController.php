<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use Illuminate\Support\Facades\Input;
use Image;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function index() {
        $user = \Auth::user();

        return view('pages/profile', array('user'=> $user ));
    }

    public function update(Request $request){


        if($_FILES['picture']['size'] != 0){

            $request->picture->move(public_path('uploads'),"profile.jpg");
            $user = \Auth::user();
            $user->img = 'profile.jpg';
            $user->Save();
        }
        else{
            //return view('home');
        }

       if(isset($_POST['notifications']) === true){

           $user = \Auth::user();
           $user->notifications = true;
           $user->Save();
        }
        else
        {
            $user = \Auth::user();
            $user->notifications = false;
            $user->Save();
        }
        //return view('pages/profile', array('users'=> Auth::user()) );

        return redirect('home');
    }
    
}
