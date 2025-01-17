<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,300,400,700,900" rel="stylesheet">
        <link rel="stylesheet" href="css/icon-font.css">
        <link rel="stylesheet" href="css/style.css">   
        <link rel="stylesheet" href="css/fancybox.min.css">
        <link rel="stylesheet" href="css/swiper.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/odometer.min.css">
        <link rel="stylesheet" href="css/swiper.min.css">
        <link rel="stylesheet" href="css/flaticon.css">
        <title>Subscribe | Industen</title>
        <link rel="shortcut icon" type="image/png" href="img/favicon.png">
        <meta name="description" content="form send">
    </head>
    <body>
      <div class="preloader">
          <figure> <img src="img/loader.png" alt="Image"> </figure>
        </div>
      <div class="page-transition"></div>
      <aside class="side-widget">
          <div class="inner">
          <!-- Logo Menu Mobile -->
            <div class="logo"> <a href="index.html"><img src="img/logo.png" alt="Image"></a> </div>
            <div class="hide-mobile">
              <h6 class="widget-title">CONTACT INFO</h6>
              <address class="address">
              <p>+1 (234) 567 89 10<br>
                <a href="#">example@example.com</a></p>
              </address>
            </div>
            <div class="show-mobile">
              <div class="site-menu">
                  <ul class="menu">
                      <li><a href="index.html">Home</a></li>
                      <li><a href="about-us.html">About Us</a></li>
                      <li><a href="services.html">Services </a><span class="sb" style="font-size: 18px">+</span>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="steel-industry.html">Steel Industry</a></li>
                            <li><a class="dropdown-item" href="energy-industry.html">Energy Industry</a></li>
                            <li><a class="dropdown-item" href="logistics-industry.html">Logistics Industry</a></li>
                            <li><a class="dropdown-item" href="forest-products.html">Forest Products</a></li>
                            <li><a class="dropdown-item" href="fertilizer-industry.html">Fertilizer Industry</a></li>
                            <li><a class="dropdown-item" href="port-management.html">Port Management</a></li>
                            <li><a class="dropdown-item" href="chemical-industry.html">Chemical Industry</a></li>
                            <li><a class="dropdown-item" href="insurance.html">Insurance</a></li>
                            </ul>
                      </li>
                      <li><a href="projects.html">Projects</a></li>
                      <li><a href="faq.html">Faq</a></li>
                      <li><a href="blog.html">Blog</a></li>
                      <li><a href="contact-us.html">Contact</a></li>
                  </ul>
                </div>
            </div>
            <small>© 2022 - Industen</small> </div>
        </aside>
        <nav class="navbar">
          <div class="container">
          <!-- Logo Menu Desktop -->
            <div class="logo"> <a href="index.html"><img src="img/logo.png" alt="Image"></a> </div>
            <div class="site-menu">
                <div class="container">
                    <div class="row">
                      <div class="col-md-4">
                          <a href="#" class="iconrenk">
                              <i class="flaticon-headphones icontop"></i>
                              <img src="img/icon-s.png" class="ics" alt="">
                              <div class="idl">
                                  <strong>Customer Service</strong><br>+1 (234) 567 89 10
                              </div>
                          </a>
                      </div>
                      <div class="col-md-4">
                          <a href="#" class="iconrenk">
                              <i class="flaticon-trip icontop"></i>
                              <img src="img/icon-s.png" class="ics" alt="">
                              <div class="idl2">
                                  <strong>New Jersey</strong><br>06 Kamnr, Trenton
                              </div>
                          </a>
                      </div>
                      <div class="col-md-4">
                          <a href="#" class="iconrenk">
                              <i class="flaticon-email icontop1"></i>
                              <img src="img/icon-s.png" class="ics" alt="">
                              <div class="idl3">
                                  <strong>Support Mail</strong><br>example@example.com
                              </div>
                          </a>
                      </div>
                    </div>
                </div>
              <ul class="menueffect">
              <li><a href="index.html">Home</a></li>
              <li><a href="about-us.html">About Us</a></li>
              <li><a href="services.html">Services +</a>
                  <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="steel-industry.html">Steel Industry</a></li>
                      <li><a class="dropdown-item" href="energy-industry.html">Energy Industry</a></li>
                      <li><a class="dropdown-item" href="logistics-industry.html">Logistics Industry</a></li>
                      <li><a class="dropdown-item" href="forest-products.html">Forest Products</a></li>
                      <li><a class="dropdown-item" href="fertilizer-industry.html">Fertilizer Industry</a></li>
                      <li><a class="dropdown-item" href="port-management.html">Port Management</a></li>
                      <li><a class="dropdown-item" href="chemical-industry.html">Chemical Industry</a></li>
                      <li><a class="dropdown-item" href="insurance.html">Insurance</a></li>
                    </ul>
              </li>
              <li><a href="projects.html">Projects</a></li>
              <li><a href="faq.html">Frequently Questions</a></li>
              <li><a href="blog.html">Blog</a></li>
              <li><a href="contact-us.html">Contact</a></li>
              </ul>
            </div>
            <div class="hamburger-menu"> <span></span> <span></span> <span></span> </div>
            <div class="navbar-button"> <a href="#"><i class="flaticon-contract iconp"></i>&nbsp;&nbsp;&nbsp;Get A Quote</a> </div>
          </div>
        </nav>
      <header class="page-header wow fadeInUp" data-wow-delay="0.5s" data-background="img/page-header.jpg">
        <div class="container">
          <h2>
          <?php
            if(isset($_POST['email8'])) {
              $email = $_POST['email8'];
            
              if(empty($email)) {
                  echo 'Please do not leave blank';
              } else {
                  echo 'Congratulations, you are registered.';
              }
            } else {
              echo 'Please use the form';
            }
            ?>
          </h2>
          <p>Here you can return to the</p><br>
          <p><a href="index.html" class="custom-button"><strong>Home Page </strong></a> </p>
        </div>
        <!-- end container --> 
      </header>
        <main>
        </main>
            <!--Footer Alanı-->
            <footer class="footer">
              <div class="container">
                  <div class="row">
                    <div class="col-xl-3 col-lg-4">
                      <div class="logo wow fadeInUp" data-wow-delay="0.3s"> <img src="img/logo-footer.png" alt="Image"> </div>
                      <!-- end logo -->
                      <div class="footer-info wow fadeInUp" data-wow-delay="0.4s">
                          <p><i class="flaticon-call iconpfooter"></i>&nbsp;&nbsp;&nbsp;+123 456 789</p><br>
                          <div class="bosluk04"></div>
                          <p><i class="flaticon-email iconpfooter"></i>&nbsp;&nbsp;&nbsp;example@example.com</p><br>
                          <p><i class="flaticon-location iconpfooter"></i>New Jersey, America</p>
                      </div>
                      <!-- end footer-info -->
                      <ul class="footer-social wow fadeInUp" data-wow-delay="0.5s">
                          <li><a href="#"><img width="25" height="25" src="img/facebook.png" alt="Facebook"></a></li>
                          <li><a href="#"><img width="25" height="25" src="img/instagram2.png" alt="Instagram"></a></li>
                          <li><a href="#"><img width="25" height="25" src="img/twitter.png" alt="Twitter"></a></li>
                        </ul>
                    </div>
                    <!-- end col-3 -->
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                      <h6 class="widget-title">Request a CallBack</h6>
                      <p class="footerp">
                        Subscribe to be informed about our services and products.
                      </p>
                      <div class="row">
                        <form action="subscribe.php" class="form__grup" method="post">
                            <div class="col-sm">
                                <div class="form__grup wow fadeInLeft" data-wow-delay="0.7s">
                                    <input type="email" class="form-popup__input" placeholder="Your Email Address" id="email8" name="email8" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form__grup wow fadeInUp" data-wow-delay="0.9s">
                                    <button class="custom-button-form">Subscribe →</button>
                                </div>
                            </div>
                        </form>
                      </div> 
                        </div>
                    <!-- end col-4 -->
                    <div class="col-lg-2 offset-xl-1 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                      <h6 class="widget-title">Services</h6>
                      <ul class="footer-menu">
                          <li><a href="steel-industry.html">Steel Industry</a></li>
                          <li><a href="energy-industry.html">Energy Industry</a></li>
                          <li><a href="logistics-industry.html">Logistics Industry</a></li>
                          <li><a href="forest-products.html">Forest Products</a></li>
                      </ul>
                    </div>
                    <!-- end col-2 -->
                    <div class="col-lg-2 col-sm-6 wow fadeInUp" data-wow-delay="0.8s">
                      <h6 class="widget-title1">☼</h6>
                      <ul class="footer-menu">
                          <li><a href="fertilizer-industry.html">Fertilizer Industry</a></li>
                          <li><a href="port-management.html">Port Management</a></li>
                          <li><a href="chemical-industry.html">Chemical Industry</a></li>
                          <li><a href="insurance.html">Insurance</a></li>
                      </ul>
                    </div>
                    <!-- end col-2 -->
                  </div>
                  <!-- end row --> 
                </div>
                <div class="container">
                    <div class="row">
                          <div class="col-12 wow fadeInUp" data-wow-delay="0.9s">
                              <p class="copyright">© 2022 Industen - All Rights Reserved.</p>
                          </div>
                    </div>
                </div>
              <div id="top" style="cursor: pointer;">
                  <img width="50" height="50" src="img/go-top.png" alt=""/>
              </div>
              <script src="js/team.js"></script>
              <script src="js/jquery.min.js"></script> 
              <script src="js/bootstrap.min.js"></script> 
              <script src="js/fancybox.min.js"></script> 
              <script src="js/swiper.min.js"></script> 
              <script src="js/odometer.min.js"></script> 
              <script src="js/wow.min.js"></script> 
              <script src="js/scripts.js"></script>
              <script src="js/3d.jquery.js"></script>
              <script src="js/pointer.js"></script>
              <!--Cursor Script-->                    
              <script>
                  init_pointer({
                      
                  })
              </script>
          </footer>
  </body>
</html>