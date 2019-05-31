<?php
session_start();
//error_reporting(0);
include('include/checklogin.php');
admin_already_logged();
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Admin-Login</title>
        <meta charset="utf-8"/>

        <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic"
              rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
        <link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
        <link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
        <link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
    </head>
    <body class="login">
    <div class="row">
        <div class=" container main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
            <div class="logo margin-top-30">
                <a href="admin-login.php"><h2> HMS | Admin Login</h2></a>
            </div>

            <div class="box-login">
                <form class="form-login" method="post">
                    <fieldset>
                        <legend>
                            Sign in
                        </legend>
                        <p>
                            Please enter your name and password to log in.<br/>
                        </p>
                        <div class="form-group">
								<span class="input-icon">
									<input type="text" class="form-control" name="username" placeholder="Username">
									<i class="fa fa-user"></i> </span>
                        </div>
                        <div class="form-group form-actions">
								<span class="input-icon">
									<input type="password" class="form-control password" name="password"
                                           placeholder="Password">
									<i class="fa fa-lock"></i>
									 </span>
                            <span id="user-password" style="color: red;font-size:12px;"></span>

                        </div>
                        <div class="form-actions">

                            <button type="submit" class="btn btn-primary pull-right" name="submit">
                                Login <i class="fa fa-arrow-circle-right"></i>
                            </button>
                        </div>
                    </fieldset>
                </form>

                <div class="copyright">
                    &copy; <span class="current-year"></span><span class="text-bold text-uppercase"> HMS</span>. <span>All rights reserved</span>
                </div>

            </div>

        </div>
    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/modernizr/modernizr.js"></script>
    <script src="vendor/jquery-cookie/jquery.cookie.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="vendor/switchery/switchery.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/login.js"></script>
    <script>
        jQuery(document).ready(function () {
            Main.init();
            Login.init();
        });
    </script>

    </body>
    <!-- end: BODY -->
    </html>
<?php
error_reporting(0);
include("include/config.php");
if (isset($_POST['submit'])) {
    echo "<script>$('#user-password').html('')</script>";

    if ( $_POST['username']=='admin'&&$_POST['password']=='admin1') {
        echo "<script>$('#user-password').html('')</script>";

        $extra = "admin-dashboard.php";
        $_SESSION['adminLogin'] = $_POST['username'];
        $host = $_SERVER['HTTP_HOST'];
        $uip = $_SERVER['REMOTE_ADDR'];
        $status = 1;
        $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
        header("location:http://$host$uri/$extra");
        exit();
    } else {
        // For stroing log if user login unsuccessfull
        echo "<script>$('#user-password').html('Invalid username or password')</script>";
        $_SESSION['adminLogin'] = $_POST['username'];
        $uip = $_SERVER['REMOTE_ADDR'];
        $_SESSION['adminErrmsg'] = "Invalid username or password";
    }
}
?>