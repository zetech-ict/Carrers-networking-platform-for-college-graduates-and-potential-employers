<?php
if (!isset($_SESSION)) 
{
  session_start();
  
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Creating Job...</title>
</head>

<body>
<?php
	$txtTitle=$_POST['JobTitle'];
	$txtTotal=$_POST['txtTotal'];
	$cmbQual=$_POST['cmbQual'];
	$txtDesc=$_POST['txtDesc'];
	if($cmbQual=="Other")
	{
	$cmbQual=$_POST['txtOther'];
	}
	// Establish Connection with MYSQL
	$con = mysqli_connect ("localhost","root","","job");

	// Specify the query to Insert Record
	$sql = "insert into job_master (JobTitle,Vacancy,MinQualification,Description) values('".$txtTitle."','".$txtTotal."','".$cmbQual."','".$txtDesc."')";
	// execute query
	mysqli_query ($con,$sql);
	// Close The Connection	mysqli_close ($con);
	echo '<script type="text/javascript">alert("Job created Succesfully");window.location=\'jobs.php\';</script>';

?>
</body>
</html>
