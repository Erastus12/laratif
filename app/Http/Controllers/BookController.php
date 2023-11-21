<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;


class BookController extends Controller
{
    public function index()
    {
        $books = Books::all();

        return response()->json($books);
    }

    public function store(Request $request)
    {
        $book = new Books;
        $book->name = $request->name;
        $book->author = $request->author;
        $book->publish_date = $request->publish_date;
        $book->save();

        return response()->json([
            "message" => "Book Added.", 201
        ]);
    }

    public function show($id)
    {
        $book = Books::query()->find($id);

        if(!empty($book))
        {
            return response()->json($book);
        }
        else 
        {
            return response()->json([
                "message" => "Book not found", 404
            ]);
        }
    }

    public function update($id)
    {
        if(Books::query()->where('id', $id)->first())
        {
            $book = Books::query()->find($id);
    
            $bookName = is_null($request->name) ? $book->name : $request->name;
            $bookName = is_null($request->author) ? $book->author : $request->author;
            $bookName = is_null($request->publish_date) ? $book->publish_date : $request->publish_date;
            $book->save();
    
            return response()->json([
                "message" => "Book Updated.",
            ]);
        }
        else
        {
            return response()->json([
                "message" => "Book Not Found."
            ]);
        }
    }

    public function destroy($id)
    {
        if(Books::query()->where('id', $id)->first());
    }
}
