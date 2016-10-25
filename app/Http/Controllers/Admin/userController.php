<?php

namespace App\Http\Controllers\Admin;

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
        User::create($request->all());
        return back()->with('success','User Added');
    }
}

