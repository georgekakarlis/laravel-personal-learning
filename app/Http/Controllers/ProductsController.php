<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index() {
     

        //directly in the view
        return view('products.index');
    }

    public function about() {
        return 'About us page';
    }

    public function show($name){
        $data = [
            'iPhone' => 'Iphone',
            'samsung' => 'Samsung'
        ];

        return view ('products.index', [
            'products' => $data[$name] ?? 'Product ' . $name . ' Does not exist'
        ]);
    }
}
