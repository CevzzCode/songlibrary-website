<p><a href="viewgenre.php">View Genre</a></p>
<?php
if(!isset($_GET['txtgenre']) || trim($_GET['txtgenre'] == ''))
{
 die('No Genre Selected.');
}
$gen=$_GET['txtgenre'];
// open database connection
 $connection = mysqli_connect("localhost", "root","") or die(mysql_error());
 mysqli_select_db($connection,"artistdb") or die ("Unable to select database!");
// generate and execute query

$query = mysqli_query($connection,"DELETE FROM genretable WHERE genre = '$gen'");
// print result
echo '<center>';
echo '<font size ="3">Record was successfully deleted!';
echo '</font>';
 echo '</center>';
// close database connection
mysqli_close($connection);
?>