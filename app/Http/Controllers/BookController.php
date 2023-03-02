<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{

    public function showAllBooks()
    {
        return response()->json(Book::all());
    }

    public function create(Request $request)
    {
        $book = Book::create($request->all());

        return response()->json($book, 201);
    }

    public function showOneBook($id)
    {
        $book = Book::findOrFail($id);

        return response()->json($book, 200);

    }

    public function update($id, Request $request)
    {
        $book = Book::findOrFail($id);
        $book->update($request->all());
        $book->save();

        return response()->json($book, 200);   
    }


    public function delete($id)
    {
        try
        {
            Book::findOrFail($id)->delete();
        }catch(Exception $e)
        {
            return response()->json(['error' => $e->getMessage()], 500);
        }

        return response('Deleted Successfully', 200);
    }


}
