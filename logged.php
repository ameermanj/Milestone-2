<?php
session_start();
if(isset($_POST['logout']))
	unset($_SESSION['current_user']);

if(!isset($_SESSION['current_user']))
{
	header("Location:form.php");
}
?>
<html>
<head>
<link href="login-box.css" rel="stylesheet" type="text/css" />
</head>

<body>
<p>Successfully Login </br> your name is:  <?php echo $_SESSION['current_user'];?></p>

<form action="logged.php" method = "post">
<input type="submit" id="logout" name='logout'value="Logout"/>
</form>

</body>

</html>
