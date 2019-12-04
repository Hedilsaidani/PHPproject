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
include '../classes/produit.class.php';
$produit = new produit;
if (!empty($_POST)) {
$produit->editProduit($_POST['pid'],$_POST['name'], $_POST['description'], $_POST['price']);
header('Location:../table.php?notif=update');
exit();
} else {
$showproduct = $produit->readoneproduct($_GET['id']);
$data = $showproduct->fetch();
}

?>
            <legend>UPDATE produit N°<?= $_GET['id'] ?></legend>

            <form action="" method="POST">
                <h1>Editer produit</h1>
                <input type="hidden" value="<?= $data['pid'] ?>" name="pid">

                <div class="form-group">
                    <label for="name">name</label>
                    <input type="text" required name="name" id="name"  class="form-control" value="<?= $data['name']?>">
                </div>
                <div class="form-group">
                    <label for="des">description</label>
                    <input type="text" required name="description" id="description" class="form-control" value="<?= $data['description'] ?>">
                </div>
                <div class="form-group">
                    <label for="number">price</label>
                    <input type="number" required name="price" id="price" class="form-control" value="<?= $data['price'] ?>">
                </div>
            
               <input type="number" name="id" id="id" hidden value="<?= $data['pid'] ?>">
               <input type="submit" value="Enregistrer" class="btn btn-info">
               <input type="reset" value="Annuler" class="btn btn-danger">
            </form>
    </div>
    
</body>
</html>