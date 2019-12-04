<?php
include "../classes/vehicule.class.php";
    
$vehicule = new vehicule;
$vehicule->delete($_GET['id']);
header('Location:../vehicule.php?notif=delete');
     ?>
