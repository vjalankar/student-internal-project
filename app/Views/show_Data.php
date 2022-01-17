<!DOCTYPE html>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <?php include 'include_files/css.php' ?>

</head>
<body>

<?php include 'include_files/navbar.php' ?>

<br>



  
    <br>


<div class="shadow mx-auto my-auto p-5">

<h3 class='h3 text-center'>Student's Data</h3>

<hr>

<table class="table table-bordered table-striped table-hover text-center">
  <thead>
    <tr>
      <th scope="col">Sr No </th>
      <th scope="col">Subject Name</th>
      <th scope="col">Marks</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <th scope="row">1</th>
      <td>DBMS</td>
      <td>18</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>RDBMS</td>
      <td>18</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>AI</td>
      <td >18</td>
    </tr>
  </tbody>
</table>
    
</div>
<br>

<?php include 'include_files/footer.php'?>

</body>
</html>