<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageHomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'title' => 'Hotel Cikole City - Home'
        ]);
    }
}
