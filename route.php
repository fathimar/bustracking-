<!DOCTYPE html>
<html lang="en">
<head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

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
    <table class="table" >
    <tr>
        <td>ROUTE</td>
        <td><input name="route" class="form-control" type="text"></td>
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

$route=$_POST["route"];
$connection=new mysqli("localhost","root","","bustracking");
$sql="SELECT `id`, `busname`,`busno`, `drivername`, `username`, `password` FROM `bus` WHERE `route`='$route'";
$result=$connection->query($sql);
if($result->num_rows>0)
{
while($row=$result->fetch_assoc())
{
    $getname=$row['busname'];
    $getnumber=$row['busno'];
    $getdname=$row['drivername'];
    $getuname=$row['username'];
    $getpwd=$row['password'];


echo "<table class='table'>
<tr>
<td>busname<td>
<td>$getname</td>
</tr>
<tr>
<td>busno<td>
<td>$getnumber</td>
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
    echo "no bus has found";
}

}
?>