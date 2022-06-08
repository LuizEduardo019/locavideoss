<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Catalog;

class Movie extends Model
{

    protected $fillable = [
        'image',
        'title', 
        'gender', 
        'director', 
        'description'
    ];

    public function catalog () 
    {
        return $this->hasOne(Catalog::class, 'movie_id', 'id');
    }
}
