<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title', 
        'year',
        'description',
    ];

    public function genres()
    {
        return $this->belongsToMany
        (
            Genre::class, 
            'genres_books',
            'book_id',
            'genre_id'
        );
    }

    public function authors()
    {
        return $this->belongsToMany
        (
            Author::class, 
            'authors_books',
            'book_id',
            'author_id'
        );
    }

    public function users_who_added_to_list()
    {
        return $this->belongsToMany
        (
            User::class, 
            'book_list',
            'book_id',
            'user_id'
        );
    }
}
