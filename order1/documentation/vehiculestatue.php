<?php
include 'classes/ordre.class.php';
$Data = new Ordre ;
$Data->insertv($_GET['type'],$_GET['oid']);
header("Location:template.php");

?>