<?php

namespace App\Controllers;
use App\Models\superAdminModel;
use App\Models\adminRequestModel;

class SuperAdmin extends BaseController
{
    public function index()
    {
        return view('Admin/Super_Admin_Login');
        $_SESSION['isRequested']="false";
        
    }


    public function __construct(){
        session_start();
    }

    public function addDetails(){

        $model = new superAdminModel();

        $data=array(

            'year'=>$this->request->getVar("year"),
            'school'=>$this->request->getVar("school"),
            'branch'=>$this->request->getVar("Branch"),
            'trisemester'=>$this->request->getVar("trisemseter"),
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
             
             $con=mysqli_connect("localhost", "root", "", "student_internal");
             $id=$_SESSION['id'];
             $query="update adminrequest set isRequested='false'where id='$id'";
             mysqli_query($con,$query);
            }
         else{
             echo "Something Went wrong,Please Go back and try again";
         }


    }


public function handleRequest()
{

    return view('Admin/adminRequestToSuperAdmin');

}

public function handleAdminRequest(){

    $model=new adminRequestModel();

    $year=$this->request->getVar('year');
    $school=$this->request->getVar('school');
    $departmet=$this->request->getVar('Department');
    $subject=$this->request->getVar('subject');
    $trisemester=$this->request->getVar('trisemester');
   // $isRequested="true";

   if(isset($_SESSION['isRequested']) && !empty($_SESSION['isRequested'])){
    $_SESSION['isRequested']="true";
   }

    $data=array(

        'year' =>$year,
        'school' =>$school,
        'department'=>$departmet,
        'subject'=>$subject,
        'trisemester'=>$trisemester,
        'isRequested'=>$_SESSION['isRequested']




    );

 if($model->save($data))
{


$_SESSION['year']=$year;
$_SESSION['school']=$school;
$_SESSION['department']=$departmet;
$_SESSION['subject']=$subject;
$_SESSION['trisemester']=$trisemester;


}

else{
    foreach($model->error() as $error){
        
        $_SESSION['error']=$error;

    };

    $_SESSION['isRequested'] ="false";

    $_SESSION['year']='';
    $_SESSION['school']='';
    $_SESSION['department']='';
    $_SESSION['subject']='';
    $_SESSION['trisemester']='';

}
}



public function login(){

    helper(['form', 'url']);

    $validation=\Config\Services::validation();
    $check=$this->validate([
    
     'username'=>'required',
     'password'=>'required|min_length[6]'
    
    ]);

    if(!$check){

        return view('Admin/Super_Admin_Login',['validation'=>$this->validator]);
    }
    else{
        return view('Admin/super_Admin_dashboard');
    }
}


}
