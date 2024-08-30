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
	<h3>All Admins</h3>
</center>
</body>
<?php
$conn = mysqli_connect("localhost", "root", "", "college");

if (!$conn) 
{
  die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM adminprofile";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)
{
echo "<center>";
echo '<table border ="1" cellpadding="1" cellspacing= "1" style="background-color: white">';
echo "<tr>";
echo "<td>";
echo "</th>"."EMPLOYEE ID"."</th>";
echo "</td>";

echo "<td>";
echo "</th>"."FIRST NAME:"."</th>";
echo "</td>";

echo "<td>";
echo "</th>"."LASTNAME:"."</th>";
echo "</td>";

echo "<td>";
echo "</th>"."DOTE OF BIRTH:"."</th>";
echo "</td>";

echo "<td>";
echo "</th>"."ADDRESS:"."</th>";
echo "</td>";

echo "<td>";
echo "</th>"."PHONE NO:"."</th>";
echo "</td>";

echo "<td>";
echo "</th>"."GRADE"."</th>";
echo "</td>";

echo "<td>";
echo "</th>"."SUBJECT"."</th>";
echo "</td>";

echo "<td>";
echo "</th>"."CLASSES"."</th>";
echo "</td>";


echo "<td>";
echo "</th>"."EMAIL"."</th>";
echo "</td>";


echo "<td>";
echo "</th>"."PASSWORD"."</th>";
echo "</td>";
echo "</tr>";
while ($row = mysqli_fetch_assoc($result))
{
echo "<tr>";

echo "<td>";
echo $row["emid"];
echo "</td>";

echo "<td>";
echo $row["fn"];
echo "</td>";

echo "<td>";
echo $row["ln"];
echo "</td>";

echo "<td>";
echo $row["dob"];
echo "</td>";

echo "<td>";
echo $row["add"];
echo "</td>";


echo "<td>";
echo $row["ph"];
echo "</td>";

echo "<td>";
echo $row["gr"];
echo "</td>";

echo "<td>";
echo $row["sub"];
echo "</td>";

echo "<td>";
echo $row["cls"];
echo "</td>";

echo "<td>";
echo $row["emil"];
echo "</td>";

echo "<td>";
echo $row["pass"];
echo "</td>";

echo "</tr>";
}
echo "</table>"."<br>";
echo '<a href="http://localhost/php/college/code/adminlogin.html"><img src="http://localhost/php/college/image/buttonadlog.png" alt="admin login"></a>'."<br>";
echo '<a href="http://localhost/php/college/code/home.html"><img src="http://localhost/php/college/image/buttonhome.png"</a>';
echo "</center>";
}
else
{
echo "no record";
}
mysqli_close($conn);
?>
</html>
