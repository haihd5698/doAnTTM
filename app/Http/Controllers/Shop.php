<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Shop extends Controller
{
    public function getIndex(){
       
        return view('shop.index');
    }
    public function getProductType()
    {
        return view('shop.product_type');
    }
    public function getDetail()
    {
        return view('shop.product_detail');
    }
}
