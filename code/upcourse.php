<?php
$conn = mysqli_connect("localhost", "root", "", "college");

if (!$conn) 
{
  die("Connection failed: " . mysqli_connect_error());
}

$d1 = $_POST["t1"];
$d2 = $_POST["t2"];
$d3 = $_POST["t3"];
$d4 = $_POST["t4"];

$sql = "INSERT INTO coursedetail VALUES ($d1, '$d2', '$d3', '$d4')";
if(mysqli_query($conn,$sql))
{
    echo "data inserted successfully";
}
else
{
    echo "error inserting data".mysqli_error($conn);
}

mysqli_close($conn);
?>