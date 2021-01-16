<?php

require('path.php');
require('db/db.php');





?>
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
    <?php include(ROOT_PATH . "/includes/header.php") ?>



    <div class="main-content">
      <section class="home section active" id="home">
        <div class="container">
          <div class="intro">
            <img src=" <?php echo 'data:image/png;base64,', ($row['image']); ?>" alt="profile" class="shadow-dark">
            <h1><?php echo $row['fullname']; ?></h1>
            <p>I'm a <?php echo $row['short_description']; ?></p>
            <div class="icon">
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-instagram"></i></a>
              <a href="#"><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>
      </section>

      <!-- About me  hidden-->
      <!-- <a name="aboutme"></a> -->
      <section class="about section " id="aboutme">
        <div class="container">
          <div class="row">
            <div class="section-title padd">
              <h2>About me</h2>
            </div>
          </div>

          <div class="row">
            <div class="about-content padd">
              <div class="row">
                <div class="about-text padd">
                  <h3>
                    I'm <?php echo $row['fullname']; ?> and <span><?php echo $row['short_description']; ?></span>
                  </h3>
                  <p><?php $row['description']; ?></p>
                </div>
              </div>

              <div class="row">
                <div class="info padd">
                  <div class="row">
                    <div class="info-item padd">
                      <p>Birthday : <span><?php echo $row['birthday']; ?></span></p>
                    </div>
                    <div class="info-item padd">
                      <p>Age : <span><?php echo $row['age']; ?></span></p>
                    </div>
                    <div class="info-item padd">
                      <p>Website : <span><?php echo $row['website']; ?></span></p>
                    </div>
                    <div class="info-item padd">
                      <p>Email : <span><?php echo $row['email']; ?></span></p>
                    </div>
                    <div class="info-item padd">
                      <p>Degree : <span><?php echo $row['degree']; ?></span></p>
                    </div>
                    <div class="info-item padd">
                      <p>Phone : <span><?php echo $row['phone']; ?></span></p>
                    </div>
                    <div class="info-item padd">
                      <p>City : <span><?php echo $row['city']; ?></span></p>
                    </div>
                    <div class="info-item padd">
                      <p>Freelance : <span><?php echo $row['freelance']; ?></span></p>
                    </div>
                  </div>

                  <!-- <div class="row">
                        <div class="buttons padd">
                          <a href="#" class="btn">Download</a>
                          <a href="#" class="btn">Download</a>
                        </div>
                      </div> -->
                </div>

                <div class="skill padd">
                  <?php foreach ($skills as $skill) { ?>
                    <div class="row">
                      <div class="skill-item padd">
                        <h5><?php echo $skill['skill_name']; ?></h5>
                        <div class="progress">
                          <div class="progress-in" style="width: <?php echo $skill['level_skill']; ?>"></div>
                          <div class="skill-persent"><?php echo $skill['level_skill'] ?></div>
                        </div>
                      </div>
                    </div>
                  <?php } ?>

                </div>
              </div>

              <div class="row">
                <div class="edu padd">
                  <h3 class="title">Education</h3>
                  <div class="row">
                    <div class="timeline-box padd">
                      <div class="timeline .shadow-dark padd">
                        <?php foreach ($educations as $education) { ?>
                          <div class="timeline-item">
                            <div class="circle"></div>
                            <h6 class="timeline-date">
                              <i class="fa fa-calendar"></i> <?php echo $education['time'] ?>
                            </h6>
                            <h4 class="timeline-title"><?php echo $education['school_name'] ?></h4>
                            <p class="timeline-text"><?php echo $education['description'] ?></p>
                          </div>
                        <?php } ?>
                      </div>

                    </div>
                  </div>
                </div>

                <div class="exper padd">
                  <h3 class="title">Experience</h3>
                  <div class="row">
                    <div class="timeline-box padd">
                      <div class="timeline .shadow-dark padd">
                        <?php foreach ($experiences as $experience) { ?>
                          <div class="timeline-item">
                            <div class="circle"></div>
                            <h6 class="timeline-date">
                              <i class="fa fa-calendar"></i> <?php echo $experience['time']  ?>
                            </h6>
                            <h4 class="timeline-title"><?php echo $experience['work']  ?></h4>
                            <p class="timeline-text"><?php echo $experience['description']  ?></p>
                          </div>
                        <?php } ?>

                        

                      </div>

                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
      </section>
      <!-- About me -->

      <!-- Services -->
      <!-- <a name="services"></a> -->
      <section class="service section" id="services">
        <div class="container">
          <div class="row">
            <div class="section-title padd">
              <h2>Services</h2>
            </div>
          </div>

          <div class="row">

            <div class="service-item padd">
              <div class="service-item-inner">
                <div class="icon"><i class="fa fa-laptop"></i></div>
                <h4>Web Design</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum.</p>
              </div>
            </div>

            <div class="service-item padd">
              <div class="service-item-inner">
                <div class="icon"><i class="fa fa-photo"></i></div>
                <h4>Photography</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum.</p>
              </div>
            </div>

            <div class="service-item padd">
              <div class="service-item-inner">
                <div class="icon"><i class="fa fa-code"></i></div>
                <h4>Web Development</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum.</p>
              </div>
            </div>

            <div class="service-item padd">
              <div class="service-item-inner">
                <div class="icon"><i class="fa fa-film"></i></div>
                <h4>Video Editing</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum.</p>
              </div>
            </div>

            <div class="service-item padd">
              <div class="service-item-inner">
                <div class="icon"><i class="fa fa-rocket"></i></div>
                <h4>Seo Optimization</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum.</p>
              </div>
            </div>

            <div class="service-item padd">
              <div class="service-item-inner">
                <div class="icon"><i class="fa fa-paint-brush"></i></div>
                <h4>Logo Design</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum.</p>
              </div>
            </div>

          </div>
        </div>
      </section>
      <!-- Services -->

      <!-- portfolio -->
      <section class="portfolio section" id="portfolio">
        <div class="container">
          <div class="row">
            <div class="section-title padd">
              <h2>Portfolio</h2>
            </div>
          </div>

          <div class="row">
            <div class="portfolio-filter padd">
              <button type="button" class="active" data-filter="all">All</button>
              <?php foreach ($q as $qq) { ?>
                <button type="button" data-filter="<?php echo $qq['0'] ?>"><?php echo $qq['0'] ?></button>
              <?php } ?>

            </div>
          </div>

          <div class="row ">
            <?php foreach ($portfolios as $portfolio) { ?>
              <div class="portfolio-item padd" data-category="<?php echo $portfolio['portfolio_name'] ?>">
                <div class="portfolio-item-inner shadow-dark">
                  <div class="portfolio-img">
                    <img src="<?php echo 'data:image/png;base64,', ($portfolio['image']); ?>" alt="">
                  </div>
                  <div class="portfolio-info">
                    <h4><?php echo $portfolio['portfolio_name'] ?></h4>
                    <div class="icon">
                      <i class="fa fa-search"></i>
                    </div>
                  </div>
                </div>
              </div>
            <?php } ?>


          </div>

        </div>


    </div>
    </section>
  </div>

  <!--portfolio  -->

  <!-- Blog section -->
  <section class="blog section" id="blog">
    <div class="container">
      <div class="row">
        <div class="section-title padd">
          <h2>Blog</h2>
        </div>


        <div class="row padd">
          <?php foreach ($blogs as $blog) { ?>
            <div class="blog-item padd">
              <div class="blog-item-inner">
                <div class="blog-img">
                  <img src="<?php echo 'data:image/png;base64,', ($blog['image']); ?>" alt="blog">
                  <div class="blog-date">
                    <?php echo $blog['date']; ?>
                  </div>
                </div>
                <div class="blog-info">
                  <h4 class="blog-title"> <?php echo $blog['blog_name']; ?></h4>
                  <p class="blog-description"><?php echo $blog['description_short']; ?></p>
                  <p class="blog-tags">Tags : <a href="#"><?php echo $blog['tag']; ?></a> </p>
                </div>
              </div>
            </div>
          <?php } ?>



        </div>
      </div>
    </div>
  </section>
  <!-- Blog section -->

  <!-- contact -->
  <section class="contact section" id="contact">
    <div class="container">
      <div class="row">
        <div class="section-title padd">
          <h2>Contact Me</h2>
        </div>
      </div>
      <div class="row">
        <div class="contact-info-item padd">
          <div class="icon"><i class="fa fa-phone"></i></div>
          <h4>Call Us On</h4>
          <p><?php echo $row['phone']; ?></p>
        </div>

        <div class="contact-info-item padd">
          <div class="icon"><i class="fa fa-map-marker"></i></div>
          <h4>Office</h4>
          <p>Van Hoang, Phu Xuyen, Ha Noi</p>
        </div>

        <div class="contact-info-item padd">
          <div class="icon"><i class="fa fa-envelope "></i></div>
          <h4>Email</h4>
          <p><?php echo $row['email']; ?></p>
        </div>
      </div>
      <!-- contact form -->
      <div class="row">
        <div class="contact-form padd">
          <div class="row">
            <div class="form-item col-6 padd">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Name">
              </div>
            </div>

            <div class="form-item col-6 padd">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Email">
              </div>
            </div>

          </div>

          <div class="row">
            <div class="form-item col-12 padd">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="form-item col-12 padd">
              <div class="form-group">
                <textarea class="form-control" placeholder="Your Message..."></textarea>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="form-item col-12 padd">
              <button type="submit" class="btn">Send Message</button>
            </div>
          </div>

        </div>
      </div>
      <!-- contact form -->
    </div>
  </section>
  <!-- contact -->
  </div>
  </div>

  <div class="lightbox">
    <div class="lightbox-content">
      <div class="lightbox-close">&times;</div>
      <img src="images/portfolio/2.jpg" alt="" class="lightbox-img" onclick="nextItem()">
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