<html>
<head>
<title>Edit Album Information</title>
</head>
<body>
<h1>Edit Album Information</h1>
<hr>
</body>
</html>

<?php
if(!isset($_GET['txtsong']) || trim($_GET['txtsong'])=='')
{
die('No Song title selected.');
}

$connection = mysqli_connect("localhost", "root","") or die("Connection failed: " . mysqli_connect_error());

mysqli_select_db($connection,"artistdb") or die ("Unable to select database: " . mysqli_error($connection));

$sng = $_GET['txtsong'];

$result = mysqli_query($connection,"SELECT * FROM albumtable WHERE songtitle = '$sng'") or die("Error in query: " . mysqli_error($connection));
if (mysqli_num_rows($result) > 0)
{

$row = mysqli_fetch_object($result);

?>
<table border="1" width="35%">
<form enctype="multipart/form-data" method="post" action="updatealbum.php">

<tr>
<td><b><font size="3">Song Title</font><b></td>
<td><input size="20" type="text" name="txtsong" value="<?php echo $row->songtitle; ?>"></td>
</tr>

<tr>
<td><b><font size="3">Releases</font><b></td>
<td><input size="30" type="text" name="txtreleases" value="<?php echo $row->releases; ?>"></td>
</tr>

<tr>
<td><b><font size="3">Publisher</font><b></td>
<td><input size="30" type="text" name="txtpublisher" value="<?php echo $row->publisher; ?>"></td>
</tr>
<tr>
<td><b><font size="3">Duration</font><b></td>
<td><input size="30" type="text" name="txtduration" value="<?php echo $row->duration; ?>"></td>
</tr>

<tr>
<td colspan="2">
<input type="submit" name="btnUpdate" value="Update">
</td>
</tr>
</form>
</table>

<?php
} else {
echo 'No Song Title Selected: ' . $sng;

}
mysqli_close($connection);
?>