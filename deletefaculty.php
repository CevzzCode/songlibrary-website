<html>
<head>
<title>Delete Faculty Record</title>
</head>
<body>
<h1>Delete Faculty Record</h1>
<hr>
<form action="do_deletefaculty.php" method="get">
Enter Faculty ID: <input type="text" name="txtfid"/>
<input type="submit" name="btnEdit"value="Delete"/>
</form>
</body>
</html>
<?php
$con = mysqli_connect("localhost","root","") or die ("Unable to connect!");
if (!$con)
 {
 die('Could not connect: ' . mysql_error());
 }
mysqli_select_db($con,"dbdemo") or die ("Unable to select database!");
$result = mysqli_query($con, "SELECT * FROM faculty");
echo "<table border='1' width='100%'>
<tr>
<th>Faculty ID</th>
<th>First Name</th>
<th>Middle Name</th>
<th>Last Name</th>
<th>Sex</th>
<th>Civil Status</th>
<th>Birthdate</th>
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
mysqli_close($con);
?>
