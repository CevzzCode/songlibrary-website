<p><a href="viewsong.php">View Song</a></p>
<?php
if(!isset($_GET['txtsongid']) || trim($_GET['txtsongid'] == ''))
{
 die('No Song ID Selected.');
}
$song=$_GET['txtsongid'];
// open database connection
 $connection = mysqli_connect("localhost", "root","") or die(mysql_error());
 mysqli_select_db($connection,"artistdb") or die ("Unable to select database!");
// generate and execute query

$query = mysqli_query($connection,"DELETE FROM songtbl WHERE songid = '$song'");
// print result
echo '<center>';
echo '<font size ="3">Record was successfully deleted!';
echo '</font>';
 echo '</center>';
// close database connection
mysqli_close($connection);
?>