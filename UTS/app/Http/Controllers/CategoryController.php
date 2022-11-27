<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\BookCategories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function showcategory($id)
    {
        $category = DB::table('category')
            ->where('id', '=', $id)
            ->first();

        $book_data = DB::table('books')
            ->join('book_categories', 'book_categories.book_id', '=', 'books.id')
            ->where('book_categories.category_id', '=', $id)
            ->get();
        return view('category', compact('book_data', 'category'));
    }
}
