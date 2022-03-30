<?php

namespace App\Http\Controllers\MyControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ParcelController extends Controller
{
    public function Parcels()
    {
        return view('pages.parcels');
    }
}
