<?php
// open database conection
$connection = mysqli_connect("localhost","root","") or die ("Unable to connect!");
// select database
mysqli_select_db($connection,"artistdb") or die ("Unable to select database!");
$aid=$_POST['txtartistid'];
$fn=$_POST['txtfullname'];
$age=$_POST['txtage'];
$nt=$_POST['txtnationality'];


// generate and execute SQL query
$query = "INSERT INTO artistnametbl(artist_id, fullname, age, nationality)
VALUES('$aid','$fn','$age','$nt')";
$result=mysqli_query($connection,$query)
or die("Error in query: $query. " . mysqli_error());
echo '<br>';
echo '<font size=-1 color="red">Data was save successfully.</font><br><br>';
//close database connection mysqli_close($connection);
?>