<?php

if (isset($_POST["submit"])){

    $email = $_POST["eml"];
    $pwd = $_POST["pass"];

    require_once '../pppp/config.php';
    require_once '../pppp/functions.php';

    loginUser($conn, $email, $pwd);

}
else{
    header("location: ./login.php");
}

?>