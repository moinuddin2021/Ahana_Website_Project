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
    <link rel="stylesheet" type="text/css" href="css/contact.css?v=<?php echo time(); ?> ">

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
    <!----- Contact Sub-Header Start ----->
      <section class="contact-sub-header">
        <div class="container">
           <div class="row"> 
              <div class="col-lg-6 mx-auto">
                 <h1>Contact</h1>
                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
           </div>
        </div> 
      </section>   
    <!----- Contact Sub-Header End ----->
    <!----- Contact section Start ----->
     <section class="contact-section">
       <div class="container">
         <div class="row">
           <div class="col-lg-12">
             <div class="contact-map">
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30711243.17762776!2d64.4398422293091!3d20.011408266548177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30635ff06b92b791%3A0xd78c4fa1854213a6!2sIndia!5e0!3m2!1sen!2sin!4v1624114647917!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy">  
               </iframe>
             </div>
           </div>
         </div>
       </div>
     </section>
    <!----- Contact section End ----->
    <!----- Contact Second Section Start ----->
     <section class="contact-second-section">
       <div class="container">
         <div class="row">
           <div class="col-md-4">
             <div class="contact-second-section-text">
               <h5>Visit the Ahana Yoga</h5>
               <li>
                <i class="fas fa-map map"></i>143 Main Collins Street
               </li>
               <h5>Message Us</h5>
               <li>
                <i class="fas fa-map map"></i>(+91) 436 327 4463
               </li>
               <li>
                <i class="fas fa-map map"></i>ahana.yoga@gmail.com
               </li>
               <h5>Opening Hours</h5>
               <li>
                <i class="fas fa-map map"></i>Mon - Fri: 6:30am - 07:45pm
               </li>
               <li>
                <i class="fas fa-map map"></i>Sat - Sun: 8:30am - 05:45pm
               </li>
             </div>
             <div class="contact-second-section-social-icon">
                <i class="fab fa-facebook"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-twitter"></i>
                 <i class="fab fa-linkedin-in"></i>
             </div>
           </div>
           <div class="col-md-8">
            <div class="contact-form">
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
    <!----- Contact Second Section End ----->
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