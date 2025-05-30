<?php

if(!isset($_POST['txtsongid']) || trim($_POST['txtsongid']) == '')
{
die('No Song ID selected.');
}

$song=$_POST['txtsongid'];
$art=$_POST['txtartistname'];
$st=$_POST['txtsongtitle'];
$gen=$_POST['txtgenre'];
$rd=$_POST['txtreleasedate'];

// Open database connection
$connection = mysqli_connect("localhost", "root", "") or die("Connection failed: " . mysqli_connect_error());
mysqli_select_db($connection, "artistdb") or die("Unable to select database: " . mysqli_error($connection));

// Generate and execute query
$sql = "UPDATE songtbl SET songid = '$song', artistname = '$art', song_title = '$st', genre = '$gen', release_date = '$rd' WHERE songid = '$song'";

if (mysqli_query($connection, $sql)) {
echo '<font size="3">Update successful!</font><br>';
echo '<a href="viewsong.php">View Song List</a>';
} else {
echo "Error updating record: " . mysqli_error($connection) . "<br>";
echo '<a href="viewsong.php">View Song List</a>';
}

// Close the database connection
mysqli_close($connection);

?>  