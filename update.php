<?php session_start();
include "db_connection.php";
$to_update = "";

foreach ($_POST as $element => $value) {
    if ($value != "") {
        $to_update .= $element . "='";
        $to_update .= $value . "',";
    }
}
$to_update = rtrim($to_update, ",");
$query = "UPDATE Users SET $to_update WHERE ID='" . $_SESSION["ID"] . "'";
$ans["answer"] = $dataSQL = mysqli_query($db, $query) or die(mysqli_error($db));
echo json_encode($ans);