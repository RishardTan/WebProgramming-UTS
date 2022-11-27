<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreatePublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('publishers')->insert([
            'name' => 'Penguin',
            'address' => '1745 Broadway, New York, NY 10019 USA',
            'phone' => '1-800-733-3000',
            'email' => 'penguin@penguin.com',
            'image' => 'images/penguin.jpg'
        ]);

        DB::table('publishers')->insert([
            'name' => 'Collins',
            'address' => 'Westerhill Road, Bishopsbriggs, Glasgow G64 2QT',
            'phone' => '01484 668148',
            'email' => 'collins@collins.com',
            'image' => 'images/collins.jpg'
        ]);
    }
}
