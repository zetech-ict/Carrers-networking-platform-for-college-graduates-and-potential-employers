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
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td bgcolor="#A0B9F3"><strong>Applicants</strong></td>
                  </tr>
                  <tr>
                    <td><table width="100%" border="1" bordercolor="#1CB5F1" >
                      <tr>
                        <th height="32" bgcolor="#1CB5F1"><div align="left"><strong>Email</strong></div></th>
                        <th bgcolor="#1CB5F1"><div align="left"><strong>User Name</strong></div></th>
                       
                        <th bgcolor="#1CB5F1"><div align="left">Send Call letter</div></th>
                      </tr>
                      <?php
$ID=$_SESSION['ID'];
// Establish Connection with Database
$con = mysqli_connect("localhost","root","","job");
// Specify the query to execute
$sql = "select * from JobSeeker_Reg where JobSeekId='".$ID."'  ";
// Execute query
$result = mysqli_query($con,$sql);
// Loop through each records 
while($row = mysqli_fetch_array($result))
{
  $Email =$row['Email'];
  $UserName=$row['UserName'];

?>
<tr>
                    <td><strong>Email:</strong></td>
                    <td style="color:white;"><?php echo $row['Email'];?></td>
                  </tr>
                  <tr>
                    <td><strong>Username:</strong></td>
                    <td style="color:white;"><?php echo $row['UserName'];?></td>
                  </tr>
                  <td><div align="left"><strong></strong><a href="CallLetterSend.php?JobSeekId=<?php echo $JobSeekId; ?>&AppId=<?php echo $Id;?>&JobId=<?php echo $Title;?>&Status=<?php echo $Status;?>">SEND INTERVIEW</a></div></td>

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
               
                  
                  <div id="top" class="noprint"><p><span class="noscreen"></span> <a href="#header" title="Back to top">Back to top<span></span></a></p></div>
            <hr/>
        <div class="icons">
              <style>
                        .heading-bg-color-0b13d8cf-04fb-462e-99e5-81591dcb81cc{
                             background-color:  !important;
                        }
              </style>
              
              <div class="container" id="layout-container-uid0f13">          
              <div class="socialfollow">
    <h3><section id="social follow" style="color:tan;">Follow JointlyIn<ul class="list-inline d-inline-block align-middle mb-0"></h3>
                 <ul class="fb">
                    <a class="d-inline-block" href="https://www.facebook.com/jointlyin" target="_blank" aria-label="Follow JointlyIn on Facebook, opens in a new tab" data-bi-ecn="Facebook" data-bi-bhvr="126" data-bi-cn="Facebook" data-bi-socchn="Facebook" data-bi-ct="Social Button" data-bi-pa="body" data-bi-compnm="Social Follow - horizontal">
                        <img src="https://cdn-dynmedia-1.microsoft.com/is/image/microsoftcorp/Facebook%202x?scl=1" alt="Facebook" title="Facebook" width="32" height="32">
                    </a>
                 </ul>
                 <ul class="tw">
                    <a class="d-inline-block" href="https://twitter.com/jointlyin" target="_blank" aria-label="Follow JointlyIn on Twitter, opens in a new tab" data-bi-ecn="Twitter" data-bi-bhvr="126" data-bi-cn="Twitter" data-bi-socchn="Twitter" data-bi-ct="Social Button" data-bi-pa="body" data-bi-compnm="Social Follow - horizontal">
                        <img src="https://cdn-dynmedia-1.microsoft.com/is/image/microsoftcorp/Twitter%202x?scl=1" alt="Twitter" title="Twitter" width="32" height="32">
                    </a>
                 </ul>
                 <ul class="in">
                    <a class="d-inline-block" href="https://www.linkedin.com/company/microsoft" target="_blank" aria-label="Follow JointlyIn on Linkedin, opens in a new tab" data-bi-ecn="LinkedIn" data-bi-bhvr="126" data-bi-cn="LinkedIn" data-bi-socchn="LinkedIn" data-bi-ct="Social Button" data-bi-pa="body" data-bi-compnm="Social Follow - horizontal">
                        <img src="https://cdn-dynmedia-1.microsoft.com/is/image/microsoftcorp/Linkedin%202x?scl=1" alt="LinkedIn" title="LinkedIn" width="32" height="32">
                    </a>
                 </ul>
              </ul>
            <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "Organization",
                "name": "JointlyIn",    
                "sameAs":["https://www.facebook.com/jointlyin","https://twitter.com/jointlyin","https://www.linkedin.com/company/jointlyin"]
            };
            </script>
        </section>    
    </div>
    </div>
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