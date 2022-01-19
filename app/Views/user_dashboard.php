<!DOCTYPE html>
<?php

$con = mysqli_connect("localhost", "root", "", "student_internal");
?>
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
            <?php



            $query = "select distinct trisemester from excel_data  ";

            $result = mysqli_query($con, $query);

            while ($row = mysqli_fetch_array($result)) {

            ?>



              <option value="<?php echo $row['trisemester']; ?>"><?php echo $row['trisemester']; ?></option>

            <?php } ?>
          </select>

         
          <br>

          select branch -:


          <select class="form-control" id="branch" name="branch">
            <?php



            $query = "select distinct branch from excel_data ";

            $result = mysqli_query($con, $query);

            while ($row = mysqli_fetch_array($result)) {

            ?>



              <option value="<?php echo $row['branch']; ?>"><?php echo $row['branch']; ?></option>

            <?php } ?>
          </select>

          <br>

          Selec Division -:
          <br>
          <select class="form-control" id="division" name="division">
            <?php


            $query = "select distinct division from excel_data";

            $result = mysqli_query($con, $query);

            while ($row = mysqli_fetch_array($result)) {

            ?>

              <option value="<?php echo $row['division']; ?>"><?php echo $row['division']; ?></option>

            <?php } ?>
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

<script>
  function fetchBrach() {

    <?php echo base_url(); ?>HandleLogin / fetchBrach



  }
</script>