<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign up | </title>
    <link href="projetPHP/assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-offset-2">
                <div class="page-header">
                    <h2>Registration </h2>
                </div>
                <p>Please fill all fields in the form</p>
                <form action="sign.php" method="post">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" value="<?= $_POST['username'] ?? '' ?>" maxlength="50" required="required" placeholder="username must contain only letters, numbers and space">
                        <span class="text-danger"><?php if (isset($username_error)) echo $username_error; ?></span>
                    </div>
                    <div class="form-group ">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" value="<?= $_POST['email'] ?? '' ?>" placeholder="fooooolen@example.com" maxlength="50" required="required">
                        <span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="can't be less than 6 characters" required="required">
                        <span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
                    </div>  
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" name="cpassword" class="form-control" placeholder="confirm password" required="required">
                        <span class="text-danger"><?php if (isset($cpassword_error)) echo $cpassword_error; ?></span>
                    </div>
                    <div class="form-group">
                        <label>phone</label>
                        <input type="text" name="phone" class="form-control" value="<?= $_POST['phone'] ?? '' ?>" maxlength="50" required="required" placeholder="+216">
                        
                    </div>
                    <input type="submit" class="btn btn-block btn-primary" name="signup" value="submit">
                    <div class="text-center">
                        Already have a account?<a href="index.php" class="btn btn-default">Login</a>
                    </div>
                </form>
            </div>
        </div>    
    </div>
</body>
</html>