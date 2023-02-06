<?php

include 'conn.php';
if (isset($_POST['username'])) {
  $username = $_POST['username'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  if (!empty($username) || !empty($email) || !empty($phone) || !empty($password)) {
    if (isset($_POST['password']) && $_POST['password'] !== $_POST['confirm_password']) {
      echo "<script type='text/javascript'>alert('The two passwords do not match'); window.location.href = 'sign-up.php';</script>";
    } else {
      $query = @mysqli_query($con, "SELECT * FROM users WHERE email='$email' LIMIT 1;");
      if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_assoc($query);
        if ($email == isset($row['email'])) {
          echo "<script type='text/javascript'>alert('Email already exists');</script>";
        }
      } else {
        $ins = mysqli_query($con, "insert into users(username,email,phone,password) values('$username','$email','$phone','$password')");
        if ($ins > 0) {
          @session_start();
          $_SESSION['email'] = $email;
          echo "<script type='text/javascript'>alert('You are successfully registered.'); window.location.href = 'index.php';</script>";
        } else {
          echo "An error in database query";
        }
      }
    }
  } else {
    echo "All fields are required";
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

    <?php
      include 'include/navbar.php';
      ?>

  <br><br>
  <center>
    <section class="sign-in" style="width: 30rem;">
      <div class="card">
        <div class="card-body">
          <div class="form-container">
            <div class="row">

              <div class="col-lg-12 white-background">
                <h2 class="sign-up-head">Sign Up to Campus Cauldron!</h2>
                <form action="#" method="POST">

                  <div style="text-align:left" class="form-group">
                    <label>Your Name</label>
                    <input type="text" id="username" name="username" class="form-control" placeholder="Name" required>
                  </div>
                  <div style="text-align:left" class="form-group">
                    <label>Phone</label>
                    <input type="digits" class="form-control" id="number" name="phone" placeholder="Mobile no.">
                  </div>
                  <div style="text-align:left" class="form-group">
                    <label>Email</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                  </div>
                  <div style="text-align:left" class="form-group">
                    <label>Password</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                  </div>
                  <div style="text-align:left" class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" id="password" name="confirm_password" class="form-control" placeholder="Confirm Password" required>
                  </div>
                  <div style="text-align:left">
                    <input type="checkbox" id="terms" name="terms" required>
                    <label for="checkbox">I agree to terms and Conditions</label>
                  </div>
                  <button type="submit" name="submit" class="btn btn-primary btn-block">SUBMIT</button>
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

  <!-- SCRIPTS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
