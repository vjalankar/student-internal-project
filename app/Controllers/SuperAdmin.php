<?php

namespace App\Controllers;

use App\Models\superAdminModel;
use App\Models\adminRequestModel;
use App\Models\SuperAdminLoginModel;

class SuperAdmin extends BaseController
{
    public function index()
    {
        return view('Admin/Super_Admin_Login');
        $_SESSION['isRequested'] = "false";
    }


    public function __construct()
    {
        session_start();
    }

    public function addDetails()
    {

        try {
            if ($_SESSION['SuperAdminUsername'] == 'undefined') {

                return redirect()->to(base_url('/superAdmin/'));
            }
        } catch (\ErrorException $e) {
            return redirect()->to(base_url('/superAdmin/'));
        }



        $model = new superAdminModel();

        $data = array(

            'year' => $this->request->getVar("year"),
            'school' => $this->request->getVar("school"),
            'branch' => $this->request->getVar("Branch"),
            'trisemester' => $this->request->getVar("trisemseter"),
            'subject1' => $this->request->getVar("subject1"),
            'subject2' => $this->request->getVar("subject2"),
            'subject3' => $this->request->getVar("subject3"),
            'subject4' => $this->request->getVar("subject4"),
            'subject5' => $this->request->getVar("subject5"),
            'subject6' => $this->request->getVar("subject6"),
            'subject7' => $this->request->getVar("subject7"),
            'subject8' => $this->request->getVar("subject8"),
            'subject9' => $this->request->getVar("subject9"),
            'subject10' => $this->request->getVar("subject10"),
        );

        if ($model->insert($data)) {

            $con = mysqli_connect("localhost", "root", "", "student_internal");
            if(isset($_SESSION['id'])){
            $id = $_SESSION['id'];
            $query = "update adminrequest set isRequested='false'where id='$id'";
            mysqli_query($con, $query);
            }
            echo "<script>alert('Data Inserted Successfully');</script>";

            $data['data']=array('success'=>'Data Saved Successfully');
            return view('admin/super_Admin_dashboard',$data);
 
        
        } else {
            echo "<script>alert('Something Went wrong,Please Go back and try again');</script>";

            echo "<script>
   window.location.href = '/superAdminDashboard';
   
   </script>";
        }
    }


    public function handleRequest()
    {
        // try {
        //     if ($_SESSION['SuperAdminUsername'] == 'undefined') {

        //         return redirect()->to(base_url('/superAdmin/'));
        //     }
        // } catch (\ErrorException $e) {
        //     return redirect()->to(base_url('/superAdmin/'));
        // }

        return view('Admin/adminRequestToSuperAdmin');
    }

    public function handleAdminRequest()
    {
        

        $model = new adminRequestModel();

        $year = $this->request->getVar('year');
        $school = $this->request->getVar('school');
        $departmet = $this->request->getVar('Department');
        $subject = $this->request->getVar('subject');
        $trisemester = $this->request->getVar('trisemester');
        // $isRequested="true";

        if (isset($_SESSION['isRequested']) && !empty($_SESSION['isRequested'])) {
            $_SESSION['isRequested'] = "true";
        }

        $data = array(

            'year' => $year,
            'school' => $school,
            'department' => $departmet,
            'subject' => $subject,
            'trisemester' => $trisemester,
            'isRequested' => $_SESSION['isRequested']
        );

        if ($model->save($data)) {

            
            $_SESSION['year'] = $year;
            $_SESSION['school'] = $school;
            $_SESSION['department'] = $departmet;
            $_SESSION['subject'] = $subject;
            $_SESSION['trisemester'] = $trisemester;

            $data['data']=array('success'=>"<div class='alert alert-success'>Request Send Successfully</div>");
            return view('Admin/Admin_dashboard',$data);
            

            


        } else {
            foreach ($model->error() as $error) {

                $_SESSION['error'] = $error;
            };

            $_SESSION['isRequested'] = "false";

            $_SESSION['year'] = '';
            $_SESSION['school'] = '';
            $_SESSION['department'] = '';
            $_SESSION['subject'] = '';
            $_SESSION['trisemester'] = '';
        }
    }



    public function login()
    {

        helper(['form', 'url']);

        $validation = \Config\Services::validation();
        $check = $this->validate([

            'username' => 'required',
            'password' => 'required|min_length[6]'

        ]);

        if (!$check) {

            return view('Admin/Super_Admin_Login', ['validation' => $this->validator]);
        } else {


            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');
            $superAdminLoginModel = new SuperAdminLoginModel();
            $data = array('username' => $username, 'password' => $password);

            $_SESSION['SuperAdminUsername'] = $username;


            $query = $superAdminLoginModel->where($data);

            $result = $superAdminLoginModel->countAllResults();

            if ($result == 1) {

                return view('Admin/super_Admin_dashboard');
            } 
            else {

                echo "<script>alert('Please Check your Credentials');
   
   </script>";

                echo "<script>
   window.location.href = '/Admin/superAdmin';
   
   </script>";
            }
        }
    }
}
