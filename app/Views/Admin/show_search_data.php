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
    <div class="row">
<table class="table table-bordered ">
    

    
    <hr>
    <thead>
    <th>Sr.no</th>
    <th>Branch</th>
    </thead>
    <?php 
  $i=1;
     foreach ($data as $row){ 
   
      ?>
    <tr>

      <td><?php echo $i++; ?></td>
      <td><?php echo $data['branch'] ?></td>

    </tr>

    <?php break; } ?>

    </table>
     </div>
</div>
<?php include 'include_files/footer.php'; ?>


</body>
</html>