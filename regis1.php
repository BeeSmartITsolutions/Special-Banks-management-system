 <!DOCTYPE html PUBLIC "IST NATIONAL COLLOQUIUM ON CIVIL AND MECHANICAL ENGINEERING">
<html>

<title>REGISTRATION</title>
<link href="style.css" rel="stylesheet" type="text/css">
<link href="style-popup.css" rel="stylesheet" type="text/css">
<script src="jquery-1.11.0.min.js"></script>
	<script src="jquery-migrate-1.2.1.min.js"></script>
    // form validation script...
    <script type="text/javascript">
function validateForm()
{
var a=document.forms["reg"]["name"].value;
var b=document.forms["reg"]["design"].value;
var c=document.forms["reg"]["m"].value;
var d=document.forms["reg"]["d"].value;
var e=document.forms["reg"]["institute"].value;
var f=document.forms["reg"]["address"].value;
var g=document.forms["reg"]["contact"].value;
var h=document.forms["reg"]["contact1"].value;
var i=document.forms["reg"]["email"].value;
var j=document.forms["reg"]["track"].value;
var k=document.forms["reg"]["papertitle"].value;
var l=document.forms["reg"]["require"].value;
if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (d==null || d=="") && (e==null || e=="") && (f==null || f==""))
  {
  alert("All Field must be filled out");
  return false;
  }
if (a==null || a=="")
  {
  alert("First name must be filled out");
  return false;
  }
if (b==null || b=="")
  {
  alert("Designation must be filled out");
  return false;
  }
if (c==null || c=="")
  {
  alert("Gender name must be filled out");
  return false;
  }
if (d==null || d=="")
  {
  alert("Delegate Category must be filled out");
  return false;
  }
if (e==null || e=="")
  {
  alert("Name of the Institute must be filled out");
  return false;
  }
if (f==null || f=="")
  {
  alert("Address must be filled out");
  return false;
  }
if (g==null || g=="")
  {
  alert("Phone Number must be filled out");
  return false;
  }
if (h==null || h=="")
  {
  alert("Mobile Number must be filled out");
  return false;
  }
if (i==null || i=="")
  {
  alert("Email ID must be filled out");
  return false;
  }
if (j==null || j=="")
  {
  alert("Paper Track must be filled out");
  return false;
  }
if (k==null || k=="")
  {
  alert("Paper Title must be filled out");
  return false;
  }
if (l==null || l=="")
  {
  alert("Accommodation Category must be filled out");
  return false;
  }
}
</script>
    
    
</head>

<body background="5.jpg">
<?php
include('database.php');

if(isset($_POST['submit']))
{
	
$name=$_POST['name'];
$designation=$_POST['design'];
$gender=$_POST['m'];
$delegate=$_POST['d'];
$institute=$_POST['institute'];
$address=$_POST['address'];
$phone=$_POST['contact'];
$contact=$_POST['contact1'];
$email=$_POST['email'];
$track=$_POST['track'];
$title=$_POST['papertitle'];
$accommodation=$_POST['require'];

$query = mysql_query("INSERT INTO member VALUES('$name', '$designation', '$gender', '$delegate', '$institute', '$address', '$phone', '$contact','$email', '$track','$title', '$accommodation')");
if($query)
{
    header("location:code_exec.php");
}
}
?>
  
<div id="main_impwrapper">
<div class="wrapper_content">
<img src="banner-esshbs.jpg">
<div class="menu"><ul>

    <li>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
    
    <a href="index.html">HOME</a>

    </li>

    <li><a href="cfp.html">CALL FOR PAPERS </a></li>
    <li><a href="imp.html">IMPORTANT DATES </a></li>
    <li><a href="" target="_blank">PAPER SUBMISSION </a></li>
    <li><a href="regis.html">REGISTRATION </a></li>
    <li><a href="gal.html" target="_blank">GALLERY</a></li>
    <li><a href="Contact_us.html">CONTACT US</a></li>
    
