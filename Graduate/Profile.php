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
    
                <h2 style="color:white;">Welcome to JointlyIn, You can <a href="Education.php">ADD EDUCATION LEVELS</a></h2>
               
<?php
$ID=$_SESSION['ID'];
// Establish Connection with Database
$con = mysqli_connect("localhost","root","","job");
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
                    <td style="color:white;"><?php echo $row['Email'];?></td>
                  </tr>
                  <tr>
                    <td><strong>Username:</strong></td>
                    <td style="color:white;"><?php echo $row['UserName'];?></td>
                  </tr>
                  <tr>
                    <td><strong> Upload Resume:</strong></td>
                    <td><a href="../upload/<?php echo $row['Resume'];?>" target="_blank"><strong>View</strong></a></td>
                  </tr>
                  </table>
                <div>
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