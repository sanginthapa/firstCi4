<?php

namespace App\Controllers;


class Shop extends BaseController
{
    public function index()
    {
        return view('shop');
    }

    public function product($product='Guitar',$product_id="mantra"){
        echo '<h1>I am Normal. This is a product : '.$product;
        echo ' with an ID:'.$product_id.'</h1>';
        // return view('product');
    }

}
