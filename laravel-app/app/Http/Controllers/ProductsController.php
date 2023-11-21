<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        // $title = 'Laravel with Tran Thuy Vy';
        // $x = 1;
        // $y = 2;
        // return view('products.index', compact('title', 'x', 'y'));

        // $name = 'Vy';
        // return view('products.index')->with('name', $name);

        //send an associative array
        $myphone = [
            'name' => 'iphone XS Max',
            'year' => 2018,
            'isFavorited' => true,
        ];
        // return view('products.index', compact('myphone'));

        //send directly
        return view('products.index', [
            'myphone' => $myphone
        ]);
    }

    public function about()
    {
        return 'About page';
    }

    public function detail($productName)
    {
        $phones = [
            'iphone 15' => 'iphone 15',
            'samsung' => 'samsung',
        ];
        // return "product's id = " . $id;
        return view('products.index', [
            'product' => $phones[$productName] ?? "unknown product"
        ]);
    }
}
