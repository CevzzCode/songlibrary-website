<html>

<head>

<title>Edit Artist Information</title>

</head>

<body>

<h1>Edit Artist Information</h1>

<hr>

<form action="logiceditartist.php" method="get">

Enter Artist ID <input type="text" name="txtartistid"/>

<input type="submit" name="btnEdit"value="Edit"/>

</form>

<form action="deleteartist.php" method="get">
Enter Artist ID <input type="text" name="txtartistid"/>
<input type="submit" name="btndelete"value="Delete"/>
</form>

<form action="searchartist.php" method="post">
Enter Artist ID <input type="text" name="txtartistid"/>
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

$result = mysqli_query($connection,"SELECT * FROM artistnametbl");

echo "<table border='1' width='100%'>

<tr>

<th>Artist Id</th>

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