<?php
function navbar($name, $img_url)
{
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <div class="d-flex justify-content-between w-100 align-items-center">
            <a class="navbar-brand"><img class="logodev" src="./img/devchallenges.svg" alt="logoDev" /></a>

            <ul class="navbar-nav  my-2 my-lg-0 navbar-nav-scroll overflow-visible" style="--bs-scroll-height: 40px;">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <img class="border rounded-4 avatar" src="<?= $img_url ?>" alt="User Img"><span
                            class="ms-2"><?= $name ?></span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                        <li><a class="dropdown-item" href="#"><i class="bi bi-person-circle"></i><span class="ms-1">My
                                    Profile</span></a></li>
                        <li><a class="dropdown-item" href="#"><i class="bi bi-people-fill"></i><span class="ms-1">Group
                                    Chat</span></a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item text-danger fw-bold " href="./logout.php"><i
                                    class="bi bi-door-open-fill"></i><span class="ms-1 ">Logout</span></a></li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</nav>
<?php
}
/*
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand"><img class="logodev" src="./img/devchallenges.svg" alt="logoDev" /></a>

        <div class="left__nav d-flex align-items-center gap-2">

            <img class="border rounded-4 avatar" src="<?= $img_url ?>" alt="User Img">
<ul class="navbar-nav">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?= $name ?>
        </a>
        <ul class="dropdown-menu">
            <li class="px-1"><a class="dropdown-item" href="#"><i class="bi bi-person-circle"></i><span class="ms-1">My
                        Profile</span> </a></li>
            <li class="px-1"><a class="dropdown-item" href="#"><i class="bi bi-people-fill"></i><span class="ms-1">Group
                        Chat</span></a></li>
            <li class="px-3">
                <hr class="dropdown-divider">
            </li>
            <li class="px-1"><a class="dropdown-item text-danger fw-bold" href="./logout.php"><i
                        class="bi bi-door-open-fill"></i><span class="ms-1">Logout</span></a>
            </li>
        </ul>
    </li>
</ul>
</div>

</div>
</nav>

*/