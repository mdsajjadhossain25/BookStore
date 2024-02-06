<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function addBook()
    {
        return view('book.add_book');
    }
    public function saveBook(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'isbn' => 'required|string|max:10',
            'details' => 'required|string|max:255',
            'quantity' => 'required|integer|max:255',
            'price' => 'required|string|max:255',
        ]);
        $book = Book::create($validateData);
        return redirect()->route('added_successfully')->with('success', 'Book added Successfully');
    }
    public function addSuccess()
    {
        return view('book.added_successfully');
    }

    public function deleteBook($id)
    {
        $book = Book::find($id);
        $book->delete();
        // $book->save();
        return redirect()->route('home');
    }
    public function updateBook($id)
    {
        $book = Book::find($id);
        return view('book.update_book', compact('book'));
    }
    public function saveUpdate($id, Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'isbn' => 'required|string|max:10',
            'details' => 'required|string|max:255',
            'quantity' => 'required|integer|max:255',
            'price' => 'required|string|max:255',
        ]);
        $book = Book::find($id);
        $book->update($validateData);
        return redirect()->route('added_successfully')->with('success', 'Book Updated Successfully');
    }
    public function viewBook($id){
        $book = Book::find($id);
        return view('book.single_book', compact('book'));
    }
}
