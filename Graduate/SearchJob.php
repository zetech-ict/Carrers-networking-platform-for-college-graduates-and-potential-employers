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
    
    <p></p>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <p></p>
            <div class="article">
                <h2><span>Search Job</span></h2>
               

                <form id="form1" method="post" action="SearchJob.php">
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td><strong>Select Qualification:</strong></td>
                      <td><label>
                      <select name="cmbQual" id="cmbQual">
                        <?php
do {  
?>
                        <option value="<?php echo $row_Recordset1['MinQualification']?>"><?php echo $row_Recordset1['MinQualification']?></option>
                        <?php
} while ($row_Recordset1 = mysqli_fetch_assoc($Recordset1));
  $rows = mysqli_num_rows($Recordset1);
  if($rows > 0) {
      mysqli_data_seek($Recordset1, 0);
	  $row_Recordset1 = mysqli_fetch_assoc($Recordset1);
  }
?>
                      </select>
                      </label></td>
                      <td><label></label></td>
                    </tr>
                    <tr>
                      <td><strong>Select Compnay Name:</strong></td>
                      <td><label>
                        <select name="cmbCompany" id="cmbCompany">
                          <?php
do {  
?>
                          <option value="<?php echo $row_Recordset4['CompanyName']?>"><?php echo $row_Recordset4['CompanyName']?></option>
                          <?php
} while ($row_Recordset4 = mysqli_fetch_assoc($Recordset4));
  $rows = mysqli_num_rows($Recordset4);
  if($rows > 0) {
      mysqli_data_seek($Recordset4, 0);
	  $row_Recordset4 = mysqli_fetch_assoc($Recordset4);
  }
?>
                        </select>
                      </label></td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td><strong>Select Area of Work:</strong></td>
                      <td><label>
                        <select name="cmbArea" id="cmbArea">
                          <?php
do {  
?>
                          <option value="<?php echo $row_Recordset5['JobTitle']?>"><?php echo $row_Recordset5['JobTitle']?></option>
                          <?php
} while ($row_Recordset5 = mysqli_fetch_assoc($Recordset5));
  $rows = mysqli_num_rows($Recordset5);
  if($rows > 0) {
      mysqli_data_seek($Recordset5, 0);
	  $row_Recordset5 = mysqli_fetch_assoc($Recordset5);
  }
?>
                      </select>
                      </label></td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td><input type="submit" name="button" id="button" value="Search" /></td>
                      <td>&nbsp;</td>
                    </tr>
                  </table>
              </form>
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="100%">&nbsp;
                     
                        <?php
						if ($totalRows_Recordset2!=0) 
						{
						do { ?>
                          <table width="100%" border="0" cellpadding="0" cellspacing="0">
                          <tr>
                          <td><strong>JobId</strong></td>
                          <td><strong><?php echo $row_Recordset2['JobId']; ?></strong></td>
                          </tr>
                          <tr>
                          <td><strong>CompanyName</strong></td>
                          <td><strong><?php echo $row_Recordset2['CompanyName']; ?></strong></td>
                          </tr>
                          <tr>
                          <td><strong>JobTitle</strong></td>
                          <td><strong><?php echo $row_Recordset2['JobTitle']; ?></strong></td>
                          </tr>
                          <tr>
                          <td><strong>Vacancy</strong></td>
                          <td><strong><?php echo $row_Recordset2['Vacancy']; ?></strong></td>
                          </tr>
                          <tr>
                          <td><strong>MinQualification</strong></td>
                           <td><strong><?php echo $row_Recordset2['MinQualification']; ?></strong></td>
                           </tr>
                           <tr>
                          <td><strong>Description</strong></td>
                          <td><strong><?php echo $row_Recordset2['Description']; ?></strong></td>
                        </tr>
                           <tr>
                             <td>&nbsp;</td>
                             <td><a href="Apply.php?JobId=<?php echo $row_Recordset2['JobId'];?>"><strong>Apply For Job</strong></a></td>
                           </tr>
                        </table>
                        <?php } while ($row_Recordset2 = mysqli_fetch_assoc($Recordset2));
						  
						  ?>
                      </table>
                      <?php
					  }
                      ?></td>
                  </tr>
                </table>
                
                      <?php
// Establish Connection with Database
$con = mysqli_connect("localhost","root","","job");

// Specify the query to execute
$sql = "SELECT job_master.JobId, job_master.CompanyName, job_master.JobTitle, application_master.Status, application_master.JobSeekId, application_master.Description
FROM application_master, job_master
WHERE application_master.JobId=job_master.JobId and application_master.JobSeekId='".$_SESSION['ID']."'";
// Execute query
$result = mysqli_query($con,$sql);
// Loop through each records 
while($row = mysqli_fetch_array($result))
{
$CompanyName=$row['CompanyName'];
$JobTitle=$row['JobTitle'];
$Status=$row['Status'];
$Description=$row['Description'];
?>
                      <tr>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $CompanyName;?></strong></div></td>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $JobTitle;?></strong></div></td>
                         <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Status;?></strong></div></td>
                         <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Description;?></strong></div></td>
                      </tr>
                      <?php
}
// Retrieve Number of records returned
$records = mysqli_num_rows($result);
?>
                      <?php
// Close the connection
mysqli_close($con);
?>
                    </table></td>
                  </tr>
                </table>

          </div> <!-- /article -->
        </div>

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
<?php
mysqli_free_result($Recordset1);

mysqli_free_result($Recordset3);

mysqli_free_result($Recordset4);

mysqli_free_result($Recordset5);

mysqli_free_result($Recordset2);
?>
