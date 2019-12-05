<?php
include './classes.produit.class.php';

$del = new produit;
$req = $del->remove_f_cart();

header('location:prodindex.php');
?>