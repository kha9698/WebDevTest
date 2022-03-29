<section>
    <div id="contact" class="row g-0 d-flex align-content-start">
      <div class="contact-right col-lg-6">
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
          </div>

          <div class="contact-links">
            <div>
              <p><a class="social" href="https://ar-ar.facebook.com/">Facebook</a>
            </div>

            <div> <a class="social" href="https://twitter.com/?lang=ar">Twitter</a></div>
            <div><a class="social" href="https://www.instagram.com/">instgram</a>
            </div>
          </div>

        </div>
      </div>


      <div class="contact-left col-lg-6">

        <img src="projectImages/map.png" class="contact-img img-fluid">
      </div>


    </div>
  </section>

  <!-- footer -->
  <footer id="footer" class="container">
    <div class="row">
      <div class="about col-lg-4">
        <img src="projectImages/logo-red.png" alt="logo" calss="Blogo">
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure aliquam, recusandae deleniti est blanditiis,
          voluptatibus porro iste quo voluptatum quibusdam perspiciatis nam laudantium adipisci ut sed?</p>
      </div>
      <div class="footer-link col-md-6 col-lg-4">
        <div class="links">
          <h2>useful links</h2>
          <ul>
            <li><a href="#">About</a></li>
            <li><a href="#">Menu</a></li>
            <li><a href="#section-four">Testimonials</a></li>
            <li><a href="#contact">Contact Us</a></li>
          </ul>
        </div>
      </div>
      <div class="feeds col-lg-4 col-md-6">
        <h2>instagram feeds</h2>
        <div class="img-grid">
          <li class="inspic"><a href="#"><img src="projectImages/meal1.png" alt="meal" class="footermale1"></a></li>
          <li class="inspic"><a href="#"><img src="projectImages/meal2.png" alt="meal"></a></li>
          <li class="inspic"><a href="#"><img src="projectImages/meal3.png" alt="meal"></a></li>
          <li class="inspic"><a href="#"><img src="projectImages/meal4.png" alt="meal"></a></li>
          <li class="inspic"><a href="#"><img src="projectImages/meal5.png" alt="meal"></a></li>
          <li class="inspic"><a href="#"><img src="projectImages/meal6.png" alt="meal"></a></li>
        </div>
      </div>
    </div>
    </div>
  </footer>
  <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
    crossorigin="anonymous"></script>
    <script src="app.js"></script>
</body>
<script>
  var count = (function () {
    var counter = 0;
    return function () { return counter += 1; }
  })();
  function card(id) {
    window.location.href = 'php/cart.php?id='+id+'&back='+location.href;
    //document.getElementById("rec0").innerHTML = count();
  }

  function showNavbar(obj) {
    var toggle = obj.dataset.toggle;
    if (toggle == "off") {
      obj.dataset.toggle = "on";
      document.getElementsByClassName('menu')[0].style.display = 'block';
      document.getElementsByClassName('inside')[0].style.height = '300px';
    }
    else {
      obj.dataset.toggle = "off";
      document.getElementsByClassName('menu')[0].style.display = 'none';
      document.getElementsByClassName('inside')[0].style.height = '100px';
    }
  }
</script>

</html>