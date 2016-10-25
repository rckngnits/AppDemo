<?php

namespace App\Http\Controllers\Admin;


use App\User;
use App\Models\Status;
use App\Models\Client;
use App\Models\Comment;
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
        $statuses = Status::all();
        $clients = Client::orderBy('name', 'ASC')->get();
        $users = User::all();
    	return view ('admin.tasks.create', compact('users','clients','statuses'));
    }

    public function show(Task $task)
    {
        $comments = Comment::where('fk_task_id', $task->id)->with(['user'])->get();

        return view ('admin.tasks.show',compact('task', 'comments'));
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
