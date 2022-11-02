<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        return Category::paginate(5);
    }

    

    public function store() {

        request()->validate([
           'name'=> 'required'
            
        ]);

      Category::create([
            'name' => request('name'),
        ]);
    }



    public function getCategoryFoods(){
        request()->validate([
            'category_id'=> 'required'
        ]);
        $foods =Category::find(3)->foods;
        

        return $foods;
     }
}
