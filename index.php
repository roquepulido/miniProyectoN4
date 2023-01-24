<?php if(isset($_SESSION)){
    include("./user.php");
}else{
    include("./login.php");
}