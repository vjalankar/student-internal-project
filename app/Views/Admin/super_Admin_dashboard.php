<!DOCTYPE html>
<html lang="en">
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

<br><br>

<div class="shadow p-4">

<br>
<br>

<div class="row ">

<div class="col-md-6 mx-auto my-auto">

<h3 class="h3 text-center">Enter Details<h4>

<form class="form" action="<?php echo base_url("SuperAdmin/addDetails"); ?>" method="POST">
  <div class="mb-3">
    Enter Year -: 
    <br>
    <input type="text" required  name="year" class="form-control">
 
  </div>

<div class="mb-3">
  
  Enter School -:
  <br>
  <input type="text" required="true" name="school" class="form-control" >
  
</div>
 
  
  <div class="mb-3">
  
  Enter Branch -:
  <br>
  <input type="text" required="true" name="Branch" class="form-control" >
  
</div>


<div class="mb-3">
  
 <h4>Enter Subject 1 -:<h4> <br>

<input type="text" required="true"  class="form-control" required="true" name="subject1" />

<h4>Enter Subject 2 -:<h4> <br>

<input type="text" required="true"class="form-control"  name="subject2" />

<h4>Enter Subject 3 -:<h4> <br>

<input type="text" required="true"class="form-control" name="subject3" />

<h4>Enter Subject 4 -:<h4> <br>

<input type="text" required="true"class="form-control" name="subject4" />

<h4>Enter Subject 5 -:<h4> <br>

<input type="text"class="form-control"  name="subject5" />

<h4>Enter Subject 6 -:<h4> <br>


<input type="text"class="form-control"  name="subject6" />
<br>
<h4>Enter Subject 7 -:<h4> <br>


<input type="text" required="true"class="form-control" name="subject7" />
<br>

<h4>Enter Subject 8 -:<h4> <br>


<input type="text"class="form-control"  name="subject8" />

<h4>Enter Subject 9 -:<h4> <br>


<input type="text" required="true"class="form-control"  name="subject9" />

<h4>Enter Subject 10 -:<h4> <br>


<input type="text" required="true"class="form-control" name="subject10" />
<br>


</div>






 <center >
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