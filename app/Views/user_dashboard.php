<!DOCTYPE html>
<?php 

$con=mysqli_connect("localhost","root","","student_internal");
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Document</title>
</head>

<body>

  <div class="container">


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>





    <br>


    <div class="row">



      <div class="col-sm-12 mx-auto my-auto p-5 shadow">


        <form action="<?php echo site_url("HandleLogin/storeUserDetails"); ?>" method="POST">

          Select Trisemester
          <br>


          <select class="form-control" name="trisemester" id="trisemester">
            <?php foreach ($data as $data) { ?>

              <option value="<?php echo $data['trisemester'];  ?>">

                <?php echo $data['trisemester']; ?>

              </option>



            <?php } ?>
          </select>

          <br>  
        
        select branch -:


        <select class="form-control" id="branch"  name="branch">
        <?php  

              

        $query="select * from branch";

        $result=mysqli_query($con,$query);

        while ($row=mysqli_fetch_array($result)){
        
        ?>        



              <option value=""><?php echo $row['branch_name']; ?></option>

<?php } ?>
        </select>

          <br>
          
          Selec Division -:
          <br>
          <select class="form-control" id="branch" s name="branch">
        <?php  

        $con=mysqli_connect("localhost","root","","student_internal");      

        $query="select * from division";

        $result=mysqli_query($con,$query);

        while ($row=mysqli_fetch_array($result)){
        
        ?>        



              <option value=""><?php echo $row['division_name']; ?></option>

<?php } ?>
        </select>

<br>

       <center><input type="submit" name="submit" value="submit" class="btn btn-outline-primary" /></center> 

        </form>


        




      </div>



    </div>


  </div>

</body>

</html>

<script>


function fetchBrach()
{

  <?php echo base_url(); ?>HandleLogin/fetchBrach



}
  
 










</script>