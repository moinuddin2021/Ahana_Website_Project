<!DOCTYPE html>
<html lang="en">
  <head>
    <!===== Required meta tags =====>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!===== Bootstrap CSS =====>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!===== Google Font CSS =====>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">
    
    <!===== Font Awesome CSS =====>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!===== Style CSS =====>
    <link rel="stylesheet" type="text/css" href="css/style.css?v=<?php echo time(); ?> ">
    <link rel="stylesheet" type="text/css" href="css/responsive-style.css?v=<?php echo time(); ?> ">
    <link rel="stylesheet" type="text/css" href="css/about.css?v=<?php echo time(); ?> ">

    <!===== jquery CDN Link =====>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <!===== Externel JavaScript =====>
    <script type="text/javascript" src="js/main.js"></script>

    <!===== Fav Icon =====>
    <link rel="shortcut icon" type="image/x-icon" href="img/faviconImg/favicon.png"> 

    <!===== Stop Data Resubmission =====>
    <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
    </script>

    <!===== Sweet Alert CDN Link =====>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->

    <title>Ahana</title>
  </head>
  <body onload="loaderFunction()">
    
    <!----- Pre Loader Start ----->
       <div id="loading">
         
       </div>
       <script>
         var preloader = document.getElementById('loading');
         function loaderFunction(){
         preloader.style.display = 'none';
         }
      </script>
    <!----- Pre Loader End ----->
    <!----- Scroll Up Button Start ----->
        <button type="button" class="btn btn-floating btn-lg" id="btn-back-to-top">
            <i class="fas fa-angle-double-up text-white"></i>
        </button> 
        <script>
        let mybutton = document.getElementById("btn-back-to-top");

          window.onscroll = function () {
          scrollFunction();
          };

          function scrollFunction() {
          if (
          document.body.scrollTop > 20 ||
          document.documentElement.scrollTop > 20
          ) {
          mybutton.style.display = "block";
          } else {
          mybutton.style.display = "none";
           }
          }
          mybutton.addEventListener("click", backToTop);

          function backToTop() {
           document.body.scrollTop = 0;
           document.documentElement.scrollTop = 0;
           }
     </script>    
    <!----- Scroll Up Button End ----->
    <!----- Sub-Header Start ----->
       <div class="sub-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <ul class="left-info">
                            <li><a href="#"><i class="fas fa-map map"></i>143 Main Collins Street</a>
                            </li>
                            <li><a href="#"><i class="fas fa-phone phone"></i>(+91) 436 327 4463</a>
                            </li>
                            <li><a href="#"><i class="fas fa-clock clock"></i>Mon - Fri: 6:30am - 07:30pm</a></li>
                            <li><a href="#"><i class="fas fa-globe globe"></i>Language</a></li>
                        </ul>
                    </div>
                    <!-- <div class="col-md-12">
                        <ul class="right-info">
                           <li><a href="#"></a></li>
                           <li><a href="#"></a></li>
                           <li><a href="#"></a></li>
                        </ul>
                    </div> -->
                </div>
            </div>
        </div>
    <!----- Sub-Header End ----->           
    <!----- Header Start ----->
      <section class="header">
          <div class="container">
            <nav class="navbar navbar-expand-lg">
              <a class="navbar-brand" href="#">
                <span class="logo">
                  <img src="img/NavigationImg/navimg.webp">
                </span>
              </a>
       <button class="navbar-toggler menu-toggle" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <!-- <span class="navbar-toggler-icon"></span> -->
            <span></span>
            <span></span>
            <span></span>
       </button>

     <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
         <ul class="navbar-nav">
            <li class="nav-item">
               <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item dropdown">
               <a class="nav-link" href="classes.php">Classes</a>
               <!-- <a class="nav-link dropdown-toggle" href="classes.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Classes
               </a> -->
             <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <!-- <a class="dropdown-item" href="#">Our Classes</a> -->
                <!-- <a class="dropdown-item" href="#">Classes Details</a> -->
             </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="trainers.php">Trainers</a>
                <!-- <a class="nav-link dropdown-toggle" href="trainers.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Trainers
                </a> -->
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <!-- <a class="dropdown-item" href="#">Our Trainers</a> -->
                <!-- <a class="dropdown-item" href="#">Trainers Details</a> -->
            </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="events.php">Events</a>
                <!-- <a class="nav-link dropdown-toggle" href="events.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Events
                </a> -->
           <div class="dropdown-menu" aria-labelledby="navbarDropdown">
               <!-- <a class="dropdown-item" href="#">Our Events</a> -->
               <!-- <a class="dropdown-item" href="#">Events Details</a> -->
           </div>
           </li>
           <li class="nav-item dropdown">
                <a class="nav-link" href="blog.php">Blog</a>
                <!-- <a class="nav-link dropdown-toggle" href="blog.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Blog
                </a> -->
           <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <!-- <a class="dropdown-item" href="#">Our Blog</a> -->
              <!-- <a class="dropdown-item" href="#">Blog Details</a> -->
          </div>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
          </li>
          <li class="search-bar ipad-d-none toggle-overlay">
             <span class="d-none d-lg-block">
               <a href="javascript:void(0)"><i class="fas fa-search"></i></a>
             </span>
             <span class="d-lg-none">
               <a href="javascript:void(0)">Search</a>
             </span>
          </li>
         </ul>
       </div>
     </nav>
    </div>
   </section>
    <!----- Header End ----->
    <!----- Search bar Start ----->
       <div class="search-overlay">
          <div class="outer-class toggle-overlay">
             <a class="close"><span></span></a>
          </div>
          <form class="fullscreen-searchform" method="POST" action="#">
             <input class="search-box" name="s" placeholder="Search..." autocomplete="off">
             <i class="fas fa-search fullscreen-search-icon "></i>
          </form>
       </div>
    <!----- Search bar End ----->
    <!----- About Sub-Header Start ----->
      <section class="about-sub-header">
        <div class="container">
           <div class="row"> 
              <div class="col-lg-6 mx-auto">
                 <h1>About</h1>
                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
           </div>
        </div> 
      </section>   
    <!----- About Sub-Header End ----->
    <!----- About Service Section Start ----->
    <section class="about-service-section">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="about-service-img-box">
              <img class="img-fluid" src="img/publicImg/welcome-icon-1.webp">
            </div>
            <div class="about-service-text">
              <h2>Full Rejuvenation</h2>
              <p>Excepteur sint occaecat cupidatat non proident sunt</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="about-service-img-box">
              <img class="img-fluid" src="img/publicImg/welcome-icon-2.webp">
            </div>
            <div class="about-service-text">
              <h2>Extension of Spring</h2>
              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="about-service-img-box">
              <img class="img-fluid" src="img/publicImg/welcome-icon-3.webp">
            </div>
            <div class="about-service-text">
              <h2>Against Aging</h2>
              <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="about-service-img-box">
              <img class="img-fluid" src="img/publicImg/welcome-icon-4.webp">
            </div>
            <div class="about-service-text">
              <h2>Slim Body</h2>
              <p>Neque porro quisquam est, qui dolorem ipsum quia dolor</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!----- About Service Section End ----->
    <!----- About Wwd Section Start ----->
     <section class="about-wwd-section">
       <div class="container">
         <div class="row">
           <div class="col-lg-6">
             <div class="about-wwd-img">
               <img class="img-fluid" src="img/publicImg/about-wwd-img.png">
             </div>
           </div>
           <div class="col-lg-6">
             <div class="about-wwd-text">
               <h2>WHAT WE DO</h2>
               <p>To be invited to the nearest Cali center and get free physical advice to learn more about the program.</p>
             </div>
             <div class="about-wwd-progressbar">
               <h6>Breathing</h6>
               <div class="progress">
                   <div class="progress-bar" role="progressbar" style="width: 84%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">84%
                   </div>
               </div><br>
               <h6>Metabolism</h6>
               <div class="progress">
                   <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">75%
                   </div>
               </div><br>
               <h6>Flexibility</h6>
               <div class="progress">
                   <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">90%
                   </div>
               </div><br>
               <h6>Strongness</h6>
               <div class="progress">
                   <div class="progress-bar" role="progressbar" style="width: 78%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">78%
                   </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </section>
    <!----- About Wwd Section End ----->
    <!----- Our Yoga Trainer Start ----->
       <section class="our-yoga-trainer">
          <div class="main-div my-5">
              <img class="welcome-img img-fluid" src="img/publicImg/welcome-start-logo.webp">
              <h1>OUR YOGA TRAINER</h1>
              <p>Practice Yoga to perfect physical beauty, take care of your soul and enjoy life more fully!</p> 
           </div>
           <div class="container">
             <div class="row">
               <div class="col-md-12">
                 <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <div class="row">
                        <div class="col-md-6">
                           <div class="carousel-box">
                              <div class="row">
                                <div class="col-lg-4">
                                  <div class="carousel-img">
                                    <img src="img/publicImg/our-yoga-trainer-img1.webp">
                                  </div>
                                </div>
                                <div class="col-lg-8">
                                  <div class="carousel-text">
                                <h2>Aadhya Sharma</h2>
                                <h6>Yoga Trainer</h6>
                                <p>Yoga & Therepy Certificate Of Gujarat University Sunscrit</p>
                              </div>
                              <div class="carousel-social-icon">
                                <i class="fab fa-facebook"></i>
                                <i class="fab fa-instagram"></i>
                                <i class="fab fa-twitter"></i>
                                <i class="fab fa-linkedin-in"></i>
                              </div>
                                </div>
                              </div>    
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="carousel-box">
                              <div class="row">
                                <div class="col-lg-4">
                                  <div class="carousel-img">
                                    <img src="img/publicImg/our-yoga-trainer-img2.webp">
                                  </div>
                                </div>
                                <div class="col-lg-8">
                                  <div class="carousel-text">
                                <h2> Dhriti Aroda</h2>
                                <h6>Yoga Trainer</h6>
                                <p>Yoga & Therepy Certificate Of Gujarat University Sunscrit</p>
                              </div>
                              <div class="carousel-social-icon">
                                <i class="fab fa-facebook"></i>
                                <i class="fab fa-instagram"></i>
                                <i class="fab fa-twitter"></i>
                                <i class="fab fa-linkedin-in"></i>
                              </div>
                                </div>
                              </div>        
                           </div>
                        </div>
                      </div>
                    </div>
                    
                    <div class="carousel-item">
                      <div class="row">
                        <div class="col-md-6">
                           <div class="carousel-box">
                              <div class="row">
                                <div class="col-lg-4">
                                  <div class="carousel-img">
                                    <img src="img/publicImg/our-yoga-trainer-img3.webp">
                                  </div>
                                </div>
                                <div class="col-lg-8">
                                  <div class="carousel-text">
                                <h2>Ishani Bhatt</h2>
                                <h6>Yoga Trainer</h6>
                                <p>Yoga & Therepy Certificate Of Gujarat University Sunscrit</p>
                              </div>
                              <div class="carousel-social-icon">
                                <i class="fab fa-facebook"></i>
                                <i class="fab fa-instagram"></i>
                                <i class="fab fa-twitter"></i>
                                <i class="fab fa-linkedin-in"></i>
                              </div>
                                </div>
                              </div>        
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="carousel-box">
                              <div class="row">
                                <div class="col-lg-4">
                                  <div class="carousel-img">
                                    <img src="img/publicImg/our-yoga-trainer-img5.webp">
                                  </div>
                                </div>
                                <div class="col-lg-8">
                                  <div class="carousel-text">
                                <h2>Falak Pathan</h2>
                                <h6>Yoga Trainer</h6>
                                <p>Yoga & Therepy Certificate Of Gujarat University Sunscrit</p>
                              </div>
                              <div class="carousel-social-icon">
                                <i class="fab fa-facebook"></i>
                                <i class="fab fa-instagram"></i>
                                <i class="fab fa-twitter"></i>
                                <i class="fab fa-linkedin-in"></i>
                              </div>
                                </div>
                              </div>        
                           </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                   <i class="fas fa-arrow-left" aria-hidden="true"></i>
                  <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <i class="fas fa-arrow-right" aria-hidden="true"></i>
                  <span class="sr-only">Next</span>
                  </a>
                 </div>
               </div>
             </div>
           </div>
       </section>
    <!----- Our Yoga Trainer End ----->
    <!----- Our Founder Start ----->
       <section class="our-founder">
        <div class="container">
         <div class="row">
           <div class="col-md-8 col-center m-auto">
             <h2>Our Founder</h2>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
             <div class="carousel-inner">
               <div class="item carousel-item active">
               <div class="img-box">
                 <img src="img/publicImg/our-founder-img1.jpg" alt="">
               </div>
                 <p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
                 <p class="overview"><b>Ishaan Thakkar</b></p>
               </div>
               <div class="item carousel-item">
                 <div class="img-box">
                  <img src="img/publicImg/our-founder-img2.jpg" alt="">
                </div>
                 <p class="testimonial">Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget nisi a mi suscipit tincidunt. Utmtc tempus dictum risus. Pellentesque viverra sagittis quam at mattis. Suspendisse potenti. Aliquam sit amet gravida nibh, facilisis gravida odio.</p>
                 <p class="overview"><b>Jennifer Smith</b></p>
              </div>
              <div class="item carousel-item">
              <div class="img-box">
                <img src="img/publicImg/our-founder-img3.jpg" alt="">
              </div>
              <p class="testimonial">Phasellus vitae suscipit justo. Mauris pharetra feugiat ante id lacinia. Etiam faucibus mauris id tempor egestas. Duis luctus turpis at accumsan tincidunt. Phasellus risus risus, volutpat vel tellus ac, tincidunt fringilla massa. Etiam hendrerit dolor eget rutrum.</p>
              <p class="overview"><b>Jihan Patel</b></p>
              </div>
             </div>
          <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
            <i class="fas fa-arrow-left"></i>
          </a>
          <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
            <i class="fas fa-arrow-right"></i>
          </a>
           </div>
          </div>
         </div>
        </div>
       </section>
    <!----- Our Founder End ----->
    <!----- About Course Benefits Start ----->
     <section class="about-course-benefits">
       <div class="main-div my-5">
          <img class="welcome-img img-fluid" src="img/publicImg/welcome-start-logo.webp">
            <h1>COURSE BENEFITS</h1>
            <p>Practice Yoga to perfect physical beauty, take care of your soul and enjoy life more fully!</p>
        </div>
        <div class="container">
          <div class="row">
             <div class="col-lg-4 col-md-6">
                <div class="card">
                   <div class="about-course-img">
                     <img class="img-fluid" src="img/publicImg/about-course-benefit-img1.jpg">
                   </div>
                   <div class="about-course-text">
                     <h2>Yoga for Slim Physique</h2>
                     <p>Regular practice with breathing tech-niques in Yoga will help you get a toned body, this is the perfect choice</p>
                   </div><hr>
                   <div class="about-course-social-icon">
                      <div class="row">
                        <div class="col-lg-6 col-6">
                          <p><span class="dot"></span> Health & Beauty</p>
                        </div>
                        <div class="col-lg-6 col-6">
                          <a href="404_Error_Page.php"><i class="fab fa-facebook-f"></i></a>
                          <a href="404_Error_Page.php"><i class="fab fa-instagram"></i></a>
                          <a href="404_Error_Page.php"><i class="fab fa-twitter"></i></a>
                        </div>
                      </div>
                   </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card">
                   <div class="about-course-img">
                     <img class="img-fluid" src="img/publicImg/about-course-benefit-img2.jpg">
                   </div>
                   <div class="about-course-text">
                     <h2>The Perfect Dose</h2>
                     <p>To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain</p>
                   </div><hr>
                   <div class="about-course-social-icon">
                     <div class="row">
                        <div class="col-lg-6 col-6">
                          <p><span class="dot"></span> Health & Beauty</p>
                        </div>
                        <div class="col-lg-6 col-6">
                          <a href="404_Error_Page.php"><i class="fab fa-facebook-f"></i></a>
                          <a href="404_Error_Page.php"><i class="fab fa-instagram"></i></a>
                          <a href="404_Error_Page.php"><i class="fab fa-twitter"></i></a>
                        </div>
                      </div>
                   </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-6">
               <div class="card">
                   <div class="about-course-img">
                     <img class="img-fluid" src="img/publicImg/about-course-benefit-img3.jpg">
                   </div>
                   <div class="about-course-text">
                     <h2>Flexible Body</h2>
                     <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis prae-sentium voluptatum deleniti</p>
                   </div><hr>
                   <div class="about-course-social-icon">
                     <div class="row">
                        <div class="col-lg-6 col-6">
                          <p><span class="dot"></span> Health & Beauty</p>
                        </div>
                        <div class="col-lg-6 col-6">
                          <a href="404_Error_Page.php"><i class="fab fa-facebook-f"></i></a>
                          <a href="404_Error_Page.php"><i class="fab fa-instagram"></i></a>
                          <a href="404_Error_Page.php"><i class="fab fa-twitter"></i></a>
                        </div>
                      </div>
                   </div>
              </div>
            </div>
          </div>
        </div>
     </section>
    <!----- About Course Benefits End ----->
    <!----- Our Footer Start ----->
     <section class="our-footer">
       <footer>
         <div class="container">
           <div class="row">
             <div class="col-lg-3 col-md-6">
               <div class="footer-logo">
                 <img src="img/publicImg/footer-logo.webp">
               </div>
               <div class="footer-pera">
                 <p>Lorem ipsum dolor sit amet, consec-tetur adipiscing elit sed.</p>
               </div>
               <div class="contact">
                 <li>
                  <i class="fas fa-phone phone"></i>(+91) 436 327 4463
                 </li>
                 <li>
                  <i class="fas fa-envelope"></i>ahana.yoga@gmail.com
                 </li>
                 <li>
                  <i class="fas fa-map map"></i>143 Main Collins Street
                 </li>
               </div>
             </div>
             <div class="col-lg-3 col-md-6">
               <div class="company">
                 <h2>COMPANY</h2>
               </div>
               <div class="company-details">
                 <ul>
                   <li>
                    <a href="404_Error_Page.php">Online Education</a></li>
                   <li>
                    <a href="404_Error_Page.php">Gallery</a></li>
                   <li>
                    <a href="404_Error_Page.php">Special Issues</a> </li>
                   <li>
                    <a href="404_Error_Page.php">Privacy Policy</a> </li>
                   <li>
                    <a href="404_Error_Page.php">Contact Us</a>
                  </li>
                 </ul>
               </div>
             </div>
             <div class="col-lg-3 col-md-6">
               <div class="aboutus">
                 <h2>about us</h2>
               </div>
               <div class="aboutus-details">
                 <ul>
                   <li>
                    <a href="404_Error_Page.php">Our Vision</a>
                   </li>
                   <li>
                    <a href="404_Error_Page.php">Our Mission</a>
                   </li>
                   <li>
                    <a href="404_Error_Page.php">Meet The Team</a>
                   </li>
                   <li>
                    <a href="404_Error_Page.php">Introduce</a>
                   </li>
                   <li>
                    <a href="404_Error_Page.php">Customer Service</a>
                   </li>
                 </ul>
               </div>
             </div>
             <div class="col-lg-3 col-md-6">
               <div class="opentime">
                 <h2>Open time</h2>
               </div>
               <div class="opentime-details">
                 <ul>
                   <li>
                     <i class="fas fa-clock clock"></i>Mon - Fri: 6:30am - 07:45pm</li>
                     <li>
                     <i class="fas fa-clock clock"></i>Sat - Sun: 8:30am - 05:45pm</li>
                 </ul>
               </div>
             </div>
           </div>
           <hr>
           <div class="row">
             <div class="col-md-6">
               <div class="footer-social-icon">
                <a href="404_Error_Page.php">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a href="404_Error_Page.php">
                  <i class="fab fa-instagram"></i>
                </a>
                <a href="404_Error_Page.php">
                  <i class="fab fa-twitter"></i>
                </a>
                <a href="404_Error_Page.php">
                  <i class="fab fa-linkedin-in"></i>
                </a>
               </div>
             </div>
             <div class="col-md-6">
               <div class="copyright">
                 <h6>Copyright ©2025 All rights reserved | This website is made by moinuddin</h6>
               </div>
             </div>
           </div>
         </div>
       </footer>
     </section>
    <!----- Our Footer End ----->


    <!===== Optional JavaScript Start =====>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!===== Font Awesome JavaScript =====>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/fontawesome.min.js" integrity="sha512-KCwrxBJebca0PPOaHELfqGtqkUlFUCuqCnmtydvBSTnJrBirJ55hRG5xcP4R9Rdx9Fz9IF3Yw6Rx40uhuAHR8Q==" crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>
    <!===== Optional JavaScript End =====>
  </body>
</html>