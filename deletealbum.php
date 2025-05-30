<p><a href="viewalbum.php">View Album</a></p>
<?php
if(!isset($_GET['txtsong']) || trim($_GET['txtsong'] == ''))
{
 die('No Song Selected.');
}
$sng=$_GET['txtsong'];
// open database connection
 $connection = mysqli_connect("localhost", "root","") or die(mysql_error());
 mysqli_select_db($connection,"artistdb") or die ("Unable to select database!");
// generate and execute query

$query = mysqli_query($connection,"DELETE FROM albumtable WHERE songtitle = '$sng'");
// print result
echo '<center>';
echo '<font size ="3">Record was successfully deleted!';
echo '</font>';
 echo '</center>';
// close database connection
mysqli_close($connection);
?>