<?php
//session_start();
?>
<!DOCTYPE html PUBLIC "BANGALORE SILICON VALLEY BANK">
<html>

<title>BSVB | User Pannel</title>

<link href="style.css" rel="stylesheet" type="text/css">


<!-- SUB MENU BAR CSS START -->

<link href="submenu.css" rel="stylesheet" type="text/css">

<!-- SUB MENU BAR CSS END -->


<script src="jquery-1.11.0.min.js"></script>

	<script src="jquery-migrate-1.2.1.min.js"></script>

<!-- simple image slider css start-->

<style>
.mySlides {display:none;}
</style>

<!--simple image slider css end-->


<!-- SEARCH BUTTON CSS Start -->

<style>
input[type=text] {
    width: 200px;
    box-sizing: border-box;
    border: 5px solid #ccc;
    border-radius: 6px;
    font-size: 12px;
    background-color: white;
    background-image: images/search.png;
    background-position: 10px 10px;
    background-repeat: no-repeat;
    padding: 8px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
    width: 35%;
	
}
</style>
<!-- SEARCH BUTTON CSS END -->



<!--CUSTOMER LOGIN CSS-->

<style>
.loginform label {
	display: block;
	color: #999;
}
.cf:before,
.cf:after {
    content: ""; 
    display: table;
}

