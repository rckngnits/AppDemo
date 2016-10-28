<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests\Comment\StoreCommentRequest;
use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Activity;
// use App\Models\Task;
use Auth;

class CommentController extends Controller
{
    public function store(StoreCommentRequest $request)
    {
    	Comment::create([
    		'comment_body' 	=> 	$request->comment_body,
    		'fk_user_id' 	=>  $request->fk_user_id,
    		'fk_task_id' 	=> 	$request->fk_task_id,
    	]);

    	Activity::create([
            'fk_user_id' => Auth::user()->id,
            // $task = Task::orderBy('id','DESC')->first(),
            'fk_task_id' => $request->fk_task_id ,
            ]);

        return back();
    }
}
