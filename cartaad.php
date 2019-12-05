<?php
session_start();
include_once './classes/produit.class.php';
$cid = $_POST['cid'];
$pid = $_POST['pid'];
$qty = $_POST['qt'];
$price = $_POST['price'];
$ne = $_POST['ne'];
$px = $_POST['px'];
/*
echo 'cid :'.$cid;
echo '/';
echo 'pid :'.$pid;
echo '/';
echo 'quantite :'.$qty;
echo '/';
echo '$price : '.$price;
echo '/';
echo 'names :'.$ne;
echo '/';
echo 'px :'.$px;
*/
$total = ($px * $qty) + ($price * $qty);
echo $total;

$add = new produit();
$add->addcart($cid,$pid,$qty,$stutus,$ne,$total);
header('location:prodindex.php');









?>