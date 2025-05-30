<?php
// open database conection
$connection = mysqli_connect("localhost","root","") or die ("Unable to connect!");
// select database
mysqli_select_db($connection,"artistdb") or die ("Unable to select database!");
$song=$_POST['txtsongid'];
$art=$_POST['txtartistname'];
$st=$_POST['txtsongtitle'];
$gen=$_POST['txtgenre'];
$rd=$_POST['txtreleasedate'];


// generate and execute SQL query
$query = "INSERT INTO songtbl(songid, artistname, song_title, genre, release_date )
VALUES('$song','$art','$st','$gen','$rd')";
$result=mysqli_query($connection,$query)
or die("Error in query: $query. " . mysqli_error());
echo '<br>';
echo '<font size=-1 color="red">Data was save successfully.</font><br><br>';
//close database connection mysqli_close($connection);
?>