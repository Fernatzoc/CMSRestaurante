<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function conocenos()
    {
        return view('frontend.conocenos');
    }

    public function menu()
    {
        return view('frontend.menu');
    }

    public function contacto()
    {
        return view('frontend.contacto');
    }
}
