<?php
if(!isset($_POST['txtfacultyid']) || trim($_POST['txtfacultyid'] == ''))
{
    die('No Faculty ID selected.');
}

$sid = $_POST['txtfacultyid'];
$fname = $_POST['txtfirstname'];
$mname = $_POST['txtmiddlename'];
$lname = $_POST['txtlastname'];
$sex = $_POST['txtsex'];
$civilstatus = $_POST['txtcivilstatus'];
$txtbirthdate = $_POST['txtbirthdate'];
$txtaddress = $_POST['txtaddress'];
$txtemail = $_POST['txtemail'];
$ccn = $_POST['txtcontactnum'];
$txtdepartment = $_POST['txtdepartment'];

// Open database connection
$connection = mysqli_connect("localhost", "root", "") or die(mysqli_error($connection));
mysqli_select_db($connection, "dbfinalit2c") or die("Unable to select database!");

// Generate and execute query
$sql = "UPDATE faculty SET fid = '$sid', fname = '$fname', mname = '$mname', lname = '$lname', sex = '$sex', civilstatus = '$civilstatus', birthdate = '$txtbirthdate', address = '$txtaddress', email = '$txtemail', contactnum = '$ccn', department = '$txtdepartment' WHERE fid = '$sid'";

mysqli_query($connection, $sql);
echo '<font size="3">Update successful!</font>';

// Close the database connection
mysqli_close($connection);
?>