<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests\Role\StoreRoleRequest;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Role;
use App\Models\Client;

class RoleController extends Controller
{
    public function __counstruct()
    {
    	$this->middleware('auth');
    }

    public function index()
    {
        $users = User::with(['roles'])->get(); 
        return view('admin.role.index' , compact('users'));
    }

    public function create()
    {
    	return view('admin.role.create');
    }

    public function store(StoreRoleRequest $request, Role $role)
    {
        Role::create([
            'name' => $request['name'],
            'label' => $request['label'],
            ]);
        return back()->with('success','Task Added');
    }
}
