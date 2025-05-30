<!DOCTYPE html>
<html>
<head>
 <title>Genre Information</title>
</head>
<body>
<h2>Genre Information</h2>
<?php
$connection = mysqli_connect("localhost", "root", "", "artistdb");
if (!$connection) {
 die("Connection failed: " . mysqli_connect_error());
}
$gen = mysqli_real_escape_string($connection, $_POST["txtgenre"]);
$query = "SELECT * FROM genretable WHERE genre = '$gen'";
$result = mysqli_query($connection, $query);
if (mysqli_num_rows($result) > 0) {
 echo "<table border='1' width='100%'>
 <tr>
<th>Genre</th>
<th>Subgenre</th>

 </tr>";
 while($row = mysqli_fetch_assoc($result)) {
 echo "<tr>";
 echo "<td>" . $row['genre'] . "</td>";
 echo "<td>" . $row['subgenre'] . "</td>";
 echo "</tr>";
 }
 echo "</table>";
} else {
 echo "No Genre found : " . htmlspecialchars($gen);
}
mysqli_close($connection);
?>
</body>
</html