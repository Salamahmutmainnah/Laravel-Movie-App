<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Movie::create([
            'id' =>1,
            'title' =>'Jojo Bizarre Adventure',
            'poster' =>'movie-01.jpg',
            'genre_id' =>'1',
            'synopsis' =>'Jojos Bizarre Adventure is a story about the Joestar family, who are possessed with intense psychic strength.',
        ]);
        Movie::create([
            'id' =>2,
            'title' =>'Noragami',
            'poster' =>'movie-02.jpg',
            'genre_id' =>'2',
            'synopsis' =>'Noragami is an anime series that follows a poor deity named Yato, who desires to become a famous god.',
        ]);
        Movie::create([
            'id' =>3,
            'title' =>'Wind Breaker',
            'poster' =>'movie-03.jpg',
            'genre_id' =>'3',
            'synopsis' =>'Haruka Sakura wants nothing to do with weaklings—hes only interested in the strongest of the strong.',
        ]);
        
       Movie::create([
            'id' => 4,
            'title' =>'Spy X Family',
            'poster' =>'movie-04.jpg',
            'genre_id' =>'4',
            'synopsis' =>'Corrupt politicians, frenzied nationalists and other seditious forces continue to jeopardize the thin veneer of peace.',
       ]);
    }
}
