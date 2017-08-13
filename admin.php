<?php
session_start();
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Blind People Ticket Reservation System</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<!--
Template 2052 Orange Bond
http://www.tooplate.com/view/2052-orange-bond
-->
<link href="css/tooplate_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="admin.css" />
<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "tooplate_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>






  
</head>
<body style="background-color:#C8C8C8">
<div class="login-page"  style="background-color:#C8C8C8">
<div style="width:1350px; height:100px; background-image:url(images/tooplate_top.png)">
  <div id="tooplate_mid_wrapper" >
   	  <div id="tooplate_mid_home" >
        	
            
          <script type="text/javascript" src="js/jquery-1.4.3.min.js"></script>
				<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
                <script type="text/javascript">
                $(window).load(function() {
                    $('#slider').nivoSlider();
                });
                </script>
                
                </div>
                
      <div style="color: #0A2CF0; font-size: 16px; position: absolute; left: 1166px; top: 49px;"> <a href="index1.php">Logout</a> </div>
  </div>
</div> <!-- end of header -->

<div id="site_title" style="width: 504px; position: absolute" >   
          <h2 style="color:#FFF"><br />
          <img src="images/unnamed.jpg" alt="Image 04" width="61" height="42" title="Etiam faucibus felis eget metus tempor." />
          
         TicketReservation</h2>
        </div>



<br /><br /><br />



  <div class="form" >
   
    <form class="login-form" method="post">
      <input type="text" placeholder="username" name="name" required="required" autocomplete="off"/>
      <input type="password" placeholder="password" name="password" required="required"/>
      <input type="submit" value="Submit" name="submit"  style="background-color:#0C76F4">
      </form>
  </div>



<?php


if(isset($_POST["submit"]))
{
	
	$name=mysql_real_escape_string($_POST['name']);
$password=mysql_real_escape_string($_POST['password']);

	if($name=='admin' && $password=='admin')
	{
		
		header("Location:adminview.php");
	}
	else if($name=="TicketChecker" && $password=="Checker")
	{
		header("Location:ConfirmedDetailsTC.php");
	}
	else
	{
		print  '<script>alert("Check username and Password")</script>';
		
	}
	
	$name= $_POST['name'];
$_SESSION['name']=$name;
header("Location:adminview.php");
	
}




 

?>


<br /><br /><br /><br /><br />

<div id="tooplate_cr_bar_wrapper">
	<div id="tooplate_cr_bar">
	Copyright © 2016 <a href="#">Company Name</a>
    </div>
</div>
</div>
</body>
</html>