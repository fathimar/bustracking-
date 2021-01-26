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
    <a class="navbar-brand" href="#">BUS TRACKING SYSTEM</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="admin.php">ADMIN</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="entry.php">ENTRY</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="route.php">BUS ROUTE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="driversearch.php">SEARCH DRIVER</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="busupdate.php">UPDATE BUS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="usersearch.php">SEARCH USER</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
<form method="POST">
    <table class='table'>
    <tr>
        <td>BUS NAME</td>
        <td><input name="bname" type="text" class="form-control"></td>

    </tr>
    <tr>
        <td>ROUTE</td>
        <td><input name="route" type="text" class="form-control"></td>
    </tr>
    <tr>
        <td>BUS NUMBER</td>
        <td><input name="bno" type="text" class="form-control"></td>

    </tr>
    <tr>
        <td>DRIVER NAME</td>
        <td><input name="dname" type="text" class="form-control"></td>
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
        <td>    <button  name="btn" class="btn btn-success">LOGIN</button>
</td>
    </tr>
    
    </table>
    </form>

    </body>

</html>
<?php
if(isset($_POST["btn"]))
{
$busname=$_POST["bname"];
$routes=$_POST["route"];
$busno=$_POST["bno"];
$drivername=$_POST["dname"];
$name=$_POST["username"];
$password=$_POST["pwd"];


$connection=new mysqli("localhost","root","","bustracking");
$sql="INSERT INTO `bus`(`busname`, `route`, `busno`, `drivername`, `username`, `password`) VALUES('$busname','$routes',$busno,'$drivername','$name','$password')";
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
