<!DOCTYPE html>
<html>
<head>
 <title>Faculty Information</title>
</head>
<body>
<h2>Faculty Information</h2>
<?php
$connection = mysqli_connect("localhost", "root", "", "dbfinalit2c");
if (!$connection) {
 die("Connection failed: " . mysqli_connect_error());
}
$fid = mysqli_real_escape_string($connection, $_POST["txtfacultyid"]);
$query = "SELECT * FROM faculty WHERE fid = '$fid'";
$result = mysqli_query($connection, $query);
if (mysqli_num_rows($result) > 0) {
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
 while($row = mysqli_fetch_assoc($result)) {
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
} else {
 echo "No faculty found with ID: " . htmlspecialchars($fid);
}
mysqli_close($connection);
?>
</body>
</html>
<script>
    function printDiv(){
        printButton.style.visibility = 'hidden';
        window.print();
        printButton.style.visibility = 'visible';

    }
</script>
<input id ="printButton" type="button" value="print" onclick ="printDiv()"/>