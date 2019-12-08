<?php
include './classes/produit.class.php';

$del = new produit;
$del->remove_f_cart($_GET['id']);

header('location:prodindex.php?notif=delete');
?>