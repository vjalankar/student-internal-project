<?php

namespace App\Controllers;

use App\Models\AdminLoginModel;
use MyReadFilter;
use \PhpOffice\PhpSpreadsheet\Reader\IReader;
use \PhpOffice\PhpSpreadsheet\IOFactory;
use App\Models\excel_model;

class HomeAdmin extends BaseController
{
  public function index()
  {
    return view('Admin\Admin_index');
  }


  public function upload()
  {
    $target_dir = 'uploads/';
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;

    // Check if image file is a actual image or fake image
    if (isset($_POST["submit"])) {



      if ($uploadOk == 0) {
        echo "<script>
  
  alert('Sorry, your file was not uploaded')
  </script>";
      } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
          echo "<script>
    
    alert('The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded');
    </script>";


          $reader = IOFactory::createReader("Xlsx");

          $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load("uploads/teacher.xlsx");
          $db      = \Config\Database::connect();
          $builder = $db->table('excel_data');

          //$dataFromFile['fileData']=$spreadsheet->getWorksheetIterator();
          $con = mysqli_connect("localhost", "root", "", "student_internal");

          $row = $spreadsheet->getActiveSheet()->toArray();

          $sheetCount = count($row);

          if ($sheetCount > 1) {

            $data = array();
            for ($i = 1; $i < $sheetCount; $i++) {
              echo  $Roll_no  = $row[$i][0];

              echo $prn = $row[$i][1];
              echo $subjects = $row[$i][2];
              echo $Assignment = $row[$i][3];
              echo $class_participation = $row[$i][4];
              echo $case_study = $row[$i][5];
              echo $surprise_test_1 = $row[$i][6];
              echo $converted = $row[$i][7];
              echo $surprise_test_2 = $row[$i][8];
              echo $converted_surprise_test_2 = $row[$i][9];
              echo $Total = $row[$i][10];

              // $data[] = array(

              //   'PRN' => $PRN,
              //   'subject' => $subject,
              //   'branch' => $branch,
              //   'division' => $division,
              //   'subjects' => $subjects,
              //   'marks' => $marks,

              // );

              $query = "insert into excel_data(Roll_no,prn_no,subjects,Assignment,class_participation ,Case_Study,Surprise_Test_01,Converted,Surprise_Test_02,converted_surprise_test_2,Total) values('$Roll_no','$prn','$subjects','$Assignment','$class_participation','$case_study','$surprise_test_1','$converted','$surprise_test_2','$converted_surprise_test_2','$Total')";
              $result = mysqli_query($con, $query);
              if ($result) {
                echo "success";
              } else {
                echo "failed";
                echo mysqli_error($con);
              }
            }
          }
        }



        

      }
    }
  }


  public function Login()
  {
    $adminEmail = $this->request->getVar("userEmail");
    $adminPassword = $this->request->getVar("userPassword");

    

    $AdminLoginModel = new AdminLoginModel();

    $_SESSION['user'] = $adminEmail;
    $data = array('adminEmail' => $adminEmail, 'adminPassword' => $adminPassword);

    $query = $AdminLoginModel->where($data);

    $result = $AdminLoginModel->countAllResults();

    if ($result == 1) {

    
      return redirect()->to(base_url('/Admin/AdminDashboard'));
    } 
    else {
      echo "<div class='alert alert-info'>error</div>";
    }
  }

  public function showAdminDashboard()
  {
    //   $target_dir = 'uploads/';
     return view('/Admin/Admin_dashboard');
  }


  public function searchCourse(){

  $serachCourse=$this->request->getVar("courseSearch");
  
  $con=mysqli_connect("localhost", "root", "", "student_internal");

  $query="select branch from superadmin where branch='$serachCourse'";
  
  $result=mysqli_query($con, $query);

  if(mysqli_num_rows($result)>=1){

    $row['data']=mysqli_fetch_array($result);
    return view('/Admin/show_search_data',$row);

  }
  
  else{

    mysqli_error($con);
    
   echo "<script>alert('No data Found');
   
   </script>";

   echo "<script>
   window.location.href = '/Admin/AdminDashboard';
   
   </script>";
   
  //return redirect()->to(base_url('/Admin/AdminDashboard'));
    

  }

}



}
