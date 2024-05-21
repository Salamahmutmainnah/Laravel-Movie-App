<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $reviews = [
        [
            'id' => 1,
            'title' => 'Jojo Bizarre Adventure',
            'poster' => 'movie-01.jpg',
            'user'=> ' @Raisa.Putri',
            'rate' => '7,5/10',
            'date' => '11 November 2024'
        ],
        [
            'id' => 2,
            'title' => 'Noragami',
            'poster' => 'movie-02.jpg',
            'user'=> '@Devan_Marzuki',
            'rate' => '6,5/10',
            'date' => '17 Maret 2020'
        ],
        [
            'id' => 3,
            'title' => 'Wind Breaker',
            'poster' => 'movie-03.jpg',
            'user'=> ' @sisi_harumi',
            'rate' => '5/10',
            'date' => '10 Januari 2019'
        ],
        [
            'id' => 4,
            'title' => 'Spy X Family',
            'poster' => 'movie-04.jpg',
            'user'=> '@Tom_Jhon',
            'rate' => '8,5/10',
            'date' => '25 Agustus 2017'
        ]
    ];

    public function getAllReviews()
    {
        return $this->reviews;
    }
}