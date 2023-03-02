<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = [
        'full_name', 
        'birthday',
        'country',
    ];

    public function books()
    {
        return $this->belongsToMany(Book::class, 'author_book');
    }
}
