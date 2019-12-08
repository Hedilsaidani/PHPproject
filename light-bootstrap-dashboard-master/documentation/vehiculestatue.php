<?php
include 'classes/ordre.class.php';
$Data = new Ordre ;
$Data->insert($_GET['oid'],$_GET['type']);

header("Location:template.php");

?>