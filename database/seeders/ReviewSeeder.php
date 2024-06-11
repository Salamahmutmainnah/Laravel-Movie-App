<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::create([
            'id' => 1,
            'movie_id' => 'Jojo Bizarre Adventure',
            'user' => '@Raisa_Aqila',
            'rate' => '8,5/10',
            'Date' => '23 Agustus 2020'
    ]);

       Review::create([
            'id' => 2,
            'movie_id' => 'Noragami',
            'user' => '@Ridwan001',
            'rate' => '7,5/10',
            'Date' => '30 Juli 2016'
    ]);
        Review::create([
            'id' => 3,
            'movie_id' => 'Wind Breaker',
            'user' => '@Haruko66',
            'rate' => '8/10',
            'Date' => '15 Januari 2021'
    ]);
        Review::create([
            'id' => 4,
            'movie_id' => 'Spy X Family',
            'user' => '@Junior_123',
            'rate' => '9/10',
            'Date' => '10 Mei 2019'
            ]);
    }
}
