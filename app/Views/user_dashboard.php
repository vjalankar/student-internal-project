<!DOCTYPE html>
<?php

$con = mysqli_connect("localhost", "root", "", "student_internal");?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include 'include_files/css.php' ?>
  <title>Document</title>
</head>

<body>

  <div class="container">

    <?php include 'include_files/navbar.php' ?>

    <br>




    <br>


    <div class="row">



      <div class="col-sm-12 mx-auto my-auto p-5 shadow">


        <form action="<?php echo site_url("HandleLogin/storeUserDetails"); ?>" method="POST">

        

          Select Trisemester
          <br>

          <select class="form-control" id="trisemester" name="trisemester">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            
          </select>

         
          <br>

         
         

          <center><input type="submit" name="submit" value="submit" class="btn btn-outline-primary" /></center>

        </form>







      </div>



    </div>

    <br>

    <?php include 'include_files/footer.php' ?>

  </div>

</body>

</html>

