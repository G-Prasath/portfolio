<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sunshine - Responsive vCard Template</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="description" content="Sunshine - Responsive vCard Template">
  <meta name="keywords" content="vcard, resposnive, retina, resume, jquery, css3, bootstrap, Sunshine, portfolio">
  <meta name="author" content="lmtheme">
  <link rel="shortcut icon" href="favicon.ico">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/transition-animations.css">
  <link rel="stylesheet" href="css/owl.carousel.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/main.css" type="text/css">

  <script>
    (function (i, s, o, g, r, a, m) {
      i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
        (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date(); a = s.createElement(o),
        m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-92992662-1', 'auto');
    ga('send', 'pageview');

  </script>


  <script src="js/jquery-2.1.3.min.js"></script>
  <script src="js/modernizr.custom.js"></script>

  <script src='./js/recaptcha-api.js'></script>
</head>

<body>
  <!-- Loading animation -->
  <div class="preloader">
    <div class="preloader-animation">
      <div class="dot1"></div>
      <div class="dot2"></div>
    </div>
  </div>
  <!-- /Loading animation -->

  <div id="page" class="page">
    <!-- Header -->
    <header id="site_header" class="header">
      <div class="my-photo">
        <img src="images/webPic.png" alt="image">
        <div class="mask"></div>
      </div>

      <div class="site-title-block">
        <h1 class="site-title">Guru Prasath</h1>
        <p class="site-description">Web Developer</p>
      </div>

      <a class="menu-toggle mobile-visible">
        <i class="fa fa-bars"></i>
      </a>
    </header>
    <!-- /Header -->

    <!-- Main Content -->
    <div id="main" class="site-main">
      <!-- Page changer wrapper -->
      <div class="pt-wrapper">
        <!-- Navigation & Social buttons -->
        <div class="site-nav mobile-menu-hide">
          <!-- Main menu -->
          <ul id="nav" class="site-main-menu">
            <!-- About Me Subpage link -->
            <li>
              <a class="pt-trigger" href="#about_me" data-animation="58" data-goto="1">About
                me</a><!-- href value = data-id without # of .pt-page -->
            </li>
            <!-- /About Me Subpage link -->
            <li>
              <a class="pt-trigger" href="#resume" data-animation="59" data-goto="2">Resume</a>
            </li>
            <li>
              <a class="pt-trigger" href="#portfolio" data-animation="60" data-goto="3">Portfolio</a>
            </li>
            <li>
              <a class="pt-trigger" href="#contact" data-animation="58" data-goto="5">Contact</a>
            </li>
          </ul>
          <!-- /Main menu -->


          <!-- Social buttons -->
          <ul class="social-links">
            <li><a class="tip social-button" href="https://github.com/G-Prasath" target="_blank" title="github"><i class="fa fa-github"></i></a></li>
            <!-- Full list of social icons: http://fontawesome.io/icons/#brand -->
            <li><a class="tip social-button" href="https://www.linkedin.com/in/prasath264" target="_blank" title="linkedin"><i class="fa fa-linkedin"></i></a></li>
            <li>

            </li>
            <!--<li><a class="tip social-button" href="#" title="Youtube"><i class="fa fa-youtube"></i></a></li>-->
            <!--<li><a class="tip social-button" href="#" title="last.fm"><i class="fa fa-lastfm"></i></a></li>-->
            <!--<li><a class="tip social-button" href="#" title="Dribbble"><i class="fa fa-dribbble"></i></a></li>-->
          </ul>
          <!-- /Social buttons -->


        </div>
        <!-- Navigation & Social buttons -->

        <!-- Subpages -->
        <div class="subpages">
          <!-- About Me Subpage -->
          <section class="pt-page pt-page-1" data-id="about_me">
            <div class="section-title-block">
              <h2 class="section-title">About Me</h2>
              <h5 class="section-description">Development, Networking, WAPT</h5>
            </div>

            <div class="row">
              <div class="col-sm-12 col-md-12 mobile-visible subpage-block">
                <div class="my-photo-small">
                  <img src="images/photo_small.jpg" alt="image">
                </div>
              </div>
              <div class="col-sm-6 col-md-6 subpage-block">
                <div class="general-info">
                  <h3>I am Web Developer / Security Tester</h3>
                  <p>I am a Full-Stack Developer with 3+ years of experience building web applications and delivering
                    freelance solutions. I specialize in creating responsive frontend interfaces supported by scalable
                    backend systems and structured database designs, focusing on clean code, performance, and reliable
                    real-world user experiences.</p>
                  <p>I work across complete application lifecycles, from architecture planning to backend implementation
                    and database optimization. Alongside development, I practice Web Application Penetration Testing
                    (WAPT) to understand vulnerabilities and build secure, scalable, and maintainable applications.</p>
                </div>
              </div>

              <div class="col-sm-6 col-md-6 subpage-block">
                <div class="block-title">
                  <h3>Testimonials</h3>
                </div>
                <div class="testimonials owl-carousel">

                  <!-- Testimonial 1 -->
                  <div class="testimonial-item">
                    <!-- Testimonial Content -->
                    <div class="testimonial-content">
                      <div class="testimonial-text">
                        <p>"Delivered a clean and modern marketing website that clearly represents our brand and
                          strengthens online presence."</p>
                      </div>
                    </div>
                    <!-- /Testimonial Content -->
                    <!-- Testimonial Author -->
                    <div class="testimonial-credits">
                      <!-- Picture -->
                      <div class="testimonial-picture">
                        <img src="images/testimonials/profile.png" alt="">
                      </div>
                      <!-- /Picture -->
                      <!-- Testimonial author information -->
                      <div class="testimonial-author-info">
                        <p class="testimonial-author">Mr. Kumar Gurusamy</p>
                        <p class="testimonial-firm">Almericus Inc.</p>
                      </div>
                    </div>
                    <!-- /Testimonial author information -->
                  </div>
                  <!-- End of Testimonial 1 -->

                  <!-- Testimonial 2 -->
                  <div class="testimonial-item">
                    <!-- Testimonial Content -->
                    <div class="testimonial-content">
                      <div class="testimonial-text">
                        <p>"Delivered a professional website that clearly showcases our logistics services and
                          strengthens our global business presence."</p>
                      </div>
                    </div>
                    <!-- /Testimonial Content -->
                    <!-- Testimonial Author -->
                    <div class="testimonial-credits">
                      <!-- Picture -->
                      <div class="testimonial-picture">
                        <img src="images/testimonials/profile.png" alt="">
                      </div>
                      <!-- /Picture -->
                      <!-- Testimonial author information -->
                      <div class="testimonial-author-info">
                        <p class="testimonial-author">Mr. Francis Anandaraj</p>
                        <p class="testimonial-firm">Interworld Line</p>
                      </div>
                    </div>
                    <!-- /Testimonial author information -->
                  </div>
                  <!-- End of Testimonial 2 -->

                  <!-- Testimonial 3 -->
                  <div class="testimonial-item">
                    <!-- Testimonial Content -->
                    <div class="testimonial-content">
                      <div class="testimonial-text">
                        <p>"Created a meaningful organization website that clearly communicates our mission and supports
                          community outreach."</p>
                      </div>
                    </div>
                    <!-- /Testimonial Content -->
                    <!-- Testimonial Author -->
                    <div class="testimonial-credits">
                      <!-- Picture -->
                      <div class="testimonial-picture">
                        <img src="images/testimonials/profile.png" alt="">
                      </div>
                      <!-- /Picture -->
                      <!-- Testimonial author information -->
                      <div class="testimonial-author-info">
                        <p class="testimonial-author">Mr. Arulnidhi Panneerselvam</p>
                        <p class="testimonial-firm">Selvalakshmi Foundation</p>
                      </div>
                    </div>
                    <!-- /Testimonial author information -->
                  </div>
                  <!-- End of Testimonial 3 -->
                </div>
              </div>
            </div>

            <!-- Services block -->
            <div class="block-title">
              <h3>Services</h3>
            </div>

            <div class="row">
              <div class="col-sm-6 col-md-3 subpage-block">
                <div class="service-block">
                  <div class="service-info">
                    <img src="images/service/web_design.png" alt="Responsive Design">
                    <h4>Frontend</h4>
                    <p>Building responsive and modern user interfaces using clean design principles, optimized
                      performance, and seamless user interaction.</p>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-md-3 subpage-block">
                <div class="service-block">
                  <div class="service-info">
                    <img src="images/service/backend.png" alt="Copywriter">
                    <h4>Backend</h4>
                    <p>Developing secure and scalable backend systems, APIs, and server-side logic to ensure reliable
                      performance and smooth data processing.</p>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-md-3 subpage-block">
                <div class="service-block">
                  <div class="service-info">
                    <img src="images/service/ecommerce.png" alt="E-Commerce">
                    <h4>E-Commerce</h4>
                    <p>Creating complete e-commerce platforms with product management, secure payments, order handling,
                      and optimized shopping experiences.</p>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-md-3 subpage-block">
                <div class="service-block">
                  <div class="service-info">
                    <img src="images/service/management.png" alt="Management">
                    <h4>Data Management</h4>
                    <p>Designing structured databases with efficient data organization, optimization, secure storage,
                      and reliable data access for applications.</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- End of Services block -->

            <!-- Clients block -->
            <div class="block-title">
              <h3>Clients</h3>
            </div>

            <div class="row">
              <div class="col-sm-4 col-md-2 subpage-block">
                <div class="client_block">
                  <img src="images/clients/client_1.png" alt="image">
                </div>
              </div>

              <div class="col-sm-4 col-md-2 subpage-block">
                <div class="client_block">
                  <img src="images/clients/client_2.png" alt="image">
                </div>
              </div>

              <div class="col-sm-4 col-md-2 subpage-block">
                <div class="client_block">
                  <img src="images/clients/client_3.png" alt="image">
                </div>
              </div>

              <div class="col-sm-4 col-md-2 subpage-block">
                <div class="client_block">
                  <img src="images/clients/client_4.png" alt="image">
                </div>
              </div>

              <div class="col-sm-4 col-md-2 subpage-block">
                <div class="client_block">
                  <img src="images/clients/client_5.png" alt="image">
                </div>
              </div>

              <div class="col-sm-4 col-md-2 subpage-block">
                <div class="client_block">
                  <img src="images/clients/client_6.png" alt="image">
                </div>
              </div>


            </div>
            <!-- End of Clients block -->

            <!-- Fun facts block -->
            <!-- <div class="block-title">
              <h3>Fun Facts</h3>
            </div>

            <div class="row">
              <div class="col-sm-6 col-md-3 subpage-block">
                <div class="fun-fact-block gray-bg">
                  <i class="pe-7s-icon pe-7s-smile"></i>
                  <h4>Happy Clients</h4>
                  <span class="fun-value">1,024</span>
                </div>
              </div>

              <div class="col-sm-6 col-md-3 subpage-block">
                <div class="fun-fact-block">
                  <i class="pe-7s-icon pe-7s-alarm"></i>
                  <h4>Working Hours</h4>
                  <span class="fun-value">6,256</span>
                </div>
              </div>

              <div class="col-sm-6 col-md-3 subpage-block">
                <div class="fun-fact-block gray-bg">
                  <i class="pe-7s-icon pe-7s-medal"></i>
                  <h4>Awards Won</h4>
                  <span class="fun-value">21</span>
                </div>
              </div>

              <div class="col-sm-6 col-md-3 subpage-block">
                <div class="fun-fact-block">
                  <i class="pe-7s-icon pe-7s-coffee"></i>
                  <h4>Coffee Consumed</h4>
                  <span class="fun-value">20,000</span>
                </div>
              </div>
            </div> -->
            <!-- End of Fun fucts block -->
          </section>
          <!-- End of About Me Subpage -->

          <!-- Resume Subpage -->
          <section class="pt-page pt-page-2" data-id="resume">
            <div class="section-title-block">
              <h2 class="section-title">Resume</h2>
              <h5 class="section-description">3.5 Years of Experience</h5>
            </div>

            <div class="row">
              <div class="col-sm-6 col-md-4 subpage-block">
                <div class="block-title">
                  <h3>Education</h3>
                </div>
                <div class="timeline">
                  <!-- Single event -->
                  <div class="timeline-event te-primary">
                    <h5 class="event-date">2017 - 2019</h5>
                    <h4 class="event-name">M.Sc Computer Science</h4>
                    <span class="event-description">Trichy</span>
                    <p>Bharathidasan University</p>
                    <p style="margin-top: -8px;">CGPA : 7.2</p>
                  </div>
                  <!-- Single event -->
                  <div class="timeline-event te-primary">
                    <h5 class="event-date">2014 - 2017</h5>
                    <h4 class="event-name">B.Sc Computer Science</h4>
                    <span class="event-description">Trichy</span>
                    <p>Bharathidasan University</p>
                    <p style="margin-top: -8px;">CGPA : 7.5</p>
                  </div>
                  <!-- Single event -->
                  <div class="timeline-event te-primary">
                    <h5 class="event-date">2012 - 2014</h5>
                    <h4 class="event-name">Higher Secondary</h4>
                    <span class="event-description">Mayiladuthurai</span>
                    <p>N.K.M.H.Sc., Govt School</p>
                    <p style="margin-top: -8px;">CGPA : 6.2</p>
                  </div>

                  <div class="block-title">
                    <h3>Courses</h3>
                  </div>
                  <!-- Single event -->
                  <div class="timeline-event te-primary">
                    <h5 class="event-date">2025</h5>
                    <h4 class="event-name">CCNA</h4>
                    <span class="event-description">Chennai</span>
                    <p>Completed CCNA training covering networking fundamentals, routing, switching, and network
                      security.</p>
                  </div>

                  <!-- Single event -->
                  <div class="timeline-event te-primary">
                    <h5 class="event-date">2024</h5>
                    <h4 class="event-name">Python CLI</h4>
                    <span class="event-description">Remote</span>
                    <p>Developed Linux command-line tools using Python for automation, scripting, and system tasks.</p>
                  </div>

                  <!-- Single event -->
                  <div class="timeline-event te-primary">
                    <h5 class="event-date">2023</h5>
                    <h4 class="event-name">Web Engineering</h4>
                    <span class="event-description">Remote</span>
                    <p>Learned web application architecture, development workflows, and modern web technologies.</p>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-md-4 subpage-block">
                <div class="block-title">
                  <h3>Experience</h3>
                </div>
                <div class="timeline">
                  <!-- Single event -->
                  <div class="timeline-event te-primary">
                    <h5 class="event-date">Jan 2025 - Current</h5>
                    <h4 class="event-name">Fullstack Developer</h4>
                    <span class="event-description">Freelancer</span>
                    <p>Full-stack developer building scalable web applications using modern frontend and backend
                      technologies.</p>
                  </div>
                  <!-- Single event -->
                  <div class="timeline-event te-primary">
                    <h5 class="event-date">Apr 2024 - Jan 2025</h5>
                    <h4 class="event-name">Backend Developer</h4>
                    <span class="event-description">E - Star</span>
                    <p>Develops backend logic, database management, and system integrations for web applications.</p>
                  </div>
                  <!-- Single event -->
                  <div class="timeline-event te-primary">
                    <h5 class="event-date">Feb 2023 - Feb 2024</h5>
                    <h4 class="event-name">Frontend Developer</h4>
                    <span class="event-description">Mekark</span>
                    <p>Develops interactive web layouts focused on performance, usability, and clean design.</p>
                  </div>
                  <!-- Single event -->
                  <div class="timeline-event te-primary">
                    <h5 class="event-date">Dec 2019 - Dec 2020</h5>
                    <h4 class="event-name">XML Developer</h4>
                    <span class="event-description">Web Agency</span>
                    <p>Develops and maintains XML schemas, transformations, and data validation processes.</p>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-md-4 subpage-block">
                <div class="block-title">
                  <h3>Frameworks & Libraries</h3>
                </div>
                <div class="skills-info">
                  <h4>React</h4>
                  <div class="skill-container">
                    <div class="skill-percentage skill-1"></div>
                  </div>

                  <h4>Vite</h4>
                  <div class="skill-container">
                    <div class="skill-percentage skill-2"></div>
                  </div>

                  <h4>Next JS</h4>
                  <div class="skill-container">
                    <div class="skill-percentage skill-3"></div>
                  </div>

                  <h4>Express JS</h4>
                  <div class="skill-container">
                    <div class="skill-percentage skill-7"></div>
                  </div>

                  <h4>Node JS</h4>
                  <div class="skill-container">
                    <div class="skill-percentage skill-8"></div>
                  </div>

                  <h4>Tailwind CSS</h4>
                  <div class="skill-container">
                    <div class="skill-percentage skill-6"></div>
                  </div>
                </div>

                <div class="block-title">
                  <h3>Coding Skills</h3>
                </div>
                <div class="skills-info">

                  <h4>Javascript (ES6)</h4>
                  <div class="skill-container">
                    <div class="skill-percentage skill-5"></div>
                  </div>

                  <h4>PHP</h4>
                  <div class="skill-container">
                    <div class="skill-percentage skill-6"></div>
                  </div>

                  <h4>Python</h4>
                  <div class="skill-container">
                    <div class="skill-percentage skill-7"></div>
                  </div>

                  <h4>Core Java</h4>
                  <div class="skill-container">
                    <div class="skill-percentage skill-3"></div>
                  </div>

                  <h4>MySQL</h4>
                  <div class="skill-container">
                    <div class="skill-percentage skill-8"></div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- End Resume Subpage -->


          <!-- Portfolio Subpage -->

          <?php
          $projects = [
            [
              "name" => "Mekark",
              "img" => "project-1.png",
              "link" => "https://www.mekark.com"
            ],
            [
              "name" => "Interworld Line",
              "img" => "project-2.png",
              "link" => "https://www.interworldline.com/"
            ],
            [
              "name" => "Almericus",
              "img" => "project-3.png",
              "link" => "https://almericus.in/"
            ],
            [
              "name" => "Selvalakshmi Foundation",
              "img" => "project-4.png",
              "link" => "https://selvalakshmifoundation.org/"
            ],
            [
              "name" => "Revovest",
              "img" => "project-5.png",
              "link" => "https://www.revovest.in/"
            ],
            [
              "name" => "Pay Slip Automation",
              "img" => "project-6.png",
              "link" => "https://github.com/G-Prasath/paySlip.git"
            ],
            [
              "name" => "Rosinimudra",
              "img" => "project-7.png",
              "link" => "https://rosinimudra.com/"
            ],
            [
              "name" => "POS (Point of Sale)",
              "img" => "project-8.png",
              "link" => "https://pos-billing-software.vercel.app/"
            ]

          ];
          ?>
          <section class="pt-page pt-page-3" data-id="portfolio">
            <div class="section-title-block">
              <h2 class="section-title">Portfolio</h2>
              <h5 class="section-description">My Best Works</h5>
            </div>

            <!-- Portfolio Content -->
            <div class="portfolio-content">

              <!-- Portfolio filter -->
              <ul id="portfolio_filters" class="portfolio-filters">
                <li class="active">
                  <a class="filter btn btn-sm btn-link active" data-group="all">All</a>
                </li>
                <!-- <li>
                  <a class="filter btn btn-sm btn-link" data-group="media">Media</a>
                </li>
                <li>
                  <a class="filter btn btn-sm btn-link" data-group="illustration">Illustration</a>
                </li>
                <li>
                  <a class="filter btn btn-sm btn-link" data-group="video">Video</a>
                </li> -->
              </ul>
              <!-- End of Portfolio filter -->

              <!-- Portfolio Grid -->
              <div id="portfolio_grid" class="portfolio-grid portfolio-masonry masonry-grid-3">

                <!-- Portfolio Item 1 -->
                <?php foreach ($projects as $index => $project): ?>

                  <!-- Portfolio Item -->
                  <figure class="item" data-groups='["all"]'>
                    <a href="<?= $project['link']; ?>" target="_blank">
                      <img src="images/portfolio/<?= $project['img']; ?>" alt="">
                      <div>
                        <h5 class="name">
                          <?= $project['name']; ?>
                        </h5>
                        <small style="
background:#fff;
color:#000;
padding:6px;
border-radius:50%;
display:inline-flex;
align-items:center;
justify-content:center;
width:24px;
height:24px;
font-weight:600;
">
                          <?= $index + 1 ?>
                        </small>
                        <i class="fa fa-external-link"></i>
                      </div>
                    </a>
                  </figure>
                  <!-- /Portfolio Item -->

                <?php endforeach; ?>
                <!-- /Portfolio Item 1 -->

              </div>
              <!-- /Portfolio Grid -->

            </div>
            <!-- /Portfolio Content -->

          </section>
          <!-- /Portfolio Subpage -->

          <!-- Blog Subpage -->
          <section class="pt-page pt-page-4" data-id="blog">
            <div class="section-title-block">
              <h2 class="section-title">Blog</h2>
              <h5 class="section-description">My Diary</h5>
            </div>
            <div class="blog-masonry">
              <!-- Blog Post 1 -->
              <div class="item">
                <div class="blog-card">
                  <div class="media-block">
                    <a href="blog-post-1.html">
                      <img class="post-image img-responsive" src="images/blog/blog_post_1.jpg" alt="blog-post-1">
                      <div class="mask"></div>
                      <div class="post-date"><span class="day">6</span><span
                          class="month">Dec</span><!--<span class="year">2016</span>--></div>
                    </a>
                  </div>
                  <div class="post-info">
                    <ul class="category">
                      <li><a href="#">Travel</a></li>
                    </ul>
                    <a href="blog-post-1.html">
                      <h4 class="blog-item-title">Bootstrap is the Most Popular Framework</h4>
                    </a>
                  </div>
                </div>
              </div>
              <!-- End of Blog Post 1 -->

              <!-- Blog Post 2 -->
              <div class="item">
                <div class="blog-card">
                  <div class="media-block">
                    <a href="blog-post-1.html">
                      <img class="post-image img-responsive" src="images/blog/blog_post_2.jpg" alt="blog-post-2">
                      <div class="mask"></div>
                      <div class="post-date"><span class="day">3</span><span
                          class="month">Nov</span><!--<span class="year">2016</span>--></div>
                    </a>
                  </div>
                  <div class="post-info">
                    <ul class="category">
                      <li><a href="#">jQuery</a></li>
                    </ul>
                    <a href="blog-post-1.html">
                      <h4 class="blog-item-title">One Framework, Every Device</h4>
                    </a>
                  </div>
                </div>
              </div>
              <!-- End of Blog Post 2 -->

              <!-- Blog Post 3 -->
              <div class="item">
                <div class="blog-card">
                  <div class="media-block">
                    <a href="blog-post-1.html">
                      <img class="post-image img-responsive" src="images/blog/blog_post_3.jpg" alt="blog-post-3">
                      <div class="mask"></div>
                      <div class="post-date"><span class="day">12</span><span
                          class="month">Oct</span><!--<span class="year">2016</span>--></div>
                    </a>
                  </div>
                  <div class="post-info">
                    <ul class="category">
                      <li><a href="#">Sport</a></li>
                    </ul>
                    <a href="blog-post-1.html">
                      <h4 class="blog-item-title">Designed for Everyone, Everywhere</h4>
                    </a>
                  </div>
                </div>
              </div>
              <!-- End of Blog Post 3 -->

              <!-- Blog Post 4 -->
              <div class="item">
                <div class="blog-card">
                  <div class="media-block">
                    <a href="blog-post-1.html">
                      <img class="post-image img-responsive" src="images/blog/blog_post_4.jpg" alt="blog-post-4">
                      <div class="mask"></div>
                      <div class="post-date"><span class="day">18</span><span
                          class="month">Aug</span><!--<span class="year">2016</span>--></div>
                    </a>
                  </div>
                  <div class="post-info">
                    <ul class="category">
                      <li><a href="#">CSS</a></li>
                    </ul>
                    <a href="blog-post-1.html">
                      <h4 class="blog-item-title">An Introduction To PostCSS</h4>
                    </a>
                  </div>
                </div>
              </div>
              <!-- End of Blog Post 4 -->

              <!-- Blog Post 5 -->
              <div class="item">
                <div class="blog-card">
                  <div class="media-block">
                    <a href="blog-post-1.html">
                      <img class="post-image img-responsive" src="images/blog/blog_post_5.jpg" alt="blog-post-5">
                      <div class="mask"></div>
                      <div class="post-date"><span class="day">2</span><span
                          class="month">Jul</span><!--<span class="year">2016</span>--></div>
                    </a>
                  </div>
                  <div class="post-info">
                    <ul class="category">
                      <li><a href="#">CSS3</a></li>
                    </ul>
                    <a href="blog-post-1.html">
                      <h4 class="blog-item-title">Original and Innovative Web Layouts</h4>
                    </a>
                  </div>
                </div>
              </div>
              <!-- End of Blog Post 5 -->

              <!-- Blog Post 6 -->
              <div class="item">
                <div class="blog-card">
                  <div class="media-block">
                    <a href="blog-post-1.html">
                      <img class="post-image img-responsive" src="images/blog/blog_post_6.jpg" alt="blog-post-6">
                      <div class="mask"></div>
                      <div class="post-date"><span class="day">8</span><span
                          class="month">May</span><!--<span class="year">2016</span>--></div>
                    </a>
                  </div>
                  <div class="post-info">
                    <ul class="category">
                      <li><a href="#">HTML5</a></li>
                    </ul>
                    <a href="blog-post-1.html">
                      <h4 class="blog-item-title">Creative and Innovative Navigation Designs</h4>
                    </a>
                  </div>
                </div>
              </div>
              <!-- End of Blog Post 6 -->

              <!-- Blog Post 7 -->
              <div class="item">
                <div class="blog-card">
                  <div class="media-block">
                    <a href="blog-post-1.html">
                      <img class="post-image img-responsive" src="images/blog/blog_post_7.jpg" alt="blog-post-7">
                      <div class="mask"></div>
                      <div class="post-date"><span class="day">7</span><span
                          class="month">Apr</span><!--<span class="year">2016</span>--></div>
                    </a>
                  </div>
                  <div class="post-info">
                    <ul class="category">
                      <li><a href="#">Design</a></li>
                    </ul>
                    <a href="blog-post-1.html">
                      <h4 class="blog-item-title">Navigation for Mega-Sites</h4>
                    </a>
                  </div>
                </div>
              </div>
              <!-- End of Blog Post 7 -->

              <!-- Blog Post 8 -->
              <div class="item">
                <div class="blog-card">
                  <div class="media-block">
                    <a href="blog-post-1.html">
                      <img class="post-image img-responsive" src="images/blog/blog_post_8.jpg" alt="blog-post-8">
                      <div class="mask"></div>
                      <div class="post-date"><span class="day">21</span><span
                          class="month">Mar</span><!--<span class="year">2016</span>--></div>
                    </a>
                  </div>
                  <div class="post-info">
                    <ul class="category">
                      <li><a href="#">CSS3</a></li>
                    </ul>
                    <a href="blog-post-1.html">
                      <h4 class="blog-item-title">Front-End Challenge Accepted: CSS 3D Cube</h4>
                    </a>
                  </div>
                </div>
              </div>
              <!-- End of Blog Post 8 -->
            </div>
          </section>
          <!-- End Blog Subpage -->

          <!-- Contact Subpage -->
          <section class="pt-page pt-page-5" data-id="contact">
            <div class="section-title-block">
              <h2 class="section-title">Contact</h2>
              <h5 class="section-description">Get in Touch</h5>
            </div>

            <div class="row">
              <div class="col-sm-6 col-md-6 subpage-block">
                <div class="block-title">
                  <h3>Get in Touch</h3>
                </div>
                <p>Ready to start your next project? Get in touch to discuss your ideas, requirements, or collaboration opportunities. I’m here to help build reliable and modern solutions.</p>
                <div class="contact-info-block">
                  <div class="ci-icon">
                    <i class="pe-7s-icon pe-7s-map-marker"></i>
                  </div>
                  <div class="ci-text">
                    <h5>Mayiladuthurai</h5>
                  </div>
                </div>
                <div class="contact-info-block">
                  <div class="ci-icon">
                    <i class="pe-7s-icon pe-7s-mail"></i>
                  </div>
                  <div class="ci-text">
                    <h5><a href="mailto:guruprasathmsc@gmail.com" style="text-decoration: none; color: #000;">guruprasathmsc@gmail.com</a></h5>
                  </div>
                </div>
                <!-- <div class="contact-info-block">
                  <div class="ci-icon">
                    <i class="pe-7s-icon pe-7s-call"></i>
                  </div>
                  <div class="ci-text">
                    <h5>+123 654 78900</h5>
                  </div>
                </div> -->
                <div class="contact-info-block">
                  <div class="ci-icon">
                    <i class="pe-7s-icon pe-7s-check"></i>
                  </div>
                  <div class="ci-text">
                    <h5>Freelance Available</h5>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-md-6 subpage-block">
                <div class="block-title">
                  <h3>Contact Form</h3>
                </div>
                <form id="contact-form" method="post" action="contact_form/contact_form.php">

                  <div class="messages"></div>

                  <div class="controls">
                    <div class="form-group">
                      <input id="form_name" type="text" name="name" class="form-control" placeholder="Full Name"
                        required="required" data-error="Name is required.">
                      <div class="form-control-border"></div>
                      <i class="form-control-icon fa fa-user"></i>
                      <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group">
                      <input id="form_email" type="email" name="email" class="form-control" placeholder="Email Address"
                        required="required" data-error="Valid email is required.">
                      <div class="form-control-border"></div>
                      <i class="form-control-icon fa fa-envelope"></i>
                      <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group">
                      <textarea id="form_message" name="message" class="form-control" placeholder="Message for me"
                        rows="4" required="required" data-error="Please, leave me a message."></textarea>
                      <div class="form-control-border"></div>
                      <i class="form-control-icon fa fa-comment"></i>
                      <div class="help-block with-errors"></div>
                    </div>

                    <div class="g-recaptcha" data-sitekey="6LdqmCAUAAAAAMMNEZvn6g4W5e0or2sZmAVpxVqI"
                      data-callback="correctCaptcha"></div>

                    <input type="submit" class="button btn-send" value="Send message">
                  </div>
                </form>
              </div>
            </div>
          </section>
          <!-- End Contact Subpage -->

        </div>
      </div>
      <!-- /Page changer wrapper -->
    </div>
    <!-- /Main Content -->
  </div>


  <script src="js/bootstrap.min.js"></script>
  <script src="js/page-transition.js"></script>
  <script src="js/imagesloaded.pkgd.min.js"></script>
  <script src="js/validator.js"></script>
  <script src="js/jquery.shuffle.min.js"></script>
  <script src="js/masonry.pkgd.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/jquery.hoverdir.js"></script>
  <script src="js/main.js"></script>


</body>

</html>