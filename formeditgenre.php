<html>

<head>

<title>Edit Genre Information</title>

</head>

<body>

<h1>Edit GenreInformation</h1>

<hr>

<form action="logiceditgenre.php" method="get">

Enter Genre <input type="text" name="txtgenre"/>

<input type="submit" name="btnEdit"value="Edit"/>

</form>


<form action="deletegenre.php" method="get">
Enter Genre <input type="text" name="txtgenre"/>
<input type="submit" name="btndelete"value="Delete"/>
</form>


<form action="searchgenre.php" method="post">
Enter Genre <input type="text" name="txtgenre"/>
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

$result = mysqli_query($connection,"SELECT * FROM genretable");

echo "<table border='1' width='100%'>

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

