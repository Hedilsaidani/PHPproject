<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Gestion des produits</title>
</head>
<body>
    <div class="container py-3">
    
        <div class="jumbotron text-center">
            <h3>Liste des produits</h3>
        </div>
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
                            <td><?= $produitData['price']?></td>   
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
</body>
</html>
