<html>
<h1>View Album</h1>
</html>
<?php
$connection = mysqli_connect("localhost","root","");
if (!$connection)
{
die('Could not connect: ' . mysqli_error());
}
mysqli_select_db($connection, "artistdb");
$result = mysqli_query($connection, "SELECT * FROM albumtable");
echo "<table border='1' width='50%'>
<tr>
<th>Song title</th>
<th>Releases</th>
<th>Publisher</th>
<th>Duration</th>


</tr>";
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['songtitle'] . "</td>";
echo "<td>" . $row['releases'] . "</td>";
echo "<td>" . $row['publisher'] . "</td>";
echo "<td>" . $row['duration'] . "</td>";

echo "</tr>";
}
echo "</table>";
mysqli_close($connection);


?>
<h3><a href="formhomepage.html">HOME</a></h3>