
<html>
<head>
<title>Login Box</title>
<link href="login-box.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div id="login-box">

<H2>Login</H2>

<form action = "login.php" method="post">

<div id="login-box-name">
User Name:</div><div id="login-box-field" ><input type='text' input name='username' class="form-login" title="Username" <?php if(isset($_COOKIE['id']))echo "value = ".$_COOKIE['id']; ?> size="30" maxlength="2048" /></div>

<div id="login-box-name">
Password:</div><div id="login-box-field"><input name="password" type="password" class="form-login" title="Password" <?php if(isset($_COOKIE['pass']))echo "value = ".$_COOKIE['pass'];?> size="30" maxlength="2048" /></div>
<div id="remember">
<input type="checkbox" name="remember" <?php if(isset($_COOKIE['id'])) echo "checked =check"?> >Remember me</div>
<div id="newid"><a href ="newAcount.php">Create new account</a></div>
<div id="button">
<input type='image' src="http://www.clker.com/cliparts/m/m/x/r/J/6/login-button-png-hi.png" width="103" height="42"name='login' />
</div>
</form>



<?php
session_start();
if(!isset($_SESSION['wrong']))
	$_SESSION['wrong'] = false;

if($_SESSION['wrong'])
{
	echo"<p>User name or password incorrect</p>";
	$_SESSION['wrong'] = false;
}
	
?>


</div>

</body>
</html>
