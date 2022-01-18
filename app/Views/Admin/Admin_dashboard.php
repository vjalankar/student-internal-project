<!DOCTYPE html>
<html>
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


<br>

<div class="row mx-auto my-auto">


<div class="card shadow p-2">
<div class="col-sm-6 mx-auto my-auto p-3">
<form class="form" action="<?php echo site_url('HomeAdmin/upload'); ?>" method="post"" enctype="multipart/form-data">
  <h3 class="text-center h3 ">Select Execl File to upload:</h3>
<hr>

  <input type="file" class="form-control" required="true" name="fileToUpload" id="fileToUpload">
  <br>
 <center>

 <input type="submit" class="btn btn-primary" value="Upload file" name="submit">
 </center> 
</form>






</div>


</div>


<table>



<tr>


</tr>


</table>

</div>

<?php include 'include_files/footer.php' ?>

</div>



</body>
</html>