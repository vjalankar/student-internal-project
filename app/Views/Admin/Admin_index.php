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

<h3 class="h3 text-center">Login</h3>

<form class="form" action="<?php echo site_url('HomeAdmin/Login') ?>" method="POST">
  <div class="mb-3">
    Enter Email -: 
    <br>
    <input type="email" required  name="userEmail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
  
  Enter Password -:
  <br>
  <input type="password" required name="userPassword" class="form-control" id="exampleInputPassword1">
  </div>
 
  <br>
 
 <div class="d-flex justify-content-between">
 <input type="submit" name="submit" class="btn btn-outline-primary" value="Login" />
 <button type="reset" class="btn btn-outline-warning">Reset</button>

 </div>
 
 
</form> 

</div>

</div>

</div>

<br>
<br>
<br>




<?php include 'include_files/footer.php'; ?>


</div>






<!-- MDB -->


</body>
</html>