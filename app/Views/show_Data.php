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
          <th scope="col">name</th>
          <th scope="col">Trisemester</th>
          <th scope="col">Branch</th>
          <th scope="col">Subject</th>
          <th scope="col">Marks</th>



        </tr>
      </thead>
      <tbody>
        <?php

        $con = mysqli_connect("localhost", "root", "", "student_internal");
        $trisemester = $_SESSION['trisemester'];
        $branch = $_SESSION['branch'];
        $division = $_SESSION['division'];



        $query = "select * from excel_data where branch='$branch' and trisemester='$trisemester' and division='$division'";


        $i = 1;

        $result = mysqli_query($con, $query);

         if(!$result){

          echo "<div class='alert alert-warning'>No data to display.</div>";

         } 

        while ($data = mysqli_fetch_array($result)) { ?>

          <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $data['name']; ?></td>
            <td><?php echo $data['trisemester']; ?></td>
            <td><?php echo $data['branch']; ?></td>
            <td><?php echo $data['subjects']; ?></td>
            <td><?php echo $data['marks']; ?></td>



          </tr>

        <?php } ?>
      </tbody>
    </table>

  </div>
  <br>

  <?php include 'include_files/footer.php' ?>

</body>

</html>