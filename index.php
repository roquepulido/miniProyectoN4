<?php
if (!isset($_SESSION)) {
    session_start();
    $_SESSION["login"] = false;
    $_SESSION["error"] = false;
}

if ($_SESSION["login"]) {
    header("Location:./user_view.php");
} else {
    header("Location:./login_view.php");
}