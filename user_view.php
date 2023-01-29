<?php session_start();
include "./db_connection.php";
include("./templates/navbar.php");

if (empty($_SESSION["login"])) {
    header("Location:./templates/404.php");
} else {
    $ID = $_SESSION["ID"];

    $query = "SELECT * FROM Users WHERE ID = '$ID'";

    $dataSQL = mysqli_query($db, $query) or die(mysqli_error($db));
    $user_data = $dataSQL->fetch_all(MYSQLI_ASSOC);
    $user = $user_data[0];
}
include("./templates/headhtml.php");
navbar($user["name"], $user["user_ima"]);
?>
<div class="h-100 d-flex align-items-center justify-content-center mt-5">
    <div class="container d-flex flex-column align-items-center gap-5">
        <div class="head_card d-flex flex-column align-items-center gap-2 header__user__view">
            <h1>Personal info</h1>
            <h3>Basic info, like your name and photo</h3>
        </div>
        <div class="info__container container border border-1 rounded-3 p-3">
            <div class="row">
                <div class="title__user col ps-4 profile__title">
                    <h2>Profile</h2>
                    <p>Some info may be visible to other people</p>
                </div>
                <div class="button__container col d-flex justify-content-around align-content-center flex-wrap">
                    <a href="./user_update_view.php" class="btn btn-light border border-1 rounded-4 px-4">Edit</a>
                </div>
            </div>
            <hr />
            <div class="row">
                <div class="col-4 ps-4 d-flex align-items-center profile__user__label">
                    <span>photo</span>
                </div>
                <div class="col offset-1 text-end text-sm-start">
                    <img style="height: 80px" src="<?= $user["user_ima"] ?>" alt="Avatar" />
                </div>
            </div>
            <hr />
            <div class="row">
                <div class="col-4 ps-4 d-flex align-items-center profile__user__label">
                    <span>name</span>
                </div>
                <div class="col offset-1 text-end text-sm-start profile__user__data">
                    <span><?= $user["name"] ?></span>
                </div>
            </div>
            <hr />
            <div class="row">
                <div class="col-4 ps-4 d-flex align-items-center profile__user__label">
                    <span>bio</span>
                </div>
                <div class="col offset-1 text-end text-sm-start profile__user__data">
                    <span><?= $user["bio"] ?></span>
                </div>
            </div>
            <hr />
            <div class="row">
                <div class="col-4 ps-4 d-flex align-items-center profile__user__label">
                    <span>phone</span>
                </div>
                <div class="col offset-1 text-end text-sm-start profile__user__data">
                    <span><?= $user["phone"] ?></span>
                </div>
            </div>
            <hr />
            <div class="row">
                <div class="col-4 ps-4 d-flex align-items-center profile__user__label">
                    <span>email</span>
                </div>
                <div class="col offset-1 text-end text-sm-start profile__user__data">
                    <span><?= $user["email"] ?></span>
                </div>
            </div>
            <hr />
            <div class="row">
                <div class="col-4 ps-4 d-flex align-items-center profile__user__label">
                    <span>password</span>
                </div>
                <div class="col offset-1 text-end text-sm-start profile__user__data">
                    <span><?php for ($i = 0; $i < strlen($user["pass"]); $i++) {
                                echo "*";
                            } ?></span>
                </div>
            </div>
        </div>

    </div>

</div>

<footer class="container d-flex justify-content-between p-3">
    <span class="font14">created by
        <b><a href="https://github.com/roquepulido">roquepulido</a></b></span>
    <span class="font14"><a href="https://devchallenges.io/">devChallenges.io</a></span>
</footer>

<?php
include("./templates/footer.php");
?>