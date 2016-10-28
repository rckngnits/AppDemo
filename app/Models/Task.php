<?php

namespace App\Models;

use App\User;
use App\Models\Status;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'title',
        'description',
        'fk_user_id_assign',
        'fk_client_id',
        'fk_status_id',
        'fk_user_id_created',
        'deadline'
    ];
    protected $dates = ['deadline'];

    protected $hidden = ['remember_token'];

    public function user()
    {
        return $this->belongsTo(User::class, 'fk_user_id_created');
    }

    public function client()
    {
        return $this->belongsTo(Client::class, 'fk_client_id');
    }
    
    public function taskCreator()
    {
        return $this->belongsTo(User::class, 'fk_user_id_created');
    }

    public function comments()
    {
        return $this->hasMany(Comments::class, 'fk_task_id' , 'id');
    }
    public function status()
    {
        return $this -> belongsTo(Status::class , 'fk_status_id');
    }
}
