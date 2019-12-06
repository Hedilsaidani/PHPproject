<?php
include 'classes/ordre.class.php';
$ordre = new Ordre ;
$ordre->updateOrder($_GET['id']);
header('Location:order.php');

?>