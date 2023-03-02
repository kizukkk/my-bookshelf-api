<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('genres_books', function (Blueprint $table) {
            
            $table->id();

            $table->unsignedBigInteger('book_id');
            $table->foreign('book_id')
                ->references('id')
                ->on('books')->onDelete('cascade');

            $table->unsignedBigInteger('genre_id');
            $table->foreign('genre_id')
                ->references('id')
                ->on('genres')->onDelete('cascade');

            $table->timestamps();

        });
    }


    public function down(): void
    {
        Schema::dropIfExists('genres_books');
    }
};
