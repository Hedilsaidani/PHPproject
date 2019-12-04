<?php
include '../classes/produit.class.php';

$name = $_POST ['name'];
$price =$_POST ['price'];
$description= $_POST ['description'];
$newproduit=new produit;


$newproduit->creatproduit($name,$price,$description);
header('location:../table.php?notif=new');

?>
