<?php
$conn = mysqli_connect("localhost","root","","college");
if (!$conn) 
{
die("Connection failed: " . mysqli_connect_error());
}
//$sql = "CREATE TABLE adminprofile(emid INT, fn VARCHAR(200), ln VARCHAR(200), dob DATE, `add` VARCHAR(200), ph BIGINT(20), gr VARCHAR(10), sub VARCHAR(100), cls VARCHAR(100), emil VARCHAR(100), pass VARCHAR(100))";
$sql="create table studentprofile(regno int(20),stna varchar(200),dob DATE, addr varchar(200),sub varchar(20),phn number(20), emil varchar(30),fees int(20)";
//$sql="create table issue(mcode int,mname varchar(200),conno varchar(20),maid varchar(30),idprf varchar(100),bcode int,bname varchar(200),auth1 varchar(200),yredtn varchar(10),price float,state varchar(20))";
if (mysqli_query($conn, $sql)) 
{
echo "Table created successfully";
}
else
{
echo "Error creating table: " . mysqli_error($conn);
}
mysqli_close($conn);
?>