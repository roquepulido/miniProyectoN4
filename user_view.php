<?php session_start();
include "./db_connection.php";

if (!$_SESSION["login"]) {
    header("Location:./templates/404.php");
} else {
    var_dump(($_SESSION));
    $ID = $_SESSION["ID"];
    $user = [];


    $query = "SELECT * FROM Users_data A INNER JOIN Users B ON A.ID_User = B.ID WHERE ID_user = '$ID'";

    $dataSQL = mysqli_query($db, $query) or die(mysqli_error($db));
    if ($dataSQL->num_rows > 0) {
        // output data of each row
        $row = $dataSQL->fetch_assoc();
        var_dump($row);
        $user["name"] = $row["name"];
        $user["bio"] = $row["bio"];
        $user["phone"] = $row["phone"];
        $user["user_ima"] = $row["user_ima"];
        $user["email"] = $row["email"];
        $user["pass"] = $row["pass"];
    }
}
include("./templates/headhtml.php");
include("./templates/navbar.php");
?>
<h1>USER view</h1>

<table>
    <tbody>
        <tr>
            <td>Name</td>
            <td><?= $user["name"] ?></td>
        </tr>
        <tr>
            <td>Photo</td>
            <td><img src="<?= $user["user_ima"] ?>" alt="user Ima"></td>
        </tr>
        <tr>
            <td>BIO</td>
            <td>
                <p><?= $user["bio"] ?></p>
            </td>
        </tr>
        <tr>
            <td>Phone</td>
            <td><?= $user["phone"] ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?= $user["email"] ?></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><?= $user["pass"] ?></td>
        </tr>
    </tbody>
</table>
<?php
include("./templates/footer.php");
?>