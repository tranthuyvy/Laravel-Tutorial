<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

Route::get('/products', [
    ProductsController::class,
    'index' //index function of ProductsController
]);

Route::get('/products/{id}', [
    ProductsController::class,
    'detail' //index function of ProductsController
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
