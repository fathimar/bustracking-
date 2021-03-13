<?php
if(isset($_POST["username"]))
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
   echo "success";

}
}
else
{
    echo "invalid credentials";
}

}
?>