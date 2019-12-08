<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Light Bootstrap Dashboard - Free Bootstrap 4 Admin Dashboard by Creative Tim</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
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
        <div class="sidebar" data-image="../assets/img/sidebar-5.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="javascript:;" class="simple-text">
                     Employees work space
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="../../order.php">
                            <i class="nc-icon nc-icon nc-paper-2"></i>
                            <p>order</p>
                        </a>
                    </li>
                  

                    
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#pablo">ORDRE</a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                      
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
                <div class="container py-5">
                    <div class="jumbotron text-center">
                        <h3>Liste des Ordres</h3>
                    </div>
                  
                    <br>
                    <br>
                    <br>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>OID</th>
                                <th>PID</th>
                                <th>Quantity</th>
                                <th>Date ordre</th>
                                <th>Vehicule</th>
                                <th>Opérations</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                             include 'classes/ordre.class.php';
            
                                $ordre = new Ordre;
                                $listOrdre = $ordre->readAllOrdres();
                                $data = $listOrdre->fetchAll(); 
                                foreach($data as $ordreData):
                                ?>
                                    <tr>
                                        <td><?= $ordreData['oid'] ?></td> 
                                        <td><?= $ordreData['pid'] ?></td>  
                                        <td><?= $ordreData['quantity'] ?></td>   
                                        <td><?= $ordreData['odate'] ?></td>  
                                        <td>
                 
            
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#vehi">
          associée vehicule
            </button>
            
                                       
                                        <td>
                                            <a href='statue.php?id=<?= $ordreData['oid'] ?>' class="btn btn-outline-danger">confirmer</a>
                                        
                                        </td>
                                    </tr>
                        </tbody>
                    </table>
                </div>
                
                
            
                <div class="modal"  id="vehi">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">chose a vehicle</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                  <table class="table table-striped">

                  <tr>
                               <th>vid</th>
                               <th>type</th>
                                <th>associée </th>
                          
                            </tr>
                  <?php
                                
                                $ordre = new Ordre;
                                $listOrdre = $ordre->readAllvehicule();
                                $data = $listOrdre->fetchAll(); 
                                foreach($data as $Data):
                                ?>
                                       <thead>
                           
                        </thead>
                                       <tr>
                                        <td><?= $Data['vid'] ?></td> 
                                        <td><?= $Data['type'] ?></td>  
                                        <td>
                                        <a href='vehiculestatue.php?type=<?=$Data['type'] ?>?oid=<?= $ordreData['oid'] ?>' class="btn btn-outline-warning">associée</a>
                                        </td>
             
                         
                                    </tr>
            
            
            
            
                                        <?php endforeach  ?>
                                        </table>

            
                  </div>
                </div>
                <?php endforeach  ?>

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

</html>
