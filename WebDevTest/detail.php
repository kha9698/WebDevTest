<?php 
include "php/config.php"; 
include 'php/meal_db.php';
$db = new Meal_db($connection);
include 'include/inc.header.php';
$id = $_GET['id'];
$data = $db->getMealById($id);
?>
  <!-- Gallary -->
  <section id="gallarys">

    <div class="Gallery">
      <div class="head">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div>
                <p><img class="img-fluid"src="projectImages/<?php echo $data['image'];  ?>"></p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="Writting">
                <h1><?php echo $data['title'];  ?></h1>
                <p><?php echo $data['price'];  ?> SAR</p>
                <p>&#11088;<?php echo $data['rating'];  ?> Rating </a></p>
      
                <p class="pa1"><?php echo $data['description'];  ?> </p>
                <div class="btn1">
                  <a class="btn3" onclick="minus()">-</a>
                  <a class="btn4" id="bttn4">1</a>
                  <a class="btn5" onclick="plus()">+</a>
      
                  <div class="btn2" id="<?php echo $data['id'] ?>" onclick="card(this.id)"><a>add to cart</a></div>
      
                </div>
      
              </div>
            </div>
            
          </div>
        </div>

        
        

      </div>
    </div>
  </section>

  <section id="discreption">
   <!-- Pills navs -->
   
   <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link col-lg-6"  onclick="show_disc()">description</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link col-lg-6" id="<?php echo $data['id'];  ?>"  onclick="showReviews(this.id)">review</button>
    </li>
  
  </ul>
  <div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
        <div id="show_Discription_Section">
    <div class="tab">
      
<div class="writ2">
  <p><?php echo $data['description'];  ?> </p>
</div>
      <h4>nutrtion facts</h4>
      <TABLE>
        <tr>
          <Td colspan="3"><strong>Servent size:</strong> <?php echo $data['nutrition']['serving_size'];  ?></Td>
        </tr>
        <tr>
          <TD colspan="3"><strong>Servening per container:</strong> <?php echo $data['nutrition']['serving_per_container'];  ?></TD>
        </tr>
        <tr>
          <td colspan="3"><strong>Suplment Facts</strong></td>
        </tr>
        
        
        <tr>
          <Th> </Th>
          <Th> Amount Per Serving </Th>
          <Th> %Daily Value* </Th>
        </tr>
        <?php
        foreach ($data['nutrition']['facts'] as $key => $value) {
        ?>
        <TR>
          <Td> <?php echo $value['unit']; ?> </Td>
          <Td> <?php echo $value['amount_per_serving']; ?> </Td>
          <Td> <?php echo $value['daily_value']; ?> </Td>
        </TR>
        <?php
        }
        ?>
       
        <TR>
          <Td colspan="3"> *Percent daily Values are based on a 2,000 calories diet. Your diet may be higher or
            lower depending on your calorie needs </Td>

        </TR>


      </TABLE>
    </div>
    </div>  
     </div>
   <!--  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"> -->
        <!-- review-->
  <div id="revSection" class="Review">
    <div class="container">

      <h3 class="rev final">Reviews</h3>
      <div class="fh1">
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
                <div class="row align-items-center">
            <div class="col-lg-6 final">
              <div class="pic">
                <img class="img-fluid" src="projectImages/<?php echo $data['reviews']['image'];  ?>">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="p2">
                <h4 class="final1"><?php echo $data['reviews']['reviewer_name'];  ?></h4>
                <h5 class="final1"><?php echo $data['reviews']['city'];  ?> - <?php echo $data['reviews']['date'];  ?> <?php echo $data['reviews']['rating'];  ?></h5>
                <p><?php echo $data['reviews']['review'];  ?> </p>
              </div>
            </div>
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

<div class="feedback">
      <button class="he4" onclick="show_hide()">Add your review</button>
      <div class="animation">
        <div class="hide_review" id="show_review">
          <form method="POST" enctype="multipart/form-data" id="reviewForm">
            <p>Image</p>
            <p> <input type="file" id="Image" name="picture"> </p>
            <p>Rate the Food</p>
            <p><input type="range" id=datalist name="volume" min="0" max="100" step="20" value="20" list="tickmarks">
              <datalist id="tickmarks">
                <option value="20"></option>
                <option value="40"></option>
                <option value="60"></option>
                <option value="80"></option>
                <option value="100"></option>
              </datalist>
            </p>



            <p>Name <input class="input" type="text" name="name" id="name_textbox" placeholder="First and Last name">
            </p>
            <p>City <input class="input" type="text" name="city" id="city_textbox" placeholder="City">
            </p>

            <p style="margin-bottom: 0;">Review</p>
            <p id="errorMessage">Please type your review</p>
            <textarea id="review_textbox" name="review" cols="30" rows="10"
              placeholder="Type your review here max 500 charecters" maxlength="500"></textarea>
            <p><a id="numOfLitters">0</a><a>/500</a></p>
            <input type="hidden" name="id" id="id" value="<?php echo $data['id'];  ?>">
            <button class="he5" type="submit" name="submit">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
    <!-- </div> -->
    
  </div>


  </section>





<?php include 'include/inc.footer.php'; ?>