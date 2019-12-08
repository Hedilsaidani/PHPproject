<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form-v5 by Colorlib</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<!--<link rel="stylesheet" type="text/css" href="css/roboto-font.css">-->
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" href="css/style2.css">


	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="uikit/js/uikit.min.js"></script>
	<script src="uikit/js/uikit-icons.min.js"></script>
	<link rel="stylesheet" href="uikit/css/uikit.min.css" />

	<!-- Main Style Css -->
<link rel="stylesheet" href="css/stylereg.css"/>
</head>
<body>

<div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <a href="home.php"><h3>Door Dash</h3></a>
            </div>

            <ul class="list-unstyled components">
                <li class="active">
                    <a href="index.php"> <i class="fa fa-home"></i>&nbsp Home</a>
                </li>
                <li>
                    <a href="index.php"><i class="fa fa-info-circle"></i>&nbsp How We Are</a>
                </li>
                <li>
                    <a href="index.php"><i class="fa fa-question-circle"></i>&nbsp Help</a>
                </li>
                <li>
                    <a href="index.php"><i class="fa fa-phone-square"></i>&nbsp Contact Us</a>
                </li>
            </ul>

           <!--  <ul class="list-unstyled CTAs">
                <li>
                    <a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a>
                </li>
                <li>
                    <a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a>
                </li>
            </ul>--> 
          
        </nav>

        <!-- Page Content  -->
        <div id="content">
            <nav class="navbar fixed-top navbar-expand-lg navbar-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn  btn-outline-primary">
                        <i class="fas fa-align-left"></i>
                        <span>DISCAVER US</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">                   
                            <li class="nav-item">
                                <a class="nav-link" href="sidebarlog.php">LOGIN</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
	</div>
	

<div class="uk-section uk-section-muted uk-flex uk-flex-middle">
	<div class="uk-width-1-1">
		<div class="uk-container">
			<div class="uk-grid-margin">
				<div class="uk-width-1-1@m">
					<div class="uk-margin uk-width-large uk-margin-auto uk-card uk-card-default uk-card-body uk-box-shadow-large">
						<h3 class="uk-card-title uk-text-center">SIGN UP</h3>
					 	<?php if (isset($_GET['notif'])): ?>
                             <div class="alert alert-success alert-dismissible">
                               <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <?php
                                   if ($_GET['notif'] == 'reg') echo 'Checkout your confirm Password';
                                ?>
                               </div>
                         <?php endif ?>
						<form uk-grid action="registre.php" method="POST">
							<div class="uk-width-1-2">
							<div class="uk-margin">
								<div class="uk-inline">
									<span class="uk-form-icon" uk-icon="icon: user"></span>
									<input class="uk-input uk-form-medium" type="text" name="name" placeholder="Your Name" required>
									<div> <span class="uk-text-danger"><?php if (isset($name_erreur)) echo $name_erreur; ?></span></div>
								</div>
							</div>
							</div>
							<div class="uk-width-1-2">
							<div class="uk-margin">
								<div class="uk-inline">
									<span class="uk-form-icon" uk-icon="icon: mail"></span>
									<input class="uk-input uk-form-medium" type="mail" name="email" placeholder="Your Email" required>	
									<span class="uk-text-danger"> <?php if (isset($email_erreur)) echo $email_erreur; ?></span>
								</div>
							</div>
							</div>

							<div class="uk-width-1-2">
							<div class="uk-margin">
								<div class="uk-inline">
									<span class="uk-form-icon" uk-icon="icon: lock"></span>
									<input class="uk-input uk-form-medium" type="password" name="pwd" placeholder="Your Password" required>	
									<span class="text-danger"> <?php if (isset($password_erreur)) echo $password_erreur; ?></span>
								</div>
							</div>
                         </div>

                         <div class="uk-width-1-2">
							<div class="uk-margin">
								<div class="uk-inline">
									<span class="uk-form-icon" uk-icon="icon: unlock"></span>
									<input class="uk-input uk-form-medium" type="password" name="confpwd" placeholder="Repeat Your Password" required>	
									<span class="text-danger"> <?php if (isset($confpassword_erreur)) echo $confpassword_erreur; ?></span>
								</div>
							</div>
                         </div>

						 <div class="uk-width-1-1">
							<div class="uk-margin">
								<div class="uk-inline  uk-width-1-1 ">
									<span class="uk-form-icon" uk-icon="icon: phone"></span>
                                    <input class="uk-input  uk-form-medium" type="number" name="phone" placeholder="Your Phone Number" required>
									<span class="text-danger"> <?php if (isset($phone_erreur)) echo $phone_erreur; ?></span>
								  </div>
							</div>
						 </div>

						 <div class="uk-width-1-1">
							<div class="uk-margin">
								<div class="uk-inline uk-width-1-1 ">
									<span class="uk-form-icon" uk-icon="icon: bookmark"></span>
									<input class="uk-input uk-form-medium" type="text" name="adresse" placeholder="Your address" required>	
									<span class="uk-text-danger"> <?php if (isset($adresse_erreur)) echo $adresse_erreur; ?></span>
								</div>
							</div>
						 </div>

			
						 <div class="uk-width-1-1">
							<div class="uk-margin">
								<div class="uk-inline uk-width-1-1 ">
									<button type="submit" name="submit" class="uk-button uk-button-primary uk-button-medium uk-position-center">SIGN IN</button>
								</div>
							</div>
						 </div>
		
					

							<div class="uk-text-mediun uk-text-center">
							   registered? <a href="sidebarlog.php">log in here !</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/side.js"></script>
    <!--===============================================================================================-->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
<!--===============================================================================================-->
	<script src="login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/bootstrap/js/popper.js"></script>
	<script src="login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/daterangepicker/moment.min.js"></script>
	<script src="login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/log_main.js"></script>


<script src="js/bootstrap.min.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>