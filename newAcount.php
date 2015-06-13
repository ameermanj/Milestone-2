<html>
<head>
<title>Sign Up</title>
<link href="login-box.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="login-box">

<H2>Sign Up</H2>

<form action = "submit.php" method="post">

<div id="login-box-name">
Name:</div><div id="login-box-field" ><input type='text' input name='name' class="form-login" title="name"size="30" maxlength="30" /></div>
<div id="login-box-name">
User Name:</div><div id="login-box-field" ><input type='text' input name='username' class="form-login" title="Username" size="30" maxlength="30" /></div>
<div id="login-box-name">
Email:</div><div id="login-box-field" ><input type='text' input name='email' class="form-login" title="Email" size="30" maxlength="40" /></div>
<div id="login-box-name">
Password:</div><div id="login-box-field"><input name="password" type='password' class="form-login" title="Password" size="30" maxlength="15" /></div>

<div id="submit">
<input type='image' src="http://www.clker.com/cliparts/s/k/f/S/M/A/submit-button-png-md.png" width="103" height="42"name='login' />
</div>
</form>
<?php
session_start();

if(!isset($_SESSION['notfill']))
	$_SESSION['notfill'] = false;

if($_SESSION['notfill'])
{
	echo '<p> You did not fill out the required field(s).</p>';
	$_SESSION['notfill'] = false;
}

if(!isset($_SESSION['duplicate']))
	$_SESSION['duplicate'] = false;

if($_SESSION['duplicate'])
{
	echo '<p> User name or Email already exist please try with different Email or user name.</p>';
	$_SESSION['duplicate'] = false;
}
?>

</div>

</body>
</html>