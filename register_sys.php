<?php
 include('pass.php');
 $conn = new mysqli($servername, $username, $password, $dbname);
 if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  if(isset($_POST['fname'])!=null&&isset($_POST['lname'])!=null
  &&isset($_POST['email'])!=null&&isset($_POST['password'])!=null
  &&isset($_POST['phoneno'])!=null&&isset($_POST['fathersname'])!=null
  &&isset($_POST['address'])!=null&&isset($_POST['ug'])!=null
  &&isset($_POST['pg'])!=null&&isset($_POST['passyear'])!=null)
{
$fname=mysqli_real_escape_string($conn,stripslashes($_POST['fname']));
$lname=mysqli_real_escape_string($conn,stripslashes($_POST['lname']));
$email=mysqli_real_escape_string($conn,stripslashes($_POST['email']));
$password=md5(mysqli_real_escape_string($conn,stripslashes($_POST['password'])));
$phoneno=mysqli_real_escape_string($conn,stripslashes($_POST['phoneno']));
$fathername=mysqli_real_escape_string($conn,stripslashes($_POST['fathersname']));
$address=mysqli_real_escape_string($conn,stripslashes($_POST['address']));
$ug=mysqli_real_escape_string($conn,stripslashes($_POST['ug']));
$pg=mysqli_real_escape_string($conn,stripslashes($_POST['pg']));
$passyear=mysqli_real_escape_string($conn,stripslashes($_POST['passyear']));
if($ug=="--Choose")
{
  $ug=0;
}
else if ($pg=="--Choose") {
  $pg=0;
}
$sql = "INSERT INTO `alumni` (`firstName`, `lastName`, `email`, `password`, `fathersName`, `address`, `ug`, `pg`, `year`, `phone`)
VALUES ('$fname', '$lname', '$email', '$password', '$fathername', '$address', '$ug', '$pg', '$passyear', '$phoneno');";
if ($conn->query($sql) === TRUE) {
//echo("Student Data Entered");
session_start();
$_SESSION['login_user']=$email;
header("location: user.php?msg=Success");
}
else {
    //echo "Error In Student Zone:<br>Error Details:-  " . $sql . "<br>" . $conn->error;
header("location: register.php?err=errorReg");
}
}
else {
  header("location: register.php?err=incompleteForm");
}
?>
