<nav class="navbar navbar-expand-lg navbar-dark my-bg">
  <a class="navbar-brand" href="index.php">Campus Management System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Explore
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="index.php#after-intro">Notices</a>
          <a class="dropdown-item" href="index.php#after-notice">Gallery</a>
          <a class="dropdown-item" href="index.php#after-gallery">Clubs and Cells</a>
          <a class="dropdown-item" href="index.php#after-clubs">Events and Fests</a>
          <a class="dropdown-item" href="index.php#after-fests">FAQs</a>
          <a class="dropdown-item" href="index.php#after-questions">College Map</a>

        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" <?php
          if (!isset($_SESSION['email'])) {
             ?> href="sign-in.php"<?php } else {
          ?> href="ask.php"
          <?php
          }
          ?>>Ask</a>
      </li>
      <li class="nav-item">
            <a class="nav-link" href="suggested_questions.php">Questions asked</a>
          </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact Us</a>
      </li>
    </ul>
    <?php
    if (!isset($_SESSION['email'])) {

    ?>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="admin_login.php"><i class="fas fa-lock icon"></i>Admin Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="sign-in.php">Sign In</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="sign-up.php">Sign Up</a>
        </li>
      </ul>
    <?php } else {
      include 'conn.php';
      $sql1 = "select * from users WHERE email='" . $_SESSION['email'] . "'";
      $rs_result1 = mysqli_query($con, $sql1);
      $roww = mysqli_fetch_assoc($rs_result1);
    ?><ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa icon fa-user-circle"></i><?php echo $roww['username']; ?>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="userprofile.php?id=<?php echo $roww["userid"]; ?>">View Profile</a>
            <a class="dropdown-item" href="logout.php">Logout</a>

          </div>
      </ul>
    <?php
    }
    ?>
  </div>
</nav>
