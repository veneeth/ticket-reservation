<?php

session_start();

$_SESSION['login']=1;

echo "Welcome             " .$_SESSION['uname'];


echo "<a href=session.php?logout=1>Logout</a>";


if(isset($_POST['logout']))
{
	session_destroy();
	header('Location:session.php');
}


?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>




</body>
</html>