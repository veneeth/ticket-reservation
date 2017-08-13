<?php
include ('dbconn.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="	http://www.w3.org/1999/xhtml">
<head>
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
<body>

<div style="width:1350px; height:100px; background-image:url(images/tooplate_top.png)">
<div id="tooplate_titlebar">
    	
        <div id="tooplate_menu" class="ddsmoothmenu">
            <div id="site_title" style="width: 504px; position: absolute">   
          <h2 style="color:#FFF"><br />
          <img src="images/unnamed.jpg" alt="Image 04" width="61" height="42" title="Etiam faucibus felis eget metus tempor." />
          
         TicketReservation</h2>
        </div>
            <br style="clear: left" />
        </div> <!-- end of tooplate_menu -->
<div style="margin-left:970px"> 

<div style="color: #0A2CF0; font-size: 16px; position: absolute; left: 1166px; top: 49px;">
<a href="">Back</a> &nbsp;  &nbsp;&nbsp;<a href="index1.php">Logout</a>
</div>

 <form action="#" method="get">
 </form>
            
            
            </div>

</div>

    </div>
    <br /><br />
    <br /><br />  <br /><br />
    <br /><br />  <br /><br />
    <br /><br />
    
  <?php

	if($_SERVER['REQUEST_METHOD']=="POST")
	{
	
	$Username=mysql_real_escape_string($_POST['uname']);
	$Password=mysql_real_escape_string($_POST['password']);
	$MobileNumber=mysql_real_escape_string($_POST['mobnum']);
	$AadarNumber=mysql_real_escape_string($_POST['aadarnum']);
	
	$bool=true;
	mysql_connect("localhost","root","") or die(mysql_error());
	mysql_select_db("ticket") or die("cannot connect tyo database");
	
	$query=mysql_query("select * from register");
	
	while($row=mysql_fetch_array($query))
	{
		$table_register=$row['Username'];
		
		if($Username==$table_register)
		{
			$bool=false;
			print '<script>alert("username has been taken")</script>';
			print '<script>window.location.assign(register.php)</script>';
		}
	}
	
	if($bool)
{
	
	mysql_query("insert INTO register(Username,Password,MobileNumber,AadarNumber) values ('$Username','$Password',$MobileNumber,'$AadarNumber')");
	
	print '<script>alert("registered Sucessfully")</script>';
			print '<script>window.location.assign(register.php)</script>';
	
}
	
	}
?>

    
  <div style="margin-left:500px"></div>
  
  
  <div id="tooplate_mid_wrapper"></div>
</div> <!-- end of header -->
<div id="tooplate_footer_wrapper">
	<div id="tooplate_footer">
    	<div class="col_4">
        	<h5>Partner Links</h5>
            <ul class="footer_list">
            	<li><a href="#">Flash Gallery</a></li>
                <li><a href="#">CSS Templates</a></li>
                <li><a href="#">Web Design</a></li>
                <li><a href="#">Premium Themes</a></li>
                <li><a href="#m">Web Development</a></li>
			</ul>
        </div>
        <div class="col_4">
        	<h5>Recent Posts</h5>
            <ul class="footer_list">
            	<li><a href="#">Donec sit amet gravida quam lacinia at luctus felis luctus.</a></li>
                <li><a href="#">Nam a aliquam justo. Duis nec dui quis elit faucibus gravida non in dolor.</a></li>
                <li><a href="#">Cras ornare ornare nulla, et dictum eros malesuada ac.</a></li>
			</ul>                
        </div>
        <div class="col_4">
        	<h5>Twitter</h5>
            <ul class="twitter_post">
	            <li>Mauris enim ipsum, hendrerit quis fringilla <a href="#">http://bit.ly/13IwZO</a></li>
                <li>Donec non leo vitae turpis lacinia placerat <a href="#">http://bit.ly/13IweP</a></li>
                <li>Etiam sit amet augue eget justo pharetra <a href="#">http://bit.ly/13IwZOl</a></li>
			</ul>
        </div>
        <div class="col_4 col_l">
        	<h5>About</h5>
            <p>Mauris eu elit tortor. Mauris pretium ullamcorper orci sed tempor. Donec facilisis sodales justo ut ornare. Vestibulum porta semper justo, non adipiscing lacus sodales eu. </p>
            <div class="footer_social_button">
                <a href="#"><img alt="Facebook" src="images/facebook-32x32.png" title="facebook" /></a>
                <a href="#"><img alt="Flickr" src="images/flickr-32x32.png" title="flickr" /></a>
                <a href="#"><img alt="Twitter" src="images/twitter-32x32.png" title="twitter" /></a>
                <a href="#"><img alt="Youtube" src="images/youtube-32x32.png" title="youtube" /></a>
                <a href="#"><img alt="RSS" src="images/rss-32x32.png" title="rss" /></a>
			</div>
		</div>
        <div class="cleaner"></div>
    </div>
</div>

<div id="tooplate_cr_bar_wrapper">
	<div id="tooplate_cr_bar">
	Copyright © 2016 <a href="#">Company Name</a>
    </div>
</div>

</body>
</html>