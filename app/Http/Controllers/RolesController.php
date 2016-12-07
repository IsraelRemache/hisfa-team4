<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Role;
use App\RoleUser;
use App\User;
use Hash;
use DB;

class RolesController extends Controller
{

	   public function show()
    {
        $user = \App\User::all();
        $role = \App\Role::all();
        $data['user'] = $user;
        $data['roles'] = $role;
        return view('roles/create', $data);
    }

    public function store()
    {
    	if(isset($_POST['role_id'])){
    		$user = new user;
    		$user->name = $_POST['name'];
    		$user->email = $_POST['email'];
    		$user->password = Hash::make( $_POST['password'] );
    		$user->save();
            $role_user = new RoleUser;
            $role_user->role_id = $_POST['role_id'];
            $role_user->user_id = $user->id;
            $role_user->save();
        }

        return redirect('home');
    }

    public function users() {
    $users = DB::table('role_user')->select('roles.name as role_name', 'users.name', 'users.email')->join('users', 'users.id', '=', 'role_user.user_id')->join('roles', 'roles.id', '=', 'role_user.role_id')->get();
    $roles = \App\Role::all();

    return view('roles/users', compact('users', 'roles')); 
    }
}