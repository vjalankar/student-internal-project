<!DOCTYPE html>
<?php session_start(); ?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <?php include('include_files/css.php'); ?>


    </head>
    <body>
        
    <div class="container">

    <div class="row">


    <?php 
    
   

    if(isset($_SESSION['error'])){

      echo   "<div class='alert alert-info'>.$_SESSION[error].</div>"; 
     
    }

   
    ?> 


    <form action="<?php echo base_url('SuperAdmin/HandleAdminRequest') ?>" method="post" enctype="multipart/form" >
    
      Enter Year-:
      <input type="text" required="true" name="year" id="year" class="form-control" placeholder="Enter year"/>  

      <br>

      Enter School -:
      <input type="text" required="true" name="school" id="school" class="form-control" placeholder="Enter school"/>  

      <br>

      Enter Department -:
      <input type="text" required="true" name="Department" id="Department" class="form-control" placeholder="Enter Department"/>

      <br> 

      
      
      Enter Subject -:
      <input type="text" required="true" name="subject" id="subject" class="form-control" placeholder="Enter subject"/>

      <br> 

      Enter trisemester -:
      <input type="number" required="true" name="trisemester" id="trisemester" class="form-control" placeholder="Enter trisemester"/>

      <br> 

      <input type="submit" required="true" class="btn btn-primary" name="submit" value="Submit Details" />

    </form>
      
    
    </div>
    </div>

    </body>
</html>