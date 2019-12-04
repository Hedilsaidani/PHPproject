
<?php
include '../classes/vehicule.class.php';

$type = $_POST ['type'];
$status =$_POST ['status'];
$vehicule_number  =$_POST ['vehicule_number '];
$newvehicule=new vehicule;


$newvehicule->creatvehicule($type,$status,$vehicle_number);
header('location:../vehicule.php?notif=new');

?>
