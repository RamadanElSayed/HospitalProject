<!DOCTYPE html>
<html lang="en">

<head>
    <title>User Registration</title>
    <meta charset="utf-8"/>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta content="" name="description"/>
    <meta content="" name="author"/>
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
<!-- start: REGISTRATION -->
<div class="row">
    <div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
        <div class="logo margin-top-30">
            <a href="registration.php"><h2>Patient Registration</h2></a>
        </div>
        <div class="box-register">
            <form class="form-register" name="registration" id="registration" method="post">
                <fieldset>
                    <legend>
                        Sign Up
                    </legend>
                    <p>
                        Enter your personal details below:
                    </p>
                    <div class="form-group">
                        <input type="text" class="form-control" name="full_name" placeholder="Full Name" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="address" placeholder="Address" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="city" placeholder="City" required>
                    </div>
                    <div class="form-group">
                        <label class="block">
                            Gender
                        </label>
                        <div class="clip-radio radio-primary">
                            <input type="radio" id="rg-female" name="gender" value="female">
                            <label for="rg-female">
                                Female
                            </label>
                            <input type="radio" id="rg-male" name="gender" value="male">
                            <label for="rg-male">
                                Male
                            </label>
                        </div>
                    </div>
                    <p>
                        Enter your account details below:
                    </p>
                    <div class="form-group">
								<span class="input-icon">
									<input type="email" class="form-control" name="email" id="email"
                                           onBlur="userAvailability()" placeholder="Email" required>
									<i class="fa fa-envelope"></i> </span>
                        <span id="user-availability-status1" style="color: red;font-size:12px;"></span>
                    </div>
                    <div class="form-group">
								<span class="input-icon">
									<input type="password" class="form-control" id="password" name="password"
                                           placeholder="Password" required>
									<i class="fa fa-lock"></i> </span>
                    </div>
                    <div class="form-group">
								<span class="input-icon">
									<input type="password" class="form-control" id="password_again"
                                           name="password_again" placeholder="Password Again" onBlur="checkPassword()"
                                           required>
									<i class="fa fa-lock"></i> </span>
                        <span id="user-password" style="color: red;font-size:12px;"></span>

                    </div>
                    <div class="form-group">
                        <div class="checkbox clip-check check-primary">
                            <input type="checkbox" id="agree" value="agree">
                            <label for="agree">
                                I agree
                            </label>
                        </div>
                    </div>
                    <div class="form-actions">
                        <p>
                            Already have an account?
                            <a href="user-login.php">
                                Log-in
                            </a>
                        </p>
                        <button type="submit" class="btn btn-primary pull-right" id="submit" name="submit">
                            Submit <i class="fa fa-arrow-circle-right"></i>
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
<script src="vendor/jquery-validation/jquery.validate.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/login.js"></script>
<script>
    jQuery(document).ready(function () {
        Main.init();
        Login.init();
    });
</script>
<?php
include_once("NewPatient.inc");
include_once('include/config.php');

// require 'NewPatient.inc';
if (isset($_POST['submit'])) {
    $fname = $_POST['full_name'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $patient = new PatientData;
    $patient->fullName = $fname;
    $patient->city = $city;
    $patient->address = $address;
    $patient->gender = $gender;
    $patient->password = $password;
    $patient->email = $email;
    $patient->connection = $con;
    $patient->create();
}
?>
<script>
    function checkPassword() {
        var password = $("#password").val();
        var passwordAgain = $("#password_again").val();
        if (password !== passwordAgain) {
            $("#user-password").html("Password Not Match!!");
        }
        else {
            $("#user-password").html("");
        }

    }
</script>

<script>
    function userAvailability() {
        $("#loaderIcon").show();
        jQuery.ajax({
            url: "check_availability.php",
            data: 'email=' + $("#email").val(),
            type: "POST",
            success: function (data) {
                $("#user-availability-status1").html(data);
                $("#loaderIcon").hide();
            },
            error: function () {
            }
        });
    }
</script>
</body>
<!-- end: BODY -->
</html>