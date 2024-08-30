<html>
<title>University College of Engineering</title>
<style>
body
 {
background-image: url("http://localhost/php/college/image/course.jpg");
background-size: cover;
background-repeat: no-repeat;
background-position: center;
	}
</style>
<body>
<center>
<h1>University College of Engineering</h1>
<hr><h3>CIVIL ENGINEERING</h3>
<p>construction, and maintenance of the built environment, including buildings, roads, bridges, airports, railways, water supply systems, sewage systems, and more. Civil engineers use their knowledge of physics, mathematics, and engineering principles to design and oversee the construction of infrastructure that is safe, reliable, and sustainable.

</p></center>
<?php
$conn = mysqli_connect("localhost", "root", "", "college");
if (!$conn) 
{
die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM adminprofile WHERE dep= 'civil'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
echo "<center>";
echo "<b>";
echo "<body text='white'>";
echo '<table border="1" cellpadding="1" cellspacing="1" style="background-color: black">';
echo "<tr>";
echo "<td>" . "NAME:" . "</td>";
echo "<td>" . "GRADE:" . "</td>";
echo "<td>" . "DEPARTMENT:" . "</td>";
echo "<td>" . "SUBJECT:" . "</td>";
echo "<td>" . "CLASS:" . "</td>";
echo "</tr>";
while ($row = mysqli_fetch_assoc($result)) 
{
echo "<tr>";
echo "<td>" . $row["fn"] . "</td>";
echo "<td>" . $row["gr"] . "</td>";
echo "<td>" . $row["dep"] . "</td>";
echo "<td>" . $row["sub"] . "</td>";
echo "<td>" . $row["cls"] . "</td>";
echo "</tr>";
}
echo "</style>"."</table>"."<br>";
echo '<a href="http://localhost/php/college/code/viewdepst.html"><img src="http://localhost/php/college/image/buttonviewdepstaffs.png" alt="http://localhost/php/college/image/view dep details"></a><br><br>';
echo '<a href="http://localhost/php/college/code/home.html"><img src="http://localhost/php/college/image/buttongoback.png" alt="goback"></a><br><br>';
echo "</center>";
} 
else 
{
echo "No record";
}
mysqli_close($conn);
?>
</body>
</html>
