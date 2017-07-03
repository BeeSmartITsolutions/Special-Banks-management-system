<!DOCTYPE HTML>
<html>
<head>

<title>BSVB | Create New Account</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />



 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Nav CSS -->
<link href="css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
</head>



 <script type="text/javascript">
function validateForm()
{
var a=document.forms["reg"]["pic"].value;
var b=document.forms["reg"]["sign"].value;
var c=document.forms["reg"]["name"].value;
var d=document.forms["reg"]["add"].value;
var e=document.forms["reg"]["phno"].value;
var f=document.forms["reg"]["email"].value;
var g=document.forms["reg"]["pass"].value;
var h=document.forms["reg"]["accno"].value;
var i=document.forms["reg"]["accbal"].value;

if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (d==null || d=="") && (e==null || e=="") && (f==null || f=="")&& (g==null || g=="")&& (h==null || h=="")&& (i==null || i==""))
  {
  alert("All Field must be filled out");
  return false;
  }
if (a==null || a=="")
  {
  alert("Customer Photograph is not uploaded");
  return false;
  }
if (b==null || b=="")
  {
  alert("Customer Signature is not uploaded");
  return false;
  }
if (c==null || c=="")
  {
  alert("Customer Name must be filled out");
  return false;
  }
if (d==null || d=="")
  {
  alert("Customer Address must be filled out");
  return false;
  }
if (e==null || e=="")
  {
  alert("Customers Phone Number must be filled out");
  return false;
  }
if (f==null || f=="")
  {
  alert("Customer Email ID must be filled out");
  return false;
  }
if (g==null || g=="")
  {
  alert("Password must be filled out");
  return false;
  }
if (h==null || h=="")
  {
  alert("Account Number must be filled out");
  return false;
  }
if (i==null || i=="")
  {
  alert("Account Balance must be filled out");
  return false;
  }

}
</script>   
    
</head>
<?php

if(isset($_POST['submit']))
{
	require 'database.php';
$pic=$_POST['pic'];
$sign=$_POST['sign'];
$name=$_POST['name'];
$address=$_POST['add'];
$phone=$_POST['phno'];
$email=$_POST['email'];
$password=$_POST['pass'];
$accdate='';
$accno=$_POST['accno'];
$accbal=$_POST['accbal'];


$query = mysql_query("INSERT INTO account VALUES('$pic','$sign', '$name', '$address', '$phone', '$email', '$password', '$accdate', '$accno','$accbal')")or die("" . mysql_error());
if($query)
{
	
print '<script type="text/javascript">'; 
print 'alert("Account Created Successfully")'; 
print '</script>'; 
}
else
{
print '<script type="text/javascript">'; 
print 'alert("Account Creation Failed")'; 
print '</script>'; 
}

}
?>

<body>

<?php
include("database.php");
?>

<div id="wrapper">
     <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            
            <!--  NAVBAR HEADER START  -->
            
            <div class="navbar-header">
                <a class="navbar-brand" href="alogin.php">          Bangalore Silicon Valley Bank</a>
            </div>
            
            <!--  NAVBAR HEADER END  -->
            
            
            <ul class="nav navbar-nav navbar-right">
						
			    <li class="dropdown">
	        		
                    <?php
						session_start();
