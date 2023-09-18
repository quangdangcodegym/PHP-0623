<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        // DB::table('users')->insert(['name' => 'Quang Damg', 'email' => 'quang.dang@gmail.com', 'password' => '123123']);
        /**
         */
        $users = User::all();

        return view('users.index', compact('users'));
    }

    public function showCreate()
    {
        // $id = $request->query('id');
        $roles = Role::all();
        return view('users.create', compact('roles'));
    }
    public function create(Request $request)
    {
        $name = $request->fullname;
        $email = $request->email;
        $roleId = $request->sRole;

        $user = new User();
        /**
        $user->name = $name;
        $user->email = $email;
        $user->role_id = $roleId;
        $user->password = "123123";
        $user->save();
         **/
        $user = new User();
        $user->fill([
            'name' => $name,
            'email' => $email,
            'role_id' => $roleId,
            'password' => '123123',
        ]);
        dd("KAKA");
        $check = $user->save();
        dd($check);
        dd($user);
    }
}
