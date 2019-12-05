<?php
include_once 'classes/auth.class.php';
$login = new auth();
$email = $_POST['email'];
$password =stripslashes(strip_tags($_POST['pwd']));


if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
  $email_erreur = "Valid Email is required";
  goto displayOnly;
}
if (strlen($password) < 6) {
  $password_erreur = "Password must be minimum of 6 characters";
  goto displayOnly;
}

if (filter_var($email,FILTER_VALIDATE_EMAIL)) {
    $hashed_password =$login->passwordhash($password);
    $check = $login->select($email,$hashed_password);

}else{
     
  /* header('location:sidebarlog.php');*/
     
}
displayOnly:

?>