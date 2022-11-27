<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreateBookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'publisher_id' => 1,
            'title' => 'The Fault in Our Stars',
            'author' => 'John Green',
            'year' => 2012,
            'synopsis' => 'The Fault In Our Stars is a fabulous book about a young teenage girl who has been diagnosed with lung cancer and attends a cancer support group. Hazel is 16 and is reluctant to go to the support group, but she soon realises that it was a good idea. Hazel ',
            'image' => 'images/thefaultinourstars.jpg'
        ]);

        DB::table('books')->insert([
            'publisher_id' => 2,
            'title' => 'The Mystery of The Blue Train',
            'author' => 'Agatha Christie',
            'year' => 1928,
            'synopsis' => 'After traveling on the Blue Train from Calais to Nice, Hercule Poirot is pressed into service to help solve the murder of heiress Ruth Kettering who is found savagely beaten in her compartment. She was the daughter of wealthy industrialist Rufus Van Alden',
            'image' => 'images/mysteryofthebluetrain.jpg'
        ]);

        DB::table('books')->insert([
            'publisher_id' => 2,
            'title' => '1984',
            'author' => 'George Orwell',
            'year' => 1949,
            'synopsis' => 'In George Orwells 1984, Winston Smith wrestles with oppression in Oceania, a place where the Party scrutinizes human actions with ever-watchful Big Brother. Defying a ban on individuality, Winston dares to express his thoughts in a diary.',
            'image' => 'images/1984.jpg'
        ]);

        DB::table('books')->insert([
            'publisher_id' => 2,
            'title' => 'Murder on The Orient Express',
            'author' => 'Agatha Christie',
            'year' => 1934,
            'synopsis' => 'An American tycoon lies dead in his compartment, stabbed a dozen times, his door locked from the inside. Isolated and with a killer in their midst, detective Hercule Poirot must identify the murderer – in case he or she decides to strike again.',
            'image' => 'images/murderontheorientexpress.jpg'
        ]);

        DB::table('books')->insert([
            'publisher_id' => 1,
            'title' => 'The Adventures of Sherlock Holmes',
            'author' => 'Arthur Conan Doyle',
            'year' => 2018,
            'synopsis' => 'The Adventures of Sherlock Holmes is a collection of twelve stories involving the famous London detective Sherlock Holmes and his associate Dr. Watson. The collection was published in October 1892, although the first Sherlock story appeared in the Strand ',
            'image' => 'images/sherlockholmes.jpg'
        ]);
    }
}
