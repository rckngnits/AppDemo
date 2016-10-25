<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    public function task()
    {
    	return $this -> hasMany(Task::class , 'fk_status_id' , 'id');
    }
}
