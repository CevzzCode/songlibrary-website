<!DOCTYPE html>
<html>
<head>
 <title>Artist Information</title>
</head>
<body>
<h2>ArtistInformation</h2>
<?php
$connection = mysqli_connect("localhost", "root", "", "artistdb");
if (!$connection) {
 die("Connection failed: " . mysqli_connect_error());
}
$aid = mysqli_real_escape_string($connection, $_POST["txtartistid"]);
$query = "SELECT * FROM artistnametbl WHERE artist_id = '$aid'";
$result = mysqli_query($connection, $query);
if (mysqli_num_rows($result) > 0) {
 echo "<table border='1' width='100%'>
 <tr>
<th>Artist ID</th>
<th>Full Name</th>
<th>Age</th>
<th>Nationality</th>

 </tr>";
 while($row = mysqli_fetch_assoc($result)) {
 echo "<tr>";
 echo "<td>" . $row['artist_id'] . "</td>";
 echo "<td>" . $row['fullname'] . "</td>";
 echo "<td>" . $row['age'] . "</td>";
 echo "<td>" . $row['nationality'] . "</td>";
 echo "</tr>";
 }
 echo "</table>";
} else {
 echo "No Artist ID found : " . htmlspecialchars($aid);
}
mysqli_close($connection);
?>
</body>
</html