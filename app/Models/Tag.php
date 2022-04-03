<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    public function movies()
    {
        return $this->morphedByMany(Movie::class,'taggable');
    }
    public function series()
    {
        return $this->morphedByMany(Serie::class,'taggable');
    }
}
