<?php
include('pass.php');
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email=$user_check;
$sql="UPDATE `alumni` SET `loginTime` = now() WHERE `email` = '$email';";
		if ($conn->query($sql) === TRUE) {
		//header("location: admin.php?msg=actSuccess");
		//echo "Error:<br>Error Details:-  " . $sql . "<br>" . $conn->error;
		}
else
{
   //header("location: mobAdmin.php?msg=ErrorAct");
}




$conn->close();
?>
