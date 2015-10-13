<?php
include('session.php');
include('log.php');
if($user_check=="vipinkhushu@hotmail.com")
header("location: mobAdmin.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta http-equiv="content-language" content="en">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>My Account | YMCA Mob 2015 - Meet Your Old budies [YMCA Univeristy Of Science And Technology]</title>
  <meta name="description" content="Alumni Website For YMCA University Of Science And Technology, Faridabad, India">
  <meta name="keywords" content="alumni,website,ymca,ymcaust,faridabad,india,mathura,road">
  <meta name="copyright" content="YMCA UST">
  <meta name="author" content="vipinkhushu@hotmail.com ">
  <link rel="icon" href="media/images/favicon.ico">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <link href="style/ymcamob.css" rel="stylesheet">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="https://use.fonticons.com/1ddea501.js"></script>
  <script src="http://maps.googleapis.com/maps/api/js"></script>
  <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
  <script type="text/javascript" src="email_check.js"></script>

  <script>
  function loadMap() {

    var mapOptions = {
      center:new google.maps.LatLng(28.3677046, 77.3170066),
      zoom:16,
      mapTypeId:google.maps.MapTypeId.ROADMAP
    };

    var map = new google.maps.Map(document.getElementById("sample"),mapOptions);
    var marker = new google.maps.Marker({
      position: new google.maps.LatLng(28.3677046, 77.3170066),
      map: map,
    });
  }

  google.maps.event.addDomListener(window, 'load', loadMap);
  </script>
  <meta property="og:title" content="YMCA MOB | Alumni Website For YMCA University Of Science And Technology, Faridabad, India"/>
  <meta property="og:image" content="http://www.ymcaustmob.com/images/ymca_logo.png"/>
  <meta property="og:url" content="http://www.ymcaustmob.com/"/>
  <meta property="og:type" content="website"/>
  <meta property="og:description" content="YMCA MOB | Meet Our Buddies | The Alumni Website For YMCA University Of Science And Technology, Faridabad, India Designed, Maintained And Developed By Vipin Khushu (vipinkhushu@hotmail.com)"/>

</head>
<body>
  <!-- Header -->
  <header>
    <nav class="navbar navbar-default" style="height:30px;min-height:30px;">
      <div class="container-fluid" >
        <div class="hidden-xs">

          <a class="navbar-brand" style="padding:0px;margin-left:5px;" href="http://www.ymcaust.ac.in">
            <span  style="font-size:12px;" class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>
            <span style="font-size:12px;">Back To YMCAUST's Website</span>
          </a>

        </div>
        <div class="navbar-header pull-right">
          <a href="#"><i class="icon icon-facebook-square icon-2x"></i></a>
          <a href="#"><i class="icon icon-linkedin-square icon-2x"></i></a>
          <a href="#"><i class="icon icon-twitter-square icon-2x"></i></a>
          <a href="#"><i class="icon icon-envelope-square icon-2x"></i></a>
        </div>
      </div>
    </nav>
  </header>
  <!-- Header -->
  <!--Title-->

  <div class="container-fluid" style="margin-top:0px;border-bottom:2px solid #e7e7e7;">
    <div class="container pull-left" style="margin-left:80px;">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
          <center><img src="images/ymca_logo.png" width="160px" height="160px" alt="YMCA logo" title="YMCA Logo"></center>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 text-left">
          <h1 style="font-family: 'Lato', sans-serif;">YMCAUST MOB</h1>

          <h3 style="font-family: 'Pacifico', cursive;">The Alumni Website Of YMCA University</h3>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
          <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
            <br/><br/>
            <a href="index.php">
              <button class="btn btn-primary" type="button"><span class="glyphicon glyphicon-envelope"></span>&nbsp;Home</button>
            </a>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
            <br/><br/>
            <a href="#">
              <button class="btn btn-primary" type="button"><span class="glyphicon glyphicon-log-in"></span>&nbsp;Donate Online</button>
            </a>

          </div>


          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <br/><br/>
            <a href="logout.php">
              <button class="btn btn-primary" type="button"><span class="glyphicon glyphicon-log-in"></span>&nbsp;Logout</button>
            </a>

          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Title Ends-->
  <br/>
  <div class="container" style="min-height:500px;">
    <div class="row">
      <span class="pull-right">Welcome <?php  echo $user_check; ?> </span>
      <div class="col-xs-12 col-sm-12 col-lg-3 col-md-3 leftcol">
        <center>

          <?php
          include('pass.php');
          $conn = new mysqli($servername, $username, $password, $dbname);
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }
          $sql="SELECT * FROM alumni where `email`='$user_check'";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              $_SESSION["dp"]=$row["dp"];
              $_SESSION["app"]=$row["applicationStatus"];
              $_SESSION["address"]=$row["address"];
              $_SESSION["phone"]=$row["phone"];
            }
          }
          ?>
          <a href="" data-toggle="modal" data-target="#dpModal">
            <div class="imageHolder">
              <img src="dp/<?php echo $_SESSION["dp"]?>" alt="Your DP" style="width:200px;height:200px;" class="img-thumbnail"><br/><br/>
              <div class="show">
                <p style="text-shadow: 0 0 3px #FFFFFF, 0 0 5px #0000FF;"><b>Change Picture</b></p>

              </div>
            </div></a>


          </center>
          <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
          <!--  <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">
                  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <a href="#">Pay For MOB 2015 <span class="badge">New</span></a>
                  </a>
                </h4>
              </div>
              <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">

              </div>
            </div>-->
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingTwo">
                <h4 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <a href="#">Donate Online</a>
                  </a>
                </h4>
              </div>
              <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">

              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingThree">
                <h4 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <a href="" data-toggle="modal" data-target="#updateModal">Edit Your MOB Profile</a>
                  </a>
                </h4>
              </div>
              <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">

              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingThree">
                <h4 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <a href="" data-toggle="modal" data-target="#helpModal">Contact Us</a>
                  </a>
                </h4>
              </div>
              <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">

              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingThree">
                <h4 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <a href="" data-toggle="modal" data-target="#passwordModal">Change Password</a>
                  </a>
                </h4>
              </div>
              <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">

              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingThree">
                <h4 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <a href="logout.php">Logout</a>
                  </a>
                </h4>
              </div>
              <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">

              </div>
            </div>

          </div>

        </div>
        <div class="col-xs-12 col-sm-12  col-lg-8 col-md-8 " style="background-color:rgb(247, 247, 249);margin-left:5%;min-height:200px;">
          <h3 class="text-center">Annual Alumni Meet MOB 2015</h3>
