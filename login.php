<html>
<head>
<link href="login-box.css" rel="stylesheet" type="text/css" />
</head>
</html>
<?php
session_start();
$year = time() + 31536000;
$user=$_POST['username'];
$pass=$_POST['password'];

if(isset($_POST['remember'])) {
setcookie('id', $_POST['username'], $year);
setcookie('pass', $_POST['password'], $year);
}
elseif(!isset($_POST['remember'])){
	$past = time() - 100;
	if(isset($_COOKIE['id'])) {
		
		setcookie('id', gone, $past);
	}
	if(isset($_COOKIE['pass']))
	{
		setcookie('pass', gone, $past);
	}
}

$con = mysql_connect("mysql.serversfree.com" ,"u109541111_ak" , "blue113","u109541111_users");
if(!$con)
{
die('could not connect'.mysql_error());
}
mysql_select_db("u109541111_users" , $con);
$q="select name,userName,pass from users where userName='$user' and pass='$pass'";
$result=mysql_query($q, $con);
if(!$result)
{
	die('Could not enter data: ' . mysql_error());
}

$row = mysql_fetch_row($result);

if($row>0)
$_SESSION['current_user'] = $row[0];

if(isset($_SESSION['current_user']))
{
	$_SESSION['wrong']=false;
	echo header("Location:logged.php");
}
else
{
	$_SESSION['wrong']=true;
	echo header ("Location:form.php");
}

?>