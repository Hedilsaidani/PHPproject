<?php
include "../classes/produit.class.php";
    
$produit = new produit;
$produit->delete($_GET['id']);
header('Location:../table.php?notif=delete');
     ?>