<br/>

          <center>
            <p style="font-size:25px">Do You Want To Attend Annual Alumni Meet (MOB 2015?)</p><br/>
<div class="row">
            <form action="confirmArrival.php" method="post">
              <input type="text" value="1" hidden="hidden" name="value">
              <?php
                  if($_SESSION["app"]==1)
                  {
                    echo " <center> <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'><button type='submit' class='btn btn-success'>You Have Confirmed Your Arrival</button></center>";
                  }
                  else if($_SESSION["app"]==0)
                  {
                    echo "  <div class='col-lg-6 col-md-6 col-sm-12 col-xs-12'><button type='submit' class='btn btn-success'>Yes! Count Me In</button>";

                  }
               ?>

              </div>
            </form>
            <div class="col-lg-6 col-md-6">
              <form action="confirmArrival.php" method="post">
                <input type="text" value="-1" hidden="hidden" name="value">
                <?php
                    if($_SESSION["app"]==-1)
                    {
                      echo "  <center><div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'><button type='submit' class='btn btn-warning'>You Have Rejected The Invitation</button></center>";
                    }
                    else if($_SESSION["app"]==0)
                    {
                      echo "  <div class='col-lg-6 col-md-6 col-sm-12 col-xs-12'><button type='submit' class='btn btn-warning'>No, I Cant Attend</button>";

                    }
                 ?>
          </form>
          </div>
          </center>
        </div>

      </div>


    </div>






    <!-- footer -->
    <footer>
      <nav class="navbar navbar-default" style="min-height:30px;margin-bottom:0px;">
        <div class="container-fluid" >
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4"><br/><h3>Reach Us</h3>
                <span class="glyphicon glyphicon-home"></span> NH-2, Sector-6, Mathura Road,<br/>&nbsp;&nbsp; &nbsp;Faridabad- 121006<br/>
                &nbsp;&nbsp; &nbsp;Haryana (INDIA)<br/>
                <span class="glyphicon glyphicon-globe"></span> <a href="http://www.ymcamob.com">http://www.ymcaustmob.com</a> <br/>
                <span class="glyphicon glyphicon-globe"></span> <a href="http://www.ymcaust.ac.in">http://www.ymcaust.ac.in</a><br/>
                <span class="glyphicon glyphicon-link"></span> help@ymcamob.com<br/>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <br/><h3>Join Us On</h3><br/>
                <a href="#"><i class="icon icon-facebook-square icon-3x"></i></a>
                <a href="#"><i class="icon icon-linkedin-square icon-3x"></i></a>
                <a href="#"><i class="icon icon-twitter-square icon-3x"></i></a>
                <a href="#"><i class="icon icon-envelope-square icon-3x"></i></a>
                <br/><br/>
              </div>

              <br/>
              <div  id = "sample" class="col-xs-12 col-sm-12 col-md-4 col-lg-4" style = "width:300px; height:200px;">

              </div>
            </div>
          </div>
        </div>
      </nav>
    </footer>

    <!-- Footer-->
    <!--Modal Data--->
    <!--Invalid Pass Data--->
    <?php
    if(isset($_GET['err']))
    {
      $error=$_GET['err'];
      if($error=='invalidPass'){
        echo"<script type='text/javascript'>
        $(window).load(function(){
          $('#myModal').modal('show');
        });
        </script>";
      }

    }
    if(isset($_GET['msg']))
    {
      $msg=$_GET['msg'];
      if($msg=='msgSuccess'||$msg="changesupdateSuccess"){
        echo"<script type='text/javascript'>
        $(window).load(function(){
          $('#msgModal').modal('show');
        });
        </script>";
      }
    }
    if(isset($_GET['message']))
    {
      $msg=$_GET['message'];
      if($msg=='Success'||$msg=='ErrorExt'||$msg=='passChanged'||$msg=='passChangeError')
      {
        echo"<script type='text/javascript'>
        $(window).load(function(){
          $('#msgModal').modal('show');
        });
        </script>";
      }
    }

    ?>

    <!--Invalid Pass Data Ends-->
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Alumni Login</h4>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <form action="login.php" method="post">
                <label for="username">Email</label>
                <div class="input-group">
                  <div class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></div>

                  <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>

                </div>

              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <div class="input-group">
                  <div class="input-group-addon"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></div>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                </div></div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Forgot Passoword</button>
                <button type="submit" class="btn btn-primary">Login</button>
              </form>
            </div>
          </div>
        </div>
      </div>

      <!--Modal-->
      <!-- gotoPayment Notice-->
      <div class="modal fade" id="gotoPaymentModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Notice</h4>
            </div>
            <div class="modal-body">
              We will verify your data soon and will notify you when its done via Email and Sms.<br/>
              Till then go to Step 2 and continue paying INR 500.00 as Registration Fee.
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

            </form>
          </div>
        </div>
      </div>
    </div>

    <!--Modal-->

    <!-- gotoPayment Notice Ends-->
    <!-- Contact Us | Modal-->
    <div class="modal fade" id="helpModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Contact Us | Alumni Help </h4>
          </div>
          <div class="modal-body">
            <form action="complaint.php" method="post">
              <div class="form-group">
                <label for="type">Type Of Problem</label>
                <div class="input-group">
                  <div class="input-group-addon"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span></div>
                  <input type="text" value="<?php echo $_SERVER['REQUEST_URI']; ?>" name="uri" hidden="hidden">
                  <select class="form-control" Id="type" name="type">
                    <option>--Choose</option>
                    <option value="loginhelp">Login Help</option>
                    <option value="registerhelp">Register Help</option>
                    <option value="webProblem">Overall Website Related Problem</option>
                    <option value="passEmail">Regarding Passwords And Emails</option>
                    <option value="accVerify">Regarding Account Verification</option>
                    <option value="paymentIssues">Regarding Payment Issues</option>
                    <option value="peymentConfirmation">Payment Confirmation Issues</option>
                    <option value="query">General Query</option>
                    <option value="feedback">Feedback</option>
                    <option value="others">Others</option>
                  </select>

                </div>

              </div>
              <div class="form-group"style="display:none;">
                <label for="username">Email</label>
                <div class="input-group">
                  <div class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></div>

                  <input type="email" class="form-control" id="email" value="<?php echo $user_check; ?>"  name="email" placeholder="Email"  required>

                </div>

              </div>
              <div class="form-group">
                <label for="username">Phone No.</label>
                <div class="input-group">
                  <div class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></div>

                  <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number" required>

                </div>

              </div>
              <div class="form-group">
                <label for="problem">Explain In Detail</label>
                <textarea class="form-control" rows="3"  name="problem" id="problem"></textarea>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!--Contact Us Modal | Ends-->
    <!-- Change Password | Modal-->
    <div class="modal fade" id="passwordModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Change Password </h4>
          </div>
          <div class="modal-body">
            <form action="changePasswordNew.php" method="post" id="passForm">
              <div role="alert" id="err1"></div>
              <div class="form-group">
                <label for="oldpassword">Current Password</label>
                <div class="input-group">
                  <div class="input-group-addon"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></div>

                  <input type="password" class="form-control" id="oldpassword" name="oldpassword" placeholder="Current Password" required>

                </div>

              </div>
              <div class="form-group">
                <label for="newpassword1">New Password</label>
                <div class="input-group">
                  <div class="input-group-addon"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></div>

                  <input type="password" class="form-control" id="newpassword1" name="newpassword1" placeholder="New Password" required>

                </div>

              </div>
              <div class="form-group">
                <label for="newpassword2">Comfirm New Password</label>
                <div class="input-group">
                  <div class="input-group-addon"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></div>

                  <input type="password" class="form-control" id="newpassword2" name="newpassword2" placeholder="Repeat New Password" required>

                </div>

              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" onClick="return validatePass()" >Change Password</button>
            </form>
            <script>
            function validatePass(){
              var x = document.forms["passForm"]["newpassword1"].value;
              var y = document.forms["passForm"]["newpassword2"].value;
              //  alert(x);
              if(x!=y)
              {
                document.getElementById('err1').className = "alert alert-danger alert-dismissible fade in";
                document.getElementById("err1").innerHTML = "The New Passwords Dont Match";
                //alert("You Cant Leave Any Of The Fields Empty");


                return false;		  }
              }
              </script>
            </div>
          </div>
        </div>
      </div>

      <!--Change Password Modal | Ends-->
      <!-- edit | Modal-->
      <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Edit Your Profile </h4>
            </div>
            <div class="modal-body">
              <p class="text-center">Edit the fields you want to update and then submit</p>
              <form action="editProfile.php" id="editForm" method="post">


                <div role='alert' id="err">

                </div>
                <div class="form-group">
                  <label for="Address">Change Your Address</label>
                  <textarea class="form-control" name="address" rows="3" id="Address" required><?php  echo $_SESSION["address"];?></textarea>
                </div>

                <div class="form-group">
                  <label for="number">Change Your Phone No.</label>
                  <input type="number" class="form-control"  value="<?php  echo $_SESSION["phone"];?>" name="phoneno" id="number"  placeholder="phone number" required>
                </div>




              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" onClick="return validateForm()">Update Info</button>
              </form>
              <script>
              function validateForm(){
                var x = document.forms["editForm"]["address"].value;
                var y = document.forms["editForm"]["number"].value;
                //  alert(x);
                if(x==""||y=="")
                {
                  document.getElementById('err').className = "alert alert-danger alert-dismissible fade in";
                  document.getElementById("err").innerHTML = "You Cant Leave Any Of The Fields Empty";
                  //alert("You Cant Leave Any Of The Fields Empty");


                  return false;		  }
                }
                </script>
              </div>
            </div>
          </div>
        </div>

        <!--Edit Modal | Ends-->
        <!-- Contact Us Success Modal -->
        <div class="modal fade" id="msgModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Notice</h4>
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <?php
                  if(isset($_GET['msg']))
                  {
                    $msg=$_GET['msg'];
                    if($msg=='changesupdateSuccess'){echo"  <div class='alert alert-success alert-dismissible fade in' role='alert'>
                      Your profile was updated successfully
                      </div>";

                    }
                    if($msg=='msgSuccess'){
                      echo"  <div class='alert alert-success alert-dismissible fade in' role='alert'>
                      Thanks, Your Input Has Been Recieved, We will connect with you shortly.
                      </div>";
                    }
                    if($msg=='errorMsg'){echo"  <div class='alert alert-danger alert-dismissible fade in' role='alert'>
                      There occured some error while your submission, Please try again.
                      </div>";}
                      if($msg=='Success'){echo"  <div class='alert alert-success alert-dismissible fade in' role='alert'>
                        You Have Been Successfully Registered On this Website, Please Confirm your invitation now
                        </div>";}


                    }

                    if(isset($_GET['message']))
                    {
                      $msg=$_GET['message'];
                      if($msg=='Success'){

                        echo"  <div class='alert alert-success alert-dismissible fade in' role='alert'>
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>×</span></button>Your Display Picture Has Been Changed
                        </div>";
                      }
                      else if($msg=='ErrorExt'){
                        echo"  <div class='alert alert-danger alert-dismissible fade in' role='alert'>
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>×</span></button>You uploaded an invalid image type.We support only .jpg,.png images
                        </div>";
                      }
                      else if($msg=='passChanged'){
                        echo"  <div class='alert alert-success alert-dismissible fade in' role='alert'>
                        Password Changed successfully.
                        </div>";
                      }
                      else if($msg=='passChangeError'){
                        echo"  <div class='alert alert-danger alert-dismissible fade in' role='alert'>
                      You entered wrong current password.
                        </div>";
                      }
                    }
                    ?>

                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--Contact sucess modal | ends-->

          <!--Dp modal -->

          <div class="modal fade" id="dpModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">Change Your Display Picture</h4>
                </div>
                <div class="modal-body">

                  <form action="changedp.php" enctype="multipart/form-data"  method="post">
                    <div class="form-group"><br/><center>
                      <label for="attach"><h4>Choose Image File (.jpg,.png allowed)</h4></label><br/><br/>
                      <input type="file" name="uploaded" class="form-group"> 
                    </div></center>

                    <br/>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Upload Picture</button>
                    </form>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <!-- Dp modal ends-->
        </body>
        </html>
