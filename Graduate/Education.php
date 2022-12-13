<?php
session_start();
if(isset($_SESSION['$UserName_job'])){
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
    <td style="font-size:200%;"><a href="endlog.php">Log out</a></td>
    </tr>
    </table>
    </nav>
    
    <p></p>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <p></p>
    
                <h2 style="color:white;">Welcome to JointlyIn</h2>
            <div>
                <h2><span style="color:white;">Education Qualification</span></h2>
               

              <table width="100%" border="1" cellspacing="2" cellpadding="2">
                  <tr>
                    <td bgcolor="#A0B9F3"><strong>Create Educational Profile</strong></td>
                  </tr>
                  <tr>
                    <td><form method="post" action="InsertEdu.php">
                      <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td><strong>Degree:</strong></td>
                          <td>
                          <input type="text" name="cmbQual" id="cmbQual">
                          
                          </td>
                        </tr>
                        <tr>
                          <td><strong>Other Degree:</strong></td>
                          <td><label>
                            <input type="text" name="txtOther" id="txtOther" />
                          </label></td>
                        </tr>
                        <tr>
                          <td><strong>University/Board Name:</strong></td>
                          <td><span id="sprytextfield1">
                            <label>
                            <input type="text" name="txtBoard" id="txtBoard" />
                            </label>
                          <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                        </tr>
                        <tr>
                          <td><strong>Graduation Year:</strong></td>
                          <td><label>
                            <select name="cmbYear" id="cmbYear">
                              <option>2018</option>
                              <option>2019</option>
                              <option>2020</option>
                              <option>2021</option>
                              <option>2022</option>

                            </select>
                          </label></td>
                        </tr>
                        <tr>
                          <td><strong>Percentage of Merit(%)</strong></td>
                          <td><span id="sprytextfield2">
                            <label>
                            <input type="text" name="txtPer" id="txtPer" />
                            </label>
                          <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td><label>
                            <input type="submit" name="button" id="button" value="Submit" />
                          </label></td>
                        </tr>
                      </table>
                                        </form>
                    </td>
                  </tr>
                  <tr>
                    <td bgcolor="#A0B9F3"><strong>Educational Profile</strong></td>
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
					  $ID=$_SESSION['ID'];
// Establish Connection with Database
$con = mysqli_connect("localhost","root","","job");

// Specify the query to execute
$sql = "select * from jobseeker_education where JobSeekId='".$ID."'";
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
                        <td style="color:white;"><div align="left" ><strong><?php echo $Degree;?></strong></div></td>
                        <td style="color:white;"><div align="left" ><strong><?php echo $Univ;?></strong></div></td>
                        <td style="color:white;"><div align="left" ><strong><?php echo $Passing;?></strong></div></td>
                         <td style="color:white;"><div align="left"><strong><?php echo $Per;?></strong></div></td>
                      </tr>
                      <?php
}
// Retrieve Number of records returned
$records = mysqli_num_rows($result);
?>
                      <tr>
                        <td colspan="4" style="color:white;"><div align="left" ><?php echo "Total ".$records." Records"; ?> </div></td>
                      </tr>
                      <?php
// Close the connection
mysqli_close($con);
?>
                    </table></td>
                  </tr>
                </table>
                <p>&nbsp;</p>

                <p class="btn-more box noprint">&nbsp;</p>
          </div> <!-- /article -->

            <hr class="noscreen" />
            
        </div> <!-- /content -->


<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
//-->
</script>
</body>
<footer style="color:black;" id="copyright">
    
    <center>Copyright &copy; JointlyIn 2022</center>
    
    <p></p>
    
    <center>All rights reserved</centre>
    
        <nav aria-label="footer" id="copyright">
        
          <h3 id="copyright"></h3>
          
              <li class="footer"><a href="terms.html">Terms</a></li>
              <li class="footer"><a href="privacy.html">Privacy</a></li>
              <li class="footer"><a href="contact.html">Contact</a></li>
              <li><a href="about.html">About</a></li>
              
        </nav>
    </footer>
</html>
