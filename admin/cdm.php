<!DOCTYPE HTML>
<html>
<head>

<title>BSVB | Credit Debit Money</title>

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
input[type=text] select {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 80%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  box-shadow: 0 9px #999;
}
input[type=submit]:hover {
    background-color: #45a049;
	box-shadow: 0 5px #666;
  transform: translateY(4px);
  }
</style>
		 
		 <?php
						
		echo '<form name="xyz"  method="post">
		<table width="100%" border="2" cellpadding="10" cellspacing="10">
  <tbody>
  
 <tr>
  <td>
  <center><b>Select</b></center>
  </td>
  
  <td>
  <center><b> Customer Name </b></center>
  </td>
  
  <td>
   <center><b>Account Number </b></center>
  </td>
  
  <td>
  <center><b> Account Balance </b></center>
  </td>
  
  </tr>';			
  
$b=mysql_query("select * from account");				
while ($row1 = mysql_fetch_array($b)) {
	
	echo '<tr>
	
	<td>
	
	
	
	<center><input type="radio" name="s"> </center>                            
	</td>
	
	
	<td><center>
	'.$row1['C_name'].'</center></td>
	
	<td><center>
	'.$row1['Acc_no'].'</center></td>
	
	<td><center>
	Rs.'.$row1['Acc_bal'].'</center></td></tr>';
}
echo '</tbody></table>

<br><br>

<table width="100%" cellpadding="10" cellspacing="10"><tbody>
<tr>
<td>
 <label for="name1"> Credit Money :</label>  <input type="text" name="t1" maxlength="200"/>
</td>
<td>
 <label for="name2"> Debit Money :</label>  <input type="text" name="t2" maxlength="200"/>
</td>

</tr>
</tbody></table>

<br><br>

<table width="100%" cellpadding="10" cellspacing="10"><tbody>

<tr>

<td>
<center><INPUT TYPE="SUBMIT" NAME ="B1" VALUE="Credit"></center></td>

<td>
<center><INPUT TYPE="SUBMIT" NAME ="B2" VALUE="Debit"></center>
</td>

</tr>

</tbody></table> 

</form> ';



if(isset($_POST['s'])) {
$c= $_POST['s'];
}



$b=mysql_query("select * from account");				
while ($row1 = mysql_fetch_array($b)) {

	$bal=$row1['Acc_bal'];
	
if(isset($_POST['B1'])&& isset($_POST['t1']))
{
    
	$credit = $_POST['t1'];
	
$money= $bal+$credit;
$query = mysql_query("UPDATE account SET Acc_bal='$money'")or die("" . mysql_error());

if($query)
{
	
print '<script type="text/javascript">'; 
print 'alert("Balance Successfully Credited to the Account")'; 
print '</script>'; 
}
else
{
print '<script type="text/javascript">'; 
print 'alert("Balance not Credited Successfully")'; 
print '</script>'; 
}

}

else if(isset($_POST['B2'])&& isset($_POST['t2']))
{
	$debit=$_POST['t2'];
	
$money= $bal-$debit;	
$query = mysql_query("UPDATE account SET Acc_bal='$money'")or die("" . mysql_error());	

if($query)
{
	
print '<script type="text/javascript">'; 
print 'alert("Balance Successfully Debited to the Account")'; 
print '</script>'; 
}
else
{
print '<script type="text/javascript">'; 
print 'alert("Balance not Debited Successfully")'; 
print '</script>'; 
}
}
}


?>



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
