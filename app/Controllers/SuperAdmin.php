<?php

namespace App\Controllers;
use App\Models\superAdminModel;

class SuperAdmin extends BaseController
{
    public function index()
    {
        return view('Admin/super_Admin_dashboard');
    }

    public function addDetails(){

        $model = new superAdminModel();

        $data=array(

            'year'=>$this->request->getVar("year"),
            'school'=>$this->request->getVar("school"),
            'branch'=>$this->request->getVar("Branch"),
            'subject1'=>$this->request->getVar("subject1"),
            'subject2'=>$this->request->getVar("subject2"),
            'subject3'=>$this->request->getVar("subject3"),
            'subject4'=>$this->request->getVar("subject4"),
            'subject5'=>$this->request->getVar("subject5"),
            'subject6'=>$this->request->getVar("subject6"),
            'subject7'=>$this->request->getVar("subject7"),
            'subject8'=>$this->request->getVar("subject8"),
            'subject9'=>$this->request->getVar("subject9"),
            'subject10'=>$this->request->getVar("subject10"),
        );

         if($model->insert($data)){
             echo "saved";
         }
         else{
             echo "failed";
         }


    }




}
