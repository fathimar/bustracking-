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
        <td>Bus Name</td>
        <td><input name="bname" class="form-control" type="text"></td>
    </tr>
    <tr>
        <td></td>
        <td><button name="btn" class="btn btn-info">SEARCH bus</button></td>
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
    $getbusno=$row['busno'];
 $getdname=$row['drivername'];
    $getuname=$row['username'];
    $getpwd=$row['password'];
    echo "<form method='POST'>
        <table class='table'>
        <tr>
            <td>id</td>
            <td><input type='text' name='newid' class='form-control' value='$getid'></td>
        </tr>
        <tr>
            <td>route</td>
            <td><input type='text' name='newroute' class='form-control' value='$getroute'></td>
        </tr>
        <tr>
            <td>busno</td>
            <td><input type='text' name='newbusno' class='form-control' value='$getbusno'></td>
        </tr>
        <tr>
            <td>drivername</td>
            <td><input type='text' name='newdname' class='form-control' value='$getdname'></td>
        </tr>
        <tr>
        <td>username</td>
        <td><input type='text' name='newuname' class='form-control' value='$getuname'></td>
    </tr>
    <tr>
            <td>password</td>
            <td><input type='text' name='newpwd' class='form-control' value='$getpwd'></td>
        </tr>
        <tr>
        <td></td>
        <td><button name='upbtn' class='btn btn-info'>UPDATE</button></td>
        </tr>
        </table>
        </form> ";

        }
    }
    else
    {
        echo "no details found";
    }

}

if(isset($_POST['upbtn']))
{
    $newid=$_POST['newid'];

    $newroute=$_POST['newroute'];
    $newbno=$_POST['newbusno'];
    $newdname=$_POST['newdname'];
    $newuname=$_POST['newuname'];
    $newpwd=$_POST['newpwd'];

$connection=new mysqli("localhost","root","","bustracking");
 $sql="UPDATE `bus` SET `route`='$newroute',`busno`='$newbno',`drivername`='$newdname',`username`='$newuname',`password`='$newpwd' WHERE `id`='$newid'";
$result=$connection->query($sql);
    if($result===TRUE)
    {
        echo "updated successfully";
}
else
{
    echo "error in updation". $connection->error;
}
}
?>