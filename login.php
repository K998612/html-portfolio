<?php 
session_start(); 
include "conn.php";
include "config.php";
$msg = "";
                                      
                                                                      
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
                                        
                                        
$email_err = $password_err= ""; 
$email = $password= "";
                                        
if(isset($_GET['tkn']) && $_GET['tkn'] != ""){
    $token = $link->real_escape_string($_GET['tkn']);
    $sql1 = "SELECT * FROM users WHERE token = '$token' LIMIT 1";
    $result = mysqli_query($link, $sql1);
    if(mysqli_num_rows($result) > 0){
        $row1 = mysqli_fetch_assoc($result);
        $uverify = $row1['verify'];
        
        if($uverify == 0){
             $sql1up = "UPDATE users SET verify = 1 WHERE token = '$token' LIMIT 1";
             mysqli_query($link, $sql1up); 
             $success = "E-mail has been successfully verified! Kindly login to your account.";
        }else{
          $msg = "E-mail has already been verified!";
        }
      
    }else{
        $msg = "Invalid Verification!";
    }
    
}
                                        
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
     
      if (empty($_POST["email"])) {
        $msg = "E-mail is required";
      } else {
        $email = text_input($_POST["email"]);
       
      
      }
      
      
       if (empty($_POST["password"])) {
        $msg = "Password is required";
      } else {
        $password = text_input($_POST["password"]);
        // check if name only contains letters and whitespace
       
      }
        
            
        $email = $link->real_escape_string($_POST['email']);
        $password = $link->real_escape_string($_POST['password']);
        //$ip = $_SERVER['REMOTE_ADDR'];
        
        
        if($email == "" || $password == ""){
            $msg = "E-mail or Password fields cannot be empty!";
            
        }else {
            $sql=$link->query("SELECT id,email,password FROM users WHERE email='$email' AND password= '$password' LIMIT 1");
            if($sql->num_rows > 0){
                $data = $sql->fetch_array();
                
                  require_once "PHPMailer/PHPMailer.php";
                  require_once 'PHPMailer/Exception.php';                                             
            
                        if($sql1 = "SELECT * FROM users WHERE email='$email'  AND password='$password' LIMIT 1"){
    
                     $result1 = $link->query($sql1);
                     if(mysqli_num_rows($result1) > 0){
                         
                         $row = mysqli_fetch_array($result1);
         
                              $_SESSION['email'] = $row['email'];
                              header('location: users/');
                          
                                          
                      }else{
                          $msg = "E-mail or Password incorrect!";
                      }
                  }

                    
                     }
                else{
                    
                    $msg = "E-mail or Password incorrect!";
                }
            }
            }
                 
            
            
  
//Add Applicant details to eRegister record

?>
<!DOCTYPE html>
<html lang="en" class="h-100">


<!-- Mirrored from makaanlelo.com/tf_products_007/kripton/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Sep 2022 13:54:18 GMT -->
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
                                    <h4 class="text-center mb-4">Sign in your account</h4>
                                    <form action="login.php" method="POST">
                                      <?php if($msg != ""){?>

                                        <div class="alert alert-light alert-dismissible alert-alt fade show">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                            </button>
                                            <strong>Message!</strong> <?php echo $msg ?> 
                                        </div>
                                          <?php }  ?>

                                          <?php if(isset($_GET['success'])) {?>
                                            <div class="alert alert-success alert-dismissible alert-alt fade show">
                                                <button type="button" class="btn-close btn-success" data-bs-dismiss="alert" aria-label="btn-close">
                                                </button>
                                                <strong>Message!</strong> Your registration was successful
                                            </div>
                                          <?php }  ?>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input type="email" class="form-control" name="email" placeholder="Your email address" value="">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password" class="form-control" name="password" placeholder="Your Password" value="">
                                        </div>
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <div class="form-group">
                                            </div>
                                            <div class="form-group">
                                                <!-- <a href="forgot-password.php">Forgot Password?</a> -->
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-info btn-block">Sign Me In</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Don't have an account? <a class="text-info" href="register.php">Sign up</a></p>
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

<!-- Mirrored from makaanlelo.com/tf_products_007/kripton/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Sep 2022 13:54:19 GMT -->
</html>