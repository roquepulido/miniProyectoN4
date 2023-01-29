<?php session_start();
if (!isset($_SESSION["login"])) {

    $_SESSION["login"] = false;
    $_SESSION["error"] = false;
}

if ($_SESSION["login"]) {
    header("Location:./user_view.php");
} else {
    header("Location:./login_view.php");
}