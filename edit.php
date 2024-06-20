<?php
  include "dbconnection.php";
  $id="";
  $student_name="";
  $college="";
  $class="";
  $department="";
  $address="";
  $mobile="";
  $created_by="";
  $created_at="";
  $updated_by="";
  $updated_at="";

  $error="";
  $success="";

  if($_SERVER["REQUEST_METHOD"]=='GET'){
    if(!isset($_GET['id'])){
      header("location:crud100/index.php");
      exit;
    }
    $id = $_GET['id'];
    $sql = "select * from details where id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    while(!$row){
      header("location: crud100/index.php");
      exit;
    }
    $name=$row["name"];
    $colleg=$row["college"];
    $class=$row["class"];
    $department=$row["department"];
    $address=$row["address"];
    $mobile=$mrow["mobile"];
}
  else{
    $id = $_POST["id"];
    $student_name=$_POST["name"];
    $college=$_POST["college"];
    $class=$_POST["class"];
    $department=$_POST["department"];
    $address=$_POST["address"];
    $mobile=$_POST["mobile"];

    $sql = "update details set name='$name', email='$email', phone='$phone' where id='$id'";
    $result = $conn->query($sql);
  }

  ?>
  <!DOCTYPE html>
  <html>
  <head>
   <title>CRUD</title>
  
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" class="fw-bold">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">PHP CRUD OPERATION</a>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="create.php">Add New</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
   <div class="col-lg-6 m-auto">
  
   <form method="post">
   <br><br><div class="card">

<div class="card-header bg-warning">
<h1 class="text-white text-center">  Update Member </h1>
</div><br>

<input type="hidden" name="id" value="<?php echo $id; ?>" class="form-control"> <br>

<label> STUDENT NAME: </label>
<input type="text" name="name" value="<?php echo $name; ?>" class="form-control"> <br>

<label> COLLEGE: </label>
<input type="text" name="college" value="<?php echo $email; ?>" class="form-control"> <br>

<label> CLASS: </label>
<input type="text" name="class" value="<?php echo $phone; ?>" class="form-control"> <br>

<label>DEPARTMENT:</label>
 <select class="form-select" name="department" value="<?php echo $department; ?> class="form-control"><br>
 <option selected>Select your department</option>
                    <option value="CSE">CSE</option>
                    <option value="ECE">ECE</option>
                    <option value="EEE">EEE</option>
                    <option value="IT">IT</option>
                    <option value="CST">CST</option>
                    <option value="BME">BME</option>
                    <option value="BT">BT</option>
                </select>

 <label>ADDRESS:</label>
 <input type="text" name="address" value="<?php echo $address; ?> class="form-control"><br>

 <label>MOBILE:</label>
 <input type="text" name="mobile" value="<?php echo $mobile; ?>  class="form-control"><br>


<button class="btn btn-success" type="submit" name="submit"> Submit </button><br>
<a class="btn btn-info" type="submit" name="cancel" href="index.php"> Cancel </a><br>

</div>
</form>
</div>
</body>
</html>