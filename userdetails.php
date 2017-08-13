<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Blind People Ticket Reservation System</title>
<meta name="keywords" content="" />
<meta name="description" content="" />

<style>
.color
{
	color:#000;
	text-align:center;
	margin-left:350px;
	
	
}

.txtcolor
{
	color:#FFF;
	text-align:center;
	
	
}
a
{
	color:#FFF;
}

</style>

<!--
Template 2052 Orange Bond
http://www.tooplate.com/view/2052-orange-bond
-->
<link href="css/tooplate_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />

<!--<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>-->

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<!--<script type="text/javascript" src="js/jquery.min.js"></script>
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

</script>-->
  
</head>
<body>

<div id="tooplate_header">
	<div id="tooplate_top">
    	<div id="tooplate_search">
            
		</div>
    </div>
    <div id="tooplate_titlebar">
    	<div id="site_title"><h1>Ticket Reservarion</h1></div>
        <div id="tooplate_menu" class="ddsmoothmenu">
            <ul>
              <li><a href="index.php" class="selected">Home</a></li>
          		<li><a href="#">About</a>
                   <li><a href="registration.php">Registration</a></li>
              <li><a href="login.php">Login</a></li>
              <li><a href="contact.php">Contact</a></li>
            </ul>
            <br style="clear: left" />
        </div> <!-- end of tooplate_menu -->
    </div>
    <p><br />
      <br />
      <label style="font-size:30px; font-family:'Times New Roman', Times, serif; color:#FFF; margin-left:600px">User Details</label>
      <br /><br /><br /><br />
      
      
  <?php
 
$con=mysql_connect("localhost","root","");

if(!$con)
{
	die("Can't connect".mysql_error());
}
$aadhar=$_SESSION['AadharNo'];
mysql_select_db("ticket",$con);
$sql="select * from Aadardetails where AddarNumber=$aadhar";
$myData=mysql_query($sql,$con);

echo "<div style='margin-left:580px; margin-top:-50px; position:absolute'><table border=1 >

<tr bgcolor=#00FFCC class=color>
<th >Fields</th>
<th>Data</th>
</tr>";

while($record=mysql_fetch_array($myData))
{
	echo "<tr class=txtcolor><td>UserName</td><td>".$record['Name']."</td></tr>";
	echo "<tr class=txtcolor><td>Gender</td><td>".$record['Gender']."</td></tr>";
	echo "<tr class=txtcolor><td>Age</td><td>".$record['Age']."</td></tr>";
	echo "<tr class=txtcolor><td>DateOfBirth</td><td>".$record['DOB']."</td></tr>";
	echo "<tr class=txtcolor><td>Address</td><td>".$record['Address']."</td></tr>";
	echo "<tr class=txtcolor><td>Email</td><td>".$record['Email']."</td></tr>";
	echo "<tr class=txtcolor><td>MobileNo</td><td><a style='color:#FFF' href='EditMobile.php?id=".$record['MobileNo']."'>".$record['MobileNo']."</a>
	</td></tr>";
	echo "<tr class=txtcolor><td>State</td><td>".$record['State']."</td></tr>";
	echo "<tr class=txtcolor><td>PinCode</td><td>".$record['PINCode']."</td></tr>";
	echo "<tr class=txtcolor><td>AadharNumber</td><td>".$record['AddarNumber']."</td></tr>";
	echo "<tr class=txtcolor><td>EnRollMentNumber</td><td>".$record['EnrollmentNumber']."</td></tr>";
}

echo "</table> </div>";


mysql_close($con);



?>
      
      
  <br /><br /><br /><br /><br /><br />
  <br /><br /><br />
  <br /><br />
    </p>
    <p>&nbsp;</p>
    <p><br />
      
    </p>
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