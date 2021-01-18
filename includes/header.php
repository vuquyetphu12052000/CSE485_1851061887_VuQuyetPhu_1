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
        <!-- <li><a href="#services"><i class="fa fa-list"></i>Services</a></li> -->
        <li><a href="#portfolio"><i class="fa fa-envelope"></i>Portfolio</a></li>
        <li><a href="#blog"><i class="fa fa-briefcase"></i>Blog</a></li>
        <li><a href="#contact"><i class="fa fa-comments"></i>Contact</a></li>
        <?php if(isset($_SESSION['id'])) {?>
        <li><a href="dashboard/index.php"><i class="fa fa-list"></i>Dashboard</a></li>
        <li><a href="dashboard/logout.php"><i class="fa fa-sign-in"></i>Log out</a></li>
        <?php }else { ?>
        <li><a href="login.php"><i class="fa fa-sign-in"></i>Log in</a></li>
        <?php } ?>
      </ul>

      <!-- <div class="copyright-text">

      </div> -->
</div>