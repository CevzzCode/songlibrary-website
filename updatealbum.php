<?php

if(!isset($_POST['txtsong']) || trim($_POST['txtsong']) == '')
{
die('No Song Title selected.');
}

$sng=$_POST['txtsong'];
$rel=$_POST['txtreleases'];
$pub=$_POST['txtpublisher'];
$dur=$_POST['txtduration'];


// Open database connection
$connection = mysqli_connect("localhost", "root", "") or die("Connection failed: " . mysqli_connect_error());
mysqli_select_db($connection, "artistdb") or die("Unable to select database: " . mysqli_error($connection));

// Generate and execute query
$sql = "UPDATE albumtable SET songtitle = '$sng', releases = '$rel', publisher = '$pub', duration = '$dur' WHERE songtitle = '$sng'";

if (mysqli_query($connection, $sql)) {
echo '<font size="3">Update successful!</font><br>';
echo '<a href="viewalbum.php">View Album List</a>';
} else {
echo "Error updating record: " . mysqli_error($connection) . "<br>";
echo '<a href="viewalbum.php">View Album List</a>';
}

// Close the database connection
mysqli_close($connection);

?>  