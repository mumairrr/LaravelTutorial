<?php

namespace App\Http\Controllers\MyControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function Users()
    {
        return view('pages.users');
    }
}
