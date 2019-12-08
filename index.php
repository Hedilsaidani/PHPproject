<!DOCTYPE html>
<html lang="en">
  <head>
    <title>FooD OrDering</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  </head>
  <body>
    <!-- begein nav bar-->
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-primary ftco-navbar-light fixed-top" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Food Ordering</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
        </button>
        
        <?php if (isset($_GET['notif'])): ?>
        <div class="alert alert-info alert-dismissible fade show" role="alert">
                <?php
                    if ($_GET['notif'] == 'book') echo 'Your table is booked see you sone ';  
                ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
            </div>
        <?php endif ?>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a href="#book-table" class="nav-link" id="log"><i class="icon-cutlery">&nbsp;</i>Book A TABLE</a> </li>
	          <li class="nav-item"><a href="sidebarlog.php" class="nav-link" id="log"><i class="icon-user-circle"></i> SIGN IN</a> </li>
	          <li class="nav-item "><a href="regindex.php" class="nav-link" id="book"><i class="icon-user-plus">&nbsp;</i>SIGN UP</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    <section class="home-slider owl-carousel js-fullheight">
      <div class="slider-item js-fullheight" style="background-image: url(images/caro.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text js-fullheight justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-12 col-sm-12 text-center ftco-animate">
            	<span class="subheading">Food Ordering</span>
              <h1 class="mb-4">Deliver A Good Feelings</h1>
            </div>

          </div>
        </div>
      </div>

      <div class="slider-item js-fullheight" style="background-image: url(images/caro2.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text js-fullheight justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-12 col-sm-12 text-center ftco-animate">
            	<span class="subheading">Food Ordering</span>
              <h1 class="mb-4">Nutritious &amp; Tasty</h1>
            </div>

          </div>
        </div>
      </div>

      <div class="slider-item js-fullheight" style="background-image: url(images/caro-3.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-12 col-sm-12 text-center ftco-animate">
            	<span class="subheading">Food Ordering</span>
              <h1 class="mb-4">Delicious Specialties</h1>
            </div>

          </div>
        </div>
      </div>
    </section>

 <section class="ftco-section ftco-no-pt ftco-no-pb">
    	<div class="container">
    		<div class="row">
            <div class="col-sm-6">
    				<div class="featured">
    							<div class="featured-menus ftco-animate">             
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="pb"  placeholder="Enter Delivery Address" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append" >
                        <a href="prodindex.php"></a><button class="btn btn-primary" type="button" id="pb1" >Find Restaurant</button>
                        </div>
                      </div>
			            </div>
    						</div>
    			</div>
    		</div>
    	</div>
    </section>

		<section class="ftco-section ftco-wrap-about">
			<div class="container">
				<div class="row">
					<div class="col-md-7 d-flex">
						<div class="img img-1 mr-md-2" style="background-image: url(images/about.jpg);"></div>
						<div class="img img-2 ml-md-2" style="background-image: url(images/about-1.jpg);"></div>
					</div>
					<div class="col-md-5 wrap-about pt-5 pt-md-5 pb-md-3 ftco-animate">
	          <div class="heading-section mb-4 my-5 my-md-0">
	          	<span class="subheading">About</span>
	            <h2 class="mb-4">Satisfy your cravings</h2>
	          </div>
	          <p>Experience a world of food, with your favorite restaurants at your fingertips.</p>
			    	<a href="logindex.php"><span>I am redy to eat <i class="icon-hand-o-right"></i></span></a>
					</div>
				</div>
			</div>
		</section>

		
    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_4.jpg);" data-stellar-background-ratio="0.5">
    	<div class="container">
    		<div class="row d-md-flex align-items-center justify-content-center">
    			<div class="col-lg-10">
    				<div class="row d-md-flex align-items-center">
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="18">0</strong>
		                <span>Years of Experienced</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="20000">0</strong>
		                <span>Happy Customers</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="564">0</strong>
		                <span>Finished Projects</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="300">0</strong>
		                <span>Working Days</span>
		              </div>
		            </div>
		          </div>
	          </div>
          </div>
        </div>
    	</div>
    </section>



		<section class="ftco-section bg-light">
			<div class="container">
			
        <div class="row">
            <div class="breakfast-area section_gap_top">
                <div class="container">
                  <div class="row align-items-center justify-content-center">
                    <div class="col-lg-5">
                        <div class="col-md-5 wrap-about pt-5 pt-md-5 pb-md-3 ftco-animate">
                            <div class="heading-section mb-4 my-5 my-md-0">
                              <span class="subheading">Anywhere you are</span>
                              <h2 class="mb-6">Anywhere you are</h2>
                            </div>
                            <p>A family picnic in the park. Your date night at home. That late-night study session. Spend more time doing the things that matter to you most — we’ll take care of the rest.</p>
                            <a href="logindex.php"><span>LET'S GO <i class="icon-hand-o-right"></i></span></a>
                          </div>
                    </div>
                    <div class="col-lg-6 offset-lg-1">
                      <div class="right-img">
                          <img class="img img-fluid" src="images/2-min.jpg" alt="">
                      </div>
                    </div>
                    </div>
                  </div>
                </div>
              </div>
        
        </div>
			</div>
		</section>
 
  

		<section id="book-table" class="ftco-section img" style="background-image: url(images/bok.jpg)" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row d-flex">
          <div class="col-md-7 ftco-animate makereservation p-4 px-md-5 pb-md-5">
          	<div class="heading-section ftco-animate mb-5 text-center">
	          	<span class="subheading">Book a table</span>
	            <h2 class="mb-4">Make Reservation</h2>
	          </div>
            <form action="book_table.php" method="POST">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for=""><i class="icon-user-circle" >&nbsp;</i>Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Your Name" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for=""><i class="icon-envelope-o">&nbsp;</i> Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Your Email" required="vallidate email is require !">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for=""><i class="icon-phone">&nbsp;</i>Phone</label>
                    <input type="phone" name="phone" class="form-control" placeholder="Phone" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for=""><i class="icon-calendar">&nbsp;</i>Date</label>
                    <input type="text" name="date_b"  class="form-control" id="book_date" placeholder="Date" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for=""><i class="icon-clock-o">&nbsp;</i>Time</label>
                    <input type="text" name="time_b" class="form-control" id="book_time" placeholder="Time" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for=""><i>&nbsp;</i> Person</label>
                    <div class="select-wrap one-third">
                      <div class="icon"><span ></span></div>
                      <input type="number" name="person" class="form-control" placeholder="person" required>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 mt-3">
                  <div class="form-group text-center">
                      <button type="submit" class="btn btn-outline-info">BOOK A TABLE</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
			</div>
		</section>
	
		
		<section class="ftco-section ftco-wrap-about">
        <div class="container">
          <div class="row">
            <div class="col-md-7 d-flex">
              <div class="img img-1 mr-md-2" style="background-image: url(images/we-1.jpg);"></div>
              <div class="img img-2 ml-md-2" style="background-image: url(images/we-2.jpg);"></div>
            </div>
            <div class="col-md-5 wrap-about pt-5 pt-md-5 pb-md-3 ftco-animate">
              <div class="heading-section mb-4 my-5 my-md-0">
                <span class="subheading">We're here</span>
                <h2 class="mb-4">We're here for you</h2>
              </div>
              <p>Making your life easier is our top priority. Five-star service gets you what you need, right when you need it.</p>
              <a href="logindex.php"><span>Get Start <i class="icon-hand-o-right"></i></span></a>
            </div>
          </div>
        </div>
      </section>
		
    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Food ordering</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Open Hours</h2>
              <ul class="list-unstyled open-hours">
                <li class="d-flex"><span>Monday</span><span>9:00 - 24:00</span></li>
                <li class="d-flex"><span>Tuesday</span><span>9:00 - 24:00</span></li>
                <li class="d-flex"><span>Wednesday</span><span>9:00 - 24:00</span></li>
                <li class="d-flex"><span>Thursday</span><span>9:00 - 24:00</span></li>
                <li class="d-flex"><span>Friday</span><span>9:00 - 02:00</span></li>
                <li class="d-flex"><span>Saturday</span><span>9:00 - 02:00</span></li>
                <li class="d-flex"><span>Sunday</span><span> 9:00 - 02:00</span></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Instagram</h2>
              <div class="thumb d-sm-flex">
	            	<a href="#" class="thumb-menu img" style="background-image: url(images/insta-1.jpg);">
	            	</a>
	            	<a href="#" class="thumb-menu img" style="background-image: url(images/insta-2.jpg);">
	            	</a>
	            	<a href="#" class="thumb-menu img" style="background-image: url(images/insta-3.jpg);">
	            	</a>
	            </div>
	            <div class="thumb d-flex">
	            	<a href="#" class="thumb-menu img" style="background-image: url(images/insta-4.jpg);">
	            	</a>
	            	<a href="#" class="thumb-menu img" style="background-image: url(images/insta-5.jpg);">
	            	</a>
	            	<a href="#" class="thumb-menu img" style="background-image: url(images/insta-6.jpg);">
	            	</a>
	            </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Newsletter</h2>
            	<p>Far far away, any where you are, we came for you.</p>
              <form action="#" class="subscribe-form">
                <div class="form-group">
                  <input type="text" class="form-control mb-2 text-center" placeholder="Enter delivery Address ">
                  <input type="submit" value="Find Restaurents" class="form-control submit px-3">
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <i class="icon-heart" aria-hidden="true"></i>Chehir Ben Slim</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>