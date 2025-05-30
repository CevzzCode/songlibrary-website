<!DOCTYPE html>
<html>
<head>
 <title>Album Information</title>
</head>
<body>
<h2>Album Information</h2>
<?php
$connection = mysqli_connect("localhost", "root", "", "artistdb");
if (!$connection) {
 die("Connection failed: " . mysqli_connect_error());
}
$sng = mysqli_real_escape_string($connection, $_POST["txtsong"]);
$query = "SELECT * FROM albumtable WHERE songtitle = '$sng'";
$result = mysqli_query($connection, $query);
if (mysqli_num_rows($result) > 0) {
 echo "<table border='1' width='100%'>
 <tr>
<th>Song title</th>
<th>Releases</th>
<th>Publisher</th>
<th>Duration</th>

 </tr>";
 while($row = mysqli_fetch_assoc($result)) {
 echo "<tr>";
 echo "<td>" . $row['songtitle'] . "</td>";
 echo "<td>" . $row['releases'] . "</td>";
 echo "<td>" . $row['publisher'] . "</td>";
 echo "<td>" . $row['duration'] . "</td>";
 echo "</tr>";
 }
 echo "</table>";
} else {
 echo "No Song Title found : " . htmlspecialchars($sng);
}
mysqli_close($connection);
?>
</body>
</html