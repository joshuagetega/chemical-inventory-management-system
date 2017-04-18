<?php
include 'dbconnect.php';

$chemical = $_POST['chemical'];
$numberOfNewBottles = $_POST['numberOfNewBottles'];
$date = date("Y-m-d");

$sql = "SELECT num_bottles FROM CNS_database.upstair_storage WHERE chemical='$chemical'";

if(!mysqli_query($conn,$sql)) {
    die("Error description: " . mysqli_error($conn));
} else {
    $obj = mysqli_fetch_object(mysqli_query($conn,$sql));
    $newTotalBottles = $numberOfNewBottles + $obj->num_bottles;
    $sql2 = "UPDATE CNS_database.upstair_storage SET num_bottles='$newTotalBottles' WHERE chemical='$chemical'";
    mysqli_query($conn,$sql2);
    
}

$sql3 = "INSERT INTO CNS_database.new_bottles_log VALUES ('$date','$chemical','$numberOfNewBottles')";

if(!mysqli_query($conn,$sql3)) {
    die("Error description: " . mysqli_error($conn));
}

echo "<script>window.location.href='index.php';</script>";

?>