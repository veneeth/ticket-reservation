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
table
{
	margin-left:-130px;
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

<div style="color: #0A2CF0; font-size: 16px; position: absolute; left: 1166px; top: 49px;">
<a href="index1.php">Back</a>  &nbsp;&nbsp;<a href="index1.php">Logout</a>
</div>


<div style="width:1350px; height:100px; background-image:url(images/tooplate_top.png)"><br /><br />
   <label style="font-size:30px; font-family:'Times New Roman', Times, serif; color:#FFF; margin-left:600px"><br />
      <br />
      <br />
      <br />
      <br />
      
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
     &nbsp;&nbsp;&nbsp;&nbsp; 
    
     User Details</label>
   
   
  <br /><br /><br /><br />
  <br />
    
 
 <?php
 
$con=mysql_connect("localhost","root","");

if(!$con)
{
	die("Can't connect".mysql_error());
}

$AadharNumber=$_SESSION['AadharNumber'];
mysql_select_db("ticket",$con);
$sql="select * from Aadardetails where AadharNumber=$AadharNumber";
$myData=mysql_query($sql,$con);

echo "<div style='margin-left:580px; margin-top:-50px; position:absolute'><table border=1 cellpadding='9px' cellspacing='9px'>

<tr bgcolor=#00FFCC class=color>
<th>Fields</th>
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
	echo "<tr class=txtcolor><td>MobileNo</td><td><a style='color:#FFF' href='EditMobile.php?oldnum=".$record['MobileNo']."'>".$record['MobileNo']."</a>
	</td></tr>";
	echo "<tr class=txtcolor><td>State</td><td>".$record['State']."</td></tr>";
	echo "<tr class=txtcolor><td>PinCode</td><td>".$record['PINCode']."</td></tr>";
	echo "<tr class=txtcolor><td>AadharNumber</td><td>".$record['AadharNumber']."</td></tr>";
	echo "<tr class=txtcolor><td>EnRollMentNumber</td><td>".$record['EnrollmentNumber']."</td></tr>";
}

echo "</table> </div>";


mysql_close($con);



?>



 <div id="tooplate_mid_wrapper"></div>
</div> <!-- end of header -->

<br /><br /><br /><br /><br /><br />
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<div id="tooplate_cr_bar_wrapper" style="margin-bottom:-200px; position:absolute">
	<div id="tooplate_cr_bar">
	Copyright © 2016 <a href="#">Company Name</a>
    </div>
</div>

</body>
</html>