<?php 
namespace App\Libraries;

class Display{

  public function showItem(){
    return view('components/display_item');
  }
  
  public function show(){
    return view('components/collapse_item');
  }
}