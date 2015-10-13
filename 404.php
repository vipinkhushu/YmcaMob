<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta http-equiv="content-language" content="en">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>404 Page Not Found</title>
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
<?php
if(isset($_COOKIE['vipin']))
  echo"<!--";
?>
                  <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                        <br/><br/><button class="btn btn-primary" type="button" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span>&nbsp;Login</button>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                        <br/><br/>
						<a href="register.php">
						<button class="btn btn-primary" type="button"><span class="glyphicon glyphicon-user"></span>&nbsp;Register</button>
						</a>
				  </div>
          <?php
          if(isset($_COOKIE['vipin']))
            echo"-->";
          ?>
          <?php
          if(isset($_COOKIE['vipin']))
          {echo"<div class='col-xs-12 col-sm-12 col-md-4 col-lg-4'>
                <br/><br/>
    <a href='user.php'>
    <button class='btn btn-primary' type='button'><span class='glyphicon glyphicon-user'></span>&nbsp;My Account</button>
    </a>
  </div>";
  echo"<div class='col-xs-12 col-sm-12 col-md-3 col-lg-3'>
        <br/><br/>
  <a href='logout.php'>
  <button class='btn btn-primary' type='button'><span class='glyphicon glyphicon-log-out'></span>&nbsp;Logout</button>
  </a>
  </div>";
}
          ?>

                  <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                        <br/><br/><button class="btn btn-primary" type="button" data-toggle="modal" data-target="#helpModal"><span class="glyphicon glyphicon-envelope"></span>&nbsp;Help</button>
                  </div>
              </div>
            </div>
        </div>
    </div>

    <!-- Title Ends-->
<br/>

<div class="container-fluid">


<div class="container text-center" style="min-height:200px;">
  <h2>404 | Page Not Found</h2>
  <h3>Oops!!! The page you requested was not found on our servers</h3>
  <h4>Go Back To<a href="user.php"> Home</a></h4>
</div>



</div>

    <!-- footer -->
    <footer>
      <nav class="navbar navbar-default" style="height:250px;min-height:30px;margin-bottom:0px;">
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
        <button type="button" class="btn btn-primary">Login</button>
      </div>
    </div>
  </div>
</div>

	<!--Modal-->
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
        <div class="form-group">
    <label for="username">Email</label>
	<div class="input-group">
	<div class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></div>

 <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>

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
  </body>
</html>
