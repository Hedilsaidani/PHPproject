<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Gestion des Ordres</title>
</head>
<body>
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
     
<a href="#vehi" class="btn btn-outline-primary tn-rounded waves-effect">Associée Véhicule</a>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#vehi">
  Launch demo modal
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
        
      <?php
                    
                    $ordre = new Ordre;
                    $listOrdre = $ordre->readAllvehicule();
                    $data = $listOrdre->fetchAll(); 
                    foreach($data as $Data):
                    ?>
                           <table>
                           <thead>
                <tr>
                   <th>vid</th>
                   <th>type</th>
                    <th>     associée </th>
              
                </tr>
            </thead>
                           <tr>
                            <td><?= $Data['vid'] ?></td> 
                            <td><?= $Data['type'] ?></td>  
                            <td>
                            <a href='vehiculestatue.php?oid=<?= $ordreData['oid'] ?>?type=<?= $Data['type'] ?>' class="btn btn-outline-warning">associée</a>
                            </td>
 
             
                        </tr>




                        </table>
                            <?php endforeach  ?>


      </div>
     
    </div>
  </div>
</div>



<?php endforeach  ?>



</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</html>
