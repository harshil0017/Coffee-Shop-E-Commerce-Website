<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee</title>

      <!--Font-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

      <!--Linking with CSS file-->
      <link rel="stylesheet" href="css/style.css">

       <!--Linking with CSS file-->
       <link rel="stylesheet" href="css/product.css">

      <!--Custome jss script-->
      <script> src = "js/script.js" </script>

</head>


   <?php
    include('header.php');

  
   //session start
   session_start();

   require_once("Database/createDb.php");
   require_once("Database/functions.php");

   //create instance of class createDb class
   $database = new createDb($_GET['dbname'] = "Productdb", $_GET['tablename'] = "Coffee");

   if(isset($_POST['add'])){ //if click on the add button
   
      //print_r($_POST['product_id']);
     if(isset($_SESSION['cart']))
     {
        $item_array_id = array_column($_SESSION['cart'], "product_id");
        
        if(in_array($_POST['product_id'], $item_array_id)){  //if this product id is already in this array
            echo "<script>alert('Product is already in cart')</script>";
            echo "<script>window.location = 'coffee.php'</script>";    //coffee page is then reopen
          } else{
            $count = count($_SESSION['cart']); //count return the number of element in the array
            $item_array = array(
            'product_id' => $_POST['product_id']
           );

           $_SESSION['cart'][$count] = $item_array; 
        }
     }
     else{
         $item_array = array(
                 'product_id' => $_POST['product_id']
         );

        //Create new session variable
        $_SESSION['cart'][0] = $item_array;
        print_r($_SESSION['cart']);
     }

     if(isset($_SESSION['cart'])){
      $product_id = array_column($_SESSION['cart'], 'product_id');
      $result = $database->getData();
               $dom = new DOMDocument();
               $dom->encoding = 'utf-8';
               $dom->xmlVersion = '1.0';
               $dom->formatOutput = true;
           
               $xml_file_name = 'coffee_product_order_list.xml';       
               $root = $dom->createElement('Products');

               while($row = mysqli_fetch_assoc($result)){  
                  foreach($product_id as $id){
                     if($row['id'] == $id){      
                     $product_node = $dom->createElement('Product');
              
                     $attr_title = new DOMAttr('type', $_GET['tablename']);
                     $product_node->setAttributeNode($attr_title);
                 
                     $child_node_title = $dom->createElement('Title', $row['product_name']);
                     $product_node->appendChild($child_node_title);
                 
                     $child_node_price = $dom->createElement('Price',$row['product_price']);
                     $product_node->appendChild($child_node_price);
                 
                     $root->appendChild($product_node);
                 
                     $dom->appendChild($root);
                 
                     $dom->save($xml_file_name);
    
               }
            }

         }
      }
   }

   ?>

     <!--Coffee section start-->
     <section class="product">
      
        <h1 class="heading-product">Coffee</h1>

        <div class="box-container">

           <!--Calling function that displays each product -->
           <?php
           $result = $database->getData();
           while ($row = mysqli_fetch_assoc($result))
           {
              //displaying the row values of the table
              component($row['product_name'], $row['product_size'], $row['product_price'], $row['product_image'], $row['id']);
           }
           ?>

        </div>

     </section>
      <!--Coffee section end-->

   <?php 
   include('footer.php')
   ?>

</html>