<?php
session_start();
if(isset($_SESSION['$UserName'])){

} 
else{
		header('location:../index.php');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>
  <title>JointlyIn</title>
<link rel="stylesheet" type="text/css" href="index.css">
<script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
    <link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
</head>

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
    <td style="font-size:200%;"><a id="menu" data-ga-click="Header, click, Nav menu - item:dashboard:user" aria-label="Dashboard" data-turbo="false" href="index.php">Home</a></td>
    <td style="font-size:200%;"><a href="User.php">Administrative Users</a></td>
    <td style="font-size:200%;"><a href="ManageEmployer.php">Employers</a></td>
    <td style="font-size:200%;"><a href="ManageGraduate.php">Graduates</a></td>
    <td style="font-size:200%;"><a href="endlog.php">Log out</a></td>
    </tr>
    </table>
    </nav>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="27" bgcolor="#A0B9F3"><strong>Create Employer</strong></td>
        </tr>
        <tr>
          <td height="26"><form method="post" action="InsertEmp.php">
            <table width="100%" height="95" border="0" cellpadding="0" cellspacing="0">
            <tr>
                <td height="35"><span style="color:white;">Email:</span></td>
                <td><span id="sprytextfield3">
                  <label>
                  <input type="text" name="txtEmail"/>
                  </label>
                  <span class="textfieldRequiredMsg">A value is required.</span></span></td>
              </tr>
            <tr>
                <td><span style="color:white;">User Name:</span></td>
                <td><span id="sprytextfield1">
                  <label>
                  <input type="text" name="txtUserName"/>
                  </label>
                  <span class="textfieldRequiredMsg">A value is required.</span></span></td>
              </tr>
              <tr>
                <td><span style="color:white;">Password:</span></td>
                <td><span id="sprytextfield2">
                  <label>
                  <input type="password" name="txtPassword"/>
                  </label>
                  <span class="textfieldRequiredMsg">A value is required.</span></span></td>
              </tr>
              <tr>
                
                <td><label>
                <center><input type="submit" id="btn" value="Submit"/><center>
                </label></td>
              </tr>
            </table>
                    </form>            </td>
        </tr>
        <tr>
          <td height="25" bgcolor="#A0B9F3"><strong>Employers List</strong></td>
        </tr>
        <tr>
          <td>
          <table width="100%" border="1" bordercolor="#1CB5F1" >
<tr>
<th height="32" bgcolor="#1CB5F1"style="color:white;"><div align="left"><strong>Id</strong></div></th>
<th bgcolor="#1CB5F1" style="color:white;"><div align="left"><strong>Email</strong></div></th>
<th bgcolor="#1CB5F1" style="color:white;"><div align="left"><strong>UserName</strong></div></th>
<th bgcolor="#1CB5F1"><div align="left"><strong>Edit</strong></div></th>
<th bgcolor="#1CB5F1"><div align="left">Delete</div></th>
</tr>
<?php
// Establish Connection with Database
$con = mysqli_connect("localhost","root","","job");
// Specify the query to execute
$sql = "select * from employer_reg";
// Execute query
$result = mysqli_query($con,$sql);
// Loop through each records 
while($row = mysqli_fetch_array($result))
{
    $Id=$row['EmployerId'];
$Email=$row['Email'];
$UserName=$row['UserName'];

?>
<tr>
<td style="color:white;"><div align="left"><strong><?php echo $Id;?></strong></div></td>
<td style="color:white;"><div align="left"><strong><?php echo $Email;?></strong></div></td>
<td style="color:white;"><div align="left"><strong><?php echo $UserName;?></strong></div></td>
<td ><div align="left" ><strong><a href="EditEmployer.php?UserId=<?php echo $Id;?>">Edit</a></strong></div></td>
<td ><div align="left" ><strong><a href="DeleteEmployer.php?UserId=<?php echo $Id;?>">Delete</a></strong></div></td>
</tr>
<?php
}
// Retrieve Number of records returned
$records = mysqli_num_rows($result);
?>
<tr>
<td colspan="4" style="color:white;" class="style3"><div align="left"><?php echo "Total of ".$records." Records"; ?> </div></td>
</tr>
<?php
// Close the connection
mysqli_close($con);
?>
</table>
          </td>
        </tr>
      </table>
      <script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
</script>
</body>
</html>
