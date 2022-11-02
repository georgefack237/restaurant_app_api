<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
       
    public function index() {
        return Food::paginate(5);
    }

    

    public function store() {

        request()->validate([
           'name'=> 'required',
           'price'=> 'required',
           'image'=> 'required',
           'description'=> 'required',
           'stock'=> 'required',
           'restaurant_id'=> 'required',
           'category_id'=> 'required'
            
        ]);

      Food::create([

            'name' => request('name'),
            'price'=> request('price'),
            'image'=> request('image'),
            'description'=>  request('description'),
            'stock'=>  request('stock'),
            'restaurant_id'=>  request('restaurant_id'),
            'category_id'=> request('category_id'),
           
        ]);
    }

}
