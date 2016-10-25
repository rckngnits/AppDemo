<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
    	  	'name',
            'email',
            'address',
            'primary_number',
            'secondary_number',
            'state',
            'city',
            'pincode'
    ];

    public function task()
    {
        return $this->hasMany(Task::class, 'fk_client_id' , 'id');
    }
}
