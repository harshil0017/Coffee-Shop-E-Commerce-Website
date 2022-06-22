<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mug details</title>

       <!--Font-->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

       <!--Linking with CSS file-->
       <link rel="stylesheet" href="css/style.css">

        <!--Linking with CSS file-->
        <link rel="stylesheet" href="css/detail.css">

       <!--Custome jss script-->
       <script> src = "js/script.js" </script>

       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

        <!--Header-->
        <header class="header">

            <a href = "index.html" class = "logo">
                <img src = "images/logo1.jpg" alt "logo">
            </a>
    
            <nav class="navbar">
                <a href="index.html">Home</a>
                <a href="#best">Best Seller</a>
    
                <div class="dropdown">
                    <button class="dropbtn">Product <i class="arrow"></i>
                    </button>
                    <div class="product-dropdown">
                        <a href="coffee.html">Coffee</a>
                        <a href="#">Tea</a>
                        <a href="#">Chocolate</a>
                        <a href="#">Mug</a>
                      </div>
                </div>
    
                <a href="#contact">Contact</a>
                <a href="#about">About Us</a>
            </nav>
            
            <!--Importing icons-->
            <div class="icons">
               <div class = "fas fa-search" id = "search-btn"></div>
               <div class = "fas fa-user" id = "user-btn"></div>
               <div class = "fas fa-shopping-cart" id = "cart-btn"></div>
               <div class = "fas fa-bars" id = "menu-btn"></div>
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




       <!--Product detail start-->
<body>

    <main>

        <div class="grid" style="background-color: var(--white)">
            <div class="col">
                <!--<img src="../image/mugs/rorstrand-eden-mug-34-cl-0.webp" alt="" height="450vw" width="450vw"> -->
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                      <li data-target="#myCarousel" data-slide-to="1"></li>
                      <li data-target="#myCarousel" data-slide-to="2"></li>
                      <li data-target="#myCarousel" data-slide-to="3"></li>
                    </ol>
                  
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                      <div class="item active">
                        <img src="bestImage/hazulnut.jpg" height="50vw" width="150vw" alt="">
                      </div>
                  
                      <div class="item">
                        <img src= "chocolate/hazulnut 1.jpg" height="50vw" width="650vw" alt="">
                      </div>
                  
                      <div class="item">
                        <img src="chocolate/hazulnut 2.jpg" height="450vw" width="650vw" alt="">
                      </div>

                      <div class="item">
                        <img src="chocolate/hazulnut 3.jpg" height="450vw" width="650vw" alt="">
                      </div>
                    </div>
                  
                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                      <span class="glyphicon glyphicon-chevron-left"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                      <span class="glyphicon glyphicon-chevron-right"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
            </div>

            <div class="col desc">
                <h3 style="font-family: 'Franklin Gothic Medium';">Eden Mug 34 clp</h3>
                <p>Eden Mug from Rörstrand. This mug was designed year 1960 by Sigrid Richter for Rörstrand. The charming retro pattern represents a chopped apple and is as popular now as it was in the 60's. After a vote, Eden has become the people's favorite pattern of four decades</p>
                <ul>
                    <li><span style="color:limegreen;">Available in stock</span></li>
                </ul>

                <p class="total-price">
                  <span><i class="fa fa-rupee"></i></span>
                  <span>Rs </span><span id="price">350</span>
                </p>

                <div class="quantity">
                  <button class="btn minus-btn disabled" type="button">-</button>
                  <input type="text" id="quantity" value="1">
                  <button class="btn plus-btn" type="button">+</button> <button style="width: 100%; background-color:#19e284;">Add to Basket</button>
                </div>

                <div>
                  <h4 style="padding-top: 25px;"><strong>About the brand</strong></h4>
                  <a href="https://royaldesign.com/us/brands/rorstrand" target="_blank"><img src="../image/mugs/eden/Shape.svg" alt=""></a>
                </div>


                <div class="addetail">
                    <img style="margin-top: 10px;" src="images/valid.png" alt="" height="25px" width="25px"><span>   30 days open purchase</span><br>
                    <img style="margin-top: 10px;" src="images/valid.png"  alt="" height="25px" width="25px"><span>   Free shipping over $199 (small items)</span><br>
                    <img style="margin-top: 10px;" src="images/valid.png"  alt="" height="25px" width="25px"><span>   Secure E-commerce</span>
                </div>

            </div>
        </div>

    </main>
    
    <br>

    
    <div class="recommended">
        <h3>Recommended Products</h3>

        <div class="box-container">
            
          <div class="box">
            <img src="bestImage/riverdale.png" alt="">
            <h3>RIVERDALE</h3>
            <p>250g</p>
            <div class="price">Rs270.0</div>
            <a href="#" class="button">Add to cart</a>
          </div>

          <div class="box">
            <img src="bestImage/french.jpg" alt="">
            <h3>ATTIKAN ESTATE</h3>
            <p>250g</p>
            <div class="price">Rs350.0</div>
            <a href="#" class="button">Add to cart</a>
          </div>

          <div class="box">
            <img src="bestImage/matcha.jpg" alt="">
            <h3>GINGERBREAD MATCHA</h3>
             <p>250g</p>
             <div class="price">Rs300.0</div>
            <a href="#" class="button">Add to cart</a>
          </div>

        </div>
    
       </div>
       <!--Product detail end-->

</body>

       <!--Footer-->   
       <section class = "footer">
          
        <div class = "share"> 
        <a href="#" class="fab fa-facebook"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
      </div>

      <div class="links">
          <a href="index.html">Home</a>
          <a href="#">Category</a>
          <a href="#">Contact</a>
          <a href="#">About Us</a>
      </div>

      <div class="credit">
          <p>Copyright 2021 Mug 'n' Tea</p>
      </div>

    </section>
   <!--End Footer-->

<script>
  //setting default attribute to disabled of minus button
  document.querySelector(".minus-btn").setAttribute("disabled", "disabled");

  //taking value to increment decrement input value
  var valueCount

  //taking price value in variable
  var price = document.getElementById("price").innerText;

  //price calculation function
  function priceTotal() {
      var total = valueCount * price;
      document.getElementById("price").innerText = total
  }

  //plus button
  document.querySelector(".plus-btn").addEventListener("click", function() {
      //getting value of input
      valueCount = document.getElementById("quantity").value;

      //input value increment by 1
      valueCount++;

      //setting increment input value
      document.getElementById("quantity").value = valueCount;

      if (valueCount > 1) {
          document.querySelector(".minus-btn").removeAttribute("disabled");
          document.querySelector(".minus-btn").classList.remove("disabled")
      }

      //calling price function
      priceTotal()
  })

  //plus button
  document.querySelector(".minus-btn").addEventListener("click", function() {
      //getting value of input
      valueCount = document.getElementById("quantity").value;

      //input value increment by 1
      valueCount--;

      //setting increment input value
      document.getElementById("quantity").value = valueCount

      if (valueCount == 1) {
          document.querySelector(".minus-btn").setAttribute("disabled", "disabled")
      }

      //calling price function
      priceTotal()
  })
</script>


</html>


