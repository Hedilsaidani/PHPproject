<?php
include "../classes/client.class.php";
    
$client = new client;
$client->delete($_GET['id']);
header('Location:../typography.php?notif=delete');
     ?>
