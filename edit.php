<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Editer le produit N°<?= $_GET['pid'] ?></title>
</head>
<body>
    <?php
        include './classes/produit.class.php';
        $produit = new Produit;
        if (!empty($_POST)) {
            $produit->updateProduct($_GET['pid'], $_POST['nom'], $_POST['description'], $_POST['prix'], $_POST['fichier']);
            header('Location:index.php?notif=update');
            exit();
        } else {
            $showProduit = $produit->showOneProduct($_GET['pid']);
            $data =$showProduit ->fetch();
        }
    ?>    
    <div class="container py-3">
        <div class="jumbotron text-center">
           <h3>Editer le produit</h3>
        </div>
        <fieldset>
            <legend>Mettre à jour le produit N°<?= $_GET['pid'] ?></legend>
            <form action="" method="post">
                <input type="hidden" value="<?= $data['pid'] ?>" name="id">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nom">Nom</label>
                            <input type="text" value="<?= $data['name'] ?>" required name="nom" class="form-control" id="nom">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" value="<?= $data['description'] ?>" required name="description" class="form-control" id="description">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="prix">Price</label>
                            <input type="text" value="<?= $data['price'] ?>" required name="prix" class="form-control" id="prix">
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="form-group">
                            <label for="fichier">Image</label>
                            <input type="text"  value="<?= $data['file'] ?>"  required name="fichier"  id="fichier">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-block btn-outline-primary">Enregistrer</button>
                    </div>
                    <div class="col-md-6">
                        <button type="reset" class="btn btn-block btn-outline-secondary">Annuler</button>
                    </div>
                </div>
            </form>
        </fieldset>
    </div>
</body>
</html>
