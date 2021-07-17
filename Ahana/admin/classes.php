<?php

  session_start();
    
  if(!isset($_SESSION['Login_status']))
  { 
            header('location:login.php');
            die();
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

    <!===== Font Awesome CSS =====>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!===== Stop Data Resubmission =====>
    <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
    </script>

    <!===== css link =====>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/classes.css">
    <title>admin index</title>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-light navbar-custome">
    <a class="navbar-brand text-white" href="index.php">AHANA</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item">
              <a class="nav-link" href="messages.php">Messages <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="register.php">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="slider.php">Slider</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="classes.php">Classes</a>
            </li>
          </ul>
        </div>
        <a href="logout.php" class="btn">LOGOUT</a>
  </nav>
  <!----- Classes Page Start ----->
  <section class="classes-page">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="classes-text">
            <h1>Classes</h1>
            <div class="classes-upload">
              <form action="#" method="POST" enctype="multipart/form-data">
                <input type="file" name="photo" class="form-group" required>
                <br><br>
                <input type="text" name="title" class="form-group" placeholder="Title" required>
                <br><br>
                <input type="submit" name="upload" class="btn form-group" value="UPLOAD">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php
   include'connection.php';

   if (isset($_POST['upload']))
   {
        $file = $_FILES['photo'];
        $title = $_POST['title'];
        //print_r($file); for check file details

        $filename = $file['name'];
        $filepath = $file ['tmp_name'];
        $fileerror = $file ['error'];

        if($fileerror == 0) 
        {
           $destfile = 'uploaded/'.$filename;
           move_uploaded_file($filepath,$destfile);

           $uploadquery = "INSERT INTO classes (photo,title) VALUES('$destfile','$title')";

           $query = mysqli_query($conn,$uploadquery);

           if ($query) 
           {
              // echo "Upload Successful";
           }else
           {
              echo "Upload Fail!";
           }

        }else
        {
             echo "fail";
        }

   }

  ?>
  <!----- Classes Page End ----->
  <!----- Classes Record Start ----->
   <section class="classes-page">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="classes-text">
            <h1>Record</h1>
            <table class="table">
              <thead>
                <th>Id</th>
                <th>PHOTO</th>
                <th>Title</th>
                <th>Operation</th>
              </thead>
              <tbody>
              <?php
               include'connection.php';

               $select = "SELECT * FROM classes";
               $query = mysqli_query($conn,$select);

               while($result = mysqli_fetch_array($query)) 
               {
                ?>
                  <tr>
                    <td><?php echo $result['id']; ?></td>
                    <td><img src="<?php echo $result['photo']; ?>" width="50px"></td>
                    <td><?php echo $result['title']; ?></td>
                    <td><a href="classesdelete.php?id=<?php echo $result['id'] ?>"><i class="fas fa-trash-alt" data-toggle="tooltip" data-placement="top" title="Delete"></i></a></td>
                  </tr> 
                <?php
               } 
              ?> 
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>  
  <!----- Classes Record End ----->
    <!===== Optional JavaScript =====>
    <!===== jQuery first, then Popper.js, then Bootstrap JS =====>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!===== Font Awesome JavaScript =====>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/fontawesome.min.js" integrity="sha512-KCwrxBJebca0PPOaHELfqGtqkUlFUCuqCnmtydvBSTnJrBirJ55hRG5xcP4R9Rdx9Fz9IF3Yw6Rx40uhuAHR8Q==" crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>
    <!===== Tool Tip Script =====>
    <script>
      $(function () {
      $('[data-toggle="tooltip"]').tooltip()
      })
    </script>  
  </body>
</html>