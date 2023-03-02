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
        // return $this->belongsToMany
        // (
        //     ReletedModel, 
        //     pivot_table_name,
        //     foreign_key_of_current_model_in_pivot_table,
        //     foreign_key_of_other_model_in_pivot_table
        // );

        return $this->belongsToMany
        (
            Book::class, 
            'authors_books',
            'author_id',
            'book_id'
        );


    }

}
