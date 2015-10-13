<?php
session_start();
if(isset($_POST['email'])!=null&&isset($_POST['password'])!=null)
{
  $logemail=$_POST['email'];
  $logpassword=md5($_POST['password']);
  include('pass.php');
  $connection = mysql_connect($servername, $username, $password);
  $logemail = stripslashes($logemail);
  $logpassword = stripslashes($logpassword);
  $logemail = mysql_real_escape_string($logemail);
  $logpassword = mysql_real_escape_string($logpassword);
  $db = mysql_select_db($dbname, $connection);


  $query = mysql_query("select * from `alumni` where password='$logpassword' AND email='$logemail'", $connection);
  $rows = mysql_num_rows($query);
  if ($rows == 1) {
  $_SESSION['login_user']=$logemail;

  	header("location: user.php");



  } else {
  header("location: index.php?err=invalidPass");
  }
  mysql_close($connection); // Closing Connection

}
else {
  header("location: index.php?err=invalidLogin");
}

?>
