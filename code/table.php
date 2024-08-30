<?php
$conn = mysqli_connect("localhost", "root", "", "college");
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

//$sql = "ALTER TABLE adminprofile ADD dep varchar(100)";
$sql = "ALTER TABLE studentprofile ADD pay varchar(100)";
if (mysqli_query($conn, $sql)) {
  echo "Column created successfully";
} else {
  echo "Error creating column: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
