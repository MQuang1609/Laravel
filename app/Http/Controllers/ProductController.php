<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function getAllProduct()
    {
        $products = [['id' => 1, 'name' => 'xoai', 'description' => '<i><strong>Tieu de</strong></i>'], ['id' => 2, 'name' => 'cam', 'description' => '<i><strong>Tieu de</strong></i>'], ['id' => 3, 'name' => 'chuoi', 'description' => '<i><strong>Tieu de</strong></i>'], ['id' => 4, 'name' => 'oi', 'description' => '<i><strong>Tieu de</strong></i>'], ['id' => 5, 'name' => 'buoi', 'description' => '<i><strong>Tieu de</strong></i>']];
        $userLevel = 3;
        return view('user.test.test', compact('products', 'userLevel'));
    }
    public function getDetail($id)
    {
        $products = ['id' => 1, 'name' => 'xoai', 'description' => '<i><strong>Tieu de</strong></i>'];
        return view('user.test.product.detail')->with('product', $products);
    }
}
