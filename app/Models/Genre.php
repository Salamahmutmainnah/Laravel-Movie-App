<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $genres = [
        [
            'id' =>1,
            'title' =>'Jojo Bizarre Adventure',
            'poster' =>'movie-01.jpg',
            'descriptions' =>'Jojos Bizarre Adventure is a story about the Joestar family, who are possessed with intense psychic strength.',
        ],
        [
            'id' =>2,
            'title' =>'Noragami',
            'poster' =>'movie-02.jpg',
            'descriptions' =>'Noragami is an anime series that follows a poor deity named Yato, who desires to become a famous god.',
        ],
        [
            'id' =>3,
            'title' =>'Wind Breaker',
            'poster' =>'movie-03.jpg',
            'descriptions' =>'Haruka Sakura wants nothing to do with weaklings—hes only interested in the strongest of the strong.',
        ],
        [
            'id' =>4,
            'title' =>'Spy X Family',
            'poster' =>'movie-04.jpg',
            'descriptions' =>'Corrupt politicians, frenzied nationalists and other seditious forces continue to jeopardize the thin veneer of peace.',
        
        ],
    ];

    public function getAllGenres()
    {
        return $this->genres;
    }
}