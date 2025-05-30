<?php
// open database conection
$connection = mysqli_connect("localhost","root","") or die ("Unable to connect!");
// select database
mysqli_select_db($connection,"artistdb") or die ("Unable to select database!");
$sng=$_POST['txtsong'];
$rel=$_POST['txtreleases'];
$pub=$_POST['txtpublisher'];
$dur=$_POST['txtduration'];


// generate and execute SQL query
$query = "INSERT INTO albumtable(songtitle, releases, publisher, duration)
VALUES('$sng','$rel','$pub','$dur')";
$result=mysqli_query($connection,$query)
or die("Error in query: $query. " . mysqli_error());
echo '<br>';
echo '<font size=-1 color="red">Data was save successfully.</font><br><br>';
//close database connection mysqli_close($connection);
?>