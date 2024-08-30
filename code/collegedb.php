<?php
$conn= mysqli_connect("localhost","root","");
if(!$conn)
{
die("connection failed".mysqli_connect_error());
}
$sql="create database college";
if(mysqli_query($conn,$sql))
{
echo "database created";
}
else
{
echo "error database".mysqli_error($conn);
}
mysqli_close($conn);
?>