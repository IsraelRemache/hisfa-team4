<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use Image;


class ProfileController extends Controller
{
    public function index() {
        return view('pages/profile');
    }

    public function upload(Request $request){
        //$request->picture->move(public_path('uploads'),"profile.jpg");

        
    }
}
