<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Register || Praise Party 2.0 - Hallelujah</title>
    <link rel="stylesheet" href="./assets/css/contact.css" />
    <!-- <link rel="stylesheet" href="./assets/css/booking.css" /> -->
    
    
  <link rel="shortcut icon" href="./favicon.png" type="image/svg+xml">
  <link rel="stylesheet" href="./assets/font/font.css">

    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div class="continar">
      <span class="big-circle"></span>
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Praise Party 2.0</h3>
          <p class="text">
            Kindly fill out the Registration form.
          </p>

          <div class="info">
            <div class="information">
                <lord-icon
                src="https://cdn.lordicon.com/surcxhka.json"
                trigger="loop"
                delay="2000"
                state="hover-jump-roll"
                colors="primary:#ffffff,secondary:#ffffff"
                style="width:50px;height:50px">
            </lord-icon>
              <p> RCCG Christ the Lord Parish,Lagos Province 20 HQ,
                1-5 Admirality Way, Lekki Phase 1</p>
            </div>
            <div class="information">
                <lord-icon
                src="https://cdn.lordicon.com/qvyppzqz.json"
                trigger="loop"
                state="loop-oscillate"
                colors="primary:#ffffff,secondary:#ffffff"
                style="width:35px;height:35px">
            </lord-icon>
              <p> 9.00 pm Prompt</p>
            </div>
            <div class="information">
                <lord-icon
                src="https://cdn.lordicon.com/mahizafr.json"
                trigger="loop"
                delay="2000"
                colors="primary:#ffffff,secondary:#ffffff"
                style="width:35px;height:35px">
            </lord-icon>
              <p> 0708-831-9849</p>
            </div>
            <div class="information">
                <lord-icon
    src="https://cdn.lordicon.com/aycieyht.json"
    trigger="loop"
    delay="2000"
    colors="primary:#ffffff,secondary:#ffffff"
    style="width:50px;height:50px">
</lord-icon>
                <p> info@rccglp20youths.com</p>
              </div>
         
          </div>

          <div class="social-media">
            <p>Connect with us:</p>
            <div class="social-icons">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#">
                <i class="fab fa-whatsapp"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>
            <form method="post" name="PraiseParty-Registration" action="submit.php"  class="form-left">
                <h3 class="title" style="color: green">
                    <?php
                    if (isset($_GET['message'])) {
                        echo htmlspecialchars($_GET['message']);
                    }
                    ?>
                </h3>
                <a href="./register.html" class="butn" id="red">Register Another</a>
                <a href="./index.html" class="butn" id="red">Go Back</a>
            </form>
        </div>
      </div>
    </div>
    <script src="https://cdn.lordicon.com/lordicon.js"></script>
    <script src="./assets/js/admin.js"></script>

  </body>
</html>
