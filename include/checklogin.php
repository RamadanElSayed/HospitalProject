<?php
function check_login()
{
    if (isset($_SESSION['login'])) {
        if (strlen($_SESSION['login']) == 0) {
            $host = $_SERVER['HTTP_HOST'];
            $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
            $extra = "index.php";
            $_SESSION["login"] = "";
            header("Location: http://$host$uri/$extra");
        }
    }

}

function patient_already_logged()
{
    if (isset($_SESSION['login'])) {
        if (strlen($_SESSION['login']) != 0) {
            $host = $_SERVER['HTTP_HOST'];
            $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
            $extra = "dashboard.php";
            header("Location: http://$host$uri/$extra");
        }

    }

}

function go_login()
{
    $host = $_SERVER['HTTP_HOST'];
    $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $extra = "user-login.php";
    $_SESSION["login"] = "";
    header("Location: http://$host$uri/$extra");
}

function check_doctor_login()
{
    if (isset($_SESSION['dlogin'])) {
        if (strlen($_SESSION['dlogin']) == 0) {
            $host = $_SERVER['HTTP_HOST'];
            $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
            $_SESSION["dlogin"] = "";
            $extra = "doctor-login.php";
            header("Location: http://$host$uri/$extra");
        }
    }

}

function doctor_already_logged()
{
    if (isset($_SESSION['dlogin'])) {
        if (strlen($_SESSION['dlogin']) != 0) {
            $host = $_SERVER['HTTP_HOST'];
            $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
            $extra = "doctor-dashboard.php";
            header("Location: http://$host$uri/$extra");
        }
    }

}

function check_admin_login()
{
    if (isset($_SESSION['adminLogin'])) {
        if (strlen($_SESSION['adminLogin']) == 0) {
            $host = $_SERVER['HTTP_HOST'];
            $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
            $_SESSION['adminLogin'] = "";
            $extra = "admin-login.php";
            header("Location: http://$host$uri/$extra");
        }
    }

}

function admin_already_logged()
{
    if (isset($_SESSION['adminLogin'])) {
        if (strlen($_SESSION['adminLogin']) != 0) {
            $host = $_SERVER['HTTP_HOST'];
            $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
            $extra = "admin-dashboard.php";
            header("Location: http://$host$uri/$extra");
        }
    }

}
?>