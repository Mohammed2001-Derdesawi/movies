<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Part extends Model
{
    protected $fillable=['description','place_of_work'];


    use HasFactory;

    public function partable()
    {
        return $this->morphTo();
    }

    public function videos()
    {

        return $this->hasMany(Video::class,'part_id','id');
    }
    public function comments()
    {

        return $this->hasMany(Comment::class,'part_id','id');
    }
    /**
     * Get all of the review for the part
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function review(): HasMany
    {
        return $this->hasMany(Review::class, 'part_id', 'id');
    }
    public function images()
    {
        return $this->morphMany(Image::class,'imageable');
    }


/**
 * The parts that belong to the Actor
 *
 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
 */
public function actors(): BelongsToMany
{
    return $this->belongsToMany(Actor::class, 'actors_parts', 'part_id','actor_id');
}
}
