<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST">
    <table class='table'>
    <tr>
        <td>USERNAME</td>
        <td><input name="username" type="text" class="form-control"></td>

    </tr>
    
    <tr>
        <td>PASSWORD</td>
        <td><input name="password" type="text" class="form-control"></td>

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
$name=$_POST["username"];
$password=$_POST["password"];


$connection=new mysqli("localhost","root","project","bustracking");
$sql="SELECT `username`, `password` FROM `user` WHERE `username`='$name' and `password`='$password'";
$result=$connection->query($sql);
if($result->num_rows>0)
{
while($row=$result->fetch_assoc())
{
    $getuname=$row['username'];
 
   $getpwd=$row['password'];
   echo "<table class='table'>
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


    
</body>
</html>