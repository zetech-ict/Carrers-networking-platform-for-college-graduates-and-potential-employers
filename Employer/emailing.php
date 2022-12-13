<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="cs" />
    <meta name="robots" content="all,follow" />

    <meta name="author" content="All: ... [Nazev webu - www.url.cz]; e-mail: info@url.cz" />
    <meta name="copyright" content="Design/Code: Vit Dlouhy [Nuvio - www.nuvio.cz]; e-mail: vit.dlouhy@nuvio.cz" />
    <title>JointlyIn</title>

    </button>
    </div>
	<style>
body{
	font-family:Arial;
	}
*{
	box-sizing:border-box;
	}
form.example input[type=text] {
	padding:9px;
	font-size:10px;
	border:0.2px solid grey;
	float:left;
	width:10%;
	background:white;
	}
form.js-site-search-form button {
	padding:10px;
	font-size:17px;
	border:1px solid grey;
	float:left;
	width:4;
	background:white;
	color:black;
	border-left:none;
	cursor:pointer;
	}
form.js-site-search-form button:hover {
	background:beige;
	}
	</style>
<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <script src="../SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
    <link href="../SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />

</head>

<body style="background-color:#000039">

<header id="header" class="jointlyin">
<div class="head content"></div>
<div class="head content-box inner"></div>
<div class="head-logo"></div>

<a href="index.php"><img src="jointlyin.png" alt="" title="" width="200" height="50">
          </a>
</header>
<nav id="menu">
    <table cellspacing="5" cellpadding="5"> 
    <tr>
    <td style="font-size:200%;"><a id="menu" data-ga-click="Header, click, Nav menu - item:dashboard:user" aria-label="Dashboard" data-turbo="false" href="index.php">Home</a></td>
    <td style="font-size:200%;"><a href="signin.php">Sign In</a></td>
    <td style="font-size:200%;"><a href="signup.php">Sign Up</a></td>
    <td style="font-size:200%;"><a href="contact.php">Contact Us</a></td>
    </tr>
    </table>
    </nav>

<body style="background-color:#000039">

<a class="btn" a href="JointlyIn.html" id="back">Back Home</a>
<form class="form-signin" method="POST">

<div>
                <h2><span><a href="">Feedback </a></span></h2>
               

                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td bgcolor=""><strong>Give Your Feedback</strong></td>
                  </tr>
                  <tr>
                    <td><form method="post" action="InsertFeedback.php">
                      <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td>Feedback:</td>
                          <td><span id="sprytextarea1">
                            <label>
                            <textarea name="txtFeedback" id="txtFeedback" cols="35" rows="5"></textarea>
                            </label>
                          <span class="textareaRequiredMsg"></span></span></td>
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
                </table>
                <script type="text/javascript">
<!--
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
//-->
</script>
</body>
</html>
