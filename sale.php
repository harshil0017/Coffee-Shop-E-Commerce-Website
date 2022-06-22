<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Tea.css" type="text/css"/>
    <link rel="stylesheet" href="./scss/main.css" type="text/css"/>

    
      <!--Font-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

      <!--Linking with CSS file-->
      <link rel="stylesheet" href="css/style.css">

       <!--Linking with CSS file-->
       <link rel="stylesheet" href="css/product.css">

      <!--Custome jss script-->
      <script> src = "js/script.js" </script>
    <title>On Sale</title>
</head>

<body>


     <!--Header-->
     <?php 
     include('header.php');

     //session start
     session_start();

     require_once("Database/createDb.php");
     require_once("Database/functions.php");

    //create instance of class createDb class
    $database = new createDb($_GET['dbname'] = "Productdb", $_GET['tablename'] = "Sale");
     ?>


     <!--Coffee section start-->
     <section class="product">
      
        <h1 class="heading-product">Hot Deal!</h1>

        <div class="box-container">
            
            <div class="box">
                <img src="tea/almond.jpg" alt="">
                <h3>SWEET ALMOND GREEN TEA</h3>
                <p>200g</p>
                <h4>Normal Price: Rs300.0 </h4>
                <div class="price"> <span style="color:red;font-weight:bold">Sale Price: Rs190.0</span></div>
                <br>
                <button type="sumbit" class="add">Add to cart</button>
            </div>

            <div class="box">
                <img src="chocolate/dark.jpg" alt="">
                <h3>DARK HOT CHOCOLATE</h3>
                <p>250g</p>
                <h4>Normal Price: Rs450.0</h4>
                <div class="price"> <span style="color:red;font-weight:bold">Sale Price: Rs390.0</span></div>
                <br>
                <button type="sumbit" class="add">Add to cart</button>
            </div>

            <div class="box">
                <img src="coffee/coffee.jpg" alt="">
                <h3>ATTIKAN ESTATE</h3>
                <p>250g</p>
                <h4>Normal Price: Rs240.0 </h4>
                <div class="price"> <span style="color:red;font-weight:bold">Sale Price: Rs190.0</span></div>
                <br>
                <button type="sumbit" class="add">Add to cart</button>
            </div>

        </div>




     </section>
      <!--Coffee section end-->

      </body>




       <!--Footer-->   
       <?php
       include("footer.php")
       ?>

       <!--End Footer-->





</html>