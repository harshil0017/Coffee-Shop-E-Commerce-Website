<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mug 'n' Tea</title>

  <!--Font-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <!--Linking with CSS file-->
  <link rel="stylesheet" href="css/style.css">

  <!--Custome jss script-->
  <script>
    src = "js/script.js"
  </script>


</head>

<?php
include('header.php');

//session start
session_start();

require_once("Database/createDb.php");
require_once("Database/functions.php");

//create instance of class createDb class
$database = new createDb($_GET['dbname'] = "Productdb", $_GET['tablename'] = "Best");


if (isset($_POST['add'])) { //if click on the add button

  //print_r($_POST['product_id']);
  if (isset($_SESSION['cart'])) {
    $item_array_id = array_column($_SESSION['cart'], "product_id");

    if (in_array($_POST['product_id'], $item_array_id)) {  //if this product id is already in this array
      echo "<script>alert('Product is already in cart')</script>";
      echo "<script>window.location = 'index.php'</script>";    //coffee page is then reopen
    } else {
      $count = count($_SESSION['cart']); //count return the number of element in the array
      $item_array = array(
        'product_id' => $_POST['product_id']
      );

      $_SESSION['cart'][$count] = $item_array;
    }
  } else {
    $item_array = array(
      'product_id' => $_POST['product_id']
    );

    //Create new session variable
    $_SESSION['cart'][0] = $item_array;
    print_r($_SESSION['cart']);
  }
}
?>

<!--Start of Banner Slider-->
<section class="banner">

  <div class="slider">
    <div class="slides">

      <!--radio button starts-->
      <input type="radio" name="radio-btn" id="radio1">
      <input type="radio" name="radio-btn" id="radio2">
      <input type="radio" name="radio-btn" id="radio3">
      <!--radio button ends-->

      <!--slide images start-->
      <div class="slide first">
        <img src="images/coffeeBanner.jpg" alt="">
        <button class="button-1"> <a href="sale.php">GET YOURS NOW!</a> </button>
      </div>

      <div class="slide second">
        <img src="images/chocolateBanner.jpg" alt="">
        <button class="button-2"> <a href="recipe.php">GET RECIPE!</a> </button>
      </div>

      <div class="slide third">
        <img src="images/teaBanner.jpg" alt="">
        <button class="button-3"> <a href="benefit.php">LEARN MORE!</a> </button>
      </div>
      <!--slide images ends-->

    </div>
    <!--manual navigator start-->
    <div class="navigator-manual">
      <label for="radio1" class="manual-btn"></label>
      <label for="radio2" class="manual-btn"></label>
      <label for="radio3" class="manual-btn"></label>
    </div>
    <!--manual navigator end-->

  </div>
  <!--image slider end-->

</section>
<!--End of Banner Slider-->


<!--Start of Category-->
<section class="category">
  <h1 class="heading-category">Category</h1>
  <div class="category-container">

    <a href="coffee.php" class="box-category">
      <img src="images/coffee.jpg" alt="">
    </a>

    <a href="tea.php" class="box-category">
      <img src="images/tea.jpg" alt="">
    </a>

    <a href="choco.php" class="box-category">
      <img src="images/chocolate.jpg" alt="">
    </a>

    <a href="mug.php" class="box-category">
      <img src="images/mug.jpg" alt="">
    </a>
  </div>
</section>
<!--End of Category-->


<!--Best seller section start-->
<section class="best" id="best">

  <div class="heading">
    <h1>Our Best Seller</h1>
    <p>Take a look at our popular products</p>
  </div>

  <div class="box-container">
    <!--Calling function that displays each product -->
    <?php
    $result = $database->getData();
    while ($row = mysqli_fetch_assoc($result)) {
      //displaying the row values of the table
      component($row['product_name'], $row['product_size'], $row['product_price'], $row['product_image'], $row['id']);
    }
    ?>
  </div>

</section>
<!--Best seller section end-->


<!--Latest news section start-->
<section class="latest">
  <h1 class="heading">Latest News</h1>

  <div class="box-container">

    <?php
    news("The Best Time Of Day To Drink Coffee For Energy & Sleep", "images/coffeeNews.jpg", "COFFEE! Many have this word saved into their permanent dictionary,
                and it is no coincidence because according to the National Coffee Association, 
                we're drinking more coffee than ever");
    news("Drinking coffee may reduce the risk of developing Alzheimer’s disease", "images/coffeeNews1.jpg", "More than 55 million people worldwide are living with dementia.
                The most common type of dementia is Alzheimer’s disease (AD)...");
    news("Lesser-known Assam tea sold for Rs. 1 Lakh per kg, Twitter reacts", "images/teaNews.jpg", "images/teaNews.jpg", "Recently, one such rare tea variety from Assam, called Manohari Gold Tea, 
                has been sold at a whopping Rs. 1 Lakh per Kg by Manohari Tea Estate.");
    news("Immunity: This Ginger-Jaggery Tea May Help Kick Start The Winter Mornings", "images/teaNews1.jpg", "Winter is upon us and we are enjoying every bit of the nippy weather outside. 
                Imagine lying on your cozy bed, tucked in those warm blankets...");
    news("4 Irresistible Health Benefits Of Matcha Tea You Should Know", "images/teaNews2.jpg", "Matcha has gained a lot of popularity recently. From restaurants to cafés,
                it has traveled to our homes too. owing to its benefits.
                 Matcha itself comes from the Camellia sinensis plant. However...");
    news("How to Perform a Japanese Tea Ceremony", "images/teaNews3.jpg", "Japanese Tea ceremony culture has become a worldwide phenomenon. 
                It is a thing of grace and beauty, shrouded in centuries of fascinating history.
                 So much history, in fact, that it would...");
    ?>

  </div>


</section>
<!--Latest news section end-->

<?php
include('footer.php')
?>

</html>