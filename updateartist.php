<?php

if(!isset($_POST['txtartistid']) || trim($_POST['txtartistid'] == ''))
{
    die('No Song ID selected.');
}

$aid=$_POST['txtartistid'];
$fn=$_POST['txtfullname'];
$age=$_POST['txtage'];
$nt=$_POST['txtnationality'];


// Open database connection
$connection = mysqli_connect("localhost", "root", "") or die(mysqli_error($connection));
mysqli_select_db($connection, "artistdb") or die("Unable to select database!");

// Generate and execute query
$sql = "UPDATE artistnametbl SET artist_id = '$aid', fullname = '$fn', age = '$age', nationality = '$nt' WHERE artist_id = '$aid'";

if (mysqli_query($connection, $sql)) {
    echo '<font size="3">Update successful!</font><br>';
    echo '<a href="viewartist.php">View Artist List</a>';
} else {
    echo "Error updating record: " . mysqli_error($connection) . "<br>";
    echo '<a href="viewartist.php">View Artist List</a>';
}

// Close the database connection
mysqli_close($connection);
?>