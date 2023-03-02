<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $fillable = [
        'name',
        'description',
    ];

    public function books()
    {
        return $this->belongsToMany
        (
            Book::class, 
            'genres_books',
            'genre_id',
            'book_id'
        );
    }
}
