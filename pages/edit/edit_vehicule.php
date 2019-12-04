<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
<div class="container">
<?php
include '../classes/vehicule.class.php';
$vehicule = new vehicule;
if (!empty($_POST)) {
$vehicule->editvehicule($_POST['vid'],$_POST['type'], $_POST['status'], $_POST['vehicule_number']);
header('Location:../vehicule.php?notif=update');
exit();
} else {
$showvehiculee = $vehicule->readonevehicule($_GET['id']);
$data = $showvehiculee->fetch();
}

?>
            <legend>UPDATE vehicule N°<?= $_GET['id'] ?></legend>

            <form action="" method="POST">
                <h1>Editer vehicule</h1>
                <input type="hidden" value="<?= $data['vid'] ?>" name="vid">

                <div class="form-group">
                    <label for="name">type</label>
                    <input type="text" required name="type" id="type"  class="form-control" value="<?= $data['type']?>">
                </div>
                <div class="form-group">
                    <label for="pd">status</label>
                    <input type="text" required name="status" id="status" class="form-control" value="<?= $data['status'] ?>">
                </div>
                <div class="form-group">
                    <label for="">number vehicule</label>
                    <input type="text" required name="vehicule_number" id="vehicule_number" class="form-control" value="<?= $data['vehiclenum'] ?>">
                </div>
               
               <input type="number" name="id" id="id" hidden value="<?= $data['vid'] ?>">
               <input type="submit" value="Enregistrer" class="btn btn-info">
               <input type="reset" value="Annuler" class="btn btn-danger">
            </form>
    </div>
    
</body>
</html>