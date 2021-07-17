<?php

include'connection.php';

session_start();

?>
<?php

if (isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password']; 
      
    $query = "SELECT * FROM login WHERE username = '$username' AND password = '$password'";
      
    $result = mysqli_query($conn,$query);
    print_r($result);
      
    if(mysqli_num_rows($result))
    {
        $_SESSION['Login_status']=true;
        header('location:index.php');         
    }
    else
    {
        ?>
        <script>
        swal("Login Fail!", "Username or Password not match", "error");
        </script>
        <?php  
    }

}

?>


<!doctype html>
<html lang="en">
  <head>
    <!===== Required meta tags =====>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!===== Bootstrap CSS =====>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!===== Font Awesome css =====>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 

    <!===== css Link =====>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    
    <!===== Sweet Alert CDN Link =====>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->

    <!===== Stop Data Resubmission =====>
    <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
    </script>
    <title>Admin Login</title>
  </head>
  <body>
  <!----- Login Section Start ----->
   <section class="login-section">
     <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-2"></div>
            <div class="col-lg-6 col-md-8 login-box">
                <div class="col-lg-12 login-key">
                    <i class="fa fa-key" aria-hidden="true"></i>
                </div>
                <div class="col-lg-12 login-title">
                    ADMIN PANEL
                </div>

                <div class="col-lg-12 login-form">
                    <div class="col-lg-12 login-form">
                        <form autocomplete="off" method="POST">
                            <div class="form-group">
                                <label class="form-control-label">USERNAME</label>
                                <input type="text" class="form-control" name="username" required>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">PASSWORD</label>
                                <input type="password" class="form-control" name="password" required>
                            </div>

                            <div class="col-lg-12 loginbttm">
                                <div class="col-lg-6 login-btm login-text">
                                    <!-- Error Message -->
                                </div>
                                <div class="col-lg-6 login-btm login-button">
                                    <button type="submit" name="login" class="btn btn-outline">LOGIN</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-2"></div>
            </div>
        </div>
   </section>
  <!----- Login Section End ----->
  
    





    <!===== Optional JavaScript =====>
    <!===== jQuery first, then Popper.js, then Bootstrap JS =====>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>