<?php
session_start();
?>
<!DOCTYPE html PUBLIC "BANGALORE SILICON VALLEY BANK">
<html>
<head>

<title>BSVB | Admin Login Pannel</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />



<!-- loading Symbol Start -->

<style>
/* Center the loader */
#loader {
  position: absolute;
  left: 50%;
  top: 50%;
  z-index: 1;
  width: 150px;
  height: 150px;
  margin: -75px 0 0 -75px;
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #000;
  border-left:16px solid #3498db;
  border-right:16px solid #3498db;
  border-bottom:16px solid #000;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 }
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom {
  from{ bottom:-100px; opacity:0 }
  to{ bottom:0; opacity:1 }
}

#myDiv {
  display: none;
  text-align: center;
}
</style>

<script>
var myVar;

function myFunction() {
    myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>


<!-- loading Symbol END -->








 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 

<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!--- webfonts--->  
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</head>

<body onload="myFunction()" style="margin:0;" id="login">


<div id="loader"></div>


<?php
include("database.php");
extract($_POST);
if(isset($submit))
{
	$rs=mysql_query("select * from admin where A_name='$loginid' and A_pass='$pass'");
	if(mysql_num_rows($rs)<1)
	{
		$found="N";
	}
	else
	{
		$_SESSION['A_name']=$loginid;
	}
}
if (isset($_SESSION['A_name']))
{
header("Location: alogin.php");

		exit;
}
?>

<div style="display:none;" id="myDiv" class="animate-bottom">
  <div class="login-logo">
    <a href="index.html"><img src="images/logo1.png" width="300px" height="160px"/></a>
  </div>
  <h2 class="form-heading">login</h2>
  <div class="app-cam">
	  <form name="login" method="post">
		<input type="text" id="loginid2" name= "loginid" class="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
		<input type="password" name="pass" id="pass2" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
		<div class="submit"><input type="submit"  id="submit" name="submit" value="Login"></div>
		<ul class="new">
			<li class="new_left"><p><a href="#">Forgot Password ?</a></p></li>
             <li>  
               <?php
		  if(isset($found))
		  {
		  	echo "Invalid Username or Password";
		  }
		  ?>
            </li>
		
		</ul>
	</form>
  </div>
  </div>
</body>
</html>
