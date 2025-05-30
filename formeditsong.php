<html>

<head>

<title>Edit Song Information</title>

</head>

<body>

<h1>Edit Song Information</h1>

<hr>

<form action="logiceditsong.php" method="get">

Enter Song ID <input type="text" name="txtsongid"/>

<input type="submit" name="btnEdit"value="Edit"/>

</form>


<form action="deletesong.php" method="get">
Enter Song ID <input type="text" name="txtsongid"/>
<input type="submit" name="btndelete"value="Delete"/>
</form>


<form action="searchsong.php" method="post">
Enter Song ID <input type="text" name="txtsongid"/>
<input type="submit" name="btnEdit"value="Search"/>
</form>

</body>

</html>

<?php

$connection = mysqli_connect("localhost","root","") or die ("Unable to connect!");

if (!$connection)

{

die('Could not connect: ' . mysql_error());

}

mysqli_select_db($connection,"artistdb") or die ("Unable to select database!");

$result = mysqli_query($connection,"SELECT * FROM songtbl");

echo "<table border='1' width='100%'>

<tr>

<th>Song ID</th>

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
