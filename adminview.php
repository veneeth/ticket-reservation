<?php
include ('dbconn.php');

session_start();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="	http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Blind People Ticket Reservation System</title>
<meta name="keywords" content="" />
<meta name="description" content="" />

<style>
<style>
.color
{
	color:#000;
	text-align:center;
	margin-left:350px;
	
	
}
table
{
	
	border-radius:20px 20px 20px 20px;
	color:#000;
}
td
{
	color:#000;
	width:200px;
	font-style:italic;
	font-weight:bold;
	font-size:large;
	font-family:"Lucida Console", Monaco, monospace, "Agency FB";
}
th
{
	border:none;
	border-radius:5px;
	text-transform:uppercase;
	font-size:larger;

}
.txtcolor
{
	color:#FFF;
	text-align:center;
	
	
}
input
{
	border-radius:8px 8px 8px 8px;
	width:200px;
	height:25px;
}
</style>


</style>

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
  <div id="tooplate_mid_wrapper">
    <div id="tooplate_mid_home">
        	
            
          <script type="text/javascript" src="js/jquery-1.4.3.min.js"></script>
				<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
                <script type="text/javascript">
                $(window).load(function() {
                    $('#slider').nivoSlider();
                });
                </script></div>
  </div>
</div>
<div id="site_title" style="width: 504px; position: absolute">   
          <h2 style="color:#FFF"><br />
          <img src="images/unnamed.jpg" alt="Image 04" width="61" height="42" title="Etiam faucibus felis eget metus tempor." />
          
         TicketReservation</h2>
</div>

<br /><br /><br /><br />


<div style="color: #0A2CF0; font-size: 16px; position: absolute; left: 1166px; top: 49px;">
<a href="">Back</a> &nbsp;  &nbsp;&nbsp;<a href="index1.php">Logout</a>
</div>


<div style="color: #0A2CF0; font-size: 16px; position: absolute; left: 1087px; top: 112px; width: 256px;">
<a href="Requests.php">View Requests</a> &nbsp;  &nbsp;&nbsp;<a href="ConfirmedDetails.php">Confirmed Details</a>
</div>



<?php

mysql_connect("localhost","root","");
mysql_select_db("ticket");

$result1 = mysql_query("select * from register");
echo "<table border='1' width='50%' align='center' height='250px'>
<tr>
<th>Mobile Number</th>
<th>Aadhar Number</th>

</tr>";
while($row = mysql_fetch_array($result1))
  {
   echo "<tr align='center'>";
  echo "<td>" . $row['MobileNumber'] . "</td>";
  echo "<td>" . $row['AadarNumber'] . "</td>";
 
  echo "</tr>";
  }
  echo "</table>";
  
  
  ?>

</table>

<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<div id="tooplate_cr_bar_wrapper" style="margin-bottom:-200px; position:absolute">
	<div id="tooplate_cr_bar">
	Copyright © 2016 <a href="#">Company Name</a>
    </div>
</div>
 </form>

</body>
</html>