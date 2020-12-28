<!DOCTYPE html>
<html lang="en">

<head>
  <title>Personal Portfolio Template</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Template css Files -->
  <link rel="stylesheet" href="css/style.css" type="text/css">
  <link rel="stylesheet" href="css/skins/pink.css" type="text/css">
</head>

<body>

  <!-- Pre load -->
  <div class="preloader">
    <div class="loader">

    </div>
  </div>
  <!-- Pre load -->

  <!-- Main Container -->
  <div class="main-container">
    <div class="aside">
      <div class="logo">
        <a href="index.php">CV</a>
      </div>

      <!-- Nav Toggler Btn -->
      <div class="nav-toggler">
        <span></span>
      </div>

      <!-- Nav -->
      <ul class="nav">
        <li><a href="#home"><i class="fa fa-home"></i>Home</a></li>
        <li><a href="#aboutme"><i class="fa fa-user"></i>About me</a></li>
        <li><a href="#services"><i class="fa fa-list"></i>Services</a></li>
        <li><a href="#portfolio"><i class="fa fa-envelope"></i>Portfolio</a></li>
        <li><a href="#blog"><i class="fa fa-briefcase"></i>Blog</a></li>
        <li><a href="#contact"><i class="fa fa-comments"></i>Contact</a></li>
        <li><a href="login.php"><i class="fa fa-sign-in"></i>Sign in</a></li>
      </ul>

      <!-- <div class="copyright-text">

      </div> -->
    </div> 
  </div>

  <div class="main-container">
    <section class="login section">
      <div class="container">
        <div class="row">
          Phu
        </div>
      </div>
    </section>
  </div>

  <div class="lightbox">
    <div class="lightbox-content">
      <div class="lightbox-close">&times;</div>
      <img src="images/portfolio/2.jpg" alt="" class="lightbox-img"  onclick="nextItem()">
      <div class="lightbox-caption">
        <div class="caption-text"></div>
        <div class="caption-counter"></div>
      </div>
    </div>

    <div class="lightbox-controls">
      <div class="prev-item" onclick="prevItem()"><i class="fa fa-angle-left"></i></div>
      <div class="next-item" onclick="nextItem()"><i class="fa fa-angle-right"></i></div>
    </div>
  </div>

<!-- Template js -->
<script src="js/script.js"></script>
</body>

</html>


