<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
   

    
    public function index() {
        return Restaurant::paginate(5);
    }



    public function store() {

        request()->validate([
           'name'=> 'required',
           'reviews'=> 'required',
           'phone'=> 'required',
           'rating'=> 'required',
           'image'=> 'required',
           'country'=> 'required',
           'city'=> 'required',
           'latitude'=> 'required',
           'longitude'=> 'required'
            
        ]);

       Restaurant::create([

            'name' => request('name'),
            'reviews'=> request('reviews'),
            'phone'=> request('phone'),
            'rating'=>  request('rating'),
            'image'=>  request('image'),
            'country'=>  request('country'),
            'city'=> request('city'),
            'latitude'=> request('latitude'),
            'longitude'=> request('longitude')
        ]);
    }


    
    public function getFoods(){
        request()->validate([
            'restaurant_id'=> 'required'
        ]);
        $foods =Restaurant::find(2)->foods;
        

        return $foods;
     }
}
