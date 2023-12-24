<?php
session_start();
function StartShow()
{
    if (isset($_POST["Start"])) {
        $name = $_POST["name"];
        echo $name;
        if (empty($name)) {
            header("location: ./index.php");
        } else {
            $_SESSION["player"] = $name; 
            header("location: ./view/start.php");
        }
    }
}

function Session_player()
{
    if (empty($_SESSION['player']) && !isset($_SESSION['player'])) {
        header("location: ../index.php");
    }
    $name = isset($_SESSION['player']) ? $_SESSION['player'] : "";
    return $name;
}