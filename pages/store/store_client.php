<?php
include '../classes/client.class.php';

$name = $_POST ['name'];
$adresse =$_POST ['adresse'];
$email= $_POST ['email'];
$phone= $_POST ['phone'];

$newclient=new client;


$newclient->creatclient($name,$adresse,$email,$phone);
header('location:../typography.php?notif=new');

?>
