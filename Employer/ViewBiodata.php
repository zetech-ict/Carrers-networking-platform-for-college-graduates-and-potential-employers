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
    </nav><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td bgcolor="#A0B9F3"><strong>Personal Information</strong></td>
                  </tr>
                  <tr>
                    <td>
                    <?php
$ID=$_GET['JobSeekId'];
// Establish Connection with Database
$con = mysqli_connect("localhost","root","","job");
// Select Database
//mysqli_select_db("job", $con);
// Specify the query to execute
$sql = "select * from JobSeeker_Reg where JobSeekId='".$ID."'  ";
// Execute query
$result = mysqli_query($con,$sql);
// Loop through each records 
$row = mysqli_fetch_array($result)
?>
                <table width="100%" border="1" cellspacing="2" cellpadding="2">
                  <tr>
                    <td><strong>Email:</strong></td>
                    <td><?php echo $row['Email'];?></td>
                  </tr>
                  
                  <tr>
                    <td><strong>Highest Qualification:</strong></td>
                    <td><?php echo $row['Qualification'];?></td>
                  </tr>
                  <tr>
                    <td><strong>Gender:</strong></td>
                    <td><?php echo $row['Gender'];?></td>
                  </tr>
                  <tr>
                    <td><strong>Birth Date:</strong></td>
                    <td><?php echo $row['BirthDate'];?></td>
                  </tr>
                  <tr>
                    <td><strong>Resume:</strong></td>
                    <td><a href="../upload/<?php echo $row['Resume'];?>" target="_blank"><strong>View</strong></a></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                </table>
                    </td>
                  </tr>
                  <tr>
                    <td bgcolor="#A0B9F3"><strong>Educational Qualification</strong></td>
                  </tr>
                  <tr>
                    <td><table width="100%" border="1" cellpadding="1" cellspacing="2" bordercolor="#006699" >
                      <tr>
                        <th height="32" bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Degree</strong></div></th>
                        <th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>University</strong></div></th>
                        <th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Passing Year</strong></div></th>
                        <th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Percentage</strong></div></th>
                      </tr>
                      <?php
					  $ID=$_GET['JobSeekId'];
// Establish Connection with Database
$con = mysqli_connect("localhost","root","","job");
// Select Database
//mysql_select_db("job", $con);
// Specify the query to execute
$sql = "select * from JobSeeker_Education where JobSeekId='".$ID."'";
// Execute query
$result = mysqli_query($con,$sql);
// Loop through each records 
while($row = mysqli_fetch_array($result))
{
$Degree=$row['Degree'];
$Univ=$row['University'];
$Passing=$row['PassingYear'];
$Per=$row['Percentage'];
?>
                      <tr>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Degree;?></strong></div></td>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Univ;?></strong></div></td>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Passing;?></strong></div></td>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Per;?></strong></div></td>
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
                <?php
				$Status=$_GET['Status'];
				if($Status=="Apply")
				{
				?>
                <form id="form1" method="post" action="CallLatter.php?JobId=<?php echo $_GET['JobId'] ;?>&JobSeekId=<?php echo $_GET['JobSeekId'] ;?>&AppId=<?php echo $_GET['AppId'] ;?>">
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td><strong>Call Latter Description:</strong></td>
<td><span id="sprytextarea1">
                        <label>
                        <textarea name="txtDesc" id="txtDesc" cols="35" rows="3"></textarea>
                        </label>
                      <span class="textareaRequiredMsg">A value is required.</span></span></td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td><label>
                        <input type="submit" name="button" id="button" value="Submit" />
                      </label></td>
                      <td>&nbsp;</td>
                    </tr>
                  </table>
              </form>
              <?php
			  }
			  ?>
                <p align="center"><a href="Application.php"><strong>Back</strong></a></p>

              <p class="btn-more box noprint">&nbsp;</p>
          </div> <!-- /article -->

            <hr class="noscreen" />
            
        </div>
        <script type="text/javascript">
<!--
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
//-->
</script>
</body>
</html>