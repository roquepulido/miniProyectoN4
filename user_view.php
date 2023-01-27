<?php session_start();
include "./db_connection.php";
include("./templates/navbar.php");

if (empty($_SESSION["login"])) {
    header("Location:./templates/404.php");
} else {
    $ID = $_SESSION["ID"];

    $query = "SELECT * FROM Users_data A INNER JOIN Users B ON A.ID_User = B.ID WHERE ID_user = '$ID'";

    $dataSQL = mysqli_query($db, $query) or die(mysqli_error($db));
    $user_data = $dataSQL->fetch_all(MYSQLI_ASSOC);
    $user = $user_data[0];
}
include("./templates/headhtml.php");
navbar($user["name"], $user["user_ima"]);
?>
<div class="h-100 d-flex align-items-center justify-content-center mt-5">
    <div class="container d-flex flex-column align-items-center gap-5">
        <div class="head_card d-flex flex-column align-items-center gap-2">
            <h1>Personal info</h1>
            <h3>Basic info, like your name and photo</h3>
        </div>
        <div class="info__container border border-2 rounded-3 p-3">
            <div class="row">
                <div class="title__user col ps-4">
                    <h2>Profile</h2>
                    <p>Some info may be visible to other people</p>
                </div>
                <div class="button__container col d-flex justify-content-around align-content-center flex-wrap">
                    <button class="btn border border-2 px-4">Edit</button>
                </div>
            </div>
            <hr />
            <div class="row">
                <div class="col-4 ps-4 d-flex align-items-center">
                    <span class="text-uppercase">photo</span>
                </div>
                <div class="col offset-1 text-end text-sm-start">
                    <img style="height: 80px" src="<?= $user["user_ima"] ?>" alt="Avatar" />
                </div>
            </div>
            <hr />
            <div class="row">
                <div class="col-4 ps-4 d-flex align-items-center">
                    <span class="text-uppercase">name</span>
                </div>
                <div class="col offset-1 text-end text-sm-start">
                    <span><?= $user["name"] ?></span>
                </div>
            </div>
            <hr />
            <div class="row">
                <div class="col-4 ps-4 d-flex align-items-center">
                    <span class="text-uppercase">bio</span>
                </div>
                <div class="col offset-1 text-end text-sm-start">
                    <span><?= $user["bio"] ?></span>
                </div>
            </div>
            <hr />
            <div class="row">
                <div class="col-4 ps-4 d-flex align-items-center">
                    <span class="text-uppercase">phone</span>
                </div>
                <div class="col offset-1 text-end text-sm-start">
                    <span><?= $user["phone"] ?></span>
                </div>
            </div>
            <hr />
            <div class="row">
                <div class="col-4 ps-4 d-flex align-items-center">
                    <span class="text-uppercase">email</span>
                </div>
                <div class="col offset-1 text-end text-sm-start">
                    <span><?= $user["email"] ?></span>
                </div>
            </div>
            <hr />
            <div class="row">
                <div class="col-4 ps-4 d-flex align-items-center">
                    <span class="text-uppercase">password</span>
                </div>
                <div class="col offset-1 text-end text-sm-start">
                    <span>*<?= $user["pass"] ?></span>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
include("./templates/footer.php");
?>