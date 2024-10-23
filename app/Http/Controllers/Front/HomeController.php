<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Counter;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Product;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Testimonial;

class HomeController extends Controller
{

    public function index(Request $request)
    {
        $counters = Counter::all();
        $testimonials = Testimonial::all();
        $clients = Client::all();
        $services = Service::all();
        $sliders = Slider::all();

        $contacts = Contact::all();
        $categories = Category::all();
        $products=Product::all();


        return view("front.index", compact("counters", "products", 'testimonials','clients','contacts','services','sliders','categories'));


    }

}
