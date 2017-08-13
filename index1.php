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

<div style="width:1350px; height:100px; background-image:url(images/tooplate_top.png); margin-top:10px">
<div id="tooplate_titlebar">
    	
        <div id="tooplate_menu" class="ddsmoothmenu">
        <form action="#" method="POST">
          <label style="color:#FFF; font-size:20px">Enter Adhar Number</label>&nbsp;&nbsp;&nbsp;
          <input type="text" name="AadharNumber" placeholder="Enter the Adhar Code Here" required="required" autocomplete="off"/>&nbsp;&nbsp;&nbsp;
          <input type="submit" value="Login" name="Login" />
          
          
          </form>   
          
    </div>   

</div>

<?php
 
 
 //$aadar=$_Session['uname'];
 
if($_SERVER['REQUEST_METHOD']=="POST")
{
	if(isset($_POST['Login']))
	{


mysql_connect("localhost","root","");
mysql_select_db("ticket");


$AadharNumber=mysql_real_escape_string($_POST['AadharNumber']);

$result=mysql_query("select * from register where AadarNumber=$AadharNumber");

$row=mysql_fetch_array($result);

if($row['AadarNumber']==$AadharNumber)
{
	
	print '<script>alert("Login Sucess !! Welcome ")</script>'.$row['Username'];
	$_SESSION['AadharNumber']=$AadharNumber;
	header("Location:userdetails1.php");
	
	
}
else 
{
	print '<script>alert("Failed to login")</script>';
}
	}
}
?>


        <div id="site_title" style="width: 504px; position: absolute">   
          <h2 style="color:#FFF"><br />
          <img src="images/unnamed.jpg" alt="Image 04" width="61" height="42" title="Etiam faucibus felis eget metus tempor." />
          
         TicketReservation</h2>
        </div>
</div>
    
    <div id="tooplate_mid_wrapper">
    	<div id="tooplate_mid_home">
        	
            <div id="slider-wrapper">
        
                <div id="slider" class="nivoSlider">
                    <img src="images/new.jpg" style="height:250" />

                </div>
                <div id="htmlcaption" class="nivo-html-caption">
                    <strong>This</strong> is an example of a HTML caption with <a h	ref="#">a link</a>.
                </div>
            
            </div>
                <script type="text/javascript" src="js/jquery-1.4.3.min.js"></script>
				<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
                <script type="text/javascript">
                $(window).load(function() {
                    $('#slider').nivoSlider();
                });
                </script>

            <div id="mid_left">
                <div id="mid_title" style="margin-left:100px; margin-top:-50px; height:500px; width:400px">
                <div style="margin-left:350px; position:absolute">
                 <a href="admin.php"><img src="images/admin_icon.png" width="75" height="75" /></a>
                 </div>
                <br /> <br /> <br /> <br /> 
                &nbsp; &nbsp; 
                <label style="color:#000">Signup For Free!!!</label>
                
                 <br /> <br />
             <form name="regform" action="#" method="POST">   
              <label style="color:#000; font-size:20px"> Adhar Number</label>&nbsp;&nbsp;&nbsp;<input type="text" name="aadarnum" placeholder="Enter Adhar Number" required="required" autocomplete="off" />
              <br /><br />
              
               <label style="color:#000; font-size:20px"> Mobile Number</label>&nbsp;&nbsp;&nbsp;<input type="text" name="mobnum" placeholder="Enter 10 digit Number" required="required" autocomplete="off"/>
               <br /><br />
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               <input type="submit" value="Submit" name="submit1" />
                
                </form>
                   </div>
                   
                    
           
              
<?php


	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		if(isset($_POST['submit1']))
		{
			
	$MobileNumber=mysql_real_escape_string($_POST['mobnum']);
	$AadharNumber=mysql_real_escape_string($_POST['aadarnum']);
	$bool=true;
	$ros=false;
	$mob=false;
	mysql_connect("localhost","root","") or die(mysql_error());
	mysql_select_db("ticket") or die("cannot connect to database");
	$query=mysql_query("select * from aadardetails where AadharNumber=$AadharNumber");
	$numb=mysql_num_rows($query);
		if($numb>=1)
		{
			$query1=mysql_query("Select * from register where MobileNumber=$MobileNumber");
			$norows=mysql_num_rows($query1);
			if($norows>=1)
			{	
				$bool=false;
				$mob=true;
			}
		}
		else
		{
			$bool=false;
			$ros=true;
		}
	
	
	if($ros)
	{
			print '<script>alert("Aadhar Number Does not Exist in the database")</script>';
	}
if($bool)
{
	
	mysql_query("insert INTO register(MobileNumber,AadarNumber) values ($MobileNumber,$AadharNumber)");
	print '<script>alert("registered Sucessfully")</script>';
	print '<script>window.location.assign(register.php)</script>';
	
}
if($bool)
{
	
	print '<script>window.location.assign(register.php)</script>';
}
		
	
	}
		}
	
		

		
			?>
		
	

                   
                <p id="mid_text">&nbsp;</p>
                <div id="learn_more"></div>
            </div>
            <div class="cleaner"></div>
        	
        </div>
    </div>
</div> <!-- end of header -->
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
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