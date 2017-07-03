<!DOCTYPE HTML>
<html>
<head>

<title>BSVB | Client Profile</title>

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
                                    <a  href="cdm.php">Credit/Debit Client's Money</a>
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
        
        <style>
.button {
    position: relative;
    background-color: #4CAF50;
    border: none;
    font-size: 18px;
    color: #FFFFFF;
    padding: 5px;
    width: 100px;
    text-align: center;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    text-decoration: none;
    overflow: hidden;
    cursor: pointer;
}

.button:after {
    content: "";
    background: #90EE90;
    display: block;
    position: absolute;
    padding-top: 300%;
    padding-left: 350%;
    margin-left: -20px!important;
    margin-top: -120%;
    opacity: 0;
    transition: all 0.8s
}

.button:active:after {
    padding: 0;
    margin: 0;
    opacity: 1;
    transition: 0s
}
</style>
        
        
        <div id="page-wrapper">
        <div class="graphs">
     	<div class="col_1">
		
 <?php						


 $a=mysql_query("select * from account");
 echo' <table width="100%" border="2" cellpadding="10" cellspacing="10">
  <tbody>
  
 <tr>
  <td>
  <center><b> Customer Photo </b></center>
  </td>
  
  <td>
  <center><b> Customer Name </b></center>
  </td>
  
  <td>
  <center><b> Phone </b></center>
  </td>
  
  <td>
   <center><b>Email </b></center>
  </td>
  
  <td>
   <center><b>Account Number </b></center>
  </td>
  
  <td>
  <center><b> Account Balance </b></center>
  </td>
  
  <td>
  <center><b>Transaction</b></center>
  </td> 
  
  </tr>';
while ($row = mysql_fetch_array($a)) {
	$img = $row['C_pic'];
echo '<tr>
  
  <td>
 <center> <img src="data:image/jpeg;base64,'.base64_encode ( $img ).'"/></center></td>'	;
echo  '<td> <center>'.$row['C_name'],'</center></td><td> <center>' . $row['C_phone'],'</center></td><td> <center>' .$row['C_email'],'</center></td><td> <center>'.$row['Acc_no'],'</center></td><td> <center>Rs.' .$row['Acc_bal'],'</center></td><td> <center>';
echo "<a href='cdm.php'><button class='button'>Credit/<br>Debit</button></a></center></td>";
echo'</tr>';
}
echo'</tbody></table>';
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
