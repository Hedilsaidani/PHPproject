<?php
include './classes/produit.class.php';

$cid=$_POST['cid'];
$pid=$_POST['pid'];
$quantity=$_POST['qty'];
$optt=$_POST['opt'];
$total_price=$_POST['price'];
$odate = date("Y-m-d");
$ord = new produit;
$ord-> addord($cid,$pid,$quantity,$optt,$total_price,$odate);
header('Location:prodindex.php?notif=ord');
?>