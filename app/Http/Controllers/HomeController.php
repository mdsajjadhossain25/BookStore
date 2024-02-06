<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(Request $request)
    {
        $search = $request['search'] ?? "";
        if ($search != "") {
            $books = Book::where('title', 'LIKE', "%$search%")
                ->orwhere('isbn', 'LIKE', "%$search%")
                ->orwhere('author', 'LIKE', "%$search%")
                ->latest()
                ->paginate(10);

        } else {
            $books = Book::latest('created_at')->paginate(10);
        }
        return view('welcome', compact('books', 'search'));
    }
}
