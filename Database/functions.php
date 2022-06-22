
<?php


function pwdCheck($pwd,$pwd2){
        
    $result = true;
    
    if( $pwd == $pwd2){
        $result = false;
    }

    return $result;

}

function pwdLen($pwd){
    $result = true;

    if(strlen($pwd) >= 12){
        $result = false;
    }

    return $result;
}

function lnameCheck($lname){
    $result = true;

    if(strlen($lname) >= 2){
        $result = false;
    }

    return $result;
}

function emailExist($conn,$email){
    $sql = "SELECT * FROM users WHERE userEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../registration/register.php?error=stmterror");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if( $row = mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);

}

function createUser($conn,$fname,$lname,$email,$pwd){
    $sql = "INSERT INTO users(userFname,userLname,userEmail,userPass) VALUES(?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../registration/register.php?error=stmterror");
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $fname,$lname,$email,$hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: ../registration/register/php?error=none");
    exit();

}


function loginUser($conn, $email, $pwd){

    $emlExist = emailExist($conn,$email);

    if( $emlExist === false){
        header("location: ./login.php?error=wrongemail");
        exit();
    }

    $pwdHashed = $emlExist["userPass"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if($checkPwd === false){
        header("location: ./login.php?error=wrongemail");
        exit();
    }
    else if($checkPwd == true){
        session_start();
        $_SESSION["userid"] = $emlExist["userId"];
        $_SESSION["userfname"] = $emlExist["userFname"];
        header("location: ../index/index.php");
        exit();
    }

}

//Function that displays each product
function component($productName, $size, $price, $productImage, $productid)
{
    $element = "
  <form action=\"#\" method=\"post\">
    <div class=\"box\">
      <img src=\"$productImage\" alt=\"\">
      <h3> <a href = \"#\">$productName</a> </h3>
      <p>$size</p>
      <div class=\"price\">Rs$price.0</div>
      <button type = \"submit\" name=\"add\" class=\"add\">Add to cart</button>
      <input type='hidden' name='product_id' value='$productid'>
      <br>
    </div>
  </form>
    ";
    echo $element;
}

function cartElement($productname, $productSize, $productprice, $productImg, $productid){
    $element = "
        <form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
        <div class=\"box\">
          <img src=$productImg alt=\"\">
           <h3> <a href = \"#\"> $productname </a> </h3>
           <p>$productSize</p>
           <div class=\"price\">Rs$productprice</div>
           <button type = \"submit\" name=\"add\" class=\"add\">Save for Later</button>
           <button type = \"submit\" name=\"remove\" class=\"remove\">Remove</button>
           <br>
        </div>
       </form>
       ";

    echo $element;
}

function news($title, $image, $text){
    $element ="
        <div class=\"box\">
          <img src=$image alt=\"\">
          <h3>$title</h3>
          <p>$text</p>
          <br>
          <a href=\"news1.php\" class=\"button\">Read More</a>
        </div>

    ";
    echo $element;
}
?>

