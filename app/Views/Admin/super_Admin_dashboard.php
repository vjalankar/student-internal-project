<!DOCTYPE html>
<html lang="en">
<?php 

$con= mysqli_connect("localhost", "root", "", "student_internal");

?>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale= 1.0">
  <title>Document</title>

  <?php include 'include_files/css.php'; ?>

</head>

<body>


  <div class="container">

    <?php include 'include_files/navbar.php' ?>

    <br>



<div class="alert alert-light">
 
<?php 

$sql="select * from adminrequest where isRequested='true'";
$res=mysqli_query($con,$sql);
while($result=mysqli_fetch_array($res))

if(!$result){

}
else{
{
?>



<div class="card shadow p-4">

<h4>Following Data is requested by Admin to enter</h4>
<hr>


<li >Year -:<?php echo $result['year']; ?></li>
<li >School -:<?php echo $result['school']; ?></li>
<li >department -:<?php echo $result['department']; ?></li>
<li >subject -:<?php echo $result['subject']; ?></li>
<li >trisemester -:<?php echo $result['trisemester']; ?></li>



</div>

<?php } } ?> 

</div>



    <div class="shadow p-4">



      <div class="row ">

        <div class="col-md-6  mx-auto my-auto">

          <hr>

          <form class="form" action="<?php echo base_url("SuperAdmin/addDetails"); ?>" method="POST">



            <h4 class="h5">Enter Year -: </h4>
            <br>
            <input type="text" required name="year" class="form-control">

            <br>



            <h4 class="h5">Enter School -:</h4>
            <br>
            <input type="text" required="true" name="school" class="form-control">


            <br>



            <h4 class="h5">Enter Branch - :</h4>
            <br>
            <input type="text" required="true" name="Branch" class="form-control">



            <br>
            <h4 class="h5">Enter Trisemester - :</h4>
            <br>
            <input type="text" required="true" name="trisemseter" class="form-control">



            <br>


            <h4 class="h5">Enter Subject 1 -:</h4> <br>

            <input type="text" required="true" class="form-control" required="true" name="subject1" />

            <br>

            <h4 class="h5">Enter Subject 2 -:</h4> <br>

            <input type="text" required="true" class="form-control" name="subject2" />

            <br>

            <h4 class="h5">Enter Subject 3 -:</h4> <br>

            <input type="text" required="true" class="form-control" name="subject3" />

            <br>
            <h4 class="h5">Enter Subject 4 -:</h4> <br>

            <input type="text" required="true" class="form-control" name="subject4" />

            <br>

            <h4 class="h5">Enter Subject 5 -:</h4> <br>

            <input type="text" class="form-control" name="subject5" />


            <br>
            <h4 class="h5">Enter Subject 6 -:</h4> <br>

            <input type="text" class="form-control" name="subject6" />
            <br>
            <h4 class="h5">Enter Subject 7 -:</h4> <br>


            <input type="text" required="true" class="form-control" name="subject7" />
            <br>

            <h4 class="h5">Enter Subject 8 -:</h4> <br>



            <input type="text" class="form-control" name="subject8" />

            <br>

            <h4 class="h5">Enter Subject 9 -:</h4> <br>


            <input type="text" required="true" class="form-control" name="subject9" />

            <br>

            <h4 class="h5">Enter Subject 10 -:</h4> <br>


            <input type="text" required="true" class="form-control" name="subject10" />

            <br>

            <center>
              <input type="submit" name="submit" class="btn btn-outline-primary" value="Submit" />

            </center>


          </form>

        </div>

      </div>

    </div>

    <br>
    <br>
    <br>




    <?php include 'include_files/footer.php'; ?>


  </div>









</body>

</html>