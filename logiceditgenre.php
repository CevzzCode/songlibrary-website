<html>
<head>
<title>Edit Genre Information</title>
</head>
<body>
<h1>Edit Genre Information</h1>
<hr>
</body>
</html>

<?php
if(!isset($_GET['txtgenre']) || trim($_GET['txtgenre'])=='')
{
die('No genre selected.');
}

$connection = mysqli_connect("localhost", "root","") or die("Connection failed: " . mysqli_connect_error());

mysqli_select_db($connection,"artistdb") or die ("Unable to select database: " . mysqli_error($connection));

$gen = $_GET['txtgenre'];

$result = mysqli_query($connection,"SELECT * FROM genretable WHERE genre = '$gen'") or die("Error in query: " . mysqli_error($connection));
if (mysqli_num_rows($result) > 0)
{

$row = mysqli_fetch_object($result);

?>
<table border="1" width="35%">
<form enctype="multipart/form-data" method="post" action="updategenre.php">

<tr>
<td><b><font size="3">Genre</font><b></td>
<td><input size="20" type="text" name="txtgenre" value="<?php echo $row->genre; ?>"></td>
</tr>

<tr>
<td><b><font size="3">Subgenre</font><b></td>
<td><input size="30" type="text" name="txtsubgen" value="<?php echo $row->subgenre; ?>"></td>
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
echo 'No genre Selected: ' . $gen;

}
mysqli_close($connection);
?>