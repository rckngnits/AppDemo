<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'title',
        'description',
        'status',
        'fk_user_id_assign',
        'fk_client_id',
        'deadline'
    ];
    protected $dates = ['deadline'];

    protected $hidden = ['remember_token'];

    public function user()
    {
        return $this->belongsTo(User::class, 'fk_user_id_assign');
    }

    public function client()
    {
        return $this->belongsTo(Client::class, 'fk_client_id');
    }
    
    public function taskCreator()
    {
        return $this->belongsTo(User::class, 'fk_user_id_created');
    }
}
