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
          <li><a href="galleries.php"><h4>Galleries</h4></a></li>
          <li><a><h4>Contact</h4></a></li>
        </ul>
      </div>

      <div class="container">
          <div class="row">
            <ul class="menu nav">
              <li><a href="index.php"><h4>Home</h4></a></li>
              <li><a href="about.php"><h4>About</h4></a></li>
              <li><a href="galleries.php"><h4>Galleries</h4></a></li>
              <li><a><h4>Contact</h4></a></li>
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
              <h1 class="about-title">Contact</h1>
              <article class= "about-article">
                <p class="about-text contact-bold">E-MAIL</p>
                <a class="no-decoration" href="mailto:reytorr@gmail.com"><p class="contact-regular"> reytorr@gmail.com </p></a>
                <p class="about-text contact-bold">CELL PHONE</p>
                <p class="contact-regular">(604) 762-7454 </p>
              </article>
            </div>
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