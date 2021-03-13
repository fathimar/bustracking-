<!DOCTYPE html>
<html lang="en">
<head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
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

<body>

    <form method="POST">
    <table class="table" >
    <tr>
        <td>BUS NAME</td>
        <td><input name="bname" class="form-control" type="text"></td>
    </tr>
    <tr>
        <td></td>
        <td><button name="btn" class="btn btn-info">SEARCH BUS</button></td>
    </tr>

    </table>
    
    
    </form>
</body>
</html>
<?php
if(isset($_POST["btn"]))
{

$busname=$_POST["bname"];
$connection=new mysqli("localhost","root","project","bustracking");
$sql="SELECT `id`,`route`, `busno`, `drivername`, `username`, `password` FROM `bus` WHERE `busname`='$busname'";
$result=$connection->query($sql);
if($result->num_rows>0)
{
while($row=$result->fetch_assoc())
{
    $getid=$row['id'];
    $getroute=$row['route'];
    $getno=$row['busno'];

    $getdname=$row['drivername'];
    $getuname=$row['username'];
    $getpwd=$row['password'];


echo "<table class='table'>
<tr>
<td>id<td>
<td>$getid</td>
</tr>
<tr>
<td>route<td>
<td>$getroute</td>
</tr>
<tr>
<td>busno<td>
<td>$getno</td>
</tr>

<tr>
<td>drivername<td>
<td>$getdname</td>
</tr>
<tr>
<td>username<td>
<td>$getuname</td>
</tr>
<tr>
<td>password<td>
<td>$getpwd</td>
</tr>
</table>";

}
}
else
{
    echo "no details found";
}

}
?>