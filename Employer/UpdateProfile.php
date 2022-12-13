<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Updating</title>
</head>

<body>
<?php
$txtEmail=$_POST['txtEmail'];
$txtUser=$_POST['txtUser'];
$txtPassword=$_POST['txtPassword'];
// Establish Connection with MYSQL
$con = mysqli_connect("localhost","root","","job");
// Select Database

// Specify the query to Update Record
$sql = "Update employer_reg  set Email='".$txtEmail."',UserName='".$txtUser."',Password='".$txtPassword."' where EmployerId=".$txtId."";
// Execute query
mysqli_query($con,$sql);
// Close The Connection
mysqli_close($con);
echo '<script type="text/javascript">alert("Profile Updated Succesfully");window.location=\'Profile.php\';</script>';
?>
</body>
</html>
