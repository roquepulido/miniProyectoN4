<?php session_start();
session_destroy();
header("refresh:1;url=./index.php");
?>
<div class="container text-center">
    <h1>Cerrando sesion...</h1>

    <h1>Redireccionando...</h1>
</div>