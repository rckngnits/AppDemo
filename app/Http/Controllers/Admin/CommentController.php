<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests\Comment\StoreCommentRequest;
use App\Http\Controllers\Controller;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(StoreCommentRequest $request)
    {
    	Comment::create([
    		'comment_body' 	=> 	$request->comment_body,
    		'fk_user_id' 	=>  $request->fk_user_id,
    		'fk_task_id' 	=> 	$request->fk_task_id,
    	]);

        return back();
    }
}
