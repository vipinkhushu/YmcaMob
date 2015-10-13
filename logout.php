<?php
session_start();
unset($_COOKIE["vipin"]);
$res=setcookie("vipin",'',time()-3600);
if(session_destroy()) // Destroying All Sessions
{
header("Location: index.php"); // Redirecting To Home Page
}

?>
