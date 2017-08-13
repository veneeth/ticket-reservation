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
 <form action="#" method="post">
<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: '. mysql_error());
}
if($_SERVER['REQUEST_METHOD']=="POST")
	{
		if(isset($_POST["Update"]))
		{
$newnum=mysql_real_escape_string($_POST['newnum']);
$addar=$_SESSION['AadharNumber'];
$addar1=$_SESSION['AadharNumber'];
$sql = "UPDATE aadardetails SET MobileNo=$newnum WHERE AadharNumber=$addar";

$sql1 = "UPDATE register SET MobileNo=$newnum WHERE AadharNumber=$addar1";

mysql_select_db('ticket');
$retval = mysql_query( $sql, $conn );
$retval1 = mysql_query( $sql1, $conn );


if(! $retval && $retval1)
{
  die('Could not update data: ' . mysql_error());
}
print  '<script>alert("Updated data successfully")</script>';
//mysql_close($conn);
		}
		if(isset($_POST["Request"]))
		{
			$newnum=$_GET["oldnum"];
			$addar=$_SESSION['AadharNumber'];
			echo date('Y-m-d G:i:s');
			$sql = "insert into ticketrequest(AadharNum,MobileNumber,Date,Status) values('$addar','$newnum','".date('Y-m-d')."','Pending')";
			mysql_select_db('ticket');
			$retval1 = mysql_query( $sql, $conn );
			if(!$retval1)
{
  die('Could not sent Request data: ' . mysql_error());
}
print  '<script>alert("Request sent successfully")</script>';
		}
}

?>


<div style="color: #0A2CF0; font-size: 16px; position: absolute; left: 1166px; top: 49px;">
<a href="userdetails1.php">Back</a>&nbsp;&nbsp;<a href="index1.php">Logout</a>
</div>

<div style="width:1350px; height:100px; background-image:url(images/tooplate_top.png)"><br /><br />
   <label style="font-size:30px; font-family:'Times New Roman', Times, serif; color:#FFF; margin-left:600px">			<br />
      <br />
      <br />
      <br />
      <br />
      
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
     &nbsp;&nbsp;&nbsp;&nbsp; 
    
     User Details</label>
   
   
  <br />
  <br />
  
 
 
   <center> 
 <table width="511" height="200">
 <tr>
 <td height="68">
 Old Mobile Number:
 </td>
 <td>
 <input type="text" value="<?php echo $_GET["oldnum"]; ?>" name="old"/>
 </td>
 </tr>
 <tr>
  <td height="69">
 New Mobile Number:
 </td>
 <td>
 <input type="text" value="" name="newnum"/>
 </td>
 </tr>
 
 
 <tr>
  <td height="69">
 Aadhar Number:
 </td>
 <td>
 <input type="text" value="<?php echo $_SESSION['AadharNumber'];?>" name="aadhar" readonly="readonly"/>
 </td>
 </tr>
 
 
 
 
 
 
 <tr>
 <td height="53" colspan="2" align="center"><input type="submit" name="Update" value="Update" /><input type="submit" name="Request" value="Request"/>
 </td>
 </tr>
 </table>
</center>


 <div id="tooplate_mid_wrapper"></div>
</div> <!-- end of header -->

<br /><br /><br /><br /><br /><br />
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<div id="tooplate_cr_bar_wrapper" style="margin-bottom:-200px; position:absolute">
	<div id="tooplate_cr_bar">
	Copyright © 2016 <a href="#">Company Name</a>
    </div>
</div>
</form>

</body>
</html>