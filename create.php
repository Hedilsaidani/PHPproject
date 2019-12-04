<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Nouveau produit</title>
</head>
<body>

    <?php
        if (!empty($_POST)) {
            include './classes/produit.class.php';
            $produit= new Produit;
            $produit->addNewProduct($_POST['name'], $_POST['description'], $_POST['price'], $_POST['file']);
            header('Location:index.php?notif=add');
            exit();
        }
    ?>
    <div class="container py-3">
        <div class="jumbotron text-center">
           <h3>Ajouter un produit</h3>
        </div>
        <fieldset>
            <legend>Nouveau produit</legend>
            <form action="" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Nom</label>
                            <input type="text" required name="name" class="form-control" id="name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" required name="description" class="form-control" id="description">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="price">Prix</label>
                            <input type="text" required name="price" class="form-control" id="price">
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="form-group">
                            <label for="file">Image</label>
                            <input type="text" required name="file" class="form-control" id="file">

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