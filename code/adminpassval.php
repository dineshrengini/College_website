<html>
<style>
body
{
background-image:url("http://localhost/php/college/image/course.jpg");
background-size: 1361px 800px;
background-repeat:no-repeat;
background-position:center;
}
</style>
<body><center>
<h1></b>UNIVERSITY COLLEGE OF ENGINEERING</b></h1><hr>
<h3><b>ALL Admins</b></h3>
<?php
$conn = mysqli_connect("localhost", "root", "", "college");

if (!$conn) 
{
  die("Connection failed: " . mysqli_connect_error());
}

$d1 = $_POST["t1"];
$d2 = $_POST["t2"];

$sql = "SELECT * FROM adminprofile WHERE emil = '$d1' AND pass = '$d2'";
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
echo "</table>";
echo'<br<br><br>';
echo '<a href="http://localhost/php/college/code/viewalladminval.php"><img src="http://localhost/php/college/image/buttonalladmin.png" alt=""></a>';
echo '<a href="http://localhost/php/college/code/adminedit.html"><img src="http://localhost/php/college/image/buttoneditadmin.png" alt=""></a>';
 echo '<a href="http://localhost/php/college/code/studentreg.html"><img src="http://localhost/php/college/image/buttonsrudentregister.png" alt=""></a>';
 echo '<a href="http://localhost/php/college/code/viewallstudent.php"><img src="http://localhost/php/college/image/buttonallstudent.png" alt=""></a>';
echo '<a href="http://localhost/php/college/code/studentedithome.html"><img src="http://localhost/php/college/image/buttoneditstudent.png" alt=""></a><br><br>';
echo '<a href="http://localhost/php/college/code/home.html"><img src="http://localhost/php/college/image/buttongoback.png" alt=""></a>';
echo "</center>";
}
else
{
echo "no record";
}
mysqli_close($conn);
?>
</html>
