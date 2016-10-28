<?php

namespace App\Http\Controllers\Admin;

use Auth;
use Illuminate\Http\Request;
use App\User;
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
        $departments = Department::all();
    	return view('admin.users.create', compact('departments'));
    }
    public function show(User $user)
    {
        return view('admin.users.show',compact('user'));
    }

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
        return back()->with('success','User Added');
    }
}

