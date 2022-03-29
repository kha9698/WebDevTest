<?php
if (isset($_COOKIE['cart']) && $_COOKIE['cart']!="") {
$cartVal = $_COOKIE['cart'];  
$cart = explode(",", $_COOKIE['cart']);
$cartCounter = count($cart);
} else {
$cartVal = "";  
$cartCounter = 0;  
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400&family=Roboto&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <title>index</title>
</head>

<body>

  <!-- header (navbar, hero section) -->
  <div class="header">
    <div class="container">
      <div class="inside">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top yesC">
          <img class="logo" src="projectImages/logo-White.png" alt="logo">

          <img src="projectImages/hamburger.png" class="hamburger" data-toggle="off" onclick="showNavbar(this)">
          <div class="menu collapse navbar-collapse" id="colnav">

            <ul class="navbar-nav ">
              <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
              <li class="nav-item"><a class="nav-link" href="index.php#section-two">Menu</a></li>
              <li class="nav-item"><a class="nav-link" href="index.php#section-three">Gallery</a></li>
              <li class="nav-item"><a class="nav-link" href="index.php#testimonial-but">Testimonials</a></li>
              <li class="nav-item"><a class="nav-link" href="index.php#contact">Contact Us</a></li>
            </ul>
            <ul class=" navbar-nav red-background">
              <li class="nav-item"><a class="nav-link" href="#">Search</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Profile</a></li>
              <li class="nav-item"><a class="nav-link btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
                  href="#">Cart <span id="rec0"><?php echo $cartCounter;  ?></span></a></li>
            </ul>
          </div>

        </nav>

      </div>

      <div class="hero-content">
        <h1 class="title">Party Time</h1>
        <div class="shape1">
          <h4 class="offer">Buy any 2 burgers and get 1.5L Pepsi Free</h4>
        </div>
        <a href="#" class="btn">Order Now</a>
      </div>

    </div>
  </div>
  <!--modal-->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">cart content</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          
            <div class="d-flex justify-content-between">
              <p>Item</p>
              <p>Price</p>
            </div>
            <?php
            $price = 0;
            if ($cartCounter!=0) {
            foreach ($cart as $key => $value) {
            $data = $db->getMealById($value);
            $price+=$data['price'];
            ?>
            <div class="d-flex justify-content-between">
              <p><?php echo $data['title']; ?></p>
              <p><?php echo $data['price']; ?></p>
            </div>
            <?php
            
            
            }
            }
            
            ?>
            <div class="d-flex justify-content-between">
              <p>Total</p>
              <p><?php echo $price; ?></p>
            </div>
        </div>
        <div class="modal-footer">
          <form action="php/order.php" method="POST">
            <input type="hidden" name="cart" value="<?php echo $cartVal; ?>">
            <input type="hidden" name="price" value="<?php echo $price; ?>">
            <button type="button" class="btn-secondary bot1" data-bs-dismiss="modal">Close</button>
            <button type="submit" name="submit" class=" btn-primary bot2">order now</button>
          </form>
          
        </div>
      </div>
    </div>
  </div>
  <!--end o modal-->