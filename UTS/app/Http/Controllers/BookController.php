<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function showall()
    {
        $book_data = Book::get();
        return view('home', compact('book_data'));
    }

    public function showbook($id)
    {
        $curr_book = DB::table('books')
            ->where('id', '=', $id)
            ->first();
        return view('book', compact('curr_book'));
    }
    public function view_contact()
    {
        return view('contact');
    }
}
