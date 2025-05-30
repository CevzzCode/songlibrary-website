<html>
<h1>View Genre</h1>
</html>
<?php
$connection = mysqli_connect("localhost","root","");
if (!$connection)
{
die('Could not connect: ' . mysqli_error());
}
mysqli_select_db($connection, "artistdb");
$result = mysqli_query($connection, "SELECT * FROM genretable");
echo "<table border='1' width='50%'>
<tr>
<th>Genre</th>
<th>Subgenre</th>


</tr>";
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['genre'] . "</td>";
echo "<td>" . $row['subgenre'] . "</td>";


echo "</tr>";
}
echo "</table>";
mysqli_close($connection);
?>
<h3><a href="formhomepage.html">HOME</a></h3>