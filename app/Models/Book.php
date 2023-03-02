<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title', 
        'year',
        'description',
        'isbn'
    ];

    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'book_genre');
    }

    public function authors()
    {
        return $this->belongsToMany(Author::class, 'book_author');
    }
}
