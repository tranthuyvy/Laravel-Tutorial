<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);

// Route::get('/products', [
//     ProductsController::class,
//     'index' //index function of ProductsController
// ]);

//how to validate "id only integer" ?
//Regular Expression
/*
Route::get('/products/{productName}/{id}', [
    ProductsController::class,
    'detail'
])->where([
    'productName' => '[a-zA-Z0-9\s]+',
    'id' => '[0-9]+'
]);



// Route::get('/', function () {
//     return view('home');
// });

/*
//response a string
Route::get('/users', function () {
    return 'This is the users page';
});

//response an arrays
Route::get('/frameworks', function () {
    return ['Yii', 'Lavarel', 'SpringBoot'];
});

//response an object
Route::get('/aboutMe', function () {
    return response()->json([
        'name' => 'Tran Thuy Vy',
        'email' => 'ttv.thuyvy.1544@gmail.com'
    ]); //response
});

//response another request = redirect
Route::get('/something', function () {
    return redirect('/'); //redirect to root
});
*/
