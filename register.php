
<?php require('includes/config.php'); ?>
        <?php 
            if(isset($_POST['reg'])){

    if (!isset($_POST['username'])) $error[] = "Please fill out all fields";
    if (!isset($_POST['email'])) $error[] = "Please fill out all fields";
    if (!isset($_POST['password'])) $error[] = "Please fill out all fields";

    $username = $_POST['username'];

    //very basic validation
    if(!$user->isValidUsername($username)){
        $error[] = 'Usernames must be at least 3 Alphanumeric characters';
    } else {
        $stmt = $db->prepare('SELECT username FROM members WHERE username = :username');
        $stmt->execute(array(':username' => $username));
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if(!empty($row['username'])){
            $error[] = 'Username provided is already in use.';
        }

    }

    if(strlen($_POST['password']) < 3){
        $error[] = 'Password is too short.';
    }

    if(strlen($_POST['passwordConfirm']) < 3){
        $error[] = 'Confirm password is too short.';
    }

    if($_POST['password'] != $_POST['passwordConfirm']){
        $error[] = 'Passwords do not match.';
    }

    //email validation
    $email = htmlspecialchars_decode($_POST['email'], ENT_QUOTES);
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error[] = 'Please enter a valid email address';
    } else {
        $stmt = $db->prepare('SELECT email FROM members WHERE email = :email');
        $stmt->execute(array(':email' => $email));
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if(!empty($row['email'])){
            $error[] = 'Email provided is already in use.';
        }

    }


    //if no errors have been created carry on
    if(!isset($error)){

        //hash the password
        $hashedpassword = $user->password_hash($_POST['password'], PASSWORD_BCRYPT);

        //create the activasion code
        $activasion = md5(uniqid(rand(),true));

        try {

            //insert into database with a prepared statement
            $stmt = $db->prepare('INSERT INTO members (username,password,email,active) VALUES (:username, :password, :email, :active)');
            $stmt->execute(array(
                ':username' => $username,
                ':password' => $hashedpassword,
                ':email' => $email,
                ':active' =>"Yes"
            ));
            $id = $db->lastInsertId('memberID');

            //send email
            $to = $_POST['email'];
            $subject = "Registration Confirmation";
            $body = "<p>Thank you for registering at demo site.</p>
            <p>To activate your account, please click on this link: <a href='".DIR."activate.php?x=$id&y=$activasion'>".DIR."activate.php?x=$id&y=$activasion</a></p>
            <p>Regards Site Admin</p>";

            // $mail = new Mail();
            // $mail->setFrom(SITEEMAIL);
            // $mail->addAddress($to);
            // $mail->subject($subject);
            // $mail->body($body);
            // $mail->send();

            //redirect to index page
            header('Location: login.php?action=joined');
            exit;

        //else catch the exception and show the error.
        } catch(PDOException $e) {
            $error[] = $e->getMessage();
        }

    }

}

         ?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>doureb</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-primary">

    <div class="container">

      <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-6 col-md-9">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <?php 
                 //check for any errors
                if(isset($error)){
                    foreach($error as $error){
                        echo '<div class="alert alert-danger">'.$error.'</div>';
                    }
                }

                 ?>
                <!-- Nested Row within Card Body -->
                <div class="row">
                   
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account</h1>
                            </div>
                            <form class="user" action="" method="post">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="First Name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="username" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="username">
                                </div> 
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Email Address">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" name="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" name="passwordConfirm" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Repeat Password">
                                    </div>
                                </div>
                                <input type="submit" name="reg" class="btn btn-primary btn-user btn-block" value="Register Account">
                                    
                                </a>
                                <hr>
                                <a href="index.php" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                </a>
                                <a href="index.php" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.php">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.php">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>