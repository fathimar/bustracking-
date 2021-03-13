<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-danger">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">BUS TRACKING SYSTEM-USER</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        
        <li class="nav-item">
          <a class="nav-link" href="searchbus.php">SEARCH BUS </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="userreg.php">REGISTRATION </a>
        </li>
        
        
      </ul>
    </div>
  </div>
</nav>
<form method="POST">
    <table class='table'>
    <tr>
        <td>NAME</td>
        <td><input name="name" type="text" class="form-control"></td>

    </tr>
    
    <tr>
        <td>PHONE NUMBER</td>
        <td><input name="phno" type="text" class="form-control"></td>

    </tr>
    <tr>
        <td>EMAIL</td>
        <td><input name="email" type="text" class="form-control"></td>
    </tr>
    <tr>
        <td>USER NAME</td>
        <td><input name="username" type="text" class="form-control"></td>

    </tr>
    <tr>
        <td>PASSWORD</td>
        <td><input name="pwd" type="text" class="form-control"></td>
    </tr>
    
    <tr>
        <td></td>
        <td>    <button  name="btn" class="btn btn-success">REGISTER</button>
</td>
    </tr>
    
    </table>
    </form>

    </body>

</html>
<?php
if(isset($_POST["btn"]))
{
$name=$_POST["name"];
$phone=$_POST["phno"];
$email=$_POST["email"];
$uname=$_POST["username"];
$password=$_POST["pwd"];


$connection=new mysqli("localhost","root","project","bustracking");
$sql="INSERT INTO `user`(`name`, `phoneno`, `email`, `username`, `password`) VALUES ('$name',$phone,'$email','$uname','$password')";
$result=$connection->query($sql);
if($result===true)
{
    echo "<script>alert('successfully inserted')</script>";
}
else
{
    echo "<script>alert('error in insertion')</script>";
}


}
?>
