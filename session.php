<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
include('pass.php');
$connection = mysql_connect($servername, $username, $password);
// Selecting Database
$db = mysql_select_db($dbname, $connection);
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysql_query("select email from `alumni` where email='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session = $row['email'];
if(!isset($login_session)){
mysql_close($connection); // Closing Connection
header('Location: index.php'); // Redirecting To Home Page
if($login_session==null)
  {
    mysql_close($connection); // Closing Connection
    header('Location: index.php'); // Redirecting To Home Page

  }
}
else if($login_session==null)
  {
    mysql_close($connection); // Closing Connection
    header('Location: index.php'); // Redirecting To Home Page

  }
else {
  setcookie('vipin','1',0);

}
?>
