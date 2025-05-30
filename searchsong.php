<!DOCTYPE html>
<html>
<head>
 <title>Song Information</title>
</head>
<body>
<h2>Song Information</h2>
<?php
$connection = mysqli_connect("localhost", "root", "", "artistdb");
if (!$connection) {
 die("Connection failed: " . mysqli_connect_error());
}
$song = mysqli_real_escape_string($connection, $_POST["txtsongid"]);
$query = "SELECT * FROM songtbl WHERE songid = '$song'";
$result = mysqli_query($connection, $query);
if (mysqli_num_rows($result) > 0) {
 echo "<table border='1' width='100%'>
 <tr>
<th>Song Id</th>
<th>Artist Name</th>
<th>Song Title</th>
<th>Genre</th>
<th>Release Date</th>


 </tr>";
 while($row = mysqli_fetch_assoc($result)) {
 echo "<tr>";
 echo "<td>" . $row['songid'] . "</td>";
 echo "<td>" . $row['artistname'] . "</td>";
 echo "<td>" . $row['song_title'] . "</td>";
 echo "<td>" . $row['genre'] . "</td>";
 echo "<td>" . $row['release_date'] . "</td>";
 echo "</tr>";
 }
 echo "</table>";
} else {
 echo "No Song ID found : " . htmlspecialchars($song);
}
mysqli_close($connection);
?>
</body>
</html