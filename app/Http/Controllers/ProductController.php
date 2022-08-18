<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function homes()
    {
        return view('web.product.homes');
    }
    public function category()
    {
        return view('web.product.category');
    }public function slide()
    {
        return view('web.layout.slide');
    }
}
