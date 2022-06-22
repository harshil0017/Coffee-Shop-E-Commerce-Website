<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">

       <!--Font-->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  
    <!--Linking with CSS file-->
      <link rel="stylesheet" href="css/style.css">
    <title>Log In</title>
</head>

<body>

<?php
include('database/functions.php')
?>


       <section class="log">

        <img href ="images/logBackground.jpg">

        <form action="">

            <h2 style="text-align: center;">LOG IN</h2>
    
            <img class="imgc" src="images/logo1.jpg" alt="" height="100vw" width="100vw">
    
            <label for="email">Email<span class="redstar">*</span></label> <input type="email" name="eml" id="eml"  required>
    
            <label for="pass">Password<span class="redstar">*</span></label> <input type="password" name="pass" id="pass" required>
    
            <p class="anew">New Customer? Register <a href="register.php">here</a></p>
    
            <input class="lisub" type="submit" value="LOG IN">
    
        </form>    

       </section>




   

</body>

</html>