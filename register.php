<?php
// Include config file
include "conn.php";
include "config.php";

$msg = "";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


// Define variables and initialize with empty values
$username = $email = $password = $cpassword = $address = $phone = $country = $fname = $lname = "";
$username_err = $email_err = $password_err = $cpassword_err =  $cemail_err = $phone_err = $fname_err = $lname_err = $country_err =  "";


if(isset($_GET['ref'])){

    $refuser = $_GET['ref'];

}else {
    $refuser = '';
}

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
      // Validate email
      if(empty(text_input($_POST["email"]))){
        $email_err = "Please enter an email.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE email = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            
            // Set parameters
            $param_email = text_input($_POST["email"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $email_err = "This email is already taken.";
                } else{
                    $email = text_input($_POST["email"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }


          // Validate username
          if(empty(text_input($_POST["username"]))){
            $username_err = "Please enter an username.";
        } else{
            // Prepare a select statement
            $sql = "SELECT id FROM users WHERE username = ?";
            
            if($stmt = mysqli_prepare($link, $sql)){
                // Bind variables to the prepared statement as parameters
                mysqli_stmt_bind_param($stmt, "s", $param_username);
                
                // Set parameters
                $param_username = text_input($_POST["username"]);
                
                // Attempt to execute the prepared statement
                if(mysqli_stmt_execute($stmt)){
                    /* store result */
                    mysqli_stmt_store_result($stmt);
                    
                    if(mysqli_stmt_num_rows($stmt) == 1){
                        $username_err = "This username is already taken.";
                    } else{
                        $username = text_input($_POST["username"]);
                    }
                } else{
                    echo "Oops! Something went wrong. Please try again later.";
                }
            }
             
            // Close statement
            mysqli_stmt_close($stmt);
        }


   
    // Validate password
    if(empty(text_input($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(text_input($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = text_input($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(text_input($_POST["password2"]))){
        $cpassword_err = "Please confirm password.";     
    } else{
        $cpassword = text_input($_POST["password2"]);
        if(empty($password_err) && ($password != $cpassword)){
            $cpassword_err = "Password did not match.";
        }
    }

    if (empty(text_input($_POST['fname']))) {
        $fname_err = "Input your first name";
    }else{
        $fname = text_input($_POST['fname']);
    }

    if (empty(text_input($_POST['lname']))) {
        $lname_err = "Input your last name";
    }else{
        $lname = text_input($_POST['lname']);
    }
    
    // Check input errors before inserting in database
    if(empty($fname_err) && empty($lname_err) && empty($email_err) && empty($password_err) && empty($cpassword_err) && empty($username_err)){
    
        $referred = text_input($_POST['referral']);
    
             $sql = mysqli_query($link, "INSERT INTO users (`fname`, `lname`, `email`, `username`, `password`, `referred_by`) VALUES ('$fname', '$lname', '$email', '$username', '$password', '$referred' ) ");
            if ($sql) {
                require_once "PHPMailer/PHPMailer.php";
                require_once 'PHPMailer/Exception.php';

                $mail = new PHPMailer;
                $mail->setFrom($emaila);
                $mail->FromName = $name;
                $mail->addAddress("$email");
                $mail->isHTML(true);
                $mail->Subject = "Welcome Message";
                $mail->Body = '<div style="border:1px solid #ccc;padding:5%">
                    <div align="">
                        <img src="'.$bankurl.'/logo/logo.png" style="height:100px;width:100px" align="center" >
                    </div>
                    <h3 align="">Hi, </h3>
                    <p>
                        You have taken a bold step for registering with us at <a href="'.$bankurl.'" target="_blank" ><b>'.$name.'</b></a>
                        <br>
                        To complete your registration and begin investing with us, please click the link below to activate your account by logging in.
                        <br><br>
                        
                    </p>
                    <p>
                        <i></i>'.$name.'.
                    </p>
                    </div>';
                    $mail->send();
                    echo "<script>
                       window.location.href='login.php?success';
                       </script>";  

            }else{
                $msg = "Error occured while registering, try again!!";
            }
        
    }
    
    // Close connection
    mysqli_close($link);

}

?> 

<!DOCTYPE html>
<html lang="en" class="h-100">


<!-- Mirrored from makaanlelo.com/tf_products_007/kripton/xhtml/page-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Sep 2022 13:56:19 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="admin, dashboard" />
    <meta name="author" content="DexignZone" />
    <meta name="robots" content="index, follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <title>Earn Mood </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link href="users/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="users/css/style.css" rel="stylesheet">

</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <div class="text-center mb-3">
                                        <a href="index-2.html"><img src="images/logo-full.png" alt=""></a>
                                    </div>
                                    <h4 class="text-center mb-4">Sign up your account</h4>
                                    <form action="register.php" method="POST">

                                        <?php if($msg != "") echo "<div style='padding:20px;background-color:#dce8f7;color:black'> $msg</div class='btn btn-success'>" ."</br></br>";  ?>

                                        <div class="form-group">
                                            <label class="mb-1"><strong>First Name</strong></label>
                                            <input type="text" class="form-control" required value="<?php echo $fname ?>" name="fname" placeholder="First Name">
                                            <span class="text-danger"><?php echo $fname_err ?></span>
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Last Name</strong></label>
                                            <input type="text" name="lname" required value="<?php echo $lname ?>" class="form-control" placeholder="Last Name">
                                            <span class="text-danger"><?php echo $lname_err ?></span>
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Username</strong></label>
                                            <input type="text" name="username" required value="<?php echo $username ?>" class="form-control" placeholder="username">
                                            <span class="text-danger"><?php echo $username_err ?></span>
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input type="email" name="email" value="<?php echo $email ?>" required class="form-control" placeholder="hello@example.com">
                                            <span class="text-danger"><?php echo $email_err ?></span>
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password" name="password" required class="form-control" value="" placeholder="Password">
                                            <span class="text-danger"><?php echo $password_err ?></span>
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Confirm Password</strong></label>
                                            <input type="password" class="form-control" required name="password2" value="" placeholder="Comfirm Password">
                                            <span class="text-danger"><?php echo $cpassword_err ?></span>
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Referral(Optional)</strong></label>
                                            <input type="text" name="referral" value="<?php echo $refuser ?>" class="form-control" placeholder="Referral Username">
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-info btn-block">Sign me up</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Already have an account? <a class="text-info" href="login.php">Sign in</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--**********************************
    Scripts
***********************************-->
<!-- Required vendors -->
<script src="users/vendor/global/global.min.js"></script>
<script src="users/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="users/js/custom.min.js"></script>
<script src="users/js/deznav-init.js"></script>
<script src="users/js/demo.js"></script>
<script src="users/js/styleSwitcher.js"></script>
</body>

<!-- Mirrored from makaanlelo.com/tf_products_007/kripton/xhtml/page-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Sep 2022 13:56:19 GMT -->
</html>