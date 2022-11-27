<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreateCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([
            'category_name' => 'Romance'
        ]);
        DB::table('category')->insert([
            'category_name' => 'Mystery'
        ]);
        DB::table('category')->insert([
            'category_name' => 'Science Fiction'
        ]);
    }
}
