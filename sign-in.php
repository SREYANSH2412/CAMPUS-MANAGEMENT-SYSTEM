<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $email = $_POST['email'];
  $password = $_POST['password'];
  if ($email == '' || $password == '') {
    echo " <div class='alert alert-danger'>Enter username or password</div>";
  } else {
    session_start();
    include 'conn.php';
    $result = mysqli_query($con, "select * from users where email = '$email' and password='$password'");

    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_array($result);
      @session_start();
      $_SESSION['email'] = $email;
      echo "<script>location.href='index.php'</script>";
    } else {
      echo " <div class='alert alert-danger'>Your Email or Password is incorrect</div>";
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Welcome to Campus Cauldron!</title>
  <!-- SPACE FOR FONTS -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Montserrat:wght@800&family=Raleway:ital,wght@1,300&family=Roboto+Slab:wght@600&family=Ubuntu:ital,wght@1,300&display=swap" rel="stylesheet">
  <!-- FONT AWESOME LINKS -->
  <script src="https://kit.fontawesome.com/959552e028.js" crossorigin="anonymous"></script>

  <!-- STYLESHEETS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
</head>


<!-- FOR EVENTS AND FESTS -->
<style>
  .card .form-container button {
    background-color: #31326f;
    color: white;
    border: none;
    border-radius: 4px;
  }

  .card .form-container button:hover {
    background-color: #414292;
  }
</style>

<body style="background-image: url('images/img11.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;">
  <!-- NAVBAR -->
      <?php include 'include/navbar.php';
      ?>

  <br><br>
  <center>
    <section class="sign-in" style="width: 30rem;">
      <div class="card">
        <div class="card-body">
          <div class="form-container">
            <div class="row">

              <div class="col-lg-12 white-background">
                <h2 class="sign-up-head">Sign in to Campus Cauldron!</h2>
                <form name="loginf" action="#" onsubmit="return validation()" method="POST">
                  <div style="text-align:left" class="form-group">
                    <label>Email address</label>
                    <input type="email" name="email" class="form-control" placeholder="Email ID">
                  </div>
                  <div style="text-align:left" class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                  </div>

                  <button type="submit" name="submit" value="submit" class="btn btn-primary btn-block">Sign In</button>
                  <br>
                  <div style="text-align:left">Not registered yet! <a href="sign-up.php">Sign-Up</a></div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>


    </section>
  </center>
  <!-- FOOTER EXPERIMENT -->
  <br><br>
  <!-- Footer -->
  <?php include 'include/footer.php' ?>
  <script>
    function validation() {
      var em = document.loginf.email.value;
      var ps = document.loginf.password.value;
      if (em.length == "" && ps.length == "") {
        alert("User Name and Password fields are empty");
        return false;
      } else {
        if (em.length == "") {
          alert("User Name is empty");
          return false;
        }
        if (ps.length == "") {
          alert("Password field is empty");
          return false;
        }
      }
    }
  </script>
  <!-- SCRIPTS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
