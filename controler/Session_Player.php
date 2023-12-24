<?php 
session_start();
function Session_player()
{
    if (empty($_SESSION['player']) && !isset($_SESSION['player'])) {
        header("location: ../index.php");
    }
    $name = isset($_SESSION['player']) ? $_SESSION['player'] : "";
    return $name;
}