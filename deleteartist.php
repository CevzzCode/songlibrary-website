<p><a href="viewartist.php">View Artist</a></p>
<?php
if(!isset($_GET['txtartistid']) || trim($_GET['txtartistid'] == ''))
{
 die('No Artist ID Selected.');
}
$aid=$_GET['txtartistid'];
// open database connection
 $connection = mysqli_connect("localhost", "root","") or die(mysql_error());
 mysqli_select_db($connection,"artistdb") or die ("Unable to select database!");
// generate and execute query

$query = mysqli_query($connection,"DELETE FROM artistnametbl WHERE artist_id = '$aid'");
// print result
echo '<center>';
echo '<font size ="3">Record was successfully deleted!';
echo '</font>';
 echo '</center>';
// close database connection
mysqli_close($connection);
?>