<html>
<head>
<title>Edit Song Information</title>
</head>
<body>
<h1>Edit Song Information</h1>
<hr>
</body>
</html>

<?php
if(!isset($_GET['txtsongid']) || trim($_GET['txtsongid'])=='')
{
die('No Song ID selected.');
}

$connection = mysqli_connect("localhost", "root","") or die("Connection failed: " . mysqli_connect_error());

mysqli_select_db($connection,"artistdb") or die ("Unable to select database: " . mysqli_error($connection));

$song = $_GET['txtsongid'];

$result = mysqli_query($connection,"SELECT * FROM songtbl WHERE songid = '$song'") or die("Error in query: " . mysqli_error($connection));
if (mysqli_num_rows($result) > 0)
{

$row = mysqli_fetch_object($result);

?>
<table border="1" width="35%">
<form enctype="multipart/form-data" method="post" action="updatesong.php">

<tr>
<td><b><font size="3">Song Id</font><b></td>
<td><input size="20" type="text" name="txtsongid" value="<?php echo $row->songid; ?>"></td>
</tr>

<tr>
<td><b><font size="3">Artist Name</font><b></td>
<td><input size="30" type="text" name="txtartistname" value="<?php echo $row->artistname; ?>"></td>
</tr>

<tr>
<td><b><font size="3">Song Title</font><b></td>
<td><input size="30" type="text" name="txtsongtitle" value="<?php echo $row->song_title; ?>"></td>
</tr>
<tr>
<td><b><font size="3">Genre</font><b></td>
<td><input size="30" type="text" name="txtgenre" value="<?php echo $row->genre; ?>"></td>
</tr>

<tr>
<td><b><font size="3">Release Date</font><b></td>
<td><input size="30" type="text" name="txtreleasedate" value="<?php echo $row->release_date; ?>"></td>
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
echo 'No Song TID Selected: ' . $song;

}
mysqli_close($connection);
?>