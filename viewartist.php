<html>
<h1>View Artist INFO</h1>
</html>
<?php
$connection = mysqli_connect("localhost","root","");
if (!$connection)
{
die('Could not connect: ' . mysqli_error());
}
mysqli_select_db($connection, "artistdb");
$result = mysqli_query($connection, "SELECT * FROM artistnametbl");
echo "<table border='1' width='50%'>
<tr>
<th>Artist ID</th>
<th>Full Name</th>
<th>Age</th>
<th>Nationality</th>


</tr>";
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['artist_id'] . "</td>";
echo "<td>" . $row['fullname'] . "</td>";
echo "<td>" . $row['age'] . "</td>";
echo "<td>" . $row['nationality'] . "</td>";

echo "</tr>";
}
echo "</table>";
mysqli_close($connection);
?>
<h3><a href="formhomepage.html">HOME</a></h3>