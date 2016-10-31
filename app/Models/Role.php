<?php

namespace App\Models;

use App\Models\Permission;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
	protected $fillable =[
		'name',
		'label',
	];	
    public function permissions()
    {
    	return $this-> belongsToMany(Permission::class);
    }

    public function users()
    {
        return $this -> belongsToMany(User::class);
    }
}
