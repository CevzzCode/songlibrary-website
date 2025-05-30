<?php
// open database conection
$connection = mysqli_connect("localhost","root","") or die ("Unable to connect!");
// select database
mysqli_select_db($connection,"dbfinalit2c") or die ("Unable to select database!");
$sid = $_POST['txtfacultyid'];
$fname = $_POST['txtfirstname'];
$mname = $_POST['txtmiddlename'];
$lname = $_POST['txtlastname'];
$sex = $_POST['txtsex'];
$civilstatus = $_POST['txtcivilstatus'];
$birthdate = $_POST['txtbirthdate'];
$address = $_POST['txtaddress'];
$email = $_POST['txtemail'];
$ccn = $_POST['txtcontactnum'];
$department = $_POST['txtdepartment'];


// generate and execute SQL query
$query = "INSERT INTO faculty(fid, fname, mname, lname, sex, civilstatus, birthdate, address, email, contactnum, department)
VALUES('$sid','$fname','$mname','$lname','$sex','$civilstatus','$birthdate','$address','$email','$ccn','$department')";
$result=mysqli_query($connection,$query)
or die("Error in query: $query. " . mysqli_error());
echo '<br>';
echo '<font size=-1 color="red">Data was save successfully.</font><br><br>';
//close database connection mysqli_close($connection);
?>