<?php
 include 'conn.php';
 $id = $_GET['id'];
 $e= "select * from crudtable where id=$id";
 $que = mysqli_query($con,$e);

 while($res = mysqli_fetch_array($que)){
$un= $res['username'];  
$pd= $res['password']; 
 }
 if(isset($_POST['done'])){
 
 $id = $_GET['id'];
 $username = $_POST['username'];
 $password = $_POST['password'];
 $q = " update crudtable set id=$id, username='$username', password='$password' where id=$id  ";

 $query = mysqli_query($con,$q);

 header('location:display.php');
 }

 
?>

<!DOCTYPE html>
<html>
<head>
 <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <style>
body {
    background-color: blueviolet;
}
  </style>
</head>
<body>

 <div class="col-lg-5 m-auto">
 
 <form method="post">
 
 <br><br>
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Update Operation </h1>
 </div><br>

 <label> Username: </label>
 <input type="text" value="<?php echo $un;?>" name="username" class="form-control"> <br>

 <label> Password: </label>
 <input type="text" value="<?php echo $pd;?>" name="password" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

 
 </form>
 </div>
</body>
</html>