.cf:after {
    clear: both;
}
.cf {
    *zoom: 1;
}
:focus {
	outline: 0;
}
.loginform {
	width: 510px;
	margin: 10px auto;
	padding: 25px;
	background-color: rgba(250,250,250,0.5);
	border-radius: 5px;
    box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.2), 
    			inset 0px 1px 0px 0px rgba(250, 250, 250, 0.5);
    border: 1px solid rgba(0, 0, 0, 0.3);
}
.loginform ul {
	padding: 0;
	margin: 0;
}
.loginform li {
	display: inline;
	float: left;
}
.loginform input:not([type=submit]) {
	padding: 5px;
	margin-right: 20px;
	border: 1px solid rgba(0, 0, 0, 0.3);
	border-radius: 3px;
	box-shadow: inset 0px 1px 3px 0px rgba(0, 0, 0, 0.1), 
				0px 1px 0px 0px rgba(250, 250, 250, 0.5) ;
}
.loginform input[type=submit] {
	border: 1px solid rgba(0, 0, 0, 0.3);
	background: #64c8ef; /* Old browsers */
	background: -moz-linear-gradient(top,  #64c8ef 0%, #00a2e2 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#64c8ef), color-stop(100%,#00a2e2)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  #64c8ef 0%,#00a2e2 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  #64c8ef 0%,#00a2e2 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  #64c8ef 0%,#00a2e2 100%); /* IE10+ */
	background: linear-gradient(to bottom,  #64c8ef 0%,#00a2e2 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#64c8ef', endColorstr='#00a2e2',GradientType=0 ); /* IE6-9 */
	color: #fff;
	padding: 5px 35px;
	margin-right: 0;
	margin-top: 15px;
	border-radius: 13px;
	text-shadow: 1px 1px 0px rgba(0, 0, 0, 0.3);
}
</style>


<!--CUSTOMER LOGIN CSS CLOSE-->

</head>

<body background="5.jpg">
<?php

include("database.php");

?>
<div id="main_impwrapper">
<div class="wrapper_content">
<!-- TOP HEADER MENU BAR-->
<div class="menu"><ul>
    <li>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
    
    <a href="index.php">Home</a>

    </li>

    <li><a href="">About Us</a></li>
    <li><a href="">Tenders</a></li>
    <li><a href="">Career</a></li>
    <li><a href="">Photos</a></li>
    <li><a href="Contact_us.html">Contact Us</a></li>
    
</ul>
<form>
&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="text" name="search" placeholder="Search..">
</form>

</div>

<!-- TOP HEADER MENU BAR CLOSE-->



<!-- LOGO PART START -->
<table cellpadding="0" cellspacing="0" width="90%">
  <tbody >
    <tr >
          <td>    
<a href="index.php"><img src="images/logo1.jpg" height="130" width="260"/></a>
 
</td>   
       <td>
  
<?php
session_start();
$name=$_SESSION['C_email'];
$rs=mysql_query("select * from account where C_email='$name'");
while ($row = mysql_fetch_array($rs)) {
print  '<div class="loginform cf">
 <marquee><h3>WELCOME '. strtoupper($row['C_name'] ).'</h3></marquee>';
}

date_default_timezone_set("Asia/Calcutta");
echo "Today is " . date("Y-m-d") . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo "The time is " . date("h:i:s A") . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."<strong><a href='signout.php'>Signout</a></strong>";
echo "</div>";

?>    

</td>
      
    </tr>

</tbody></table>

<!-- LOGO PART END -->




<!-- MENU WITH IN MENU SCRIPT AND CSS -->





<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
<style>
.dropbtn {
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
    background-color: #333;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #000;
    min-width: 160px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px #f99000;
}

.dropdown-content a {
    color: #FFFFFF;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown a:hover {background-color: #f1f1f1}

.show {display:block;}
</style>



<!-- MENU WITH IN MENU SCRIPT AND CSS -->





<!-- TOP HEADER SUB MENU BAR-->




<div class="menu1"><ul>

    <li><a href="#">Personal Banking</a>
    
    <ul class="sub-menu" >
    
<li><a href="#">Savings Fund Account</a></li>
<li><a href="#">Current Account</a></li>
<li><a href="#">FD Schemes</a></li>
<li><a href="#">Credit Schemes</a></li>
<li><a href="#">Capital Gain Account Scheme-1988</a></li>
<li><a href="#">Doorstep Banking Services</a></li>
<li><a href="#">Cards</a></li>
<li><a href="#">Nomination Facilities</a></li>
<li><a href="#">Deceased Claim cases</a></li>

<li><a href="#">Centralised Banking Solution</a></li>

<li><a href="#">View Your Loan Application Status</a></li>

<li><a href="#">Time Frame for Disposal of Loan Proposals</a></li>

<li><a href="#">Time Norms for Sanctions of Loan Proposals of Retail Lending Schemes</a></li>

</ul>    

      </li>
    
    <li><a href="#">Social Banking</a>

    <ul class="sub-menu" >

<li><a href="#">Business Responsibility Report</a></li>
<li><a href="#">CSR Initiatives</a></li>
<li><a href="#">Financial Inclusion</a></li>
<li><a href="#">Priority Sector</a></li>

</ul>
    
    </li>

    <li><a href="#">MSME Banking</a>       
    </li>
        
    <li><a href="#">Agricultural Banking</a>
    <ul class="sub-menu" >
<li><a href="#">Agri Business Cell</a></li>
<li><a href="#">Farmers</a></li>
<li><a href="#">DebtWaiver</a></li>
</ul>
        
    </li>
      
    <li><a href="#">International Banking</a>
    <ul class="sub-menu" >
<li><a href="ro.html">Representative Office</a></li>
<li><a href="nri.html">NRI Desk</a></li>
<li onclick="myFunction()" class="dropbtn">Trade Finance Services</a>

<div id="myDropdown" class="dropdown-content">        
    <a href="es.html">Export Services</a>
    <a href="is.html">Import Services</a>
    <a href="cb.html">Correspondent Banking</a>
    <a href="os.html">Other Services</a>
 
</div>

</ul>

</li>
    
    <li><a href="#">Cooperate Banking</a>

    <ul class="sub-menu" >

<li><a href="dc.html">Delivery Channel</a></li>

    <li><a href="ei.html">Educational Institutions</a></li>

   <li><a href="entertain.html">Entertainment Industry</a></li>

<li><a href="hr.html">Hotels & Restaurants</a></li>

    <li><a href="bd.html">Builders & Developers</a></li>

    <li><a href="h.html">Hospitals</a></li>

</ul>
</li>    
    
    <li><a href="#">Other Services</a>
<ul class="sub-menu" >

<li><a href="ct.php">Check Transactions</a></li>
<li><a href="#openModal">Complaints</a></li>

<div id="openModal" class="modalDialog">
	<div>

		<a href="#close" title="Close" class="close">X</a>
		<h1><center>Complaint Section</center></h1>
		<form action="mail.php" method="POST" >
        
Name:  &nbsp;&nbsp; <input type="text1" name="name" id="name"><br><br>
Email: &nbsp;&nbsp;&nbsp;  <input type="text1" name="mail" id="mail"><br><br>
Subject: <input type="text1" name="subject" id="subject"><br><br>
<h4><p align="center">We are pleased to hear you Complaints :</p></h4> <textarea name="comment" id="comment" placeholder="Suggestions/comments here......"></textarea><br><br>

<input type="submit" value="Submit" width="90px">
</form>


	</div>
</div>


</ul>
</li>

</ul>

<!-- TOP HEADER SUB MENU BAR END-->




<style>
input[type=text1], select {
    width: 88%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
textarea[name=comment], select{
    width: 100%;
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

input[type=submit]:hover {
    background-color: #45a049;
	
	box-shadow: 0 5px #666;
  transform: translateY(4px);

	
}

	.modalDialog {
		position: fixed;
		font-family: Arial, Helvetica, sans-serif;
		top: 0;
		right: 0;
		bottom: 0;
		left: 0;
		background: rgba(0,0,0,0.8);
		z-index: 99999;
		opacity:0;
		-webkit-transition: opacity 400ms ease-in;
		-moz-transition: opacity 400ms ease-in;
		transition: opacity 400ms ease-in;
		pointer-events: none;
	}

	.modalDialog:target {
		opacity:1;
		pointer-events: auto;
	}

	.modalDialog > div {
		width: 400px;
		position: relative;
		margin: 10% auto;
		padding: 5px 20px 13px 20px;
		border-radius: 10px;
		background: #fff;
		background: -moz-linear-gradient(#fff, #999);
		background: -webkit-linear-gradient(#fff, #999);
		background: -o-linear-gradient(#fff, #999);
	}

	.close {
		background: #606061;
		color: #FFFFFF;
		line-height: 25px;
		position: absolute;
		right: -12px;
		text-align: center;
		top: -10px;
		width: 24px;
		text-decoration: none;
		font-weight: bold;
		-webkit-border-radius: 12px;
		-moz-border-radius: 12px;
		border-radius: 12px;
		-moz-box-shadow: 1px 1px 3px #000;
		-webkit-box-shadow: 1px 1px 3px #000;
		box-shadow: 1px 1px 3px #000;
	}

	.close:hover { background: #00d9ff; }
	</style>









<!-- IMAGE SLIDER START -->

<div class="w3-content w3-section" >
  <img class="mySlides" src="fslider/1.jpg" style="width:100%">
  <img class="mySlides" src="fslider/2.jpg" style="width:100%">
  <img class="mySlides" src="fslider/3.jpg" style="width:100%">
  <img class="mySlides" src="fslider/4.jpg" style="width:100%">
  <img class="mySlides" src="fslider/5.jpg" style="width:100%">
  <img class="mySlides" src="fslider/6.jpg" style="width:100%">
  <img class="mySlides" src="fslider/7.jpg" style="width:100%">
  <img class="mySlides" src="fslider/8.jpg" style="width:100%">
  <img class="mySlides" src="fslider/9.jpg" style="width:100%">
  <img class="mySlides" src="fslider/10.jpg" style="width:100%">
  <img class="mySlides" src="fslider/11.jpg" style="width:100%">
  <img class="mySlides" src="fslider/12.jpg" style="width:100%">
  <img class="mySlides" src="fslider/13.jpg" style="width:100%">
  <img class="mySlides" src="fslider/14.jpg" style="width:100%">
</div>
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

<!-- IMAGE SLIDER END -->




<!-- ONLINE SERVICES START -->

<?php
echo '<div id="right">
    <div class="right-main">
      <div class="welcome">Account Details</div><br>';
$name=$_SESSION['C_email'];
$rs=mysql_query("select * from account where C_email='$name'");
while ($row = mysql_fetch_array($rs)) {

 
$img = $row['C_pic'];
$sign = $row['C_sign'];
echo '<div class="inner-text">
 <table cellpadding="5" cellspacing="5" width="100%" border="2">
  <tbody>
    <tr>
      <td width="20%">

	  <p align="center">

<img height="100px" width="90px" src="data:image/jpeg;base64,'.base64_encode ( $img ).'"/>

</p>
</td>

<td width="40%">

<b><center>NAME OF CUSTOMER<br><br></b>'.$row['C_name'] .'
</center>

</td>

<td width="40%"><center><b>CUSTOMER SIGNATURE</b>
<img width ="200px" src="data:image/jpeg;base64,'.base64_encode ( $sign ).'"/></center>
</td>
</tr>

<tr>

<td>
<b><center>CONTACT NUMBER<br><br></b>
'. $row['C_phone'] .'</center>
</td>

<td>
<b><center>PERMANENT ADDRESS<br><br></b>
'. $row['C_add'] .'</center>
</td>

<td>
<b><center>CUSTOMER\'S EMAIL-ID<br><br></b>
'. $row['C_email'] .'</center>
</td>

</tr>

<tr>

<td>
<b><center>ACCOUNT NUMBER<br><br></b>
'. $row['Acc_no'] .'</center>
</td>

<td>
<b><center>DATE OF ACCOUNT CREATION<br><br></b>
'. $row['Acc_date'] .'</center>
</td>

<td>
<b><center>Balance<br><br></b>
Rs.'. $row['Acc_bal'] .'</center>
</td>

</tr>';
}
echo'
  </tbody>
</table>

</div></div>
</div>';
?>



<!-- ONLINE SERVICES END -->




<!-- RIGHT SIDE MARQUEE BAR START -->



<div id="left">
    <div id="left-main">
		<div class="l-head">IMPORTANT NOTICE</div>


<div class="quick1">

          <aside>

<style>

	.tabContainer{margin:10px 0;max-width:300px;width:100%;}

	.tabContainer .digiTabs{list-style:none;display:block;overflow:hidden;margin:0;padding:0px;position:relative;top:1px;}

	.tabContainer .digiTabs li{float:left;background-color:#46AAF7;border:1px solid #e1e1e1;padding:5px!important;cursor:pointer;border-bottom:none;margin-right:5px;font-family:verdana;font-size:.7em;font-weight:bold;color:#fff;}

	.tabContainer .digiTabs .active{background-color:#fff;color:#393939;}

</style>

<script type="text/javascript">

function tabs(x)

{

	var lis=document.getElementById("sidebarTabs").childNodes;

	

	for(i=0;i<lis.length;i++)

	{

		lis[i].className="";

	}

	x.className="active";

	var tab=x.id;

	switch(tab)

	{

	case "tab1":

		document.getElementById('popular').style.visibility='visible';

		document.getElementById('popular').style.display='block';

		document.getElementById('recents').style.visibility='hidden';

		document.getElementById('recents').style.display='none';

		document.getElementById('announce').style.visibility='hidden';

		document.getElementById('announce').style.display='none';

	break;

	case "tab2":

		document.getElementById('recents').style.visibility='visible';

		document.getElementById('recents').style.display='block';

		document.getElementById('popular').style.visibility='hidden';

		document.getElementById('popular').style.display='none';

		document.getElementById('announce').style.visibility='hidden';

		document.getElementById('announce').style.display='none';

	break;

	case "tab3":

		document.getElementById('announce').style.visibility='visible';

		document.getElementById('announce').style.display='block';

		document.getElementById('recents').style.visibility='hidden';

		document.getElementById('recents').style.display='none';

		document.getElementById('popular').style.visibility='hidden';

		document.getElementById('popular').style.display='none';

	break;

	default:

		document.getElementById('popular').style.visibility='visible';

		document.getElementById('popular').style.display='block';

		document.getElementById('recents').style.visibility='hidden';

		document.getElementById('recents').style.display='none';

		document.getElementById('announce').style.visibility='hidden';

		document.getElementById('announce').style.display='none';

	break;

	}

}

</script>
<div class="tabContainer">

    <ul class="digiTabs" id="sidebarTabs">

        <li id="tab1" class="active" onClick="tabs(this);"><i class="icon-flag"></i> <b>What's New</b></li>

        <li id="tab2" onClick="tabs(this);"><i class="icon-time"></i> <b>Announcements</b></li>

    </ul>

    </div>



    <div id="popular">



        <marquee scrollamount="2" id="scroller" onMouseOver="javascript:stop()" onMouseOut="javascript:start();" scrolldelay="5" behavior="scroll" direction="up" height="250px" width="80%" style="padding: 15px; height: 250px; width: 100%;">
  
        Policy number, Helpdesk details and Forms regarding Medical Insurance Scheme for Retirees and Spouse of Deceased Employees of BSVB<br><br>
        
        <a href="146625-properties of bank-18062016.pdf">List of properties under physical possession of the Bank</a><br><br>
        
        <a href="146701-locker-rent-charges.pdf">Notice regarding revision of SDV Locker Charges w.e.f.01-08-2016</a><br><br>
        
        </marquee>
<br><br>
       


    </div>




    <div id="recents" style="display:none;">



        <marquee scrollamount="2" id="scroller" onMouseOver="javascript:stop()" onMouseOut="javascript:start();" scrolldelay="1" behavior="scroll" direction="up" height="250px" width="80%" style="padding: 15px; height: 250px; width: 100%;">


       <a href="COMPLAINT_TO_LOCAL_POLICE.pdf">Complain to local police / cyber crime authorities against fictitious offer of money from abroad </a><br><br>
       
      <a href="RBI_NEVER_ASKS_BANK_DETAILS.pdf"> RBI Never ask for your bank account details</a><br><br>
     
        </marquee>
<br><br>
        <div align="left"><a href="" target="_blank">Read All Announcement ...</a></div>



    </div>



</aside>

</div>

    <p align="right"> <a href="#" class="back-to-top"></a></p>


    </div>
</div>

    
</div>




<!-- RIGHT SIDE MARQUEE BAR END -->

<!-- COPRIGHT BAR START -->
<div id="company-logo">

 <table width="1002" align="center" cellspacing="15"  bordercolor="#FFFFFF" bgcolor="#FFFFFF">

  <tbody><tr>
        <td>	
<div id="footer">
	     
      <div>
		<div1>
  			<p align="center">&copy Copyright <a href="index.php"><font color= "#c1c1c1">Bangalore Silicon Valley Bank</font></a> All rights reserved.<br><br>Website Designed & Developed by : <a href="pro.html" target="_blank"><font color= "#c1c1c1">MOHIT THAKUR DESIGNS.</font></a></p>
		</div1>
        <div>
				<h3>Follow us:</h3><br>
				<a class="facebook" href="#">facebook</a>		
				<a class="twitter" href="#">twitter</a>
			</div>
       </div>
      
	</div>
     </td></tr></tbody></table>
     </div>


<!-- COPRIGHT BAR END -->




<!-- BACK TO TOP SCRIPT START -->



<script type="text/javascript">
// create the back to top button
$('body').prepend('<a href="#" class="back-to-top">Back to Top</a>');

var amountScrolled = 300;

$(window).scroll(function() {
	if ($(window).scrollTop() > amountScrolled) {
		$('a.back-to-top').fadeIn('slow');
	} else {
		$('a.back-to-top').fadeOut('slow');
	}
});

$('a.back-to-top, a.simple-back-to-top').click(function() {
	$('body').animate({
		scrollTop: 0
	}, 'fast');
	return false;
});
</script>



<!-- BACK TO TOP SCRIPT END -->

</body></html>