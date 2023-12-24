<?php

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