$name=$_SESSION['A_name'];
$rs=mysql_query("select * from admin where A_name='$name'");
while ($row = mysql_fetch_array($rs)) {

	$img = $row['A_pic'];
echo '<a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"> <img src="data:image/jpeg;base64,'.base64_encode ( $img ).'"/> </a>'	;
}

					?>
             
	        		<ul class="dropdown-menu">
				<li class="dropdown-menu-header text-center">
							<strong>Settings</strong>
						</li>
						<li class="m_2"><a href="profile.php"><i class="fa fa-user"></i> Profile</a></li>
						<li class="m_2"><a href="#"><i class="fa fa-wrench"></i> Settings</a></li>
						<li class="divider"></li>
						<li class="m_2"><a href="#"><i class="fa fa-shield"></i> Lock Profile</a></li>
						<li class="m_2"><a href="signout.php"><i class="fa fa-lock"></i> Logout</a></li>	
	        		</ul>
	      		</li>
			</ul>
			<form class="navbar-form navbar-right">
			</form>
            <div class="navbar-default sidebar" role="navigation">     
      
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
      
                            <a href="alogin.php"><i class="fa fa-dashboard fa-fw nav_icon"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="cna.php"><i class="fa fa-indent nav_icon"></i>Create New Account</a>
                        </li>
                        
                        <li>
                            <a href="#"><i class="fa fa-laptop nav_icon"></i>Manage Account<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="cp.php">Client Profile</a>
                                </li>
                                <li>
                                    <a href="cdm.php">Credit/Debit Client's Money</a>
                                </li>
       
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-envelope nav_icon"></i>Mailbox</span><span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="inbox.html">Inbox</a>
                                </li>
                                <li>
                                    <a href="compose.html">Compose email</a>
                                </li>
                            </ul>
                           </li>
                      <li>
                            <a href="a&c.php"><i class="fa fa-flask nav_icon"></i>Awards and Certificates</a>
                       </li>
                       
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
             </div>
            <!-- /.navbar-static-side -->
        </nav>
        
        
        
        
        
        <div id="page-wrapper">
        <div class="graphs">
     	<div class="col_1">
<style>
input[type=text],input[type=password],input[type=email],input[type=tel],input[type=file], select {
    width: 90%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
	
  box-shadow: 0 9px #999;}

input[type=submit]:hover after{
    background-color: #45a049;
	
	box-shadow: 0 5px #666;
  transform: translateY(4px);

	
}
</style>		

       <form onsubmit="return validateForm()" method="post">
        <table width="100%" cellpadding="10" cellspacing="10">
  <tbody>
  
  <tr>
  
  <td>
  
  <label for="pic"> Client Photograph : </label>
  
 <input type="file" name="pic" value="choose file">
  
  
  </td>
   <td>
  
  <label for="sign"> Client Signature :</label>
<input type="file" name="sign" value="choose file">
  
  
  </td>
 
  </tr>
   
  
  <tr>
        <td>
 
     <label for="name"> Name (Dr./Mr./Mrs./Ms./Er.) :</label>  <input type="text" name="name" maxlength="200" size="66"/>
     
        </td>
        
              <td>
<label for="address"> Address :  </label> <br>     <input type="text" name="add" maxlength="500" size="42"/>

       </td>
 
        
        </tr>
        
        
<tr>
        <td>
<label for="phno"> Phone Number of Client : </label>              <input type="tel" name="phno" size="53" maxlength="10"/></td>
<td>
 <label for="email"> E-mail : </label>    <br>           <input type="email" name="email" maxlength="100" size="81" placeholder="abc@xyz.com"/>
       
 </td></tr>
                        
   

<tr>
        <td>
<label for="pass"> Password :</label>  <br>          <input type="password" name="pass" size="53" maxlength="50" placeholder="****************"/>
 
 </td>
       <td> 
        <label for="accno">Account Number of Client : </label>     <input type="tel" name="accno" size="53" maxlength="10"/>
 

 </td>
 
 </tr>
 <tr>
        <td>
 
 <label for="accbal"> Balance in the Account of Client : </label>          <input type="tel" name="accbal" size="53" maxlength="100" placeholder="Rs. xxxx.xxxx"/>
        
</td></tr></tbody></table>

        <table width="100%" cellpadding="10" cellspacing="10">
  <tbody>
  <tr>
        <td>
      <input name="submit" type="submit" value="Add Account"></td></tr>
        </tbody></table>
        </form>

 
 
 
        <div class="clearfix"> </div>
 
    	</div>
        
        </div>
       </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
