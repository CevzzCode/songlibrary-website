<p><a href="frmeditfaculty.php">View Faculty</a></p>
<?php
if(!isset($_GET['txtfacultyid']) || trim($_GET['txtfacultyid'] == ''))
{
 die('No ID Selected.');
}
$sid=$_GET['txtfacultyid'];
// open database connection
 $connection = mysqli_connect("localhost", "root","") or die(mysql_error());
 mysqli_select_db($connection,"dbfinalit2c") or die ("Unable to select database!");
// generate and execute query

$query = mysqli_query($connection,"DELETE FROM faculty WHERE fid = '$sid'");
// print result
echo '<center>';
echo '<font size ="3">Record was successfully deleted!';
echo '</font>';
 echo '</center>';
// close database connection
mysqli_close($connection);
?>