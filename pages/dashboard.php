
 <!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <link rel="stylesheet" href="css/uikit.min.css">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Light Bootstrap Dashboard - Free Bootstrap 4 Admin Dashboard by Creative Tim</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/css/demo.css" rel="stylesheet" />
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-image="../assets/img/sidebar-5.jpg"  data-color="orange">
     
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="" class="simple-text">
                        Administration
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="dashboard.php">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./user.php">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>employees</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./table.php">
                            <i class="nc-icon nc-notes"></i>
                            <p>product List</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./typography.php">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>costumer member</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./vehicule.php">
                            <i class="nc-icon nc-atom"></i>
                            <p>Vehicule</p>
                        </a>
                    </li>
                  
                   
                   
                </ul>
            </div>
        </div>



        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand" href=""> Dashboard </a>
                   
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        
                           
                           
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            
                            
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <span class="no-icon">Log out</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->

            

            <div class="content">
                <div class="container-fluid">

                        <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                  <div class="card card-stats">
                                    <div class="card-body ">
                                      <div class="row">
                                        <div class="col-5 col-md-4">
                                          <div class="icon-big text-center icon-warning">
                                          <i class="nc-icon nc-money-coins text-success"></i>
                                          </div>
                                        </div>
    
                                        <?php

                                        include 'classes/dash.class.php';
                                        $admin = new admin;
                                        $admins =$admin ->product();
                                        while($data = $admins->fetch()){
                                        ?>     

                                        <div class="col-7 col-md-8">
                                          <div class="numbers">
                                            <p class="card-category">Products</p>
                                            <h3 class="card-title"><?=$data['c']?> </h3>
                                          </div>
                                        </div>
                                        <?php
                                       } ;
                                       ?>
                                      </div>
                                    </div>
                                    <div class="card-footer ">
                                      <hr>
                                      <div class="stats">
                                        <i class="fa fa-refresh"></i> Now
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                  <div class="card card-stats">
                                    <div class="card-body ">
                                      <div class="row">
                                        <div class="col-5 col-md-4">
                                          <div class="icon-big text-center icon-warning">
                                            <i class="nc-icon nc-money-coins text-success"></i>
                                          </div>
                                        </div>
                                        <div class="col-7 col-md-8">
                                          <div class="numbers">
                                            <p class="card-category">Revenue</p>
                                            <p class="card-title">DT 1,345
                                              </p><p>
                                          </p></div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="card-footer ">
                                      <hr>
                                      <div class="stats">
                                        <i class="fa fa-calendar-o"></i> now
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                  <div class="card card-stats">
                                    <div class="card-body ">
                                      <div class="row">
                                        <div class="col-5 col-md-4">
                                          <div class="icon-big text-center icon-warning">
                                            <i class="nc-icon nc-vector text-danger"></i>
                                          </div>
                                        </div>
                                        <?php
                                        $admins =$admin ->employe();
                                     while($data = $admins->fetch()){
                                             ?>   
                                        <div class="col-7 col-md-8">
                                          <div class="numbers">
                                            <p class="card-category">employees</p>
                                            <h3 class="card-title"><?=$data['c']?>
                                              </h3><p>
                                          </p></div>
                                        </div>
                                        <?php
                                         } ;
                                         ?>
                                      </div>
                                    </div>
                                    <div class="card-footer ">
                                      <hr>
                                      <div class="stats">
                                        <i class="fa fa-clock-o"></i> now
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                  <div class="card card-stats">
                                    <div class="card-body ">
                                      <div class="row">
                                        <div class="col-5 col-md-4">
                                          <div class="icon-big text-center icon-warning">
                                            <i class="nc-icon nc-favourite-28 text-primary"></i>
                                          </div>
                                        </div>
                                        <?php
                                        $admins =$admin ->costumer();
                                     while($data = $admins->fetch()){
                                             ?>   
                                        <div class="col-7 col-md-8">
                                          <div class="numbers">
                                            <p class="card-category">costumer</p>
                                            <h3 class="card-title"><?=$data['c']?>
                                              </h3>
                                             </div>
                                        </div>
                                        <?php
                                           } ;
                                        ?>
                                      </div>
                                    </div>
                                    <div class="card-footer ">
                                      <hr>
                                      <div class="stats">
                                        <i class="fa fa-refresh"></i>  now
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>

<!-- dash -->
<div class="uk-child-width-1-2@m" uk-grid>
<div class="row">
                                <div class=" col-md-6 col-sm-6">
<?php

$admins =$admin ->popular();
while($data = $admins->fetch()){
?>     
    <div>
        <div class="uk-card uk-card-default">
            <div class="uk-card-media-top">
                <img src="" alt="">
            </div>
            <div class="uk-card-body">
                <h3 class="uk-card-title">Most popular product</h3>
                <p>  <?=$data['name']?></p>
            </div>
        </div>
    </div>
    <br>
    
<?php
} ;
?>

</div>
<div class=" col-md-6 col-sm-6">

<?php
$admins =$admin ->notpopular();
while($data = $admins->fetch()){
?>     

    <div>
        <div class="uk-card uk-card-default">
            <div class="uk-card-media-top">
                <img src="" alt="">
            </div>
            <div class="uk-card-body">
                <h3 class="uk-card-title">less ordered product</h3>
                <p>  <?=$data['name']?></p>
            </div>
        </div>
    </div>
    <br>

<?php
} ;
?>
</div>
</div>
</div>

                </div>



            </div>



          
        </div>
    </div>
   
</body>
<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="../assets/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="../assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="../assets/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/js/demo.js"></script>
<script type="text/javascript">
<script src=" js/uikit.min.js"></script>

   
</script>

</html>
