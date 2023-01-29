<?php session_start();
include "./db_connection.php";


if (isset($_POST)) {
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $avatar_url = "./img/Users/avatar_blank.jpg";
    $query = "INSERT INTO Users (email, pass, user_ima) values('$email', '$pass', '$avatar_url')";
}
$dataSQL = mysqli_query($db, $query) or die(mysqli_error($db));
$id = mysqli_query($db, "SELECT COUNT(ID) FROM Users") or die(mysqli_error($db));
$id = $id->fetch_all(MYSQLI_ASSOC);

$_SESSION["ID"] = $id[0]["COUNT(ID)"];
$_SESSION["login"] = true;
header("Location:./user_update_view.php");