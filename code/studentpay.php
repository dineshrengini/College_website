<?php
$conn = mysqli_connect("localhost", "root", "", "college");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$d1 = $_POST["t1"];
$d2 = $_POST["t2"];

// Select the student record with the specified registration number and fees amount
$sql_select = "SELECT * FROM studentprofile WHERE regno = '$d1' AND fees = '$d2'";
$result = mysqli_query($conn, $sql_select);

if (mysqli_num_rows($result) == 1) {
    // If a record is found, update the pay status for that record
    $sql_update = "UPDATE studentprofile SET pay = 'paid'where regno='$d1'";
    if (mysqli_query($conn, $sql_update)) {
        echo "Fees payment successful.";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
} else {
    // If no record is found, display an error message
    echo "No student record found with the specified registration number or fees amount.";
}

mysqli_close($conn);
?>
