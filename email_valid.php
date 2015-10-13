<?php
include('pass.php');
mysql_connect($servername,$username,$password);
mysql_select_db($dbname);

if(isset($_POST['email']))
{
	$email_address = mysql_real_escape_string(trim($_POST['email']));
	$sql = "SELECT `email` FROM `alumni` WHERE `email` = '$email_address'";
	$myquery = mysql_query($sql) or die(mysql_error());
	if(mysql_num_rows($myquery) !=0)
	{
		echo 'exist';
	}
	else
	{
		echo 'not exist';
	}
}
?>
