<?php
include_once 'login.class.php';
$login = new auth();
$email = $_POST['email'];
$pwd =stripslashes(strip_tags($_POST['password']));


if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
  $email_erreur = "Valid Email is required";
  goto displayOnly;
}
if (strlen($pwd) < 6) {
  $password_erreur = "Password must be minimum of 6 characters";
  goto displayOnly;
}

if (filter_var($email,FILTER_VALIDATE_EMAIL)) {
    $hashed_password =$login->passwordhash($pwd);
    $check = $login->select($email,$hashed_password);

}else{
     
  /* header('location:sidebarlog.php');*/
     
}
displayOnly:

?>