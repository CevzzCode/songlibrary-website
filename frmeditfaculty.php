<html>
<head>
<title>Edit Faculty Information</title>
</head>
<body>
<h1>Edit Faculty Information</h1>
<hr>
<form action="logicedit.php" method="get">
Enter Faculty ID <input type="text" name="txtfacultyid"/>
<input type="submit" name="btnEdit"value="Edit"/>
</form>


<form action="do_deletefaculty.php" method="get">
Enter Faculty ID <input type="text" name="txtfacultyid"/>
<input type="submit" name="btndelete"value="Delete"/>
</form>


<form action="do_search.php" method="post">
Enter Faculty ID <input type="text" name="txtfacultyid"/>
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
mysqli_select_db($connection,"dbfinalit2c") or die ("Unable to select database!");
$result = mysqli_query($connection,"SELECT * FROM faculty");
echo "<table border='1' width='100%'>
<tr>
<th>Faculty ID</th>
<th>First Name</th>
<th>Middle Name</th>
<th>Last Name</th>
<th>Sex</th>
<th>Civil Status</th>
<th>Birth Date</th>
<th>Address</th>
<th>Email</th>
<th>Contact Number</th>
<th>Department</th>
</tr>";
while($row = mysqli_fetch_array($result))
 {
 echo "<tr>";
 echo "<td>" . $row['fid'] . "</td>";
 echo "<td>" . $row['fname'] . "</td>";
 echo "<td>" . $row['mname'] . "</td>";
 echo "<td>" . $row['lname'] . "</td>";
 echo "<td>" . $row['sex'] . "</td>";
 echo "<td>" . $row['civilstatus'] . "</td>";
 echo "<td>" . $row['birthdate'] . "</td>";
 echo "<td>" . $row['address'] . "</td>";
 echo "<td>" . $row['email'] . "</td>";
 echo "<td>" . $row['contactnum'] . "</td>";
 echo "<td>" . $row['department'] . "</td>";
 echo "</tr>";
}
echo "</table>";
mysqli_close($connection);
?>