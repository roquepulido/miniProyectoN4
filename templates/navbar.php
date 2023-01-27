<?php
function navbar($name, $img_url)
{
?>
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand"><img class="logodev" src="./img/devchallenges.svg" alt="logoDev" /></a>

        <div class="left__nav d-flex align-items-center gap-2">

            <img class="border rounded-4 avatar" src="<?= $img_url ?>" alt="User Img">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <?= $name ?>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="px-1"><a class="dropdown-item" href="#"><i class="bi bi-person-circle"></i><span
                                    class="ms-1">My
                                    Profile</span> </a></li>
                        <li class="px-1"><a class="dropdown-item" href="#"><i class="bi bi-people-fill"></i><span
                                    class="ms-1">Group Chat</span></a></li>
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
<?php
}




// <!-- <nav class="navbar  bg-light">
//     <div class="container-fluid">
//         <a class="navbar-brand" href="#"><img class="logodev" src="./img/devchallenges.svg" alt="logoDev" /></a>
//         <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
//             aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
//             <img class="border rounded-4 avatar" src="./img/Users/Chuck_Norris.jpg" alt="User Img"><span
//                 class="navbar__name">Chuck Norris</span>
//         </button>
//         <div class="collapse navbar-collapse" id="navbarNavDropdown">
//             <ul class="navbar-nav">
//                 <li class="nav-item">
//                     <a class="nav-link active" aria-current="page" href="#">Home</a>
//                 </li>
//                 <li class="nav-item">
//                     <a class="nav-link" href="#">Features</a>
//                 </li>
//                 <li class="nav-item">
//                     <a class="nav-link" href="#">Pricing</a>
//                 </li>
//                 <li class="nav-item dropdown">
//                     <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
//                         aria-expanded="false">
//                         Dropdown link
//                     </a>
//                     <ul class="dropdown-menu">
//                         <li><a class="dropdown-item" href="#">Action</a></li>
//                         <li><a class="dropdown-item" href="#">Another action</a></li>
//                         <li><a class="dropdown-item" href="#">Something else here</a></li>
//                     </ul>
//                 </li>
//             </ul>
//         </div>
//     </div>
// </nav> -->