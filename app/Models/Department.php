<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = [
			'name',
			'description'
			]; 

	public function users()
	{

		return $this->hasMany(Users::class, 'fk_department_id', 'id');
	}
}
