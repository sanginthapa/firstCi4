<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class Blog extends BaseController
{
    public function index()
    {
        // return view('shop');
        echo '<h1>This is Blog page.</h1>';
    }

    public function createNew(){
        return view('blog_form');
    }

    public function saveBlog(){
        echo '<pre>';
        print_r($_POST);
        echo '<pre>';
    }

}
