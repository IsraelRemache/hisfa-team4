<?php

namespace App\Http\Controllers;

use App\Prime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\User;
use App\Notifications\PrimeSiloStatus;
use Illuminate\Support\Facades\Notification;

class PrimeController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        $primes = \App\Prime::all($id);
        $data['primes'] = $primes;

    }
    
    public function addprime(Request $request)
    {
        if(isset($_POST['addprime'])){
            $prime = new prime;
            $prime->name = $request->input('primesiloname');
            $prime->resource_id = Input::get('primeresource');
            $prime->Save();
        }
        return redirect('home');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        $prime = \App\Prime::findOrFail($id);
        $data['prime'] = $prime;
        return view('products/prime',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        if(isset($_POST['changeprime']) && $_POST['cprimesiloquantity'] <= 3300) {

            if($_POST['cprimesiloname'] != null || $_POST['cprimesiloquantity'] !=null ) {

                if(is_numeric($_POST['cprimesiloquantity'])) {
                    $id = $_POST['id'];
                    $prime = \App\Prime::findOrFail($id);
                    $prime->name = $_POST['cprimesiloname'];
                    $prime->quantity = $_POST['cprimesiloquantity'];
                    $prime->Save();
                }
                else {
                    return redirect('home');
                }
            }
        }
            if ($_POST['cprimesiloquantity'] >= 2970) {
                    $users = User::where('notifications', '1')->get();
                    Notification::send($users, new PrimeSiloStatus($prime));
                }

        return redirect('home');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
        if(isset($_POST['delete'])) {
            $id = $_POST['id'];
            $prime = \App\Prime::findOrFail($id);
            $prime->delete();
        }
        return redirect('home');
    }
}
