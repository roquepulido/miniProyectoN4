<?php session_start();
if ($_SESSION["login"]) {
    header("Location:./user_view.php");
}
var_dump($_SESSION);
$errorLogin = "password o usario erroneo";

include "./templates/headhtml.php";
?>
<main class="container log__container">
    <div class="row rounded-5 border border-2 px-5 py-2">
        <div class="mb-4">
            <img class="logodev" src="./img/devchallenges.svg" alt="logoDev" />
        </div>
        <div class="d-flex justify-content-between">
            <p class="fw-bold">Login</p>
            <span class="badge text-bg-danger"><?= $_SESSION["error"] ? $errorLogin : "" ?></span>
        </div>

        <form method="POST" action="./login_controller.php">
            <div class="row my-3">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email name" required
                    autocomplete="off" />
            </div>
            <div class="row my-3">
                <input type="password" class="form-control" name="pass" id="pass" placeholder="Password" required
                    autocomplete="off" />
            </div>
            <div class="row mb-4">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </form>
        <p class="font14 text-center">or continue with these social profile</p>
        <div class="social d-flex justify-content-center gap-4 mb-3">
            <a href="https://www.google.com/">
                <img src="./img/Google.svg" alt="googleIcon" class="rounded-circle" />
            </a>
            <a href="https://www.facebook.com/">
                <img src="./img/Facebook.svg" alt="faceIcon" class="rounded-circle" />
            </a>
            <a href="https://twitter.com/?lang=es">
                <img src="./img/Twitter.svg" alt="twitterIcon" class="rounded-circle" />
            </a>
            <a href="https://github.com/">
                <img src="./img/Gihub.svg" alt="githubIcon" class="rounded-circle" />
            </a>
        </div>
        <p class="font14 text-center">
            Don’t have an account yet? <a href="./register.php">Register</a>
        </p>
    </div>
    <footer class="d-flex justify-content-between mt-2">
        <span class="font14">created by
            <b><a href="https://github.com/roquepulido">roquepulido</a></b></span>
        <span class="font14"><a href="https://devchallenges.io/">devChallenges.io</a></span>
    </footer>
    <div class="container my-5">
        <p><b>User:</b> mmcgilmartin0@theatlantic.com</p>
        <p><b>Password:</b> zSr95sVVB</p>
    </div>
</main>
<?php include("./templates/headhtml.php"); ?>