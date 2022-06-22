<?php

if (isset($_POST["submit"])){
   
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["eml"];
    $pwd = $_POST["pass1"];
    $pwd2 = $_POST["pass2"];
    
    require_once '../pppp/config.php';
    require_once '../pppp/functions.php';

    if(pwdCheck($pwd,$pwd2) !== false){
        header("location: ./register.php?error=passwordsdontmatch");
        exit();
    }

    if (pwdLen($pwd) !== false){
        header("location: ./register.php?error=passtooshort");
        exit();
    }

    if (lnameCheck($lname) !== false){
        header("location: ./register.php?error=lastnameshort");
        exit();
    }

    if(emailExist($conn,$email) !== false){
        header("location: ./register.php?error=emailalreadytaken");
        exit();
    }

    createUser($conn,$fname,$lname,$email,$pwd);



    


}

?>