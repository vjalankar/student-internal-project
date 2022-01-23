<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width", initial-scale=1.0">
  <title>Student Portal</title>
  
  <?php include 'include_files/css.php' ?>

</head>

<body>

  <?php include 'include_files/navbar.php' ?>

  <br>




 

  <div class="card">

<div class="card-body popover-header">

  <h5>Student Name -:demo</h5> 

  <h5>mobile No-:9890478976</h5>

  <h5>Email Id-:Demo@mitwpu.edu.in</h5>

</div>



  </div>



  <div class="shadow mx-auto my-auto p-5">

    <h3 class='h3 text-center'>Student's Data</h3>

    <hr>

    <table class="table table-bordered table-striped table-hover text-center">
      <thead>
        <tr>
          <th scope="col">Sr No </th>
          <th scope="col">Subject</th>
          <th scope="col">Assignment</th>
          <th scope="col">Class Participation</th>
          <th scope="col">Case Study</th>
          <th scope="col">Surprise_Test_01</th>
          <th scope="col">Converted</th>
          <th scope="col">Surprise_Test_02</th>
          <th scope="col">Surprise Test 2 Marks Converted</th>
          <th scope="col">Total</th>

    </tr>
    </thead>
    <tbody>
        <?php

        $con = mysqli_connect("localhost", "root", "", "student_internal");
        $prn_no = $_SESSION['prn_no'];

        //echo $prn_no;


        if (!$_SESSION['prn_no']) {
          echo "login first";
          return redirect()->to(base_url('/Login'));
        }

        $query = "select * from excel_data where prn_no='$prn_no'";

         

        $i = 1;

        $result = mysqli_query($con, $query);

        mysqli_error($con);


        while ($data = mysqli_fetch_array($result)) { ?>
        <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $data['subjects']; ?></td>
            <td><?php echo $data['Assignment']; ?></td>
            <td><?php echo $data['class_participation']; ?></td>
            <td><?php echo $data['Case_Study']; ?></td>
            <td><?php echo $data['Surprise_Test_01']; ?></td>
            <td><?php echo $data['Converted']; ?></td>
            <td><?php echo $data['Surprise_Test_02']; ?></td>
            <td><?php echo $data['converted_surprise_test_2']; ?></td>
            <td><?php echo $data['Total']; ?></td>

        </tr>

        <?php } ?>
      </tbody>
    </table>

  </div>
  <br>

  <?php include 'include_files/footer.php' ?>

</body>

</html>