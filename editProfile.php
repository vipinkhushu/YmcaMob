<?php
include('pass.php');
include('session.php');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['phoneno'])!=null&&isset($_POST['address'])!=null)
{
  $phone=mysqli_real_escape_string($conn,stripslashes($_POST['phoneno']));
  $address=mysqli_real_escape_string($conn,stripslashes($_POST['address']));

$sql="UPDATE `alumni`  SET `phone` = '$phone' , `address` = '$address' WHERE `email` = '$user_check';";
		if ($conn->query($sql) === TRUE) {

			//echo "Error:<br>Error Details:-  " . $sql . "<br>" . $conn->error;
		header("location: user.php?msg=changesupdateSuccess");
		}
else
{
 header("location: user.php?msg=changesupdateFail");
}
}
else
{
 header("location: user.php?msg=changesupdateFail");
}






$conn->close();
?>
