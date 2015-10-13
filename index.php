<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta http-equiv="content-language" content="en">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>YMCA Mob - Meet Old budies [YMCA Univeristy Of Science And Technology]</title>
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

    <!-- Media Gallery And Calendar Starts-->
    <div class="container-fluid">
      <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                      <ol class="carousel-indicators">
                          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
						  <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                          <li data-target="#carousel-example-generic" data-slide-to="4"></li>
						  <li data-target="#carousel-example-generic" data-slide-to="5"></li>
                          <li data-target="#carousel-example-generic" data-slide-to="6"></li>
						  <li data-target="#carousel-example-generic" data-slide-to="7"></li>
                          <li data-target="#carousel-example-generic" data-slide-to="8"></li>
						  <li data-target="#carousel-example-generic" data-slide-to="9"></li>
                      </ol>

                      <!-- Wrapper for slides -->
                      <div class="carousel-inner" role="listbox">
                        <div class="item active">
                          <img src="images/gallery_1.jpg" alt="...">
                          <div class="carousel-caption">
                            YMCA Mob 2013
                          </div>
                        </div>
                        <div class="item">
                          <img src="images/gallery_2.jpg" alt="...">
                          <div class="carousel-caption">
                            YMCA Mob 2013
                          </div>
                        </div>
						<div class="item">
                          <img src="images/gallery_3.jpg" alt="...">
                          <div class="carousel-caption">
                            YMCA Mob 2013
                          </div>
                        </div>
                        <div class="item">
                          <img src="images/fitting_section.PNG" alt="...">
                          <div class="carousel-caption">
                            Fitting Section
                          </div>
                        </div>
						<div class="item">
                          <img src="images/machine_tool_shop.PNG" alt="...">
                          <div class="carousel-caption">
                            Machine Tool Workshop
                          </div>
                        </div>
						<div class="item">
                          <img src="images/sheet_metal.jpg" alt="...">
                          <div class="carousel-caption">
                            Sheet Metal Workshop
                          </div>
                        </div>
						<div class="item">
                          <img src="images/smithy.jpg" alt="...">
                          <div class="carousel-caption">
                            Smithy Workshop
                          </div>
                        </div>
						<div class="item">
                          <img src="images/smithy_shop.jpg" alt="...">
                          <div class="carousel-caption">
                            Smithy Shop
                          </div>
                        </div>
						<div class="item">
                          <img src="images/welding.jpg" alt="...">
                          <div class="carousel-caption">
                            Welding
                          </div>
                        </div>
						<div class="item">
                          <img src="images/welding_shop.jpg" alt="...">
                          <div class="carousel-caption">
                            Welding Shop
                          </div>
                        </div>
                      </div>

                      <!-- Controls -->
                      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
              <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;Calendar</h3>
                    </div>
                      <div class="panel-body">
                              <img src="images/cal.png" alt="calendar" style="width:50px;height:50px;float:left;" align="left">

                              <span style="margin-left:10px;">20 December 2015<br/></span><span style="margin-left:10px;"><b>Alumni Annual Meet (Mob 2015)</b><br/></span><span style="margin-left:10px;float:right;">

                <b><u><a href="register.php">Register Now</a></u></b>
                &nbsp;&nbsp;<b><u><a href="#details">Know More</a></u></b>
							  </span>
                              <hr/>
              </div>
            </div>
          </div>
      </div>

    </div>

</div>
    <!-- media gallery ends-->
    <!-- Banner Starts--><br/><br/>
    <div class="container-fluid">
      <div class="container">
        <div id="details"class="panel panel-primary">
          <div class="panel-heading">
            <h3  class="panel-title">YMCA MOB Annual Alumni Meet - 2015 Registrations Open</h3>
          </div>
          <div class="panel-body">
            <p><b>Date </b> :- 20<sup>th</sup> December 2015<br/>
              <br/><b>Venue</b> :- To be decided soon<br/>
              <br/><b>How to register?</b> <br/>
              <li>Register yourself on this website. <a href="register.php">[ Link ]</a>
                <li>After Registration, Press the confirmation button there.
                  <li>Then you will recieve an invitation for The Annual Meet via Email And Sms Soon.
                    <li>Thats it, See you at Annual Meet MOB 2015<br/>

              <br/>You might also RSVP on facebook<br/>
              <a href="#">Facebook Event Link</a>

            </p>
          </div>
