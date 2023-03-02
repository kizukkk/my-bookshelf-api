<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'name',
        'description',
    ];

    public function users()
    {
        return $this->belongsToMany
        (
            User::class, 
            'roles_users',
            'role_id',
            'user_id'
        );
    }

}
