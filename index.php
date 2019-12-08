<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/css/demo.css" rel="stylesheet" />
    <title>Gestion des produits</title>
</head>
<body>
<div class="wrapper">
        <div class="sidebar"data-color="purple" >
            
            <div class="sidebar-wrapper">
                    <div class="logo">
                            <a href="javascript:;" class="simple-text">
                              EMPLOYEE'S WORK SPACE
                            </a>
                    </div>
                        <ul class="nav">
                            <li  class="nav-item active">
                                <a class="nav-link" href="index.php">
                                    <i class="nc-icon nc-notes"></i>
                                    <p>PRODUCT MANAGMENT</p>
                                </a>
                            </li>
        
                            <li>
                                <a class="nav-link" href="#">
                                    <i class="nc-icon nc-cart-simple"></i>
                                    <p>ORDER MANAGMENT</p>
                                </a>
                            </li>
                        </ul>
                   </div>
                </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#pablo"> PRODUCTS </a>
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
            <div class="content">
               <div class="container">
               <?php if (isset($_GET['notif'])): ?>
                <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <?php
                    if ($_GET['notif'] == 'add') echo 'Produit ajouté avec succés';
                    if ($_GET['notif'] == 'update') echo 'Produit modifié avec succés';
                    if ($_GET['notif'] == 'delete') echo 'Produit supprimé avec succés';
                ?>
</div>
        <?php endif ?>
        <br>
        <a href="create.php" class="btn btn-primary">Nouveau produit</a>
        <br>
        <br>
        <p>Tapez quelque chose dans le champ de saisie pour rechercher dans la table de produits des noms ou des descriptions :</p>  
        <input class="form-control" id="myInput" type="text" placeholder="Rechercher..">
        <br>
        <br>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Prix</th>
                    <th>Image</th>
                    <th>Opérations</th>
                </tr>
            </thead>
        
            <tbody  id="myTable">
                <?php
                    include 'classes/produit.class.php';
                    $produit = new Produit;
                    $listProduits = $produit->readAllProduct();
                    $data = $listProduits->fetchAll();

                    foreach($data as $produitData):
                    ?>
                        <tr>
                            <td><?= $produitData['pid'] ?></td>   
                            <td><?= $produitData['name'] ?></td>   
                            <td><?= $produitData['description'] ?></td>   
                            <td><?= $produitData['price']?>&nbsp; DT</td>   
                            <td><img src="<?= $produitData['file'] ?>" alt="Image introuvable" width="180" height="150">"</td>
                               
                            <td>
                                <a href='edit.php?pid=<?= $produitData['pid'] ?>' class="btn btn-outline-warning" >Editer</a>&nbsp;&nbsp;
                                <a href='delete.php?pid=<?= $produitData['pid'] ?>' class="btn btn-outline-danger">Supprimer</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
            </tbody>
        </table>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> 
        </div>...
    <script>
       $(document).ready(function(){
       $("#myInput").on("keyup", function() {
       var value = $(this).val().toLowerCase();
       $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
      });
      });
    </script>
    </div>
</body>

<!--   Core JS Files   -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="../assets/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<script type="../text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="../assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="../assets/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/js/demo.js"></script>

</html>
