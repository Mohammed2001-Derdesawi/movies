<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tag extends Model
{
    use HasFactory;

    // /**
    //  * Get all of the tags for the Tag
    //  *
    //  * @return \Illuminate\Database\Eloquent\Relations\HasMany
    //  */
    // public function tags(): HasMany
    // {
    //     return $this->hasMany(Taggable::class, 'tag_id', 'id');
    // }
    public function movies()
    {
        return $this->morphedByMany(Movie::class, 'taggable');
    }

    public function series()
    {
        return $this->morphedByMany(Serie::class, 'taggable');
    }
}
