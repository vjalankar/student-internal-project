<!DOCTYPE html>
<html>
<?php $con = mysqli_connect("localhost", "root", "", "student_internal");

?>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php include 'include_files/css.php' ?>



  <!-- Bootstrap CSS -->
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->

</head>

<body>

  <div class="container">
    <br>

    <?php include 'include_files/navbar.php' ?>

    <br>


    <div class="row mx-auto my-auto">


      <div class="card shadow p-2" style="background:darkgrey">
        <div class="col-sm-6 mx-auto my-auto p-3">
          <form class="form p-1" action="<?php echo site_url('HomeAdmin/upload'); ?>" method="post" enctype="multipart/form-data">




            <h4>Select year<h4>
                <select class="form-control" id="year" name="year">
                  <?php



                  $query = "select distinct year from superadmin";

                  $result = mysqli_query($con, $query);

                  while ($row = mysqli_fetch_array($result)) {

                  ?>



                    <option value="<?php echo $row['year']; ?>"><?php echo $row['year']; ?></option>

                  <?php } ?>
                </select>

                <br>
                <h4>Select School</h4>

                <select class="form-control" id="school" name="school">
                  <?php



                  $query = "select distinct school from superadmin";

                  $result = mysqli_query($con, $query);

                  while ($row = mysqli_fetch_array($result)) {

                  ?>



                    <option value="<?php echo $row['school']; ?>"><?php echo $row['school']; ?></option>

                  <?php } ?>
                </select>

                <br>

                <h4>Select branch</h4>

                <select class="form-control" id="branch" name="branch">
                  <?php



                  $query = "select distinct branch from superadmin";

                  $result = mysqli_query($con, $query);

                  while ($row = mysqli_fetch_array($result)) {

                  ?>



                    <option value="<?php echo $row['branch']; ?>"><?php echo $row['branch']; ?></option>

                  <?php } ?>
                </select>

                <br>

                <h4>Select Subjects</h4>

                <select class="form-control" id="year" name="year">
                  <?php



                  $query = "select distinct subject1,subject2,subject3,subject4,subject5,subject6,subject7,subject8,subject9,subject10 from superadmin";

                  $result = mysqli_query($con, $query);

                  while ($row = mysqli_fetch_array($result)) {

                  ?>



                    <option value="<?php echo $row['subject1']; ?>"><?php echo $row['subject1']; ?></option>

                    <option value="<?php echo $row['subject2']; ?>"><?php echo $row['subject2']; ?></option>
                    <option value="<?php echo $row['subject3']; ?>"><?php echo $row['subject3']; ?></option>
                    <option value="<?php echo $row['subject4']; ?>"><?php echo $row['subject4']; ?></option>
                    <option value="<?php echo $row['subject5']; ?>"><?php echo $row['subject5']; ?></option>
                    <option value="<?php echo $row['subject6']; ?>"><?php echo $row['subject6']; ?></option>
                    <option value="<?php echo $row['subject7']; ?>"><?php echo $row['subject7']; ?></option>
                    <option value="<?php echo $row['subject8']; ?>"><?php echo $row['subject8']; ?></option>
                    <option value="<?php echo $row['subject9']; ?>"><?php echo $row['subject9']; ?></option>
                    <option value="<?php echo $row['subject10']; ?>"><?php echo $row['subject10']; ?></option>


                  <?php } ?>
                </select>

                <br>

                <h4>Select Execl File to upload:<h4>

                    <input type="file" class="form-control" name="fileToUpload" id="fileToUpload">
                    <br>

                  
                <input type="submit" class="btn btn-primary" value="Upload file" name="submit">
                <a class="btn btn-success float-end" onclick="showMsg();"   id="requestMade" href="<?php echo base_url('SuperAdmin/HandleRequest'); ?>" value="Make Request to Super Admin">Make Request to Super Admin</a>    
                    


          </form>






        </div>


      </div>



    </div>


  </div>

  <?php include 'include_files/footer.php' ?>


<script>

function showMsg(){

alert('request has send to admin,please come back later');


}

</script>

</body>

</html>