</div>

      </div>

    </div>

    <!-- Banner Ends-->
	    <!-- Description Starts--><br/><br/>
    <div class="container-fluid">
      <div class="container">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">YMCAUST Meet Old Buddies</h3>
          </div>
          <div class="panel-body">
            <h3>ALUMNI AFFAIRS</h3>
			<p>Established in 1985, YMCA Alumni Association – MOB creates and maintains a life-long connection between the Institute and its alumni, whose number is more than 5000.
In collaboration with an extremely dedicated volunteer central executive member, the Alumni Association works to connect alumni, support students and build an unforgettable Institute experience through a diversity of events.  At present, the Alumni Association is being headed by Sh. Raj Bhatia, M.D., Bony Polymers Pvt. Ltd., Faridabad (Passed out from YMCA Institute of Engineering Faridabad in 1974)
</p>
<h3> Objective of Alumni Affairs</h3>
			<p>Encourage interaction with students, alumni, faculty and industry by holding lectures, seminars and conferences.

2.      To generate a ‘Brain Bank’ from amongst its members or experts from outside and provide its services for the benefit of the members of MOB, in particular, Alma mater and the society, in general.</p>
     <h3>Membership</h3>
<p> A person who has been awarded degree / diploma by YMCA UST / YMCAIE Faridabad shall be eligible for membership of MOB.</p>
<h3>How to become a member?</h3>

<p>The one time subscription for life membership of the association shall be Rs.500/-
</p>
<h3 class="text-center"><b>Alumni Association offers</b></h3>
<h3>Alumni Career and Networking Services</h3>
<p>Membership links you to a strong network of more than 5000 members functioning in various capacities in different parts of the world.</p>
<h3>Student-Alumni Contact</h3>
<p>Support current students @YMCA through different mentoring opportunities either by being a part of on-campus lectures or through an in person or online commitment; provide internships; recruit fresh graduates; present career programs etc.</p>
<h3>Events and Reunions</h3>
<p>The Association organizes and facilitates a host of events every year at different locations.  This includes the Annual General Meeting, Class / Batch Reunion and various other reunions.  Association members are also invited to campus events like Foundation Day, Convocation Day, and other cultural events on Campus.</p>
<h3>Geographic Alumni Chapters</h3>
<p>Number of Chapters is currently active and organizing various activities all over the country.</p>

		</div>
</div>

      </div>

    </div>

    <!-- Description Ends-->
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
                  <span class="glyphicon glyphicon-link"></span> help@ymcaustmob.com<br/>
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
   if($msg=='msgSuccess'){
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
          <?php
           if(isset($_GET['err']))
            {
            $error=$_GET['err'];
            if($error=='invalidPass'){
            echo"  <div class='alert alert-danger alert-dismissible fade in' role='alert'>
	<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
	<span aria-hidden='true'>×</span></button>Invalid Username / Password Combination
	</div>";
            }

            }
            ?>
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
         if($msg=='msgSuccess'){
          echo"  <div class='alert alert-success alert-dismissible fade in' role='alert'>
<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
<span aria-hidden='true'>×</span></button>Thanks, Your Input Has Been Recieved, We will connect with you shortly.
</div>";
          }
          else if($msg='errorMsg')
          echo"  <div class='alert alert-danger alert-dismissible fade in' role='alert'>
          <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>×</span></button>There occured some error while your submission, Please try again.
          </div>";
          }
          ?>

    </div>
  </div>
</div>
</div>
</div>
<!--Contact sucess modal | ends-->
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
    <div class="form-group">
<label for="username">Email</label>
<div class="input-group">
<div class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></div>

                  <input type="email" class="form-control" id="email"   name="email" placeholder="Email" required>

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
  </body>
</html>
