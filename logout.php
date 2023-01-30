<?php session_start();
session_destroy();
header("refresh:1;url=./index.php");

include("./templates/headhtml.php");
?>

<div class="d-flex align-items-center justify-content-center vh-100">
    <div class="text-center">
        <div class="spinner-grow text-secondary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
        <h1>Cerrando sesion...</h1>
        <h1>Redireccionando...</h1>
    </div>
</div>

<?php include("./templates/headhtml.php"); ?>