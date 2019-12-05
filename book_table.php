<?php
include_once './classes/bk_table.class.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$date = $_POST['date_b'];
$time = $_POST['time_b'];
$person = $_POST['person'];

$bk = new book_tab;
$req = $bk->book_table($name,$email,$phone,$date,$time,$person);

header('location:index.php');

?>