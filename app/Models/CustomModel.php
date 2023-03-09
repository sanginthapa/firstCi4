<?php namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;

class CustomModel{
  protected $db;

  public function __construct(ConnectionInterface &$db){
    $this->db=&$db;
  }

  function all(){
    return $this->db->table('posts')->get()->getResult();
  }

  function where($post_id){
    return $this->db->table('posts')
                    ->where(['post_id >'=>$post_id])
                    ->where(['post_id <'=>$post_id+5])
                    ->where(['post_id !='=>$post_id+3])
                    ->orderBy('post_id','ACS')
                    ->get()
                    ->getResult();
  }

  function getPosts(){
    $builder=$this->db->table('posts');
    $builder->join('users','posts.post_author=users.user_id');
    $post=$builder->get()->getResult();
    return $post;
  }
    
}