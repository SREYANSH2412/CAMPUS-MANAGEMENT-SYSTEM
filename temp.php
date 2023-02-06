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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/959552e028.js" crossorigin="anonymous"></script>
  <!-- STYLESHEETS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
</head>

<!-- FOR EVENTS AND FESTS -->
<style>
  #test {
    margin-top: 3rem;
    height: 665px;
    overflow: auto;
    text-align: justify;
    border: 3px solid black;
    padding: 10px;
  }

  @media (min-width: 768px) {

    .carousel-inner .active,
    .carousel-inner .active+.carousel-item,
    .carousel-inner .active+.carousel-item+.carousel-item {
      display: block;
    }

    .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left),
    .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left)+.carousel-item,
    .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left)+.carousel-item+.carousel-item {
      transition: none;
      margin-right: initial;
    }

    .carousel-inner .carousel-item-next,
    .carousel-inner .carousel-item-prev {
      position: relative;
      transform: translate3d(0, 0, 0);
    }

    .carousel-inner .active.carousel-item+.carousel-item+.carousel-item+.carousel-item {
      position: absolute;
      top: 0;
      right: -33.3333%;
      z-index: -1;
      display: block;
      visibility: visible;
    }

    .active.carousel-item-left+.carousel-item-next.carousel-item-left,
    .carousel-item-next.carousel-item-left+.carousel-item,
    .carousel-item-next.carousel-item-left+.carousel-item+.carousel-item,
    .carousel-item-next.carousel-item-left+.carousel-item+.carousel-item+.carousel-item {
      position: relative;
      transform: translate3d(-100%, 0, 0);
      visibility: visible;
    }

    .carousel-inner .carousel-item-prev.carousel-item-right {
      position: absolute;
      top: 0;
      left: 0;
      z-index: -1;
      display: block;
      visibility: visible;
    }

    .active.carousel-item-right+.carousel-item-prev.carousel-item-right,
    .carousel-item-prev.carousel-item-right+.carousel-item,
    .carousel-item-prev.carousel-item-right+.carousel-item+.carousel-item,
    .carousel-item-prev.carousel-item-right+.carousel-item+.carousel-item+.carousel-item {
      position: relative;
      transform: translate3d(100%, 0, 0);
      visibility: visible;
      display: block;
      visibility: visible;
    }

    .my-img:hover {
      -ms-transform: scale(1.2);
      /* IE 9 */
      -webkit-transform: scale(1.2);
      /* Safari 3-8 */
      transform: scale(1.2);
    }

  }
</style>

