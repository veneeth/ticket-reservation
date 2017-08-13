<?php
 session_start();
include ('dbconn.php');

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Blind People Ticket Reservation System</title>
<meta name="keywords" content="" />
<meta name="description" content="" />

<link href="css/tooplate_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />



<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

  
</head>
<body>

<div style="width:1350px; height:100px; background-image:url(images/tooplate_top.png)">
<div id="tooplate_titlebar">
    	
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
<div style="margin-left:970px"> 
 <form action="#" method="get">
              <input type="text" value="Search" name="keyword" id="keyword" title="keyword" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
              <input type="submit" name="Search" value="" alt="Search" id="searchbutton" title="Search" class="sub_btn"  />
 </form>
</div>

</div>
    </div>
    <br /><br />
    <label style="font-size:30px; font-family:'Times New Roman', Times, serif; color:#FFF; margin-left:600px">Login Here</label>
    <br /><br />
    
 
 <?php

if($_SERVER['REQUEST_METHOD']=="POST")
{
$username=mysql_real_escape_string($_POST['uname']);
$password=mysql_real_escape_string($_POST['password']);

mysql_connect("localhost","root","");
mysql_select_db("ticket");

$result=mysql_query("select * from register where Username='$username' and Password='$password'") or die ("Failed to query database".mysql_error());

$row=mysql_fetch_array($result);

if($row['Username']==$username && $row['Password']==$password)
{
	
	print '<script>alert("Login Sucess !! Welcome ")</script>'.$row['Username'];
	
	header("Location:userdetails.php");
	
	
}
}
else
{
	print '<script>alert("Failed to login")</script>';
}


?>

    
  <div style="margin-left:500px">
  
  
  
  <form name="regform" action="#" method="POST">
      
                <table width="616" height="150" border="0" cellpadding="0" cellspacing="0" style="color:#FFF">
                  <tr>
                    <td width="139" height="85">
                      <label for="username">Username *: </label>
                    </span></td>
                    <td width="477"><input type="text" name="uname" /></td>
                  </tr>
                  <tr>
                    <td>   
                      <label for="pwd3">Password *:</label>
                    </span></td>
                    <td><input type="password" name="password" /></td>
                  </tr>
                  <tr>     
                  </tr>
                  
                </table>
               
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &nbsp;        &nbsp;<br />
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="submit" value="Login" name="Login" />
                
    </form>
      <br />

      
  </div>
  
  
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
	Copyright © 2017 <a href="#">Company Name</a>
    </div>
</div>

</body>
</html>