<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Gestion des clients</title>
</head>
<body>
    <div class="container py-5">
        <div class="jumbotron text-center">
            <h3>Liste des Ordres</h3>
        </div>
        <?php if (isset($_GET['notif'])): ?>
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <?php
                    if ($_GET['notif'] == 'add') echo 'ordre confirmé avec succés';
                ?>
            </div>
        <?php endif ?>
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
                            <form action="">
                            <select name="choix" id="choix">

                            <?php

                            $ordren = new Ordre;
                    $list = $ordren->readAllvehicules();
                    while($data = $list->fetch()){

                    ?>
                            <option value=""><?=$data['vid'] ?></option>
                           
                     
<?php
; }
?>
 </select></form>
                            </td>



                            <td>
                                <a href='statue.php?id=<?= $ordreData['oid'] ?>' class="btn btn-outline-danger">confirmer</a>
                            
                            </td>
                        </tr>
                    <?php endforeach  ?>
            </tbody>
        </table>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
