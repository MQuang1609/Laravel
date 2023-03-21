<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('test', function () {
    $products = [['id' => 1, 'name' => 'xoai', 'description' => '<i><strong>Tieu de</strong></i>'], ['id' => 2, 'name' => 'cam', 'description' => '<i><strong>Tieu de</strong></i>'], ['id' => 3, 'name' => 'chuoi', 'description' => '<i><strong>Tieu de</strong></i>'], ['id' => 4, 'name' => 'oi', 'description' => '<i><strong>Tieu de</strong></i>'], ['id' => 5, 'name' => 'buoi', 'description' => '<i><strong>Tieu de</strong></i>']];
    $userLevel = 4;
    //cach 1: Dung with()
    // return view('user.test.test')
    //     ->with('products', $products)
    //     ->with('userLevel', $userLevel);

    //cach 2: Dung tham so thu 2 cua ham view
    // return view('user.test.test', [
    //     'products' => $products,
    //     'userLevel' => $userLevel
    // ]);

    //cach 3: Dung ham compact cua PHP
    return view('user.test.test', compact('products', 'userLevel'));
});


Route::get('product', [ProductController::class, 'getAllProduct']);

Route::get('product/detail/{id}', [ProductController::class, 'getDetail']);


Route::get('/home', function () {
    return view('home');
})->name('home');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/product-detail', function () {
    return view('product-detail');
})->name('product-detail');

Route::get('/aboutUs', function () {
    return view('aboutUs');
})->name('aboutUs');
// Route::get('product', function () {
//     $arr = [1, 2, 3];
//     $a = 1;
//     $b = 2;
//     echo $a + $b;
//     echo 'Pham Tran Minh Quang';
//     echo '<pre>';
//     print_r($arr);
//     echo '</pre>';
//     var_dump($arr);
//     dd($arr);
// });


// Route::get('user/detail/{id}', function ($id) {
//     return $id;
// });
