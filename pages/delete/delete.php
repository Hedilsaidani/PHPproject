<?php
include "../classes/admin.class.php";
    
$employee = new employee;
$employee->delete($_GET['id']);
header('Location:../user.php?notif=delete');
     ?>
