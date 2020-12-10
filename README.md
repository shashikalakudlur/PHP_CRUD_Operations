# PHP_CRUD_Operations

<!DOCTYPE html>
<html>
<head>
 <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <style>
body {
    background-color: orange;
}
  </style>
</head>
<body>

 <div class="col-lg-5 m-auto">
 
 <form method="post">
 
 <br><br>
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Insert Operation </h1>
 </div><br>

 <label> Username: </label>
 <input type="text" name="username" class="form-control"> <br>

 <label> Password: </label>
 <input type="text" name="password" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="done"> Submit </button><br>


 </form>
 </div>
</body>
</html>

<?php

include 'conn.php';

if(isset($_POST['done'])){

 $username = $_POST['username'];
 $password = $_POST['password'];
 $q = " INSERT INTO `crudtable`(`username`, `password`) VALUES ( '$username', '$password' )";

 $query = mysqli_query($con,$q);
}
?>
