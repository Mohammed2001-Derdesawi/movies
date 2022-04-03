<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Favourite extends Model
{
    use HasFactory;

    public function movies()
    {
        return $this->morphedByMany(Movie::class,'favouritable');
    }
    public function series()
    {
        return $this->morphedByMany(Serie::class,'favouritable');
    }

    /**
     * Get the user that owns the Favourite
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
