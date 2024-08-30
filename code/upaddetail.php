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
$d10= $_POST["t10"];
$d11= $_POST["t11"];
$d12= $_POST["t12"];
$sql = "UPDATE adminprofile SET fn='$d2', ln='$d3', dob='$d4', `add`='$d5', ph='$d6', gr='$d7', sub='$d8', cls='$d9' , emil='$d10', pass='$d11', dep='$d12' WHERE emid='$d1'";
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
