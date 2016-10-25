<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	protected $fillable = [
		'comment_body',
		'fk_task_id',
		'fk_user_id',
	];
    public function task()
    {
    	return $this->belongsTo(Task::class , 'fk_task_id' );
    }
    public function user()
    {
    	return $this->belongsTo(User::class, 'fk_user_id');
    }
}
