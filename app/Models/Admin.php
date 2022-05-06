<?php

namespace App\Models;

use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Admin extends Model
{

   

    use HasFactory , HasRoles;

    protected $fillable = ['name' , 'email' , 'password' , 'status'];
    /**
     * Get all of the populars_questions for the Admin
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function populars_questions(): HasMany
    {
        return $this->hasMany(PopularQuestion::class, 'admin_id', 'id');
    }
    public function image()
    {
        return $this->morphOne(Image::class,'imageable');
    }


    public function scopeSearch ($query , $item) {

        $query->where('name' , 'like' , '%'.$item.'%')->orWhere('email' , 'like' , '%'.$item.'%')->orWhere('status' , 'like' , '%'.$item.'%')->get();
    }



}
