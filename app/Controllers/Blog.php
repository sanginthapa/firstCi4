<?php

namespace App\Controllers;

use App\Models\BlogModel;
use App\Models\CustomModel;

class Blog extends BaseController
{
    public function index()
    {
        $db= db_connect();
        $model =new CustomModel($db);
        // echo '<pre>';
        // print_r($model->getPosts());
        // echo '<pre>';
        $data = ['meta_title'=>'Blog Page','page_title'=>'This is our Bolgs'];
        $titles=['Title 1','Title 2','Titile 3','My title'];
        $data['taukos']=$titles;
        echo view('blog',$data);
    }
    
    public function post($id){
        $model = new BlogModel();
        $post = $model->find($id);
        if($post){
            $data = ['meta_title'=>'Post Page','page_title'=>$post['post_title'],'post'=>$post];
        }else{
            $data = ['meta_title'=>'Post Page','page_title'=>'Create New'];
        }
        echo view('post_page',$data);
    }

    public function new(){
        $data = ['meta_title'=>'New Post','page_title'=>"Create New Post."];

        if($this->request->getMethod()=='post'){
            $model = new BlogModel();
            $model->save($_POST);
        }
        echo view('new_post',$data);
    }

    public function delete($id){
        $model = new BlogModel();
        $post=$model->find($id);
        if($post){
            $model->delete($id);
            return redirect()->to('/blog');
        }
    }

    public function edit($id){
        
        $model = new BlogModel();
        $post=$model->find($id);

        $data = ['meta_title'=>$post['post_title'],'page_title'=>$post['post_title'],'post'=>$post];
        
        if($this->request->getMethod()=='post'){
            $model = new BlogModel();
            $_POST['post_id']=$id;
            $model->save($_POST);
            $post=$model->find($id);
        }
        $data['post']=$post;
        echo view('edit_post',$data);
    }
    
}
