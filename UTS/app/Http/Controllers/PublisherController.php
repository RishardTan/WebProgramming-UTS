<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Publisher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PublisherController extends Controller
{
    public function showall()
    {
        $publisher_data = Publisher::get();
        return view('allpublishers', compact('publisher_data'));
    }

    public function showpublisher($id)
    {
        $curr_publisher = DB::table('publishers')
            ->where('id', '=', $id)
            ->first();

        $book_data = Book::where('id', '=', $id)->get();

        return view('publisher', compact('curr_publisher', 'book_data'));
    }
}
