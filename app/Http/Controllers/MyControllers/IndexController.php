<?php

namespace App\Http\Controllers\MyControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }
}