</ul>

</div>

<div id="left">
    <div id="left-main">
		<div class="l-head">OTHER IMPORTANT LINKS</div>
<div class="quick">
  <ul>

<li><a href="http://www.baddiuniv.ac.in" target="_blank">UNIVERSITY HOME</a></li>
<li><a href="obj.html">AIMS AND OBJECTIVES</a></li>
<li><a href="committees.html">COMMITTEES </a></li>
<li><a href="ct.html">CONFERENCE THEME</a></li>
<li><a href="kns.html">KEY NOTE SPEAKER</a></li>
<li><a href="http://www.himachaltourism.gov.in" target="_blank">VISITORS ATTRACTION</a></li>
<li><a href="cv.html">CONFERENCE VENUE</a></li>
<li><a href="Contact_us.html">CONTACT US</a></li>

</ul>

</div>
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
<br><br>
<div class="tabContainer">

    <ul class="digiTabs" id="sidebarTabs">

        <li id="tab1" class="active" onClick="tabs(this);"><i class="icon-flag"></i> <b>Announcements</b></li>

        <li id="tab2" onClick="tabs(this);"><i class="icon-time"></i> <b>News &amp; Events</b></li>

    </ul>

    </div>

    <div id="popular">

        <marquee scrollamount="2" id="scroller" onMouseOver="javascript:stop()" onMouseOut="javascript:start();" scrolldelay="5" behavior="scroll" direction="up" height="250px" width="80%" style="padding: 15px; height: 250px; width: 100%;">

           
        
        Online Submission of Manuscript: April 25<sup>th</sup>, 2016<br><br>
        Acceptance Notification: April 29<sup>th</sup>, 2016<br><br>
       
        Last Date for Registration: May 6<sup>th</sup>, 2016<br><br>
        
        </marquee>
<br><br>
        <div align="left"><a href="ra.html" target="_blank">Read All Announcements...</a></div>

    </div>

    <div id="recents" style="display:none;">

        <marquee scrollamount="2" id="scroller" onMouseOver="javascript:stop()" onMouseOut="javascript:start();" scrolldelay="1" behavior="scroll" direction="up" height="250px" width="100%" style="padding: 15px; height: 250px; width: 100%;">

       
        EZUCURSION '16, "National Conference in Civil & Mechanical Engineering going to held on 12<sup>th</sup> May, 2016<br><br>
      
        
      </marquee>
<br><br>
        <div align="left"><a href="nae.html" target="_blank">Read All News ...</a></div>

    </div>

</aside>

</div>

    <p align="right"> <a href="#" class="back-to-top"></a></p>


    </div>
    
</div>

<div id="right">
    <div class="right-main">
      <div class="welcome">Registration Form</div>
   
    <div class="inner-text">
        
        <form action="" onsubmit="return validateForm()" method="post">
        <table align="center" border="3" cellpadding="10" cellspacing="10">
  <tbody>
  <tr>
        <td>
 
                Name (Dr./Mr./Mrs./Ms.) : &nbsp;&nbsp;&nbsp; <input type="text" name="name" maxlength="50" size="66"/>
        </td></tr>
 <tr>
        <td>
 Designation :&nbsp;&nbsp;&nbsp;             <input type="text" name="design" maxlength="50" size="42"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Gender : &nbsp;&nbsp;&nbsp;                 <input type="radio" name="m" checked id="radio1" value="male"/>&nbsp;Male
                                 &nbsp;&nbsp;&nbsp;&nbsp;
                                 <input type="radio" name="m" value="female" id="radio2"/>&nbsp;Female  
        
        </td></tr>
 <tr>
        <td>
        
        Delegate Category (Please Select one) : &nbsp;&nbsp;&nbsp
        
                                 <input type="radio" name="d" id="radio3" value="d1"/>&nbsp;&nbsp;&nbsp;R&D 
                                 <input type="radio" name="d" id="radio4" value="d2"/>&nbsp;&nbsp;&nbsp;Academician 
                                 <input type="radio" name="d" id="radio5" value="d3"/>&nbsp;&nbsp;&nbsp;Industry                          
                                 <input type="radio" name="d" id="radio6" value="d4"  checked/>&nbsp;&nbsp;&nbsp;Research Scholar
