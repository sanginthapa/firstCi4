<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class Shop extends BaseController
{
    public function index()
    {
        // return view('shop');
        echo '<h1>This is admin shop page.</h1>';
    }

    public function product($product,$product_id){
        echo '<h1>I am inside ADMIN.<br> This is a product : '.$product;
        echo ' with an ID:'.$product_id.'</h1>';
        // return view('product');
    }

}
