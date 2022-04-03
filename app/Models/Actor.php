<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Actor extends Model
{
    use HasFactory;

/**
 * The parts that belong to the Actor
 *
 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
 */
public function parts(): BelongsToMany
{
    return $this->belongsToMany(Part::class, 'actors_parts', 'actor_id', 'part_id');
}

public function image()
{
    return $this->morphOne(Image::class,'imageable');
}

}
