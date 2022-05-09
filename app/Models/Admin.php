<?php

namespace App\Models;

use Spatie\Permission\Traits\HasRoles;
use Laravel\Passport\HasApiTokens;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{


    use HasApiTokens, HasFactory, Notifiable, HasRoles;

  protected $guard='admin';
  protected $fillable = ['name' , 'email' , 'password' , 'status'];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


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
