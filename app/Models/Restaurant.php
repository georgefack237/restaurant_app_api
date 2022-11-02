<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = [
       'name',
       'reviews',
       'phone',
       'rating',
       'image',
       'country',
       'city',
       'latitude',
       'longitude'
    ];

    
    public function categories()
    {
        return $this->hasMany(categories::class);
    }


    public function foods()
    {
        return $this->hasMany(Food::class);
    }



}
