<?php
session_start();
if(isset($_SESSION['$UserName_emp'])){

} 
else{
		header('location:../index.php');
}
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
    <td style="font-size:200%;"><a href="Application.php">Applications</a></td>
    <td style="font-size:200%;"><a href="endlog.php">Log out</a></td>
    </tr>
    </table>
    </nav>
    
    <p></p>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <p></p>
    <div class="article">
                <h2><span style="color: #62e5e7;">Welcome to JointlyIn <?php echo $_SESSION['$UserName_emp'];?></a></span></h2>
                <div>
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td bgcolor="#A0B9F3"><strong>Create a Job</strong></td>
                  </tr>
                  <tr>
                    <td><form method="post" action="InsertJob.php">
                      <table width="100%" border="0" cellspacing="0" cellpadding="0">
                     
                      <tr>
                          <td><strong>Job Title:</strong></td>
                          <td><span id="sprytextfield1">
                            <label>
                            <input type="text" name="JobTitle"/>
                            </label>
                          <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                        </tr>
                        <tr>
                          <td><strong>Total Vacancy:</strong></td>
                          <td><span id="sprytextfield2">
                            <label>
                            <input type="number" name="txtTotal"/>
                            </label>
                          <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                        </tr>
                        <tr>
                          <td><strong>Qualification:</strong></td>
                          <td><input type name="cmbQual">
                            
                          </td>
                        </tr>
                        <tr>
                          <td><strong>Salary:</strong></td>
                          <td><label>
                            <input type="number" name="txtOther"/>
                          </label></td>
                        </tr>
                        <tr>
                          <td><strong>Description:</strong></td>
                          <td><span id="sprytextarea1">
                            <label>
                            <textarea name="txtDesc" cols="25" rows="3"></textarea>
                            </label>
                          <span class="textareaRequiredMsg">A value is required.</span></span></td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td><label>
                            <input type="submit" name="button" id="btn" value="Submit" />
                          </label></td>
                        </tr>
                      </table>
                        </form>
                    </td>
                  </tr>
                  <tr>
                    <td bgcolor="#A0B9F3"><strong>Created Job </strong></td>
                  </tr>
                  <tr>
                    <td><table width="100%" border="1" bordercolor="#1CB5F1" >
                      <tr>
                        <th height="32" bgcolor="#1CB5F1"><div align="left"><strong>Id</strong></div></th>
                        <th bgcolor="#1CB5F1"><div align="left"><strong>Job Title</strong></div></th>
                        <th bgcolor="#1CB5F1"><div align="left"><strong>Vacancy</strong></div></th>
                         <th bgcolor="#1CB5F1"><div align="left"><strong>Qualification</strong></div></th>
                          <th bgcolor="#1CB5F1"><div align="left"><strong>Description</strong></div></th>
                    
                        <th bgcolor="#1CB5F1"><div align="left">Delete</div></th>
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
                        <td><div align="left"><strong><?php echo $Id;?></strong></div></td>
                        <td><div align="left"><strong><?php echo $JobTitle;?></strong></div></td>
                        <td><div align="left"><strong><?php echo $Vacancy;?></strong></div></td>
                          <td><div align="left"><strong><?php echo $MinQualification;?></strong></div></td>
                            <td><div align="left"><strong><?php echo $Description;?></strong></div></td>
                      
                        <td><div align="left"><strong><a href="DeleteJob.php?JobId=<?php echo $Id;?>">Delete</a></strong></div></td>
                      </tr>
                      <?php
}
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