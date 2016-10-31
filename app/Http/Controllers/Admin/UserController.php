<?php

namespace App\Http\Controllers\Admin;

use Auth;
use Illuminate\Http\Request;
use App\User;
use App\Models\Role;
use App\Models\Department;
use App\Http\Requests\User\StoreUserRequest;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function __counstruct()
    {
    	$this->middleware('auth');
    }

    public function index()
    {
        $users = User::all();

    	return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        $roles = Role::all();
        $departments = Department::all();
    	return view('admin.users.create', compact('departments','roles'));
    }
    public function show(User $user)
    {
        return view('admin.users.show',compact('user'));
    }

    //Password hashed

    public function store(StoreUserRequest $request)
    {
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
            'primary_number' => $request['primary_number'],
            'secondary_number' => $request['secondary_number'],
            'added_by' => Auth::user()->id,
            'fk_department_id' => $request['fk_department_id'],
            ]);

        $user =User::orderBy('id', 'DESC')->first();
        
        \DB::table('role_user')->insert(array (
                'role_id' => $request['role_id'],
                'user_id' => $user->id,
            ));
        return back()->with('success','User Added');

        // $user =User::orderBy('id', 'DESC')->first();
        // return $user->id;
    }

    public function delete(User $user)
    {
        $user->delete();
        return redirect('admin/user');
    }
}

