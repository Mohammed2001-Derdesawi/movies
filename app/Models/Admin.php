<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Admin extends Model
{
    use HasFactory;
    /**
     * Get all of the populars_questions for the Admin
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function populars_questions(): HasMany
    {
        return $this->hasMany(PopularQuestion::class, 'admin_id', 'id');
    }
}
