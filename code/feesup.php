<?php
$conn = mysqli_connect("localhost", "root", "", "college");

if (!$conn) 
{
  die("Connection failed: " . mysqli_connect_error());
}

$d1 = $_POST["t1"];
$d2 = $_POST["t2"];

$sql = "UPDATE coursedetail SET crna='$d1' WHERE fees='$d2'";
if(mysqli_query($conn,$sql))
{
    echo "data updated successfully";
}
else
{
    echo "error updating data".mysqli_error($conn);
}

mysqli_close($conn);
?>