<!DOCTYPE HTML>
<html>
<head>

<title>BSVB | Admin Profile</title>

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
		
 <?php						

$name=$_SESSION['A_name'];
$rs=mysql_query("select * from admin where A_name='$name'");
while ($row = mysql_fetch_array($rs)) {

	$img = $row['A_pic'];
echo '<center><img src="data:image/jpeg;base64,'.base64_encode ( $img ).'"/><br><br>'	;
echo $row['A_name'],'<br>' . $row['A_phone'],'<br>' .$row['A_email'],'<br>' .$row['A_add'],'</center>';
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
