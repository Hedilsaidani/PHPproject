
 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <link rel="stylesheet" href="css/uikit.min.css">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>costumer</title>
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
                    <a class="navbar-brand" href=""> Costumer </a>
                   
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
              


                <div class="title">  
                     <h3>Liste of costumer </h3>
                                    </div>
                                <table class="uk-table uk-table-hover uk-table-middle uk-table-divider" id="mytable">
<tr>
<th>ID</th>
<th>name</th>
<th>email</th>
<th>adresse</th>
<th>phone</th>
<th>Option</th>
<th>
<input class="form-control-plaintext" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for client">

</th>
</tr>


<?php

include 'classes/client.class.php';
$client = new client;
$clients =$client ->readAllclient();
while($data = $clients->fetch()){
?>
   <tr>
<td>  <?= $data['cid']?> </td>
<td>  <?= $data['name']?> </td>
<td>  <?= $data['email']?> </td>
<td>  <?= $data['adresse']?> </td>
<td>  <?= $data['phone']?> </td>
<td>

<a href='delete/delete2.php?id= <?= $data['cid']?>'class="btn btn-danger btn-lg btn-block">DELETE product</a></td>
</td>
</tr>

<?php
}
?>


                                </table>



                </div>
            </div>


            <div id="my-id" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
    <h4 class="card-title">Add costumer</h4>
                           
 <form action="store/store_client.php" method="POST"  >
<div class="form-group">
<label>name</label>
<input type="text" name="name" class="form-control" placeholder="name of costumer" >
</div>
<div class="form-group">
<label>adresse</label>
<input type="text" name="adresse" class="form-control" placeholder="adresse of costumer" >
</div>
<div class="form-group">
<label>email</label>
<input type="text" name="email" class="form-control" placeholder="email of costumer" >
</div>
<div class="form-group">
<label>phone</label>
<input type="text" name="phone" class="form-control" placeholder="phone of costumer" >
</div>


                                   <button type="submit" class="btn btn-info btn-fill pull-right"> Submitt</button>
                                    </form>
                                    <button class="btn btn-warning uk-modal-close"  type="button">exit</button>

                                    </div></div>

           
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
<script src=" js/uikit.min.js"></script>

<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("mytable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
</html>
