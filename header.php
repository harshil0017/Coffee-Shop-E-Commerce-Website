<!DOCTYPE html>
<html lang="en">

<head>

    <title>Mug 'n' Tea</title>

    <!--Font-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!--Linking with CSS file-->
    <link rel="stylesheet" href="css/style.css">


    <?php
    if (file_exists("controller3.php")) include "controller3.php";
    ?>


</head>



<!--Header-->
<header class="header">

    <a href="index.php" class="logo">
        <img src="images/logo1.jpg" alt = "logo">
    </a>

    <nav class="navbar">
        <a href="index.php">Home</a>
        <a href="#best">Best Seller</a>

        <div class="dropdown">
            <button class="dropbtn">Product <i class="arrow"></i>
            </button>
            <div class="product-dropdown">
                <a href="coffee.php">Coffee</a>
                <a href="tea.php">Tea</a>
                <a href="choco.php">Chocolate</a>
                <a href="mug.php">Mug</a>
            </div>
        </div>

        <a href="contactUs.php">Contact</a>
        <a href="#about">About Us</a>
    </nav>

    <!--Importing icons-->
    <div class="icons">
        <div class="fas fa-search" id="search-btn"></div>

        <a href="login.php">
            <div class="fas fa-user" id="user-btn">
            </div>
        </a>

        <a href="cart.php">
            <div class="fas fa-shopping-cart" id="cart-btn"> Cart
                <?php
                if (isset($_SESSION['cart'])) {
                    $count = count($_SESSION['cart']);
                    echo "<span id=\"cart_count\">$count</span>";  //displaying the number of items that are in the cart
                } else {
                    echo "<span id=\"cart_count\">0</span>";
                }
                ?>
            </div>
        </a>

        <!-- <div class = "fas fa-bars" id = "menu-btn"></div> -->
    </div>

    <div class="search-form">
        <label for="search-box" class="fas fa-search"></label>
        <input type="search" id="search-box" placeholder="search here...">
    </div>

    <div class="card-item-container">
        <div class="cart-item">
            <span class="fas-fa-times"></span>

        </div>
    </div>
</header>
<!--End header-->





</html>