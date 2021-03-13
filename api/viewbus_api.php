<?php
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


?>