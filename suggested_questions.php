<?php
@session_start();
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
  <div class="container">
    
  <section class="sug_ques">
      <div class="container-fluid">
        <?php
        include 'conn.php';
        if (isset($_GET["page"])) {
          $page = $_GET["page"];
        } else {
          $page = 1;
        };
        $start_from = ($page - 1) * 20;
        $sql = "select * from q_and_a WHERE ques_answered<>1 && ques_approved<>0 ORDER BY id DESC LIMIT $start_from, 20 ";
        $rs_result = mysqli_query($con, $sql);
        ?>

        <table class="table" style="color: white">
          <thead>
            <tr>
              <th width="20%">Questions for You!</th>
              <th colspan=2 width="18%">Want to Answer!</th>
            </tr>
          </thead>

          <?php
          while ($row = mysqli_fetch_assoc($rs_result)) {
          ?>

            <tbody>
              <tr>
                <td> <?php echo $row["question"]; ?> </td>
                <td><a class="btn btn-outline-light" href='answer_it.php?key1=<?php echo $row["id"]; ?>'>Answer it</a>
                </td>
              </tr>
            </tbody>

          <?php
          };
          ?>
        </table>
        <strong>Pages </strong> 

  </div>

        <!-- STOP WORK HERE -->



      </div>
      <!-- /.container-fluid -->

    </section>
  </center>


  <!-- FOOTER EXPERIMENT -->
  <br><br>
  <!-- Footer -->
  <section id="footer" class="space">
    <footer class="page-footer font-small mdb-color pt-4">

      <!-- Footer Links -->
      <div class="container text-center text-md-left">

        <!-- Footer links -->
        <div class="row text-center text-md-left mt-3 pb-3">

          <!-- Grid column -->
          <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Campus Cauldron</h6>
            <p>We hope you enjoyed your visit to our homepage!</p>
          </div>
          <!-- Grid column -->

          <hr class="w-100 clearfix d-md-none">

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Links</h6>
            <p>
              <a class="footer-link" href="index.php#after-intro">Notice</a>
            </p>
            <p>
              <a class="footer-link" href="index.php#after-questions">Gallery</a>
            </p>
            <p>
              <a class="footer-link" href="index.php#after-gallery">Clubs and Cells</a>
            </p>
            <p>
              <a class="footer-link" href="index.php#after-clubs">Events and Fests</a>
            </p>
          </div>
          <!-- Grid column -->

          <hr class="w-100 clearfix d-md-none">

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Contact us</h6>
            <p>
              <a class="footer-link" href="#!"><i class="fab fa-facebook-square mr-3"></i>Facebook</a>
            </p>
            <p>
              <a class="footer-link" href="#!"><i class="fab fa-linkedin mr-3"></i>LinkedIn</a>
            </p>
            <p>
              <a class="footer-link" href="#!"><i class="fab fa-twitter-square mr-3"></i>Twitter</a>
            </p>
            <p>
              <a class="footer-link" href="#!"><i class="fas fa-envelope mr-3"></i>E-mail</a>
            </p>
          </div>

          <!-- Grid column -->
          <hr class="w-100 clearfix d-md-none">

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Legal</h6>
            <p>
              <a class="footer-link" href="#!">Privacy Policy</a>
            </p>
            <p>
              <a class="footer-link" href="#!">Cookie Policy</a>
            </p>
            <p>
              <a class="footer-link" href="#!">Terms Of Us</a>
            </p>
          </div>
          <!-- Grid column -->

        </div>
        <!-- Footer links -->

        <hr>


        <!-- Grid row -->

      </div>
      <!-- Footer Links -->

    </footer>
    <!-- Footer -->
  </section>

  <!-- SCRIPTS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html> 
