<!doctype html>
<html lang="en">
  <head>
    <!===== Required meta tags =====>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!===== Bootstrap CSS =====>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!===== css Link =====>
    <link rel="stylesheet" type="text/css" href="css/register.css">

    <!===== Font Awesome =====>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!===== Stop Data Resubmission =====>
    <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
    </script>

    <title>Register Form</title>
  </head>
  <body>
  
  <!----- Register Form Section Start ----->
   <section class="register-form-section">
     <div class="container"> 
       <div class="row justify-content-center">
         <div class="col-md-6">
           <div class="register-form">
            <h2>WELCOME TO AHANA</h2>
             <form autocomplete="off" action="#" method="POST">
               <div class="row">
                 <div class="col-lg-6 col-md-12">
                   <input type="text" class="form-group" name="fname" placeholder="First name *" required>
                 </div>
                 <div class="col-lg-6 col-md-12">
                   <input type="text" class="form-group" name="lname" placeholder="Last name *" required>
                 </div>
               </div>
               <div class="row">
                 <div class="col-lg-6 col-md-12">
                   <input type="text" class="form-group" name="email" placeholder="Email address *" required>
                 </div>
                 <div class="col-lg-6 col-md-12">
                   <input type="text" class="form-group" name="phone" placeholder="Phone number *" required>
                 </div>
               </div>
               <div class="row">
                 <div class="col-lg-6 col-md-12">
                   <input type="text" class="form-group" name="birth" placeholder="Birth date *" required>
                 </div>
                 <div class="col-lg-6 col-md-12">
                   <input type="text" class="form-group" name="age" placeholder="Age *" required>
                 </div>
               </div>
               <hr>
               <div class="row">
                 <div class="col-md-6">
                  <select class="form-control" name="classes">
                    <option value="Ashtanga Yoga">Ashtanga Yoga</option>
                     <option value="Prenatal Yoga">Prenatal Yoga</option>
                     <option value="Hatha Yoga">Hatha Yoga</option>
                     <option value="Bhakti Yoga">Bhakti Yoga</option>
                     <option value="Power Yoga">Power Yoga</option>
                     <option value="Aerial Yoga">Aerial Yoga</option>
                     <option value="Bikram yoga">Bikram yoga</option>
                     <option value="Yin yoga">Yin yoga</option>
                  </select>
                 </div>
                 <div class="col-md-6">
                  <select class="form-control" name="category">
                     <option value="Begginer">Begginer</option>
                     <option value="Entermediate">Entermediate</option>
                     <option value="Advanced">Advanced</option>
                     <option value="Professional">Professional</option>
                  </select>
                 </div>
               </div>
               <hr>
               <div class="row">
                 <div class="col-md-12">
                   <label>Select Gender</label>
                   <br>
                   <input type="radio" id="male" value="Male" class="form-group" name="gender">
                   <label for="male" class="mr-2">Male</label>
                   <input type="radio" id="female" value="Female" class="form-group" name="gender">
                   <label for="female" class="mr-2">Female</label>
                   <input type="radio" id="other" value="Other" class="form-group" name="gender">
                   <label for="other" class="mr-2">Other</label>
                 </div>
                 <div class="col-md-12"><hr>
                  <div class="row">
                    <div class="col-lg-4">
                      <a href="index.php" class="btn back" role="button">BACK</a>  
                    </div>
                    <div class="col-lg-4">
                      <input type="reset" class="btn" name="" value="RESET">  
                    </div>
                    <div class="col-lg-4">
                      <input type="submit" class="btn" name="register" value="REGISTER"> 
                    </div>
                  </div>
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
    
   if (isset($_POST['register'])) 
   {
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $birth = $_POST['birth'];
      $age = $_POST['age'];
      $classes = $_POST['classes'];
      $category = $_POST['category'];
      $gender = $_POST['gender'];

      $insert = "INSERT INTO register (fname,lname,email,phone,birth,age,classes,category,gender) VALUES ('$fname','$lname','$email','$phone','$birth','$age','$classes','$category','$gender')";

      $result = mysqli_query($conn,$insert);

      if($result)
          {
              ?>
              <script>
               swal("Thank You", "Register successfully", "success");
              </script>
              <?php  
          }
          else
          {
              ?>
              <script>
               swal("Something Went Wrong", "Register fail!", "error");
              </script>
              <?php
          }
   } 

   ?>
  <!----- Register Form Section End ----->

  </body>
  </html>

    
    

    <!===== Optional JavaScript =====>
    <!===== jQuery first, then Popper.js, then Bootstrap JS =====>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>