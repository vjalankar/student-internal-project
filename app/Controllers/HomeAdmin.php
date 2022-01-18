<?php

namespace App\Controllers;

use App\Models\AdminLoginModel;
use MyReadFilter;
use \PhpOffice\PhpSpreadsheet\Reader\IReader;
use \PhpOffice\PhpSpreadsheet\IOFactory;


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
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if (isset($_POST["submit"])) {
    }

    // Check if file already exists
    // if (file_exists($target_file)) {
    //   echo "<div class='alert alert-info'> Sorry, file already exists.</div>";
    //   $uploadOk = 0;
    // }

    // Check file size
    // if ($_FILES["fileToUpload"]["size"] > 500000) {
    //   echo "<div class='alert alert-info'>Sorry, your file is too large</div>";
    //   $uploadOk = 0;
    // }

    // Allow certain file formats
    // if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    // && $imageFileType != "gif" ) {
    //   echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    //   $uploadOk = 0;
    // }

    // Check if $uploadOk is set to 0 by an error
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
        $reader->setReadFilter($filterSubset);
        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load("uploads/Book1.xlsx");
        $db      = \Config\Database::connect();
        $builder = $db->table('excel_data');

        //$dataFromFile['fileData']=$spreadsheet->getWorksheetIterator();
        $con = mysqli_connect("localhost", "root", "", "student_internal");

        $data=$spreadsheet->getActiveSheet()->toArray();

        foreach ($data as $row)
    {
        
        echo $name=$row['0'];
        echo $trisemester=$row['1'];
        echo $branch=$row['2'];
        echo $division=$row['3'];
        echo $subjects=$row['4'];
        echo $Marks=$row['5'];

             
        if($name==''){
          echo "can not insert further values";
          break;

        }

        
        $query="insert into excel_data(name,trisemester,branch,division,subjects,marks) values('$name','$trisemester','$branch','$division','$subjects','$Marks')";
        $result=mysqli_query($con,$query);
      


        if($result)
        {
          echo "success";
        }
        
        else{
          echo "fail";
        }
        

      }
        //return view('/Admin/Admin_dashboard');




      } else {
        echo "<script>
    
    alert(' Sorry, there was an error uploading your file. ')
    </script>";
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
    } else {
      echo "<div class='alert alert-info'>error</div>";
    }
  }

  public function showAdminDashboard()
  {
    //   $target_dir = 'uploads/';

    return view('/Admin/Admin_dashboard');
  }
}
