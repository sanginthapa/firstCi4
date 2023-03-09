<?php

namespace App\Controllers;

use App\Models\CustomModel;

class Post extends BaseController
{
    public function index()
    {
        $db=db_connect();
        $model = new CustomModel($db);
        $result = $model->all();
        echo '<pre>';
        print_r($result);
        echo '<pre>';
    }

    public function where($post_id)
    {
        $db=db_connect();
        $model = new CustomModel($db);
        $result = $model->where($post_id);
        echo '<pre>';
        print_r($result);
        echo '<pre>';
    }
}
