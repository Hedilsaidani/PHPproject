<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <fieldset>
            <legend> Nouvel Vehicule</legend>
            <form action="store.php" method="post" class="form-online_" accept-charset="utf-8">
                <div class="form-group">
                    <label>type</label>
                    <input type="text" name="type" id="" class="form-control" >
                </div>
                <div class="form-group">
                    <label>status</label>
                    <input type="text" name="status" class="form-control">
                </div>
              
                <br>
                <br>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Enregister</button>
                    <button type="reset" class="btn btn-secondary">Annuler</button>
                </div>
            </form>
        </fieldset>
    <div>

    <?php
    include "dbconnexion.php";
        if (!empty($_POST)) {
            $type= $_POST['types'];
            $status = $_POST['status'];
            
            $nb = $cnx->exec("INSERT INTO vehicle(type,status) VALUES ('$type,$status')");

            echo $nb.' vehicule ajouté avec succés';
        }
    ?>
    </div>
    <div class="col-md-12">
            <button type="button" class="btn btn-labeled btn-success">
                <span class="btn-label"><i class="glyphicon glyphicon-ok"></i></span>Success</button>
    
</body>
</html>