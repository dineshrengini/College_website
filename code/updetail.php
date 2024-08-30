<html>
<title>University College of Engineering</title>
<style>
body {
	background-image: url("http://localhost/php/college/image/course.jpg");
	background-size: cover;
	background-repeat: no-repeat;
	background-position: center;
}
</style>

<body>
<center>
	<h1>University College of Engineering</h1>
	<hr>
	<h3>Student edit </h3>
</center>
</body>

<?php
$conn = mysqli_connect("localhost", "root", "", "college");
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$s1 = $_POST["t1"];
$sql = "SELECT * FROM studentprofile WHERE regno=$s1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	$row = mysqli_fetch_assoc($result);
} else {
	echo "Student data not found.";
}

echo "<form method='post' action='http://localhost/php/college/code/upstdetail.php'><center>";
echo "Register no:<input type='number' name='t1' value='" . $row['regno'] . "'><br>";
echo "Name: <input type='text' name='t2' value='" . $row['stna'] . "'><br>";
echo "Date of Birth: <input type='date' name='t3' value='" . $row['dob'] . "'><br>";
echo "Blood Group: <input type='text' name='t4' value='" . $row['bld'] . "'><br>";
echo "Address: <input type='text' name='t5' value='" . $row['addr'] . "'><br>";
echo "Department: <input type='text' name='t6' value='" . $row['dep'] . "'><br>";
echo "Phone: <input type='number' name='t7' value='" . $row['phn'] . "'><br>";
echo "Email: <input type='text' name='t8' value='" . $row['emil'] . "'><br>";
echo "Fees: <input type='number' name='t9' value='" . $row['fees'] . "'><br>";
echo "<input type='submit' value='Update'>";
echo "</center></form>";

mysqli_close($conn);
?>
</html>
