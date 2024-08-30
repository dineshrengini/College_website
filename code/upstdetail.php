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
$sql = "UPDATE studentprofile SET stna='$d2', dob='$d3', bld='$d4', addr='$d5', dep='$d6', phn='$d7', emil='$d8', fees='$d9' WHERE regno='$d1'";
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
