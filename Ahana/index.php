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
    <!----- Header Carousel Start ----->
    <?php
    include'connection.php';

     $select = "SELECT * FROM slider";
     $query = mysqli_query($conn,$select);
     
     $img;
     while($result= mysqli_fetch_array($query))
     {
        $img[]=$result['photo'];
     }
    
    ?>
       <section class="header-carousel">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
             <ol class="carousel-indicators">
               <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
         <div class="carousel-inner">
            <div class="carousel-item active">
               <img class="d-block img-fluid" src="/Ahana/admin/<?php echo $img[0]; ?>" alt="First slide">
            </div>
            <div class="carousel-item">
               <img class="d-block img-fluid" src="/Ahana/admin/<?php echo $img[1]; ?>" alt="Second slide">
            </div>
            <div class="carousel-item">
               <img class="d-block img-fluid" src="/Ahana/admin/<?php echo $img[2]; ?>" alt="Third slide">
            </div>
         </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
   </div>
  </section>
    <!----- Header Carousel End ----->
    <!----- Register Now Start ----->
        <section class="register-now my-5">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-lg-6 col-md-6 col-12 px-0">
                     <img src="img/publicImg/register_img.jfif" class="img-fluid register-img">
                  </div>
                  <div class="col-lg-6 col-md-6 col-12 px-0 text-content">
                     <h1 class="py-5">GET SLIM AND TONED WITH YOGA</h1>
                     <a href="register.php" class="btn">Register now</a>
                  </div>
               </div>
            </div>
        </section>
    <!----- Register Now End ----->
    <!----- Welcome To Ahana Start ----->
       <section class="welcome-to-ahana">
           <div class="main-div my-5">
              <img class="welcome-img img-fluid" src="img/publicImg/welcome-start-logo.webp">
              <h1>WELCOME TO AHANA</h1>
              <p>Practice Yoga to perfect physical beauty, take care of your soul and enjoy life more fully!</p> 
           </div>
           <div class="container-fluid">
             <div class="row">
               <div class="col-lg-6 col-md-6 col-12">
                 <img src="img/publicImg/welcome-img.webp" class="img-fluid">
               </div>
               <div class="col-lg-6 col-md-6 col-12">
                 <div class="first">
                      <img class="img-fluid" src="img/publicImg/welcome-icon-1.webp">
                    <h2>Full Rejuvenation</h2>
                    <p>This fitness God has given to actions, as he has given laws to Nature; and the fitness is as immutable as the laws.</p>
                 </div><br>
                 <div class="second">
                   <img class="img-fluid" src="img/publicImg/welcome-icon-2.webp">
                   <h2>Extension of Spring</h2>
                   <p>These are great skates for anyone who is serious about fitness on skates and loves to go fast.</p>
                 </div><br>
                 <div class="third">
                   <img class="img-fluid" src="img/publicImg/welcome-icon-3.webp">
                    <h2>Against Aging</h2>
                    <p> Physical fitness is having a healthy body.</p>
                 </div><br><br>
                 <div class="fourth">
                   <a href="404_Error_Page.php" class="btn">EXPLORE MORE</a>
                 </div>
               </div>
             </div>
           </div>
       </section>
    <!----- Welcome To Ahana End ----->
    <!----- Popular Classes Start ----->
      <section class="popular-classes">
           <div class="main-div my-5">
              <img class="welcome-img img-fluid" src="img/publicImg/welcome-start-logo.webp">
              <h1>POPULAR CLASSES</h1>
              <p>Practice Yoga to perfect physical beauty, take care of your soul and enjoy life more fully!</p> 
           </div>
           <div class="container">
             <div class="row">
               <div class="col-md-12">
                 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                     <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                     <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <div class="row">
                        <div class="col-md-4">
                          <div class="carousel-box">
                            <div class="popular-img">
                              <img class="img-fluid" src="img/publicImg/popular-classes-img1.jpg">
                            </div>
                            <div class="popular-text">
                              <h2><a href="#">Ashtanga Yoga</a></h2>
                              <a href="#"><i class="far fa-calendar-check"></i>Mon, Wed, Fri</a>
                              <a href="#"><i class="fas fa-clock clock"></i>06:00am - 08:00am</a>
                            <p>Many busy executives have begun to practice yoga and meditation.</p>
                            </div><hr>
                            <div class="popular-btn">
                              <a href="register.php" class="btn">BOOK NOW</a>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="carousel-box">
                            <div class="popular-img">
                              <img class="img-fluid" src="img/publicImg/popular-classes-img2.jfif">
                            </div>
                            <div class="popular-text">
                              <h2><a href="#">Bhakti Yoga</a></h2>
                              <a href="#"><i class="far fa-calendar-check"></i>Mon, Wed, Fri</a>
                              <a href="#"><i class="fas fa-clock clock"></i>06:00am - 08:00am</a>
                            <p>Many busy executives have begun to practice yoga and meditation.</p>
                            </div><hr>
                            <div class="popular-btn">
                              <a href="register.php" class="btn">BOOK NOW</a>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="carousel-box">
                            <div class="popular-img">
                              <img class="img-fluid" src="img/publicImg/popular-classes-img3.jpg">
                            </div>
                            <div class="popular-text">
                              <h2><a href="#">Power Yoga</a></h2>
                              <a href="#"><i class="far fa-calendar-check"></i>Mon, Wed, Fri</a>
                              <a href="#"><i class="fas fa-clock clock"></i>06:00am - 08:00am</a>
                            <p>Many busy executives have begun to practice yoga and meditation.</p>
                            </div><hr>
                            <div class="popular-btn">
                              <a href="register.php" class="btn">BOOK NOW</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="carousel-item ">
                      <div class="row">
                        <div class="col-md-4">
                          <div class="carousel-box">
                            <div class="popular-img">
                              <img class="img-fluid" src="img/publicImg/popular-classes-img4.jpg">
                            </div>
                            <div class="popular-text">
                              <h2><a href="#">Hatha Yoga</a></h2>
                              <a href="#"><i class="far fa-calendar-check"></i>Mon, Wed, Fri</a>
                              <a href="#"><i class="fas fa-clock clock"></i>06:00am - 08:00am</a>
                            <p>Many busy executives have begun to practice yoga and meditation.</p>
                            </div><hr>
                            <div class="popular-btn">
                              <a href="register.php" class="btn">BOOK NOW</a>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="carousel-box">
                            <div class="popular-img">
                              <img class="img-fluid" src="img/publicImg/popular-classes-img5.jpg">
                            </div>
                            <div class="popular-text">
                              <h2><a href="#">Prenatal Yoga</a></h2>
                              <a href="#"><i class="far fa-calendar-check"></i>Mon, Wed, Fri</a>
                              <a href="#"><i class="fas fa-clock clock"></i>06:00am - 08:00am</a>
                            <p>Many busy executives have begun to practice yoga and meditation.</p>
                            </div><hr>
                            <div class="popular-btn">
                              <a href="register.php" class="btn">BOOK NOW</a>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="carousel-box">
                            <div class="popular-img">
                              <img class="img-fluid" src="img/publicImg/popular-classes-img6.jpg">
                            </div>
                            <div class="popular-text">
                              <h2><a href="#">Aerial Yoga</a></h2>
                              <a href="#"><i class="far fa-calendar-check"></i>Mon, Wed, Fri</a>
                              <a href="#"><i class="fas fa-clock clock"></i>06:00am - 08:00am</a>
                            <p>Many busy executives have begun to practice yoga and meditation.</p>
                            </div><hr>
                            <div class="popular-btn">
                              <a href="register.php" class="btn">BOOK NOW</a>
                            </div>
                          </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                 </div>
               </div>
             </div>     
      </section>
    <!----- Popular Classes End ----->
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
    <!----- Upcoming Events Start ----->
     <section class="upcoming-events">
       <div class="main-div my-5">
          <img class="welcome-img img-fluid" src="img/publicImg/welcome-start-logo.webp">
            <h1>UPCOMING EVENTS</h1>
            <p>Practice Yoga to perfect physical beauty, take care of your soul and enjoy life more fully!</p> 
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div class="left-content">
                <div class="img-box">
                  <img class="img-fluid" src="img/publicImg/upcoming-events-img1.jpg">
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-content">
               <div class="col">
                 <div class="first-right-content">
                     <div class="row">
                     <div class="col-md-6">
                       <div class="right-img-box">
                         <img class="img-fluid" src="img/publicImg/upcoming-events-img2.jpg">
                       </div>
                     </div>
                     <div class="col-md-6">
                       <div class="right-content-text">
                         <h2>Ashtanga Yoga</h2>
                         <li><a href="#"><i class="fas fa-user"></i>Kelly Alexander</a></li>
                         <li><a href="#"><i class="far fa-calendar-check"></i>15 January, 2019</a></li>
                         <li><a href="#"><i class="fas fa-map map"></i>143 Main Collins Street</a></li>
                       </div>
                     </div>
                   </div>
                 </div>

                 <div class="second-right-content">
                   <div class="row">
                     <div class="col-md-6">
                       <div class="right-img-box">
                         <img class="img-fluid" src="img/publicImg/upcoming-events-img3.jpg">
                       </div>
                     </div>
                     <div class="col-md-6">
                       <div class="right-content-text">
                         <h2>Prenatal Yoga</h2>
                         <li><a href="#"><i class="fas fa-user"></i>Kelly Alexander</a></li>
                         <li><a href="#"><i class="far fa-calendar-check"></i>15 January, 2019</a></li>
                         <li><a href="#"><i class="fas fa-map map"></i>143 Main Collins Street</a></li>
                       </div>
                     </div>
                   </div>
                 </div>

                 <div class="third-right-content">
                   <div class="row">
                     <div class="col-md-6">
                       <div class="right-img-box">
                         <img class="img-fluid" src="img/publicImg/upcoming-events-img4.jpg">
                       </div>
                     </div>
                     <div class="col-md-6">
                       <div class="right-content-text">
                         <h2>Hatha Yoga</h2>
                         <li><a href="#"><i class="fas fa-user"></i>Kelly Alexander</a></li>
                         <li><a href="#"><i class="far fa-calendar-check"></i>15 January, 2019</a></li>
                         <li><a href="#"><i class="fas fa-map map"></i>143 Main Collins Street</a></li>
                       </div>
                     </div>
                   </div>
                 </div>

               </div>
             </div>
            </div>
          </div>
        </div>
     </section>
    <!----- Upcoming Events End ----->
    <!----- Pricing Plans Start ----->
     <section class="pricing-plans">
       <div class="main-div my-5">
          <img class="welcome-img img-fluid" src="img/publicImg/welcome-start-logo.webp">
            <h1>PRICING PLANS</h1>
            <p>Practice Yoga to perfect physical beauty, take care of your soul and enjoy life more fully!</p> 
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6">
              <div class="card">
                <h2>BEGGINER</h2>
                <div class="pricing mx-auto">
                  <h3>$199</h3>
                  <p>PER MONTH</p>
                </div>
                <div class="text-content"> 
                  <ul>
                    <li>Take Up To 7 Classes</li>
                    <li>Available To Anyone</li>
                    <li>Towels Included</li>
                    <li>Never Expires</li>
                  </ul>
                  <a href="register.php" class="btn">GET STARTED</a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="card">
                <h2>ENTERMEDIATE</h2>
                <div class="pricing mx-auto">
                  <h3>$299</h3>
                  <p>PER MONTH</p>
                </div>
                <div class="text-content"> 
                  <ul>
                    <li>Take Up To 7 Classes</li>
                    <li>Available To Anyone</li>
                    <li>Towels Included</li>
                    <li>Never Expires</li>
                  </ul>
                  <a href="register.php" class="btn">GET STARTED</a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="card">
                <h2>ADVANCED</h2>
                <div class="pricing mx-auto">
                  <h3>$399</h3>
                  <p>PER MONTH</p>
                </div>
                <div class="text-content"> 
                  <ul>
                    <li>Take Up To 7 Classes</li>
                    <li>Available To Anyone</li>
                    <li>Towels Included</li>
                    <li>Never Expires</li>
                  </ul>
                  <a href="register.php" class="btn">GET STARTED</a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="card">
                <h2>PROFESSIONAL</h2>
                <div class="pricing mx-auto">
                  <h3>$499</h3>
                  <p>PER MONTH</p>
                </div>
                <div class="text-content"> 
                  <ul>
                    <li>Take Up To 7 Classes</li>
                    <li>Available To Anyone</li>
                    <li>Towels Included</li>
                    <li>Never Expires</li>
                  </ul>
                  <a href="register.php" class="btn">GET STARTED</a>
                </div>
              </div>
            </div>
          </div>
        </div>
     </section>
    <!----- Pricing Plans End ----->
    <!----- Our Location Start ----->
     <section class="our-location">
       <div class="container">
         <div class="row">
         <div class="col-md-6">
           <div class="map">
             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30711243.17762776!2d64.4398422293091!3d20.011408266548177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30635ff06b92b791%3A0xd78c4fa1854213a6!2sIndia!5e0!3m2!1sen!2sin!4v1624114647917!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
           </div>
         </div>
         <div class="col-md-6">
           <div class="text-content">
             <h2>Send Message For Our Advice</h2>
             <p>To be invited to the nearest Cali center and get free physical advice to learn more about the program.</p>
           </div>
           <div class="form">
             <form class="#" action="#" method="POST" autocomplete="off">
              <div class="row">
                <div class="col-md-6">
                   <input class="form-group" type="text" name="fname" placeholder="First Name" required>
                 </div>
                 <div class="col-md-6">
                   <input class="form-group" type="text" name="lname" placeholder="Last Name" required>
                 </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                   <input class="form-group" type="text" name="email" placeholder="Your Email" required>
                 </div>
                 <div class="col-md-6">
                   <input class="form-group" type="text" name="phone" placeholder="Phone Number" required>
                 </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <input class="textarea " type="text" name="message" placeholder="Message" required>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <input class="btn" type="submit" name="sendmessage" value="SEND MESSAGE">
                </div>
              </div>
             </form>
           </div>
         </div>
       </div>
       </div>
     </section>
     <?php
      include'connection.php';

      if (isset($_POST['sendmessage'])) 
      {
          $fname = $_POST['fname'];
          $lname = $_POST['lname'];
          $email = $_POST['email'];
          $phone = $_POST['phone'];
          $message = $_POST['message'];

          $insert ="INSERT INTO sendmessage (fname,lname,email,phone,message) VALUES ('$fname','$lname','$email','$phone','$message') ";

          $result= mysqli_query($conn,$insert);

          if($result)
          {
              ?>
              <script>
               swal("Thank You", "Your message sent successfully", "success");
              </script>
              <?php  
          }
          else
          {
              ?>
              <script>
               swal("Something Went Wrong", "Your message not sending", "error");
              </script>
              <?php
          }
      }
     ?>
    <!----- Our Location End ----->
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