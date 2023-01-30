<?php session_start();
include("./templates/headhtml.php");

?>
<div class="d-flex align-items-center vh-100">
    <main class="container log__container">
        <div class="row rounded-5 border border-2 px-5 py-2">
            <div class="my-4">
                <img class="logodev" src="./img/devchallenges.svg" alt="logoDev" />
            </div>
            <p class="fw-bold titulo__register">Join thousands of learners from around the world</p>
            <p class="fw-light subtitulo__register">
                Master web development by making real-life projects. There are
                multiple paths for you to choose
            </p>
            <form method="POST" action="./register.php">
                <div class="my-3 input-group border border-1 rounded-3">
                    <span class="input-group-text border border-0 bg-transparent" id="basic-addon1"><i
                            class="bi bi-envelope-fill"></i></span>
                    <input type="email" class="form-control border border-0 bg-transparent" id="email"
                        placeholder="Email name" name="email" required autocomplete="off" />
                </div>
                <div class="my-3 input-group border border-1 rounded-3">
                    <span class="input-group-text bg-transparent  border border-0" id="basic-addon1"><i
                            class="bi bi-lock"></i></span>
                    <input type="password" class="form-control bg-transparent  border border-0" id="pass"
                        placeholder="Password" name="pass" required autocomplete="off" />
                </div>
                <div class="row mb-4">
                    <button type="submit" class="btn btn-primary">
                        Start coding now
                    </button>
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
                Adready a member? <a href="./login_view.php">Login</a>
            </p>
        </div>
        <footer class="d-flex justify-content-between mt-2">
            <span class="font14">created by
                <b><a href="https://github.com/roquepulido">roquepulido</a></b></span>
            <span class="font14"><a href="https://devchallenges.io/">devChallenges.io</a></span>
        </footer>
    </main>
</div>
<?php include("./templates/headhtml.php"); ?>