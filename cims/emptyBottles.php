<?php
include 'dbconnect.php';

$chemical = $_POST['chemical'];
$numberOfEmptyBottles = $_POST['numberOfEmptyBottles'];
$date = date("Y-m-d");

$sql = "INSERT INTO CNS_database.empty_bottles_log VALUES ('$date','$chemical','$numberOfEmptyBottles')";

if(!mysqli_query($conn,$sql)) {
    die("Error description: " . mysqli_error($conn));
}

echo "<script>window.location.href='index.php';</script>";

?>