<body>
  <!-- NAVBAR -->
  <?php include 'include/navbar.php' ?>

  <!-- INTRODUCTION -->
  <section id="introduction" class="introduction">
    <div class="intro-container">
      <div class="row">
        <div class="col-lg-6">
          <h1 id="intro-head">Its always nice to have someone to answer your questions.</h1>
          <h4 id="intro-text">Campus Cauldron gives you just that!</h4>
        </div>
        <div class="col-lg-6">
          <img id="intro-img" src="images/intro_img.jpg" alt="">
        </div>
      </div>
    </div>
  </section>
  <hr id="after-intro" class="section-diff" style="width:70%">

  <!-- NOTICES AND LINKS -->
  <section id="Notices-and-Links">
    <div>
      <div class="row">
        <div class="col-lg-3">
          <div class="notice-panel">
            <h3 class="notice-head"><i class="icon far fa-calendar-alt"></i>Notices</h3>
            <marquee height="510" direction="up" scrollamount="3">
              <?php
              include 'conn.php';
              $sql = "select * from notice ORDER BY notice_id DESC";
              $rs_result = mysqli_query($con, $sql);
              ?>
              <?php
              while ($row = mysqli_fetch_assoc($rs_result)) {
              ?>
                <p><a class="notice-link" href="npdf/<?php echo $row["npdf"];?>">
                    <strong style="font-family: 'Montserrat', sans-serif; font-size:20px;"><?php echo $row["title"]; ?></strong>
                    <br>
                    <em>Date: <?php echo $row["date"]; ?></em>
                    <hr>
                  </a></p>
              <?php
              };
              ?>
            </marquee>
          </div>
        </div>
        <div class="col-lg-6">
          <div id="test">
            <?php
            include 'conn.php';
            $sql = "select * from q_and_a ORDER BY id DESC";
            $rs_result = mysqli_query($con, $sql);
            ?>
            <?php
            while ($row = mysqli_fetch_assoc($rs_result)) {
            ?>
              <h5 id="list-item-1"><?php echo $row["question"]; ?></h5>
              <p><?php echo $row["answer"] ?>
                <br> Posted by <b><?php echo $row["ans_by"] ?></b></p>
              <hr>
            <?php
            };
            ?>
          </div>
        </div>
        <div class="col-lg-3">
          <a class="my-links" href="#after-notice">
            <h3 class="links-head"><i class="icon far fa-image"></i>Gallery</h3>
          </a>
          <a class="my-links" href="#after-gallery">
            <h3 class="links-head"><i class="icon fas fa-drafting-compass"></i>Clubs and Cells</h3>
          </a>
          <a class="my-links" href="#after-clubs">
            <h3 class="links-head"><i class="icon far fa-calendar-times"></i>Events and Fests</h3>
          </a>
          <a class="my-links" href="#after-fests">
            <h3 class="links-head"><i class="icon fas fa-question"></i>FAQs</h3>
          </a>
          <a class="my-links" href="#after-questions">
            <h3 class="links-head"><i class="icon fas fa-map-marked-alt"></i>College Map</h3>
          </a>

        </div>
      </div>
    </div>
  </section>
  <hr id="after-notice" class="section-diff" style="width:70%">

  <!-- GALLERY -->
  <section id="gallery">
    <h1 class="gallery-head">Caught Within The Frames</h1>

    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <img class="gallery-images" src="images/img1.jpg" alt="">
          <br>
          <img class="gallery-images" src="images/img2.jpg" alt="">
          <br>
          <img class="gallery-images" src="images/img3.jpeg" alt="">
        </div>
        <div class="col-lg-4">
          <img class="gallery-images" src="images/img4.jpeg" alt="">
          <br>
          <img class="gallery-images" src="images/img5.jpg" alt="">
          <br>
          <img class="gallery-images" src="images/img10.jpg" alt="">
          <br>
          <img class="gallery-images" src="images/img6.jpeg" alt="">
        </div>
        <div class="col-lg-4">
          <img class="gallery-images" src="images/img7.jpeg" alt="">
          <br>
          <img class="gallery-images" src="images/img8.jpeg" alt="">
          <br>
          <img class="gallery-images" src="images/img11.jpg" alt="">
          <br>
        </div>
      </div>
      <div id="gallery-btn">
        <a id="gallery-link" href="#">
          <h5 class="intro-link-head">View All</h5>
        </a>
      </div>
    </div>
  </section>
  <hr id="after-gallery" class="section-diff" style="width:70%">

  <!-- CLUBS AND COUNCILS -->
  <section id="clubs-and-councils">
    <h1 class="clubs-head">Clubs and Councils</h1>
    <div class="container">
      <div class="row">
        <?php
        include 'conn.php';
        $sql = "select * from club ORDER BY club_id DESC LIMIT 6";
        $rs_result = mysqli_query($con, $sql);
        ?>
        <?php
        while ($row = mysqli_fetch_assoc($rs_result)) {
        ?>
          <div class="col-lg-4">

            <a class="div-link" href="#">
              <div class="my-card">
                <img href="#" src="club_logo/<?php print $row["club_logo"]; ?>" alt="Avatar" style="width:100%">
                <div class="container">
                  <h4><b><?php print $row["club_name"]; ?></b></h4>
                  <p><?php echo $row["club_info"]; ?></p>
                </div>
              </div>
            </a>

          </div>
        <?php
        };
        ?>
      </div>
    </div>
  </section>
  <hr id="after-clubs" class="section-diff" style="width:70%">

  <!-- EVENTS AND FESTS -->
  <section id="events-and-fests">
    <h1 class="events-head">Events And Fests</h1>
    <div class="container-fluid">
      <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="9000">
        <div class="carousel-inner row w-10 mxauto" role="listbox">
          <?php
          include 'conn.php';
          $sql = "select * from event ORDER BY event_id DESC";
          $rs_result = mysqli_query($con, $sql);
          ?>
          <div class="carousel-item col-md-4 active">
            <img class="my-img img-fluid mx-auto d-bloc" src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__340.jpg" alt="slide">
            <div class="carousel-caption d-none d-md-block">
              <h5>Magnum Opus</h5>
              <p>A Magnificent Event For Magnificent Personas!</p>
            </div>
          </div>
          <?php
          while ($row = mysqli_fetch_assoc($rs_result)) {
          ?>
            <div class="carousel-item col-md-4">
              <img class="my-img img-fluid mx-auto d-block" src="event_img/<?php print $row["event_img"] ?>" alt="slides">
              <div class="carousel-caption d-none d-md-block">
                <h5><?php echo $row["event_name"] ?></h5>
                <p><?php echo $row["council_name"] ?></p>
              </div>
            </div>
          <?php
          };
          ?>
        </div>
        <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
          <i class="fa fa-chevron-left fa-lg text-muted"></i>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next">
          <i class="fa fa-chevron-right fa-lg text-muted"></i>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </section>
  <hr id="after-fests" class="section-diff" style="width:70%">

  <!-- QUESTIONS -->

  <section style="text-align:center;">
    <h1 class="events-head">FAQs</h1>
    <div class="container">
      <?php
      include 'conn.php';
      $sql = "select * from faq ORDER BY faq_id DESC";
      $rs_result = mysqli_query($con, $sql);
      ?>
      <div class="accordion "  id="accordionExample">

        <?php
        $n=1;
        while ($row = mysqli_fetch_assoc($rs_result)) {
        ?>
          <div class="card">
            <div style="background-color: #31326f;" class=" card-header" id="heading1">
              <h1 class="question mb-0">
                <button style="color:white;" class="btn nav-link" type="button" data-toggle="collapse" data-target="#collapse<?php echo $n;?>" aria-expanded="true" aria-controls="collapse<?php echo $n;?>">
                  <h2><?php echo $row["question"]; ?></h2>
                </button>
              </h1>
            </div>
            <div id="collapse<?php echo $n;?>" class="collapse" aria-labelledby="heading1" data-parent="#accordionExample">
              <div style="color: black; background-color:white; text-align:left;" class="card-body collapse-item">
                <h4 class="answer"><?php echo $row["answer"]; ?></h4>
              </div>
            </div>
          </div>
        <?php
        $n=$n+1;
        };
        ?>

      </div>
    </div>
  </section>
  <hr id="after-questions" class="section-diff" style="width:70%">

  <!-- COLLEGE MAP -->
  <section id="map">
    <div class="container">
      <h1 class="map-head">Feeling Lost in the magnificence of the campus?</h1>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3602.3755268252967!2d78.63823101550054!3d25.459133183775105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39777701fa29d96b%3A0x274c37abc80c1ad1!2sBundelkhand%20Institute%20Of%20Engineering%20and%20Technology!5e0!3m2!1sen!2sin!4v1606041154250!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
  </section>
  <hr id="after-map" class="section-diff" style="width:70%">

  <!-- Footer -->
  <?php include 'include/footer.php' ?>

  <!-- FOR EVENTS AND FESTS -->
  <script type="text/javascript">
    $('#carouselExample').on('slide.bs.carousel', function(e) {

      var $e = $(e.relatedTarget);

      var idx = $e.index();
      console.log("IDX :  " + idx);

      var itemsPerSlide = 6;
      var totalItems = $('.carousel-item').length;

      if (idx >= totalItems - (itemsPerSlide - 1)) {
        var it = itemsPerSlide - (totalItems - idx);
        for (var i = 0; i < it; i++) {
          // append slides to end
          if (e.direction == "left") {
            $('.carousel-item').eq(i).appendTo('.carousel-inner');
          } else {
            $('.carousel-item').eq(0).appendTo('.carousel-inner');
          }
        }
      }
    });
  </script>

  <!-- SCRIPTS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
