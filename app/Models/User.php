<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class User extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable, HasFactory;
    protected $fillable = [
        'name', 'email','password',
    ];

    protected $hidden = [
        'password',
    ];

    public function roles()
    {
        return $this->belongsToMany
        (
            Role::class, 
            'roles_users',
            'user_id',
            'role_id'
        );
    }

    public function book_list()
    {
        return $this->belongsToMany
        (
            Book::class, 
            'book_list',
            'user_id',
            'book_id'
        );
    }


}
