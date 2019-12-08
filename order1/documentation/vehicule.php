<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <title>Gestion des Ordres</title>
</head>
<body>
    <div class="container py-5">
        <div class="jumbotron text-center">
            <h3>Liste des vehicule Disponible</h3>
        </div>        <br>
        <br>

        <div> <button class ="btn btn-primary ">add vehicule</button></div>

        <br>
        <table class="table table-striped">
            <thead>
                <tr>
                   <th>vid</th>
                   <th>type</th>
                    <th>     associée </th>
              
                </tr>
            </thead>
            <tbody>
                <?php

                    include 'classes/vehicule.class.php';
                    $id=$_GET['id'];

                    $vehi = new vehicule;
                    $listv = $vehi->readAllvehicule();
                    $data = $listv->fetchAll(); 
                    foreach($data as $vData):
                    ?>
                        <tr>
                            <td><?= $vData['vid'] ?></td> 
                            <td><?= $vData['type'] ?></td>  
                            <td>
                            <a href='vehiculestatue.php?type=<?= $vData['type'] ?>' class="btn btn-outline-warning">associée</a>
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
