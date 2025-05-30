<?php

if(!isset($_POST['txtgenre']) || trim($_POST['txtgenre']) == '')
{
die('No genre selected.');
}

$gen=$_POST['txtgenre'];
$sg=$_POST['txtsubgen'];

// Open database connection
$connection = mysqli_connect("localhost", "root", "") or die("Connection failed: " . mysqli_connect_error());
mysqli_select_db($connection, "artistdb") or die("Unable to select database: " . mysqli_error($connection));

// Generate and execute query
$sql = "UPDATE genretable SET genre = '$gen', subgenre = '$sg' WHERE genre = '$gen'";

if (mysqli_query($connection, $sql)) {
echo '<font size="3">Update successful!</font><br>';
echo '<a href="viewgenre.php">View Genre List</a>';
} else {
echo "Error updating record: " . mysqli_error($connection) . "<br>";
echo '<a href="viewgenre.php">View Genre List</a>';
}

// Close the database connection
mysqli_close($connection);

?>  