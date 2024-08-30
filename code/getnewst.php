<?php
$conn = mysqli_connect("localhost","root","","college");
if(!$conn)
{
    die("connection failed".mysqli_connect_error());
}
$d1= $_POST["t1"];
$d2= $_POST["t2"];
$d3= $_POST["t3"];
$d4= $_POST["t4"];
$d5= $_POST["t5"];
$d6= $_POST["t6"];
$d7= $_POST["t7"];
$d8= $_POST["t8"];
$d9= $_POST["t9"];
$sql ="insert into studentprofile values($d1, '$d2', $d3, '$d4', '$d5', '$d6', $d7, '$d8', $d9)";
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