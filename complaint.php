<?php
 include('pass.php');
 $conn = new mysqli($servername, $username, $password, $dbname);
 if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  if(isset($_POST['type'])!=null&&isset($_POST['email'])!=null
  &&isset($_POST['phone'])!=null&&isset($_POST['problem'])!=null)
{
$type=mysqli_real_escape_string($conn,stripslashes($_POST['type']));
$email=mysqli_real_escape_string($conn,stripslashes($_POST['email']));
$phone=mysqli_real_escape_string($conn,stripslashes($_POST['phone']));
$problem=mysqli_real_escape_string($conn,stripslashes($_POST['problem']));
$uri=$_POST['uri'];

$sql = "INSERT INTO `contact` (`type`, `email`, `phone`, `problem`)
VALUES ('$type', '$email', '$phone', '$problem');";
if ($conn->query($sql) === TRUE) {
//echo("Contact Data Entered");
header("location: $uri?msg=msgSuccess");
}
else {
    //echo "Error In Student Zone:<br>Error Details:-  " . $sql . "<br>" . $conn->error;
header("location: $uri?err=errorMsg");
}
}
else {
  //echo "Error In Student Zone:<br>Error Details:-  " . $sql . "<br>" . $conn->error;
//echo "incomplete data";
  header("location: $uri?err=errMsg");
}
?>
