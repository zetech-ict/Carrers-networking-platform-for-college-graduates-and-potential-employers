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
</head>

<body>

                <div>
                    <h2><span>Welcome To Control Panel</a></span></h2>


                    <table width="100%" height="209" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td height="33" bgcolor="#A0B9F3"><span class="style10 style11">Edit Graduate</span></td>
                        </tr>
                        <tr>
                            <td><?php
                                $Id = $_GET['UserId'];
                                // Establish Connection with Database
                                $con = mysqli_connect("localhost", "root", "", "job");
                                // Specify the query to execute
                                $sql = "select * from jobseeker_reg where JobSeekId=" . $Id . "";
                                // Execute query
                                $result = mysqli_query($con,$sql);
                                // Loop through each records
                                while ($row = mysqli_fetch_array($result)) {
                                    $Id = $row['JobSeekId'];
                                    $Name = $row['UserName'];
                                    $Password = $row['Password'];
                                }
                                ?>
                                <form method="post" action="UpdateGraduate.php">
                                    <table width="100%" border="0">
                                        <tr>
                                            <td height="32"><span class="style8">User Id</span></td>
                                            <td><span id="sprytextfield1">
                                <label>
                                <input name="txtUserId" type="text" id="txtUserId" value="<?php echo $Id; ?>"/>
                                </label>
                                <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                                        </tr>
                                        <tr>
                                            <td height="36"><span class="style8">User Name:</span></td>
                                            <td><span id="sprytextfield2">
                                <label>
                                <input name="txtUserName" type="text" id="txtUserName" value="<?php echo $Name; ?>"/>
                                </label>
                                <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                                        </tr>
                                        <tr>
                                            <td height="36"><span class="style8">Password:</span></td>
                                            <td><span id="sprytextfield3">
                                <label>
                                <input name="txtPass" type="password" id="txtPass" value="<?php echo $Password; ?>"/>
                                </label>
                                <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><input type="submit" name="submit" value="Update Record"/></td>
                                        </tr>
                                    </table>
                                </form>
                                <?php
                                // Close the connection
                                mysqli_close($con);
                                ?>
                                <form method="post" action="UpdateGraduate.php">
                                    <table width="100%" border="0">
                                    </table>
                                </form>
                            </td>
                        </tr>
                    </table>
<script type="text/javascript">
    <!--
    var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
    var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
    //-->
</script>
</body>
</html>
