<!--
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Editer le client N°<?= $_GET['id'] ?></title>
</head>
<body>
    <?php
        include './classes/ordre.class.php';
        $ordre = new Ordre;
        if (!empty($_POST)) {
            $ordre->updateOrdre($_POST['pid'], $_POST['oid'], $_POST['cid'], $_POST['quantity1'], $_POST['odate'], $_POST['quantity'], $_POST['delivry_status']), $_POST['vehicule']);
            header('Location:index.php?notif=update');
            exit();
        } else {
            $showOrder = $client->showOneOrdre($_GET['oid']);
            $data = $showOrdre->fetch();
        }
    ?>
    <div class="container py-3">
        <div class="jumbotron text-center">
            <h3>Editer le client</h3>
        </div>
        <fieldset>
            <legend>Mettre à jour le client N°<?= $_GET['id'] ?></legend>
            <form action="" method="post">
                <input type="hidden" value="<?= $data['id'] ?>" name="id">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="firstname">Prénom</label>
                            <input type="text" value="<?= $data['prenom'] ?>" required name="firstname" class="form-control" id="firstname">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="lastname">Nom</label>
                            <input type="text" value="<?= $data['nom'] ?>" required name="lastname" class="form-control" id="lastname">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="dateN">Date de naissance</label>
                            <input type="text" value="<?= $data['datenaissance'] ?>" required name="dateN" class="form-control" id="dateN">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" value="<?= $data['tel'] ?>" required name="phone" class="form-control" id="phone">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="adresse">Adresse</label>
                            <input type="text" value="<?= $data['adresse'] ?>" name="adresse" id="adresse" class="form-control">
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
</html>---->