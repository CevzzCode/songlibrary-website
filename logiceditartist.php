<html>
<head>
<title>Edit Artist Information</title>
</head>
<body>
<h1>Edit Artist Information</h1>
<hr>
</body>
</html>

<?php
if(!isset($_GET['txtartistid']) || trim($_GET['txtartistid'])=='')
{
 die('No Artist ID selected.');
}
//open database connection
$connection = mysqli_connect("localhost", "root","") or die("Connection failed: " . mysqli_connect_error());
mysqli_select_db($connection,"artistdb") or die ("Unable to select database: " . mysqli_error($connection));
//generate and execute query
$aid = $_GET['txtartistid'];

$result = mysqli_query($connection,"SELECT * FROM artistnametbl WHERE artist_id = '$aid'") or die("Error in query: " . mysqli_error($connection));
if (mysqli_num_rows($result) > 0)
{

$row = mysqli_fetch_object($result);

?>
<table border="1" width="35%">
<form enctype="multipart/form-data" method="post" action="updateartist.php">

<tr>
<td><b><font size="3">Artist ID</font><b></td>
<td><input size="20" type="text" name="txtartistid" value="<?php echo $row->artist_id; ?>"></td>
</tr>

<tr>
<td><b><font size="3">Full Name</font><b></td>
<td><input size="30" type="text" name="txtfullname" value="<?php echo $row->fullname; ?>"></td>
</tr>

<tr>
<td><b><font size="3">Age</font><b></td>
<td><input size="30" type="text" name="txtage" value="<?php echo $row->age; ?>"></td>
</tr>
<tr>
<td><b><font size="3">Nationality</font><b></td>
<td><input size="30" type="text" name="txtnationality" value="<?php echo $row->nationality; ?>"></td>
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
 echo "No artist found with the ID: " . $aid;
}
mysqli_close($connection);
?>