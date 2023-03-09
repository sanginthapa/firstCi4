<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class Users extends BaseController
{
    public function index()
    {
        // return view('shop');
        echo '<h1>This is User.</h1>';
    }

    public function getAllUsers(){
        echo '<h1>Show all users</h1>';
    }

}
