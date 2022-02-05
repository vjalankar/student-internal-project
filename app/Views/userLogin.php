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

    <div class="row my-5">

      <div class="col-md-6 mx-auto my-auto shadow p-5">

      <?php  
    
      if(isset($_POST['submit'])){
      
          if(empty($data)){

          }

          else{

              echo $data['success'];
          }
        
      
      }
      
      ?>
       

        <h3 class="h3 text-center">Login</h3>

        <form class="form" action="<?php echo site_url('HandleLogin/Login') ?>" method="POST">
          <div class="mb-3">
            Enter PRN No -:
            <br>
            <input type="text" required name="userEmail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-3">

          Enter Password -:
            <br>
            <input type="password" required name="userPassword" class="form-control" id="exampleInputPassword1">
          
          </div>


          
         <center>
          <input type="submit" name="submit" class="btn btn-outline-primary" value="Login" />
         </center>
          

        </form>

      </div>

    </div>


    <br>
    <br>

    <?php include 'include_files/footer.php' ?>


  </div>







</body>

</html>