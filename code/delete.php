<?php
$conn = mysqli_connect("localhost", "root", "", "college");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//$sql = "ALTER TABLE studentprofile DROP COLUMN pay";
//$sql= "update studentprofile set pay='not payed'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
