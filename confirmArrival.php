<?php
include('pass.php');
include('session.php');
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['value']))
{
$id=$_POST['value'];

$sql="UPDATE `alumni` SET `applicationStatus` = '$id' WHERE `email` = '$user_check';";
		if ($conn->query($sql) === TRUE) {
		header("location: user.php");
		//echo "Error:<br>Error Details:-  " . $sql . "<br>" . $conn->error;
		}
else
{
   header("location: user.php");
}

}


else
{
   header("location: mobAdmin.php?msg=ErrorActPay");
}


$conn->close();
?>
