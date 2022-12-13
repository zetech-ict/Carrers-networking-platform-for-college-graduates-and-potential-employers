<?php
session_start();
if(isset($_SESSION['$UserName_job'])){
}
	else{
		header('location:../index.php');
	}
?>
<?php $con=mysqli_connect("localhost","root","","job");?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "")
{
  $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;

//  $theValue = function_exists("mysql_real_escape_string") ? mysqli_real_escape_string($theValue) : mysqli_escape_string($theValue);
//
  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$currentPage = $_SERVER["PHP_SELF"];





$query_Recordset1 = "SELECT MinQualification FROM job_master";
$Recordset1 = mysqli_query( $con,$query_Recordset1) or die(mysqli_error());
$row_Recordset1 = mysqli_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysqli_num_rows($Recordset1);


$query_Recordset3 = "SELECT job_master.JobId, job_master.CompanyName, job_master.JobTitle, application_master.Status, application_master.JobSeekId, application_master.Description FROM application_master, job_master WHERE application_master.JobId=job_master.JobId";
$Recordset3 = mysqli_query($con,$query_Recordset3) or die(mysqli_error());
$row_Recordset3 = mysqli_fetch_assoc($Recordset3);
$totalRows_Recordset3 = mysqli_num_rows($Recordset3);


$query_Recordset4 = "SELECT distinct CompanyName FROM job_master";
$Recordset4 = mysqli_query($con,$query_Recordset4) or die(mysqli_error());
$row_Recordset4 = mysqli_fetch_assoc($Recordset4);
$totalRows_Recordset4 = mysqli_num_rows($Recordset4);


$query_Recordset5 = "SELECT distinct JobTitle FROM job_master";
$Recordset5 = mysqli_query($con,$query_Recordset5) or die(mysqli_error());
$row_Recordset5 = mysqli_fetch_assoc($Recordset5);
$totalRows_Recordset5 = mysqli_num_rows($Recordset5);

$colname_Recordset2 = "-1";
if (isset($_POST['cmbQual'])) {
  $colname_Recordset2 = $_POST['cmbQual'];
}
$colname2_Recordset2 = "-1";
if (isset($_POST['cmbCompany'])) {
  $colname2_Recordset2 = $_POST['cmbCompany'];
}
$colname3_Recordset2 = "-1";
if (isset($_POST['cmbArea'])) {
  $colname3_Recordset2 = $_POST['cmbArea'];
}

$query_Recordset2 = sprintf("SELECT * FROM job_master WHERE MinQualification = %s and CompanyName=%s and JobTitle=%s", GetSQLValueString($colname_Recordset2, "text"),GetSQLValueString($colname2_Recordset2, "text"),GetSQLValueString($colname3_Recordset2, "text"));
$Recordset2 = mysqli_query($con,$query_Recordset2) or die(mysqli_error());
$row_Recordset2 = mysqli_fetch_assoc($Recordset2);
$totalRows_Recordset2 = mysqli_num_rows($Recordset2);

$queryString_Recordset2 = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_Recordset2") == false && 
        stristr($param, "totalRows_Recordset2") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_Recordset2 = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_Recordset2 = sprintf("&totalRows_Recordset2=%d%s", $totalRows_Recordset2, $queryString_Recordset2);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>
    <title>JointlyIn</title>

<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" type="text/css" href="index.css">
<body style="background-image: url('123.jpeg');">

    <header id="header" class="jointlyin">
    <div class="head content"></div>
    <div class="head content-box inner"></div>
    <div class="head-logo"></div>
    
    <a href="index.php"><img src="jointlyin.png" alt="JointlyIn" title="JointlyIn" width="200" height="50">
              </a>
    </header>
    
    
    </button>
    </div>
    <nav id="menu">
    <table cellspacing="5" cellpadding="5"> 
    <tr>
    <td style="font-size:200%;"><a href="index.php">Home</a></td>
   <td style="font-size:200%;"><a href="Profile.php">Profile</a></td>
    <td style="font-size:200%;"><a href="jobs.php">Jobs</a></td>
    <td style="font-size:200%;"><a href="endlog.php">Log out</a></td>
    </tr>
    </table>
    </nav>
    <tr>
                    <h3 style="color:white;"><strong>Available Jobs</strong></h3>
                  
<tr>
                    <td><table width="100%" border="1" bordercolor="#1CB5F1" >
                      <tr>
                        <th height="32" bgcolor="#1CB5F1"><div align="left"><strong>Id</strong></div></th>
                        <th bgcolor="#1CB5F1"><div align="left"><strong>Job Title</strong></div></th>
                        <th bgcolor="#1CB5F1"><div align="left"><strong>Vacancy</strong></div></th>
                         <th bgcolor="#1CB5F1"><div align="left"><strong>Qualification</strong></div></th>
                          <th bgcolor="#1CB5F1"><div align="left"><strong>Description</strong></div></th>
                      </tr>
                      <?php
// Establish Connection with Database
$con = mysqli_connect("localhost","root","","job");

// Specify the query to execute
$sql = "select * from job_master where CompanyName='".$_SESSION['Name']."'";
// Execute query
$result = mysqli_query($con,$sql);
// Loop through each records 
while($row = mysqli_fetch_array($result))
{
$Id=$row['JobId'];
$JobTitle=$row['JobTitle'];
$Vacancy=$row['Vacancy'];
$MinQualification=$row['MinQualification'];
$Description =$row['Description'];

?>
                      <tr>
                        <td style="color:white;"><div align="left"><strong><?php echo $Id;?></strong></div></td>
                        <td style="color:white;"><div align="left"><strong><?php echo $JobTitle;?></strong></div></td>
                        <td style="color:white;"><div align="left"><strong><?php echo $Vacancy;?></strong></div></td>
                          <td style="color:white;"><div align="left"><strong><?php echo $MinQualification;?></strong></div></td>
                            <td style="color:white;"><div align="left"><strong><?php echo $Description;?></strong></div></td>
                      
                            <tr>
                             <td>&nbsp;</td>
                             <td style="color:white;"><a href="Apply.php?JobId=<?php echo $row_Recordset2['JobId'];?>"><strong style="color:white;">Apply For Job</strong></a></td>
                           </tr>
                        </table>
                        <?php } while ($row_Recordset2 = mysqli_fetch_assoc($Recordset2));
						  
						  ?>
                      <?php

// Retrieve Number of records returned
$records = mysqli_num_rows($result);
?>
                      <tr>
                        <td colspan="6"><div align="left"><?php echo "Total of ".$records." Records"; ?> </div></td>
                      </tr>
                      <?php
// Close the connection
mysqli_close($con);
?>
                    </table></td>
                  </tr>
                </table>
               

                <p>&nbsp;</p>
          </div>
            <hr class="noscreen" />
            
        </div>
        <script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
//-->
</script>
</body>
<footer style="color:black;" id="copyright">
    
    
          
    <center><a href="terms.php">Terms</a></center>
    <center><a href="privacy.php">Privacy</a></center>
    <center>Copyright &copy; JointlyIn 2022</center>

<p></p>

<center>All rights reserved</centre>

<nav aria-label="footer" id="copyright">

<h3 id="copyright"></h3>
</nav>
</footer>
</html>