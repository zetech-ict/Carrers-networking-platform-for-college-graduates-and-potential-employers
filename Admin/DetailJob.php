<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="cs" />
    <meta name="robots" content="all,follow" />

    <meta name="author" content="All: ... [Nazev webu - www.url.cz]; e-mail: info@url.cz" />
    <meta name="copyright" content="Design/Code: Vit Dlouhy [Nuvio - www.nuvio.cz]; e-mail: vit.dlouhy@nuvio.cz" />
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
    <td style="font-size:200%;"><a id="menu" data-ga-click="Header, click, Nav menu - item:dashboard:user" aria-label="Dashboard" data-turbo="false" href="index.php">Home</a></td>
    <td style="font-size:200%;"><a href="User.php">Administrative Users</a></td>
    <td style="font-size:200%;"><a href="ManageEmployer.php">Employers</a></td>
    <td style="font-size:200%;"><a href="ManageGraduate.php">Graduates</a></td>
    <td style="font-size:200%;"><a href="endlog.php">Log out</a></td>
    </tr>
    </table>
    </nav>
    
    <p></p>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <p></p>
<h2><span><a href="#">Welcome To Control Panel</a></span></h2>


                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                $ID = $_GET['JobId'];
                                // Establish Connection with Database
                                $con = mysqli_connect("localhost", "root", "", "job");
                                // Specify the query to execute
                                $sql = "select * from JobSeeker_Reg where JobSeekId='" . $ID . "'  ";
                                // Execute query
                                $result = mysqli_query($con,$sql);
                                // Loop through each records
                                $row = mysqli_fetch_array($result)
                                ?>
                                <table width="100%" border="1" cellspacing="2" cellpadding="2">
                                    <tr>
                                        <td>Id:</td>
                                        <td><?php echo $row['JobSeekId']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Name:</td>
                                        <td><?php echo $row['JobSeekerName']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Address:</td>
                                        <td><?php echo $row['Address']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>City:</td>
                                        <td><?php echo $row['City']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Email:</td>
                                        <td><?php echo $row['Email']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Mobile:</td>
                                        <td><?php echo $row['Mobile']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Highest Qualification:</td>
                                        <td><?php echo $row['Qualification']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Gender:</td>
                                        <td><?php echo $row['Gender']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Birth Date:</td>
                                        <td><?php echo $row['BirthDate']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Resume:</td>
                                        <td><a href="../upload/<?php echo $row['Resume']; ?>" target="_blank">View</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong><a href="ApproveGraduate.php?JobId=<?php echo $row['JobSeekId']; ?>">Approve Graduate</a></strong></td>
                                        <td></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                    </body>
</html>