<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Movie;

class Catalog extends Model
{

    protected $with = [
        'movie'
    ];

    protected $fillable = [
        'gender', 
        'director', 
    ];

    public function movie () 
    {
        return $this->belongsTo(Movie::class, 'movie_id', 'id');
    }
}
