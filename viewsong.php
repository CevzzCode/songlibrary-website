<html>
<h1>View Song</h1>
</html>
<?php
$connection = mysqli_connect("localhost","root","");
if (!$connection)
{
die('Could not connect: ' . mysqli_error());
}
mysqli_select_db($connection, "artistdb");
$result = mysqli_query($connection, "SELECT * FROM songtbl");
echo "<table border='1' width='50%'>
<tr>
<th>Song Id</th>
<th>Artist Name</th>
<th>Song Title</th>
<th>Genre</th>
<th>Release Date</th>


</tr>";
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['songid'] . "</td>";
echo "<td>" . $row['artistname'] . "</td>";
echo "<td>" . $row['song_title'] . "</td>";
echo "<td>" . $row['genre'] . "</td>";
echo "<td>" . $row['release_date'] . "</td>";

echo "</tr>";
}
echo "</table>";
mysqli_close($connection);
?>
<h3><a href="formhomepage.html">HOME</a></h3>