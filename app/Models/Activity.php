<?php

namespace App\Models;

use App\User;
use App\Models\Task;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
	protected $fillable = [
		'fk_user_id',
		'fk_task_id',

	];

    public function task()
    {
    	return $this->belongsTo(Task::class , 'fk_task_id');
    }

    public function user()
    {
    	return $this->belongsTo(User::class, 'fk_user_id');
    }
}
