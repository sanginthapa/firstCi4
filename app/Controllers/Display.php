<?php

namespace App\Controllers;

class Display extends BaseController
{
    public function index()
    {
        return view('display_post');
    }
}
