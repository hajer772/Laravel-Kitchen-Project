<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;
use App\Models\Product;

class KitchenDesignController extends Controller
{
    public function index(Request $request)
    {
       
        $contacts = Contact::all();
        $categories = Category::all();
        $products=Product::all();



        return view("front.pages.design", compact("products",'contacts','categories'));


    }
}
