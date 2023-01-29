<?php session_start();
include "db_connection.php";
// var_dump($_POST);
// echo "------------";
// var_dump($_FILES);
$to_update = "";
$uploads_dir = "./img/Users";

foreach ($_POST as $element => $value) {
    if ($value != "") {
        $to_update .= $element . "='";
        $to_update .= $value . "',";
    }
}
if ($to_update != "") {
    $to_update = rtrim($to_update, ",");
    $query = "UPDATE Users SET $to_update WHERE ID='" . $_SESSION["ID"] . "'";
    $ans["answer"] = $dataSQL = mysqli_query($db, $query) or die(mysqli_error($db));
}
if (isset($_FILES["avatar"])) {
    $temp_name = $_FILES["avatar"]["tmp_name"];
    $name_file = basename($_FILES["avatar"]["name"]);
    $destine = "$uploads_dir/$name_file";
    move_uploaded_file($temp_name, $destine);
    $query = "UPDATE  Users  SET user_ima = '" . $destine . "' WHERE ID='" . $_SESSION["ID"] . "'";

    mysqli_query($db, $query) or die(mysqli_error($db));
}

// echo json_encode($ans);
header("Location:./user_view.php");