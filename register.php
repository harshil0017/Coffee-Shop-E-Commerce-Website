<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/register.css">
    <title>Sign Up</title>
</head>

<body>



    <form action="./signup.php" method="post">

        <h2 style="text-align: center;">Create Account</h2>

        <img class="imgc" src="images/logo1.jpg" alt="" height="100vw" width="100vw">

        <label for="fname">First Name<span class="redstar">*</span></label> <input type="text" name="fname" id="fname" maxlength="35" required> 

        <label for="lanme">Last Name<span class="redstar">*</span></label> <input type="text" name="lname" id="lname" maxlength="35" required> <br>

        <label for="email">Email<span class="redstar">*</span></label> <input class="eml" type="email" name="eml" id="eml" required> <br>

        <label for="pass">Password<span class="redstar">*</span></label> <input class="pasf" type="password" name="pass1" id="pass1" required> <br>

        <label for="npass">Confirm password<span class="redstar">*</span></label> <input class="cpasf" type="password" name="pass2" id="pass2" required>

        <br>

        <p style="text-align: center;">Already a member ? Sign in <a href="./login.html">here</a></p>

        <button type="submit" name="submit">Submit</button>

        <section style="text-align: center;color: black;">

            <?php

            if(isset($_GET["error"])){
            if($_GET["error"] == "passwordsdontmatch"){
                echo "<p>Passwords does not match </p>";
            }
            if($_GET["error"] == "passtooshort"){
                echo "<p>Password is too short, min length is 12 </p>";
            }
            if($_GET["error"] == "lastnameshort"){
                echo "<p>Last name too short </p>";
            }
            if($_GET["error"] == "emailalreadytaken"){
                echo "<p>Email is already taken </p>";
            }
            if($_GET["error"] == "stmterror"){
                echo "<p>Something went wrong, please try again later </p>";
            }
            if($_GET["error"] == "none"){
                echo "<p>Registration Successful </p>";
            }
        }

            ?>
    </section>

    </form>


</body>

</html>