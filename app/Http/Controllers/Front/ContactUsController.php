<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactUsController extends Controller
{
    public function index()
    {
       
       $contacts=Contact::all();


        return view("front.pages.contact-us",compact("contacts"));
    }
}
