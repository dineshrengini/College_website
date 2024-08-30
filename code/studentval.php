<html>
<title>University College of Engineering</title>
<style>
body 
{
background-image:url("http://localhost/php/college/image/course.jpg");
background-size: cover;
background-repeat: no-repeat;
background-position: center;
	</style>

<body>
<center>
	<h1>University College of Engineering</h1>
	<hr>
	<h3>My Profile</h3>
</center>
</body>
<?php
$conn = mysqli_connect("localhost", "root", "", "college");

if (!$conn) 
{
  die("Connection failed: " . mysqli_connect_error());
}

$d1 = $_POST["t1"];
$d2 = $_POST["t2"];

$sql = "SELECT * FROM studentprofile WHERE regno = '$d1' AND dob = '$d2'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)
{
echo "<center>";
echo '<table border ="1" cellpadding="1" cellspacing= "1" style="background-color: white">';
echo "<tr>";
echo "<td>";
echo "</th>"."REGISTER NO"."</th>";
echo "</td>";

echo "<td>";
echo "</th>"."NAME"."</th>";
echo "</td>";

echo "<td>";
echo "</th>"."DOTE OF BIRTH:"."</th>";
echo "</td>";

echo "<td>";
echo "</th>"."BLOOD GROUP:"."</th>";
echo "</td>";

echo "<td>";
echo "</th>"."ADDRESS:"."</th>";
echo "</td>";

echo "<td>";
echo "</th>"."DEPARTMENT:"."</th>";
echo "</td>";

echo "<td>";
echo "</th>"."PHONE NO:"."</th>";
echo "</td>";

echo "<td>";
echo "</th>"."EMAIL"."</th>";
echo "</td>";

echo "<td>";
echo "</th>"."FEES"."</th>";
echo "</td>";

echo "<td>";
echo "</th>"."FEES PAYMENT STATUS"."</th>";
echo "</td>";
echo "</tr>";
while ($row = mysqli_fetch_assoc($result))
{
echo "<tr>";

echo "<td>";
echo $row["regno"];
echo "</td>";

echo "<td>";
echo $row["stna"];
echo "</td>";

echo "<td>";
echo $row["dob"];
echo "</td>";

echo "<td>";
echo $row["bld"];
echo "</td>";

echo "<td>";
echo $row["addr"];
echo "</td>";

echo "<td>";
echo $row["dep"];
echo "</td>";

echo "<td>";
echo $row["phn"];
echo "</td>";

echo "<td>";
echo $row["emil"];
echo "</td>";

echo "<td>";
echo $row["fees"];
echo "</td>";

echo "<td>";
echo $row["pay"];
echo "</td>";

echo "</tr>";
}
echo "</table>"."<br>"."<br>";
echo '<a href="http://localhost/php/college/code/pay.html"><img src="http://localhost/php/college/image/buttonpayfees.png"></a>.<br>';
echo '<a href="http://localhost/php/college/code/studentlogin.html"><img src="http://localhost/php/college/image/buttonstlog.png"></a>';
echo "</center>";
}
else
{
echo "no record";
}
mysqli_close($conn);
?>
</html>
