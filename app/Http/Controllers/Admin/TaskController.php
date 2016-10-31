<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\User;
use App\Models\Task;
use App\Models\Status;
use App\Models\Client;
use App\Models\Comment;
use App\Models\Activity;
use App\Models\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Task\StoreTaskRequest;

class TaskController extends Controller
{
    public function __counstruct()
    {
    	$this->middleware('auth');
    }

    public function index()
    {
        $tasks = Task::orderBy('created_at' , 'desc')->with(['user','client','status'])->get(); 
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
        $comments = Comment::where('fk_task_id', $task->id)->get();
        return view ('admin.tasks.show',compact('task', 'comments'));
    }

    public function store(StoreTaskRequest $request, Task $task)
    {
        Task::create([
            'title' => $request['title'],
            'description' => $request['description'],
            'fk_status_id' => $request['fk_status_id'],
            'fk_user_id_assign' => $request['fk_user_id_assign'],
            'fk_user_id_created' => Auth::user()->id,
            'fk_client_id' => $request['fk_client_id'],
            'deadline' => $request['deadline'],
            ]);

        Activity::create([
            'fk_user_id' => Auth::user()->id,
            $task = Task::orderBy('id','DESC')->first(),
            'fk_task_id' => $task->id ,
            ]);

        // return Auth::user()->id;
       return back()->with('success','Task Added');
    }

    public function destroy(Task $task)
    {
        
    }
}
