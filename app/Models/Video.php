<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Video extends Model
{
    use HasFactory;


    /**
     * Get the user that owns the Video
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function part(): BelongsTo
    {
        return $this->belongsTo(Part::class, 'part_id', 'id');
    }

     /**
     * The videos that belong to the Quality
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function qualities(): BelongsToMany
    {
        return $this->belongsToMany(Video::class, 'qualities_videos', 'video_id', 'quality_id');
    }
}
