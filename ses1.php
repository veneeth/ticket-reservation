<?php
session_start();
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>



<form method="post">
<table width="304" height="152" border="1">
  <tbody>
    <tr>
      <td>User Name</td>
      <td><input type="text" name="uname" required="required"></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><input type="text" name="pwd"></td>
    </tr>
    <tr>
      
      <td><input type="submit" name="submit"></td>
    </tr>
  </tbody>
</table>

<?php

 if (isset($_POST['submit']))
 {
$uname= $_POST['uname'];
$_SESSION['name']=$uname;
header("Location: ses2.php");

 }
?>
	
</form>



</body>
</html>