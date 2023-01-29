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
navbar($user["name"],  $user["user_ima"]);
?>
<div class="h-100 d-flex align-items-center justify-content-center mt-5">
    <div class="container d-flex flex-column align-items-center gap-3">
        <div class="header container header__user__view">
            <a class="ps-md-5 ps-2" href="<?= "./user_view.php" ?>">
                <i class="bi bi-chevron-left"></i> <span class="ms-2">Back</span></a>
        </div>

        <div class="info__container container border border-1 rounded-3 p-3">
            <div class="row">
                <div class="title__user col ps-4 profile__title">
                    <h2>Change Info</h2>
                    <p>Changes will be reflected to every services</p>
                </div>
            </div>
            <div class="container border border-0">
                <form action="./update.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3 avatar__container">
                        <div id="avatar">
                            <img style="height: 100px;" src="<?= $user["user_ima"] ?>" alt="Avatar">
                            <span>CHANGE PHOTO</span>
                        </div>
                        <input id="avatar_upload" class="mt-2 visually-hidden" type="file" name="avatar"
                            aria-label="avatar">

                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name"
                            placeholder="<?= $user["name"] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Bio</label>
                        <textarea class="form-control" id="bio" name="bio" placeholder="<?= $user["bio"] ?>"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone"
                            placeholder="<?= $user["phone"] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email"
                            placeholder="<?= $user["email"] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Password</label>
                        <input type="text" class="form-control" id="pass" name="pass" placeholder="<?php for ($i = 0; $i < strlen($user["pass"]); $i++) {
                                                                                                        echo "*";
                                                                                                    } ?>">
                    </div>
                    <button type="submit" class="btn btn-primary px-4">Save</button>
                </form>
            </div>

        </div>
    </div>
</div>
<footer class="container d-flex justify-content-between p-3">
    <span class="font14">created by
        <b><a href="https://github.com/roquepulido">roquepulido</a></b></span>
    <span class="font14"><a href="https://devchallenges.io/">devChallenges.io</a></span>
</footer>
<script>
const toggleAvarInput = () => {
    document.getElementById("avatar_upload").classList.toggle("visually-hidden");
    document.getElementById("avatar").removeEventListener("click", toggleAvarInput);
};
document.getElementById("avatar").addEventListener("click", toggleAvarInput);
</script>
<?php
include("./templates/footer.php");
?>