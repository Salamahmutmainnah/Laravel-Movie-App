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
            'name' => 'Shounen',
            'user' => '@Raisa_Aqila',
            'rate' => '8,5/10',
            'Date' => '23 Agustus 2020'
    ]);

       Review::create([
            'name' => 'Drama',
            'user' => '@Ridwan001',
            'rate' => '7,5/10',
            'Date' => '30 Juli 2016'
    ]);
        Review::create([
            'name' => 'School',
            'user' => '@Haruko66',
            'rate' => '8/10',
            'Date' => '15 Januari 2021'
    ]);
        Review::create([
            'name' => 'Komedi',
            'user' => '@Junior_123',
            'rate' => '9/10',
            'Date' => '10 Mei 2019'
            ]);


       

    }
}
