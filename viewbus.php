<!DOCTYPE html>
<html lang="en">
<head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>


<body>

    <form method="GET">
    <table class="table" >

    <tr>
        <td></td>
        <td><button name="btn" class="btn btn-info">VIEW BUS</button></td>
    </tr>

    </table>
    
    
    </form>
</body>
</html>
<?php
if(isset($_GET["btn"]))
{


$connection=new mysqli("localhost","root","project","bustracking");
$sql="SELECT * FROM `bus` ";
$result=$connection->query($sql);
if($result->num_rows>0)
{
while($row=$result->fetch_assoc())
{
    $getid=$row['id'];
    $getbname=$row['busname'];
    $getroute=$row['route'];
    $getbno=$row['busno'];
    $getdname=$row['drivername'];


    echo "<table class='table'>
    <tr>
    <td>id<td>
    <td>$getid</td>
    </tr>
    <tr>
    
    <td>busname<td>
    <td>$getbname</td>
    </tr>
    <tr>
    <td>route<td>
    <td>$getroute</td>
    </tr>
    <tr>
    <td>drivername<td>
    <td>$getdname</td>
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