<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include 'include_files/css.php' ?>

  

</head>
<body>
    

<div class="container">



<br>
<br>
<br>
<br>
<br>





<div class="row">

<div class="col-md-6 mx-auto my-auto shadow p-4 ">

<h3 class="h3 text-center">Register User</h3>

<form class="form" action="<?php echo site_url('HandleRegistration/registerUser') ?>" method="POST">
  <div class="mb-3">
    Enter Email -: 
    <br>
    <input type="email" required="true"  name="userEmail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
  
  Enter Password -:
  <br>
  <input type="password" required="true" name="userPassword" class="form-control" id="exampleInputPassword1">
  </div>
 
 
 <div class="d-flex justify-content-between">
 <input type="submit" name="submit" class="btn btn-outline-primary" value="register" />
 <button type="reset" class="btn btn-outline-warning">Reset</button>

  

 </div>
 
 <br>

 <a href="/Login" style="float: right">Alerady Having Accout? Click here to Login</a>
 
</form> 

</div>

</div>



<br>
<br>


</div>




<?php include 'include_files/footer.php' ?>



</body>
</html>