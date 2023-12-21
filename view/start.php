<?php 
session_start();


if(empty($_SESSION["player"]) && !isset($_SESSION["player"])) {
    header("location:../index.php ");
    session_destroy();
    exit();
}

$name = isset($_SESSION["player"]) ? $_SESSION["player"] : "";

echo $name;
?>