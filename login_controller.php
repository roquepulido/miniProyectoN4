<?php session_start();

include "db_connection.php";

$email = $_POST["email"];
$pass = $_POST["pass"];

$query = "SELECT * FROM Users WHERE email='$email' AND pass='$pass'";

$data = mysqli_query($db, $query) or die(mysqli_error($db));
if ($data->num_rows > 0) {
    $_SESSION["login"] = true;
    $_SESSION["error"] = false;
    while ($row = $data->fetch_assoc()) {
        $_SESSION["ID"] = $row["ID"];
    }
    header("Location:./user_view.php");
} else {

    $_SESSION["login"] = false;
    $_SESSION["error"] = true;
    header("Location:./login_view.php");
}