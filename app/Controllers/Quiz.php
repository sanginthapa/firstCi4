<?php

namespace App\Controllers;

use App\Models\UserModel;

class Quiz extends BaseController
{
    public function index()
    {
        return view('quiz_page');
    }

    public function startQuiz()
    {
        if($this->request->getMethod()=='post'){
            $model = new UserModel();
            $model=new UserModel();
            $isregistered = $model->find($_POST['email']);
            if(!$isregistered){
                if($model->save($_POST)){
                    return "User Created";
                }
                //create new user now
            }else{
                return "User Already Exist";
                //start session of this user
            }
        }
    }

}
