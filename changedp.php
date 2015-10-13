<?php
include('pass.php');
include('session.php');
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$ev_ok=0;
$username=$user_check;
if(isset($_FILES['uploaded'])) {
    if($_FILES['uploaded']['error'] == 0) {

$ok=0;
function findexts ($filename) {
$filename = strtolower($filename) ;
 $exts = split("[/\\.]", $filename) ;
 $n = count($exts)-1;
 $exts = $exts[$n];
 return $exts;
 }

 $ext = findexts ($_FILES['uploaded']['name']) ;
 $ran2 = md5($username);
 $target = "dp/";
 $target = $target.$ran2.".".$ext;
$ext_check=0;
if($ext=="jpg"||$ext=="png"||$ext=="jpeg")
{
  $ext_check=1;
}
if($ext_check==1)
{

$ok=1;
$ev_ok=1;
 $_SESSION["ftype"]="$ext";
}
else{
	$ev_ok=0;
	//echo"Sorry! We accept Only MS Word,MS Excel,MS Powerpoint,PDF,JPG,PNG Files";
header("location: user.php?message=ErrorExt");
}




if($ok==1)
{
 if(move_uploaded_file($_FILES['uploaded']['tmp_name'], $target))
 {
   $sql = "UPDATE `alumni` SET `dp`='$ran2.$ext' WHERE `email`='$user_check'";

   if ($conn->query($sql) === TRUE) {
   //echo("link updated");
   header("location: user.php?message=Success");
   } else {
   	$ev_ok=0;
       //echo "Error In link updation:<br>Error Details:-  " . $sql . "<br>" . $conn->error;
   header("location: user.php?message=ErrorDataAdd");

   }

}

else
{
$ev_ok=0;
header("location: user.php?message=ErrorExt");
}


	}



	}
	else
	{
		$ev_ok=0;
		header("location: user.php?message=ErrorDataAdd");

	}
}
else
{
	$ev_ok=0;
	header("location: user.php?message=ErrorDataAdd");
}







$conn->close();

?>
