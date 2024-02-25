<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //
    public function foodbeverage()
    {
        return view('products')
            ->with('name', 'Mie Gacoan');
    }
    public function beautyhealth()
    {
        return view('products')
            ->with('name', 'Sabun muka Niveamen');
    }
    public function homecare()
    {
        return view('products')
            ->with('name', 'Sabun Dettol');
    }
    public function babykid()
    {
        return view('products')
            ->with('name', 'Sabun Zwitsal');
    }
}
