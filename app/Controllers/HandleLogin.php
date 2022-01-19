<?php

namespace App\Controllers;

use App\Models\userLoginModel;
use App\Models\userDetails;
use App\Models\excel_model;

class HandleLogin extends BaseController
{

    public function __construct()
    {

        $db = \Config\Database::connect();
        session_start();
    }


    public function index()
    {

        $model = new userDetails();

        $row['data'] = $model->findAll();


        return view('userLogin', $row);
    }

    public function Login()
    {
        $userEmail = $this->request->getVar("userEmail");
        $userPassword = $this->request->getVar("userPassword");



        $userLoginModel = new userLoginModel();

        $_SESSION['user'] = $userEmail;




        $data = array('email' => $userEmail, 'password' => $userPassword);

        $query = $userLoginModel->where($data);

        $result = $userLoginModel->countAllResults();

        if ($result == 1) {

            return redirect()->to(base_url('/userDashboard'));
        } else {
            echo "error";
        }
    }

    public function team()
    {

        return view('team');
    }

    public function aboutUs()
    {

        return view('About Us');
    }

    public function contact()
    {

        return view('contact');
    }

    public function showUserDashboard()
    {

        $Model = new excel_model();
        $row['data'] = $Model->findAll();



        return view('user_dashboard', $row);
    }


    public function storeUserDetails()
    {
        $trisemester = $this->request->getVar("trisemester");
        $branch = $this->request->getVar("branch");
        $division = $this->request->getVar("division");



        // $model=new excel_model();

        // $data= array('trisemester'=>$trisemester);

        // $query = $model->where($data);

        // $row['data']=$query->findAll();        

        $_SESSION['trisemester'] = $trisemester;
        $_SESSION['branch'] = $branch;
        $_SESSION['division'] = $division;

        return view('show_Data');
    }

    // public function tryTOReadData()
    // {

    //     $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
    //     $spreadsheet = $reader->load("NSE.xlsx");

    //     echo $spreadsheet;

    // }




}
