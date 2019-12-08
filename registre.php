<?php
include 'classes/auth.class.php';


//if (isset($_POST['submit'])) {
	//session_start();

if (isset($_POST['submit'])) {

	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['pwd'];
	$confpassword = $_POST['confpwd'];
	$phone = $_POST['phone'];
	$adresse = $_POST['adresse'];


    if (!preg_match("/^[a-zA-z0-9 ]+$/",$name)) {
        $name_erreur = "Name must contain only letters,numbers and espace";
        goto displayOnly;
    }

    if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
       $email_erreur = "Valid Email is required";
       goto displayOnly;
    }

    if (strlen($password) < 6) {
        $password_erreur = "Password must be minimum of 6 characters";
        goto displayOnly;
    }
    
    if ($password != $confpassword) {
        $confpassword_erreur = "Password and confirm Password doesn't match";
        goto displayOnly;
	}
	
    if (!preg_match("/^[0-9 ]+$/",$phone)) {
        $phone_erreur = "phone number must contain only numbers and espace";
        goto displayOnly;
	}
	if (!preg_match("/^[a-zA-z0-9 ]+$/",$adresse)) {
        $adresse_erreur = "Address must contain only letters,numbers and espace";
        goto displayOnly;
    }
		
	   $auth = new auth;
	   $hashed_password =$auth->passwordhash($password);
	   $auth->register($name,$email,$hashed_password,$phone,$adresse);

	 //  $_SESSION['name'] =$name;
	   header('location:sidebarlog.php');
	  exit();
	
	}
    displayOnly:

    //$_SESSION['message'] = 'the tow passwords don ';
    header('location:regindex.php?notif=reg');
//}




?>