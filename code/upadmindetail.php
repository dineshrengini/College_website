<html>
<title>University College of Engineering</title>
<style>
body {
	background-image: url("http://localhost/php/college/image/adlog.jpg");
	background-size: cover;
	background-repeat: no-repeat;
	background-position: center;
}
</style>

<body>
<center>
	<h1>University College of Engineering</h1>
	<hr>
	<h3>Admin Edit </h3>
</center>
</body>

<?php
$conn = mysqli_connect("localhost", "root", "", "college");
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$s1 = $_POST["t1"];
$sql = "SELECT * FROM adminprofile WHERE emid=$s1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	$row = mysqli_fetch_assoc($result);
echo "<form method='post' action='http://localhost/php/college/code/upaddetail.php'><center>";
echo "Admin Id:<input type='number' name='t1' value='" . $row['emid'] . "'><br>";
echo "First Name: <input type='text' name='t2' value='" . $row['fn'] . "'><br>";
echo "Last Name: <input type='text' name='t3' value='" . $row['ln'] . "'><br>";
echo "Date Of Birth: <input type='date' name='t4' value='" . $row['dob'] . "'><br>";
echo "Address: <input type='text' name='t5' value='" . $row['add'] . "'><br>";
echo "Phone No: <input type='number' name='t6' value='" . $row['ph'] . "'><br>";
echo "Grade: <input type='text' name='t7' value='" . $row['gr'] . "'><br>";
echo "Subject: <input type='text' name='t8' value='" . $row['sub'] . "'><br>";
echo "Class: <input type='text' name='t9' value='" . $row['cls'] . "'><br>";
echo "Email: <input type='email' name='t10' value='" . $row['emil'] . "'><br>";
echo "Password: <input type='text' name='t11' value='" . $row['pass'] . "'><br>";
echo "Deparment: <input type='text' name='t12' value='" . $row['dep'] . "'><br>";
echo "<input type='submit' value='Update'>";
echo "</center></form>";
}
 else {
	echo "Admin data not found.";
}
mysqli_close($conn);
?>
</html>
