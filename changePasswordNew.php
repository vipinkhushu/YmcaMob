<?php
include('pass.php');
include('session.php');
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['oldpassword'])!=null&&isset($_POST['newpassword1'])!=null)
{
$old=md5($_POST['oldpassword']);
$new=md5($_POST['newpassword1']);
$found=-1;
//echo $old."<br>".$new."<br/>".$user_check;
$sql="SELECT * FROM alumni where `email`='$user_check' AND `password`='$old'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
      //echo $row["id"];
      $found=$row["id"];
/**/

}
}
if($found!=-1)
{
  $sql = "UPDATE `alumni` SET `password`='$new' WHERE `id`='$found'";
  if ($conn->query($sql) === TRUE) {
      //echo "Record updated successfully";
      header("location: user.php?message=passChanged");
  } else {
      //echo "Error updating record: " . $conn->error;
        header("location: user.php?message=passChangeError");
  }
}
else {
header("location: user.php?message=passChangeError");
}

}


else
{
   header("location: user.php?message=passChangeError");
}


$conn->close();
?>
