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
 <form action="#" method="get">
 </form>
            
            
            </div>

</div>

    </div>
    
    <br /> <br /> <br /> <br /> <br />
<div style="color: #0A2CF0; font-size: 16px; position: absolute; left: 1166px; top: 49px;">
<a href="adminview.php">Back</a> &nbsp;  &nbsp;&nbsp;<a href="index1.php">Logout</a>
</div>
<body>

<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
	$aadhar=$_POST['Aadhar'];
	$mobile=$_POST['Mobile'];
	$Source=$_POST['Source'];
	$Dest=$_POST['Destination'];
	$Time=$_POST['Time'];
	$Date=$_POST['Date'];
	$Class=$_POST['Class'];
	$Birth=$_POST['Birth'];
	$Cost=$_POST["Cost"];
	$Seat=$_POST['seatno'];
	$otp = mt_rand(10000, 99999);
	$con=mysql_connect("localhost","root","");
	mysql_select_db("ticket");
	$text="Thank you for using Ticket Reservation, your Journey is confirmed Your OTP Number".$otp." Aadhar number".$aadhar.",".$mobile."From".$Source."To".$Dest."On".$Date.",".$Time."in".$Class.",".$Birth.",Total Cost".$Cost."Seat No: ".$Seat;
    $sender_mobile  =   $mobile;
    $message_text   =   $text;
    $fp = fopen("http://bhashsms.com/api/sendmsg.php?user=uniq&pass=123456&sender=UNIQTE&phone=".$sender_mobile."&text=".urlencode($message_text)."&priority=ndnd&stype=normal","r");
	$response = stream_get_contents($fp); 
	echo "Success : ".$response;
    //exit;
	$result1 = mysql_query("insert into traveldetails(AadharNum,MobileNumber,Source,Destination,Time,Date,Class,Couch,Cost,Seat,OTP) values('$aadhar','$mobile','$Source','$Dest','$Time','$Date','$Class','$Birth','$Cost','$Seat','$otp');");
$result=mysql_query("update ticketrequest set Status='Completed' where AadharNum='$aadhar'");
	if($result1)
	{
		print  '<script>alert("Confirmed successfully")</script>';
	}
}

else
{
	$s=$_POST['Source'];
$d=$_POST['Destination'];


if($s==$d)
{
	print  '<script>alert("Source and destnations are same")</script>';
	
}
}

?>
<form method="post" action="#">
<center>

<table width="437" height="396" >
  <tbody>
    <tr>
      <td>AadharNumber</td>
      <td><input type="text" name="Aadhar" value="<?php echo $_GET["AadharNum"]; ?>" readonly="readonly" /></td>
    </tr>
    <tr>
      <td>MobileNumber</td>
      <td><input type="text" name="Mobile" value="<?php echo $_GET["Mobile"]; ?>" required="required" /></td>
    </tr>
    <tr>
      <td>Source</td>
      <td><!--<input type="text" name="Source"/>-->
      <select name="Source" style="width:200px" required="required">
      <option value="Chennai">Chennai</option>
      <option value="Trichy">Trichy</option>
      <option value="Coimbatore">Coimbatore</option>
      <option value="Madurai">Madurai</option>
      </select>
      </td>
    </tr>
    <tr>
      <td>Destination</td>
      <td>
      <select name="Destination" style="width:200px" required="required">
      <option value="Chennai">Chennai</option>
      <option value="Trichy">Trichy</option>
      <option value="Coimbatore">Coimbatore</option>
      <option value="Madurai">Madurai</option>
      </select>
      </td>
    </tr>
    <tr>
      <td>Time</td>
      <td><input type="text" name="Time" required="required"/></td>
    </tr>
    <tr>
      <td>Date</td>
      <td><input type="date" name="Date" required="required"/></td>
    </tr>
    <tr>
      <td>Class</td>
      <td>
      
       <select name="Class" style="width:200px" required="required">
      <option value="First Class">First Class</option>
      <option value="Second Class">Second Class</option>
      <option value="Third Class">Third Class</option>
     
      </select>
      
      </td>
    </tr>
    <tr>
      <td>Birth</td>
      <td><select name="Birth" style="width:200px" required="required">
        <option value="Lower">Lower</option>
        <option value="Middle">Middle</option>
        <option value="Upper">Upper</option>
      </select>
      </td>     
    <tr>
      <td>Cost</td>
      <td><input type="text" name="Cost" required="required"/></td>
      
    </tr>
    <tr>
      <td>Seat Number</td>
      <td><input type="text" name="seatno" required="required"/></td>
    </tr>
  </tbody>
</table>
<h3>&nbsp;</h3>
<h3>&nbsp;</h3>
<h3>&nbsp;</h3>
<h3>
  <input type="submit" value="Submit"/>
</h3>
</center>

</form>
<div id="tooplate_cr_bar_wrapper" style="margin-bottom:-200px; position:absolute">
	<div id="tooplate_cr_bar">
	Copyright © 2017 <a href="#">Company Name</a>
    </div>
</div>
 </form>
</body>
</html>

