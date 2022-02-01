<?php

namespace App\Controllers;
use App\Models\userLoginModel;
use App\Helpers\html;


class HandleRegistration extends BaseController
{
    public function index()
    {
        
        return view('register');



    }

    public function registerUser()
    {
        $userEmail=$this->request->getVar("userEmail");
        $userPassword=$this->request->getVar("userPassword");



        $userLoginModel=new userLoginModel();

        $data=['email'=>$this->request->getVar("userEmail"), 'password'=>$this->request->getVar("userPassword")];
        print_r($data);

//        $userLoginModel->insert($data);

        if($userLoginModel->save($data))
        {
           
            return redirect()->to(base_url('/Login'));
        
        
        }
        else{
            echo "<div class='alert alert-info'>Please Check your Credentials,Can not Login</div>";
        }


    }


    

}