</td></tr>                                 
        <tr>
        <td>
 Name of the Institute/Company Address : &nbsp;&nbsp;&nbsp;              <input type="text" name="institute" size="53" maxlength="100"/></td></tr>
                                 
<tr>
        <td>
         Address for communication :            &nbsp;&nbsp;&nbsp;     <input type="text" size="64" name="address" maxlength="100"/></td></tr>
       
<tr>
        <td>
         Phone No. &nbsp;&nbsp;&nbsp; <input type="text" name="contact"  maxlength="10"/> &nbsp;&nbsp;&nbsp;  Mobile No. :     &nbsp;&nbsp;&nbsp;        <input type="text" name="contact1" maxlength="15" /></td></tr>
        
 <tr>
        <td>
        E-mail : &nbsp;&nbsp;&nbsp;                <input type="email" name="email" maxlength="50" size="81"/></td></tr>
   <tr>
        <td>
      
        Track of Paper : &nbsp;&nbsp;&nbsp;               <input type="text" name="track" maxlength="200" size="74"/></td></tr>
 <tr>
        <td>
        
        Title of Paper : &nbsp;&nbsp;&nbsp;               <input type="text" name="papertitle" maxlength="50" size="75"/></td></tr>
        <tr>
        <td>
 
        Accommodation Arrangement (Please Select One) : &nbsp;&nbsp;&nbsp;                 <input type="radio" name="require" value="required" id="radio7" checked/>&nbsp;Required
                                 &nbsp;&nbsp;&nbsp;&nbsp;
                                 <input type="radio" name="require" value="nrequired" id="radio8"/>&nbsp;Not Required<br></td></tr>
<tr>
        <td>
         
        <center><input name="submit" type="submit" id="submit" value="Register"/></center></td></tr>
        </tbody></table>
        </form>

    </div>
</div>
<br>
</div>

</div>



<div id="company-logo">
<div id="footer">
            <table width="1002" border="0" align="center" cellpadding="15" cellspacing="10"  bordercolor="#FFFFFF" bgcolor="#FFFFFF">

  <tbody><tr>
        <td colspan="3">
    	
           <center><h1><u>SPONSORS</u></h1></center>
 
</td>
  </tr>
  </tbody></table>
 <table width="1002" border="0" align="left" cellpadding="5" cellspacing="30" bordercolor="#FFFFFF" bgcolor="#FFFFFF">
 <tbody>
  <tr>
    <td colspan="4">
<center> <img src="sponsers/1.png" width="320" height="100" ></center>
</td>
  
  </tr>
  
</tbody></table>
</div>


 <table width="1002" align="center" cellspacing="15"  bordercolor="#FFFFFF" bgcolor="#FFFFFF">

  <tbody><tr>
        <td>	
<div id="footer">	     
      <div>
		<div1>
  			<p align="center">&copy Copyright <a href="http://www.baddiuniv.ac.in" target="_blank"><font color= "#c1c1c1">Baddi University of Emerging Sciences and Technology.</font></a> All rights reserved.<br><br>Website Designed & Developed by : <a href="pro.html" target="_blank"><font color= "#c1c1c1">MOHIT THAKUR(14UCS015), CSE-IBM.</font></a></p>
		</div1>
        <div>
				<h3>follow us:</h3><br>
				<a class="facebook" href="http://www.facebook.com/BaddiUniversity.HP?ref=ts&fref=ts" target="_blank">facebook</a>		
				<a class="twitter" href="https://twitter.com/baddiuniversity" target="_blank">twitter</a>
			</div>
       </div>
      
	</div>
     </td></tr></tbody></table>
     </div>
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

</body></html>