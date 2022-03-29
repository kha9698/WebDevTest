<?php
include "php/config.php"; 
include 'php/meal_db.php';
$db = new Meal_db($connection);
include 'include/inc.header.php'; 
?>
  <?php
  if (isset($_COOKIE['recent-bought'])) {
  
  ?>
  <section id="recent">
    <div class="container">

      <h2 class="text-center">Your Recent Bought Products</h2>
      
      <div class="grid">
        <?php
        $recent = explode(",", $_COOKIE['recent-bought']);
        foreach ($recent as $key => $value) {
        $data = $db->getMealById($value);
        echo '<div class="card">
            <div class="card-img card-img-seating" style="background: url(projectImages/'.$data["image"].') no-repeat center center / cover;">
              <a href="detail.php?id='.$data["id"].'">
              </a>
            </div>

            <div class="card-content">
              <div class="con1"><a href="detail.php?id='.$data["id"].'">
                  <p>⭐'.$data["rating"].' rating</p>
                  <p>'.$data["title"].'</p>
                  <p class="description">'.$data["description"].'</p>
                </a>
              </div>
              <button class="btn" id="'.$data["id"].'" onclick="card(this.id)"><a>Buy Again</button>
              <p class="price">'.$data["price"].' SAR</p>
            </div>
          </div>';
        }
        ?>

      </div>
    </div>
  </section>
  <?php } ?>
  <!-- want to eat section -->
  <section id="section-two">
    <div class="container">
      <h2 class="want-to-eat">Want to Eat</h2>
      <p>Try our most delicious food and usually take minutes to deliver</p>
      <ul class="dishes">
        <li><a href="#">pizza</a></li>
        <li><a href="#">fast food</a></li>
        <li><a href="#">cupcake</a></li>
        <li><a href="#">sandwich</a></li>
        <li><a href="#">spaghetti</a></li>
        <li><a href="#">burger</a></li>
      </ul>
    </div>
    <div class="fh5">
      <div class="shape2">
        <img class="img-fluid" src="projectImages/delivery.png" alt="">

        <div class="shape3-seating">
          <div class="shape3">
            <p>We garuntee 30min delivery</p>
          </div>

          <p class="par">if your are working late, having a meeting and you need extra push</p>
        </div>
      </div>
    </div>

  </section>

  </section>

  <!-- popular recipes section -->

  <section id="section-three">
    <div class="container">

      <h2>Our Most Popular Recipes</h2>
      <p>Try our most delicious food and usually take minutes to deliver</p>
      <div class="grid">
        <?php
        echo $db->getAllMeals();
        ?>

      </div>
    </div>
  </section>

  <!-- Testimonials section -->
  <!-- <section id="section-four">
    <div class="container">
      <h2 class="testimonial-heading">Clients Testimonials</h2>
      <div class="testimonial">
        <div class="testimonial-image">
        </div>
        <div class="testimonial-text">
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum voluptatibus sapiente quisquam vel tempora voluptates saepe provident corrupti. Earum, eaque! Tempore, fugit libero. Quasi corrupti dolor itaque! Nisi, maxime quisquam? Nemo hic magnam vitae! Quo, est. Velit qui numquam corporis.
        </div>
      </div>
    </div>
  </section> -->
  <section>
    <div class="container" id="testimonial-but">
      <h2 class="testimonial-heading">Clients Testimonials</h2>
      <div class="">
        <div class="testimonial-left">
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators whitebutoon">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active ">
                <div class="row">
                  <img src="projectImages/man-eating-burger.png" class="img-fluid col-lg-6" alt="...">

                  <p class="col-lg-6">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum voluptatibus sapiente quisquam vel
                    tempora voluptates saepe provident corrupti. Earum, eaque! Tempore, fugit libero. Quasi corrupti
                    dolor
                    itaque! Nisi, maxime quisquam? Nemo hic magnam vitae! Quo, est. Velit qui numquam corporis.</p>

                </div>
              </div>

              <div class="carousel-item">
                <div class="row">
                  <img src="projectImages/man-eating-burger.png" class="img-fluid col-lg-6" alt="...">

                  <p class="col-lg-6">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum voluptatibus sapiente quisquam vel
                    tempora voluptates saepe provident corrupti. Earum, eaque! Tempore, fugit libero. Quasi corrupti
                    dolor
                    itaque! Nisi, maxime quisquam? Nemo hic magnam vitae! Quo, est. Velit qui numquam corporis.</p>
                </div>
              </div>

              <div class="carousel-item">
                <div class="row">
                  <img src="projectImages/man-eating-burger.png" class="img-fluid col-lg-6" alt="...">

                  <p class="col-lg-6">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum voluptatibus sapiente quisquam vel
                    tempora voluptates saepe provident corrupti. Earum, eaque! Tempore, fugit libero. Quasi corrupti
                    dolor
                    itaque! Nisi, maxime quisquam? Nemo hic magnam vitae! Quo, est. Velit qui numquam corporis.</p>
                </div>
              </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
              data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
              data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
  </section>

  <!-- contact section -->
  <!-- <section id="contact">
    <div class="contact-info">
      <p class="phone">phone: +966-13-860-0000</p>
      <div class="work-hours">
        <img src="projectImages/clock.png" alt="time">
        <div>
          <p>sun-thr 11:00 - 23:00</p>
          <p>fri-sat 12:00 - 23:00</p>
        </div>
      </div>
      <div class="location">
        <img src="projectImages/placeholder.png" alt="location">
        <div>
          <p>123 KFUPM Students Mall</p>
          <p>Dhahran 34464</p>
        </div>
        <div class="ula">
             <p><a href="https://ar-ar.facebook.com/">Facebook</a>


              <a href="https://twitter.com/?lang=ar">Twitter</a>


               <a href="https://www.instagram.com/">instgram</a></p>
        </div>
      </div>
    </div>
    <div class="map">

    </div>
  </section> -->
  <?php include 'include/inc.footer.php'; ?>
