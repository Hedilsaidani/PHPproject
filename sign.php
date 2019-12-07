<?php

    session_start();

    include_once 'login.class.php';
    if(isset($_SESSION['username'])!="") {
        header("Location: dashboard.php");
    }

    if (isset($_POST['signup'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        $phone=$_POST['phone'];

        if (!preg_match("/^[a-zA-Z0-9 ]+$/",$username)) {
            $username_error = "Name must contain only letters, numbers and space";
            goto error;
        }

        if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
            $email_error = "Please Enter Valid Email";
            goto error;
        }

        if(strlen($password) < 6) {
            $password_error = "Password must be minimum of 6 characters";
            goto error;
        }

        if($password != $cpassword) {
            $cpassword_error = "Password and Confirm Password doesn't match";
            goto error;
        }

        $user = new auth;
        $hashed_password =$user-> passwordhash($password, PASSWORD_DEFAULT);
        $user->register($username, $email, $hashed_password,$phone);
        header('Location:index.php');
        exit();
    }
    error:
    include 'signup.php';