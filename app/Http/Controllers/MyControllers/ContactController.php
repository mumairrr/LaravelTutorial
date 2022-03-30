<?php

namespace App\Http\Controllers\MyControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function Contact()
    {
        return view('pages.contact');
    }
}
