<?php
// open database conection
$connection = mysqli_connect("localhost","root","") or die ("Unable to connect!");
// select database
mysqli_select_db($connection,"dbfinalit2c") or die ("Unable to select database!");
// Check connection
If(!$connection) {
 die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
// Close the connection
mysqli_close($connection);
?>