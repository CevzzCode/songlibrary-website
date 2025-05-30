<html>
<head>
<title>Edit Faculty Information</title>
</head>
<body>
<h1>Edit Faculty Information</h1>
<hr>
</body>
</html>

<?php
 if(!isset($_GET['txtfacultyid']) || trim($_GET['txtfacultyid']==''))
 {
    die('No Faculty ID selected.');
 }
 //open database connection
 $connection = mysqli_connect("localhost", "root","") or die(mysql_error());
 mysqli_select_db($connection,"dbfinalit2c") or die ("Unable to select database!");
 //generate and execute query
 $sid = $_GET['txtfacultyid'];

 $result = mysqli_query($connection,"SELECT * FROM faculty WHERE fid = '$sid'");
 if (mysqli_num_rows($result) > 0)
 {

   $row = mysqli_fetch_object($result);

 ?>
 <table border="1" width="35%">
 <form enctype="multipart/form-data" method=post action="updatefaculty.php">

 <tr>
   <td><b><font size="3">Faculty ID</font><b></td>
   <td><input size="20" type="text" name="txtfacultyid" value="<?php echo $row->fid; ?>"></td>
 </tr>

 <tr>
   <td><b><font size="3">First Name</font><b></td>
   <td><input size="30" type="text" name="txtfirstname" value="<?php echo $row->fname; ?>"></td>
 </tr>

 <tr>
   <td><b><font size="3">Middle Name</font><b></td>
   <td><input size="30" type="text" name="txtmiddlename" value="<?php echo $row->mname; ?>"></td>
 </tr>
 <tr>
   <td><b><font size="3">Last Name</font><b></td>
   <td><input size="30" type="text" name="txtlastname" value="<?php echo $row->lname; ?>"></td>
 </tr>
 <tr>
   <td><b><font size="3">Sex</font><b></td>
   <td><input size="30" type="text" name="txtsex" value="<?php echo $row->sex; ?>"></td>
 </tr>
 <tr>
   <td><b><font size="3">Civil Status</font><b></td>
   <td><input size="30" type="text" name="txtcivilstatus" value="<?php echo $row->civilstatus; ?>"></td>
 </tr>
 <tr>
   <td><b><font size="3">Birth Date</font><b></td>
   <td><input size="30" type="text" name="txtbirthdate" value="<?php echo $row->birthdate; ?>"></td>
 </tr>
 <tr>
   <td><b><font size="3">Address</font><b></td>
   <td><input size="30" type="text" name="txtaddress" value="<?php echo $row->address; ?>"></td>
 </tr>
 <tr>
   <td><b><font size="3">Email</font><b></td>
   <td><input size="30" type="text" name="txtemail" value="<?php echo $row->email; ?>"></td>
 </tr>
 <tr>
   <td><b><font size="3">Contact number</font><b></td>
   <td><input size="30" type="text" name="txtcontactnum" value="<?php echo $row->contactnum; ?>"></td>
 </tr>
 <tr>
   <td><b><font size="3">Department</font><b></td>
   <td><input size="30" type="text" name="txtdepartment" value="<?php echo $row->department; ?>"></td>
 </tr>
 <tr>
   <td colspan=2>
     <input type="submit" name="btnUpdate" value="Update">
   </td>
 </tr>
 </form>
 </table>

 <?php
 }
?>