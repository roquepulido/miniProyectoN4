<?php
include("./templates/headhtml.php");
?>
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid ms-5">
        <a class="navbar-brand" href="#"><img class="logodev" src="./img/devchallenges.svg" alt="logoDev" /></a>


        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <img class="border rounded-4 avatar" src="./img/Users/Chuck_Norris.jpg" alt="User Img">
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Chuck Norris
                    </a>
                    <ul class="dropdown-menu">
                        <li class="px-1"><a class="dropdown-item" href="#">My Profile</a></li>
                        <li class="px-1"><a class="dropdown-item" href="#">Group Chat</a></li>
                        <li class="px-3">
                            <hr class="dropdown-divider">
                        </li>
                        <li class="px-1"><a class="dropdown-item color-danger" href="#">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<?php
include("./templates/footer.php");
?>