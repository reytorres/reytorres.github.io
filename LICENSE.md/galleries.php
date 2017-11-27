<?php
    include 'head.php';
?>
<body class="background">
<!-- ========== CAROUSEL ======== -->



  <!-- ======End of CAROUSEL ========
   -->
<!-- ============== HEADER ===================== -->

    <?php
        include 'header.php';
    ?>

<!-- ============== End of HEADER =================== -->


  <!-- ============== NAV ========================== -->

      <div class="dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
          <img src="./img/style.png" style="width: 30px; height: auto;" aria-haspopup="true" aria-expanded="false">
          <span class="caret"></span>
        </button>
        <ul class="dropdown-menu menu">
          <li><a href="index.php"><h4>Home</h4></a></li>
          <li><a href="about.php"><h4>About</h4></a></li>
          <li><a href="#"><h4>Galleries</h4></a></li>
          <li><a href="#"><h4>Contact</h4></a></li>
        </ul>
      </div>

      <div class="container">
          <div class="row">
            <ul class="menu nav">
              <li><a href="index.php"><h4>Home</h4></a></li>
              <li><a href="about.php"><h4>About</h4></a></li>
              <li><a><h4>Galleries</h4></a></li>
              <li><a href="contact.php"><h4>Contact</h4></a></li>
            </ul>
          </div>
        </div>
      </div>

    <!-- ============== End of NAV ====================== -->

    <!-- ============== MAIN ========================== -->

      <div class="wrapper-2">
        <div class="container-fluid">
          <div class="row">
            <div class="aside col-sm-7 col-md-7">
              <h1 class="about-title">Galleries</h1>

              <!-- ====== Mobile ============= -->
              <div class="gallery-mobile">
                <a href="carousel.html"><figure>
                    <div class="zoom overlay">
                      <img src="https://farm9.staticflickr.com/8194/8137328977_6af368eb4f.jpg" width="332" height="500" alt="Mandala (33)" class="image">
                      <div class="middle">
                        <div class="text"> People
                        </div>
                      </div>
                    </div>
                  </figure></a>
                 <a href="carousel.html"><figure>
                    <div class="zoom overlay">
                      <img src="./img/portrait.jpeg" alt="sunset" class="image">
                      <div class="middle">
                        <div class="text"> Burning Man
                        </div>
                      </div>
                    </div>
                  </figure></a>

                 <a href="carousel.html"><figure>
                    <div class="zoom overlay">
                      <img src="./img/sunset.jpg" alt="sunset" class="image">
                      <div class="middle">
                        <div class="text"> Photo title
                        </div>
                      </div>
                    </div>
                  </figure></a>
                 <a href="carousel.html"><figure>
                    <div class="zoom overlay">
                      <img src="./img/sunset.jpg" alt="sunset" class="image">
                      <div class="middle">
                        <div class="text"> Photo title
                        </div>
                      </div>
                    </div>
                  </figure></a>
                </div>

      <!-- ====== iPAD, Laptop ====== -->

              <ul class="gallery-laptop">
                <li><a href="carousel.html"><figure>
                  <div class="zoom overlay">
                    <img src="https://farm9.staticflickr.com/8332/8137358458_4153c241d6.jpg" alt="Mandala (33)" class="image">
                    <div class="middle">
                      <div class="text"> People
                      </div>
                    </div>
                  </div>
                </figure></a></li>
                <li><a href="carousel.html"><figure>
                  <div class="zoom overlay">
                    <img src="https://farm6.staticflickr.com/5758/22809001491_33fa33d68f.jpg" alt="amalfi" class="image">
                    <div class="middle">
                      <div class="text"> Landscapes
                      </div>
                    </div>
                  </div>
                </figure></a></li>

                <li><a href="carousel.html"><figure>
                  <div class="zoom overlay">
                    <img src="https://farm8.staticflickr.com/7323/12945745365_76af78ab29.jpg" alt="san miguel de allende" class="image">
                    <div class="middle">
                      <div class="text"> Travel
                      </div>
                    </div>
                  </div>
                </figure></a></li>
                <li><a href="carousel.html"><figure>
                  <div class="zoom overlay">
                    <img src="./img/sunset.jpg" alt="sunset" class="image">
                    <div class="middle">
                      <div class="text"> Events
                      </div>
                    </div>
                  </div>
                </figure></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

<!-- ============== End of MAIN ========================== -->

<!-- ============== FOOTER ========================== -->

    <?php
        include 'footer.php';
    ?>


<!-- ============== End of FOOTER ======================= -->

  </body>
</html>





