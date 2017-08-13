<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<?php
session_start();


	if(isset($_SESSION['login']))
	{
		session_unset(); 
		session_destroy();
		unset($_SESSION['uname']);
		header('Location:session.php');
}
	

if(isset($_POST['submit']))
{
	

	$uname=$_POST['uname'];
	$pwd=$_POST['pwd'];
	
if($uname=='admin' && $pwd=='admin')
{
	
	
	$_SESSION['uname']=$uname;
	header('Location:session1.php');
}
else
{
	echo 'Invalid';
}
	
	
	
		
}

?>



<form method="post">

<table width="304" height="152" border="1">
  <tbody>
    <tr>
      <td>User Name</td>
      <td><input type="text" name="uname"></td>
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
</form>

</body>
</html>