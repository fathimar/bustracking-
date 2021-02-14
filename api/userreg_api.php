<?php
if(isset($_POST["name"]))
{
$name=$_POST["name"];
$phone=$_POST["phno"];
$email=$_POST["email"];
$uname=$_POST["username"];
$password=$_POST["pwd"];


$connection=new mysqli("localhost","root","","bustracking");
 $sql="INSERT INTO `user`(`name`, `phoneno`, `email`, `username`, `password`) VALUES ('$name',$phone,'$email','$uname','$password')";
$result=$connection->query($sql);
if($result===true)
{
    echo "success";
}
else
{
    echo "failed";
}


}
?>
