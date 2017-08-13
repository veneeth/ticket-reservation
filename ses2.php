<?php
session_start();
if(isset($_SESSION['name']))
{
	
}
else
{
	header("Location: ses1.php");
}
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>


<body>

<form method="post">
<a href="ses1.php" name="logout">log out</a>

<?php

echo 'welcome   '.$_SESSION['name'];


	if(isset($_SESSION['name']))
	unset($_SESSION['name']);
	session_destroy();
	
?>
</form>
</body>
</html>