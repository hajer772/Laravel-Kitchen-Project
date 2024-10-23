<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\InnerPage;
use App\Models\Service;
use App\Models\Team;
use App\Models\Testimonial;

class AboutController extends Controller
{
    public function index()
    {
        $contentInnerPages = InnerPage::all();
       $teams=Team::all();
       $contacts=Contact::all();
       $services = Service::all();

        return view("front.pages.about",compact("contacts",'contentInnerPages','services','teams'));
    }
}
