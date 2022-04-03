<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Quality extends Model
{
    use HasFactory;


    /**
     * The videos that belong to the Quality
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function videos(): BelongsToMany
    {
        return $this->belongsToMany(Video::class, 'qualities_videos','quality_id', 'video_id');
    }


}
