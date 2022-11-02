<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'name',
        'price',
        'image',
        'description',
        'stock',
        'restaurant_id',
        'category_id'
     ];


     public function restaurant()
     {
         return $this->belongsTo(Restaurant::class);
     }
 

}
