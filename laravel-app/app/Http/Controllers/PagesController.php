<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        $name = "Vy";
        $names = array('Vy', 'Thanh', 'Thuy', 'Son');
        return view('about', [
            'names' => $names,
        ]);
    }
}
