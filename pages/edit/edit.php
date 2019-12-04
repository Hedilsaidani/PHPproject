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
include '../classes/admin.class.php';
$employee = new employee;
if (!empty($_POST)) {
$employee->editEmployee($_POST['eid'],$_POST['name'], $_POST['pwd'], $_POST['email'], $_POST['phone']);
header('Location:../user.php?notif=update');
exit();
} else {
$showemployee = $employee->readoneemployee($_GET['id']);
$data = $showemployee->fetch();
}

?>
            <legend>UPDATE employee N°<?= $_GET['id'] ?></legend>

            <form action="" method="POST">
                <h1>Editer employee</h1>
                <input type="hidden" value="<?= $data['eid'] ?>" name="eid">

                <div class="form-group">
                    <label for="name">name</label>
                    <input type="text" required name="name" id="name"  class="form-control" value="<?= $data['name']?>">
                </div>
                <div class="form-group">
                    <label for="pd">password</label>
                    <input type="text" required name="pwd" id="pwd" class="form-control" value="<?= $data['pwd'] ?>">
                </div>
                <div class="form-group">
                    <label for="email">email</label>
                    <input type="email" required name="email" id="email" class="form-control" value="<?= $data['email'] ?>">
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="tel" required name="phone" id="phone" class="form-control" value="<?=  $data['phone'] ?>">
                </div>
               <input type="number" name="id" id="id" hidden value="<?= $data['eid'] ?>">
               <input type="submit" value="Enregistrer" class="btn btn-info">
               <input type="reset" value="Annuler" class="btn btn-danger">
            </form>
    </div>
    
</body>
</html>