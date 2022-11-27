<?php

namespace Database\Seeders;

use App\Models\BookCategories;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreateBookCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('book_categories')->insert([
            'book_id' => 1,
            'category_id' => 1
        ]);
        DB::table('book_categories')->insert([
            'book_id' => 2,
            'category_id' => 2
        ]);
        DB::table('book_categories')->insert([
            'book_id' => 3,
            'category_id' => 3
        ]);
        DB::table('book_categories')->insert([
            'book_id' => 4,
            'category_id' => 2
        ]);
        DB::table('book_categories')->insert([
            'book_id' => 5,
            'category_id' => 2
        ]);
    }
}
