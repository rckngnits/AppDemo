<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
Use App\Auth\Traits\PassLessAuthenticable;
use App\Models\Department;
use App\Models\Role;
use App\Models\Activty;
use App\Models\Task;

class User extends Authenticatable
{
    use Notifiable, PassLessAuthenticable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'email', 
        'password',
        'address',
        'added_by',
        'primary_number',
        'secondary_number',
        'fk_department_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function tasks()
    {
        return $this->hasMany(Tasks::class, 'fk_user_id_assign', 'id');
    }

    public function department()
    {
        return $this->belongsTo(Department::class, 'fk_department_id');
    }

    public function activities()
    {
        return $this-> hasMany(Activty::class , 'fk_user_id' , 'id');
    }

    public function roles()
    {
        // return $this->belongsToMany(Role::class);
        return $this->belongsToMany('App\Models\Role');
    }

    public function hasRole($role)
    {
        if(is_string($role)){
            return $this->roles->contains('name', $role);
        }

        return !! $role->intersect($this->roles)->count();
    }
}



 











