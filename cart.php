<?php
session_start();

require_once("Database/createDb.php"); 
require_once("Database/functions.php");

$db[0] = new CreateDb($_GET['dbname'] = "Productdb", $_GET['tablename'] = "Coffee");
$db[1] = new CreateDb($_GET['dbname'] = "Productdb", $_GET['tablename'] = "Tea");
$db[2] = new CreateDb($_GET['dbname'] = "Productdb", $_GET['tablename'] = "Chocolate");
$db[3] = new CreateDb($_GET['dbname'] = "Productdb", $_GET['tablename'] = "Mug");
$db[4] = new CreateDb($_GET['dbname'] = "Productdb", $_GET['tablename'] = "Best");


if(isset($_POST['remove'])){   //if remove button is clicked
  if($_GET['action'] == 'remove'){
    foreach($_SESSION['cart'] as $key => $value){
      if($value["product_id"] == $_GET['id']){
        unset($_SESSION['cart'][$key]);
        echo "<script>alert('Product has been Removed')</script>";
        echo "<script>window.location = 'cart.php'</script>";
      }
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>

      <!--Font-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

      <!--Linking with CSS file-->
      <link rel="stylesheet" href="css/style.css">

       <!--Linking with CSS file-->
       <link rel="stylesheet" href="css/cart.css">
       <link rel="stylesheet" href="css/product.css">

      <!--Custome jss script-->
      <script> src = "js/script.js" </script>

</head>

<?php
require_once("header.php");
?>

<section class="shopping-cart">
      <div class="box-container">
        <h2>My Cart</h2>
        <hr> 

        <?php 
        $total=0;
        for($i=0;$i<5;++$i){
          if(isset($_SESSION['cart'])){
          $product_id = array_column($_SESSION['cart'], 'product_id');
  
          $result = $db[$i]->getData();
          while($row = mysqli_fetch_assoc($result)){  
              foreach($product_id as $id){
                if($row['id'] == $id){
                  cartElement($row['product_name'], $row['product_size'], $row['product_price'], $row['product_image'], $row['id']);
                  $total = $total + (int)$row['product_price'];
                }
              }
            }
          } else{
            echo "<h5>Cart is Empty</h5>";
          }
        }   
        ?>
        </div>

        <div class="summary">
          <h2>Price Details:</h2>
          <hr>
          <div class="price-details">
            <?php 
            if(isset($_SESSION['cart'])){  //checking if there is items in cart
              $count = count($_SESSION['cart']);  //counting number of items in cart
              echo "<h4>Price($count items)</h4>";   //displaying the number of items
            }
            else{
              echo "<h4>Price(0 items)</h4>";
            }
            ?>
            <h4>Delivery Charge</h4>
            <hr>
            <br>
            <h4>Amount Payable</h4>
          </div>
        </div>

        <div class="total">
            <h4>Rs<?php echo $total ?></h4>
        </div>

        <div class="charge">
          <h4>FREE</h4>
        </div>

        <div class="amount">
          <h4>Rs<?php echo $total ?></h4>
        </div>
</section>

<?php 
include("footer.php")
?>




