<html>

<head>

<title>Edit Album Information</title>

</head>

<body>

<h1>Edit Album Information</h1>

<hr>

<form action="logiceditalbum.php" method="get">

Enter Song Title <input type="text" name="txtsong"/>

<input type="submit" name="btnEdit"value="Edit"/>

</form>


<form action="deletealbum.php" method="get">
Enter Song Title <input type="text" name="txtsong"/>
<input type="submit" name="btndelete"value="Delete"/>
</form>


<form action="searchalbum.php" method="post">
Enter Song Title <input type="text" name="txtsong"/>
<input type="submit" name="btnEdit"value="Search"/>
</form>
</body>
</html>




</body>

</html>

<?php

$connection = mysqli_connect("localhost","root","") or die ("Unable to connect!");

if (!$connection)

{

die('Could not connect: ' . mysql_error());

}

mysqli_select_db($connection,"artistdb") or die ("Unable to select database!");

$result = mysqli_query($connection,"SELECT * FROM albumtable");

echo "<table border='1' width='100%'>

<tr>

<th>Song Title</th>

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


