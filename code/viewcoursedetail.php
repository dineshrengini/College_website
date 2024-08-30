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
<hr><h3>All Available Courses</h3>
</center>
<p>Welcome to our college!<br>

We are a leading educational institution dedicated to providing high-quality education to students from all walks of life. Our mission is to foster an environment of learning, personal growth, and professional development that prepares our students for success in their chosen fields.

Our faculty is made up of experienced professionals who are passionate about teaching and committed to helping our students succeed. Our curriculum is designed to provide students with a well-rounded education that prepares them for a variety of careers.

We offer a wide range of degree programs and certificate courses in fields such as business, engineering, arts, and sciences. Our facilities are state-of-the-art, including modern classrooms, labs, libraries, and recreational areas.

At our college, we believe that education should be accessible to everyone. We offer flexible scheduling options and financial aid to ensure that our students can pursue their dreams without any barriers.

We are proud of our diverse student body and inclusive campus community. We encourage our students to participate in extracurricular activities, clubs, and organizations to develop their leadership and social skills.

Thank you for considering our college for your educational needs. We look forward to helping you achieve your goals and making a positive impact on the world.</p>
<?php
$conn = mysqli_connect("localhost", "root", "", "college");
if (!$conn) 
{
die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM coursedetail";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
echo "<center>";
echo "<b>";
echo "<body text='white'>";
echo '<table border="1" cellpadding="1" cellspacing="1" style="background-color: black">';
echo "<tr>";
echo "<td>" . "S.NO:" . "</td>";
echo "<td>" . "COURSE NAME:" . "</td>";
echo "<td>" . "DURATION:" . "</td>";
echo "<td>" . "FEES:" . "</td>";
echo "</tr>";
while ($row = mysqli_fetch_assoc($result)) 
{
echo "<tr>";
echo "<td>" . $row["Sno"] . "</td>";
echo "<td>" . $row["crna"] . "</td>";
echo "<td>" . $row["dur"] . "</td>";
echo "<td>" . $row["fees"] . "</td>";
echo "</tr>";
}
echo "</style>"."</table>"."<br>";
echo '<a href="http://localhost/php/college/code/viewdepst.html"><img src="http://localhost/php/college/image/buttonviewdepstaffs.png" alt="view dep details"></a><br><br>';
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
