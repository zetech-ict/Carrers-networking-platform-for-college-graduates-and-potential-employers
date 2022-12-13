<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Inserting Graduate...</title>
</head>

<body>
<?php
$Email=$_POST['txtEmail'];
	$UserName=$_POST['txtUserName'];
	$Password=$_POST['txtPassword'];
	// Establish Connection with MYSQL
	$con = mysqli_connect ("localhost","root","","job");

	// Specify the query to Insert Record
	$sql = "insert into jobseeker_reg (Email,UserName,Password) values('".$Email."','".$UserName."','".$Password."')";
	// execute query
	mysqli_query ($con,$sql);
	// Close The Connection
	mysqli_close ($con);
	echo '<script type="text/javascript">alert("Graduate Inserted Succesfully");window.location=\'ManageGraduate.php\';</script>';

?>
</body>
</html>
