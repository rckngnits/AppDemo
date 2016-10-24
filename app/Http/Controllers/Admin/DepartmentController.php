<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Http\Requests;
use App\Http\Requests\Department\StoreDepartmentRequest;
use App\Http\Controllers\Controller;

class DepartmentController extends Controller
{
    protected $departments;

    public function __counstruct()
    {
    	$this->middleware('auth');
    }

    public function index()
    {
        $departments = Department::all(); 
    	return view('admin.departments.index' , compact('departments'));
    }

    public function create()
    {
    	return view('admin.departments.create');
    }

    public function store(StoreDepartmentRequest $request)
    {
        
        Department::create($request->all());
        return back()->with('success','Department Added');
    }

    public function show(Department $department)
    {
        return view('admin.departments.show',compact('department'));
    }

    public function edit(Department $department)
    {
        return view ('admin.departments.edit', compact('department'));
    }

    public function update(Request $request, Department $department)
    {
        $department->update($request->all());
        return back()->with('success','Department Updated');
    }
}

