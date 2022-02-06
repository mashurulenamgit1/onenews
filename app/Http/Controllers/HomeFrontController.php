<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeFrontController extends Controller
{
    public function index()
    {
        return view('pages.home.home');
    }
}
