<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Models\Client;
use Illuminate\Http\Request;
use App\Models\Task;
use App\Http\Requests\Task\StoreTaskRequest;
use App\Http\Controllers\Controller;

class TaskController extends Controller
{
    public function __counstruct()
    {
    	$this->middleware('auth');
    }

    public function index()
    {
        $tasks = Task::all(); 
    	return view('admin.tasks.index', compact('tasks'));
    }
    public function create()
    {
        $clients = Client::orderBy('name', 'ASC')->get();
        $users = User::all();
    	return view ('admin.tasks.create', compact('users','clients'));
    }

    public function show(Task $task)
    {
        // return $task->user;
       return view ('admin.tasks.show',compact('task', 'user'));
    }

    public function store(StoreTaskRequest $request, Task $task)
    {
        Task::create($request->all());
        return back()->with('success','Task Added');
    }

    public function destroy(Task $task)
    {
        
    }
}
