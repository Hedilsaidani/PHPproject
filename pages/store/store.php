
<?php
include '../classes/admin.class.php';

$name = $_POST ['name'];
$pwd =$_POST ['pwd'];
$email =$_POST ['email'];
$phone= $_POST ['phone'];
$newemployee=new employee;


$newemployee->creatEmployee($name,$pwd,$email,$phone);
header('location:../user.php?notif=new');

?>
