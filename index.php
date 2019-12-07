<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login |</title>
    <link rel="stylesheet" type="text/css" href="projetPHP/assets/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <div class="page-header">
                    <h2>Login</h2>
                </div>
                <?php if (isset($auth_error)): ?>
                    <div class="alert alert-danger alert-dismissible fade show">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <?= $auth_error ?>
                    </div>
                <?php endif ?>
                <p>Please fill all fields in the form</p>
                <form action="login.php" method="post">
                    <div class="form-group ">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" value="<?= $_POST['email'] ?? '' ?>" maxlength="50" required="">
                        <span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" value="" required="">
                        <span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
                    </div>  
                    <input type="submit" class="btn btn-primary" name="login" value="submit">
                    <br>
                    You don't have account?<a href="signup.php" class="mt-3">Click Here</a>
                </form>
            </div>
        </div>     
    </div>
</body>
</html>