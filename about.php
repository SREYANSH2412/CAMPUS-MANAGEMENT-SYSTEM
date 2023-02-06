<?php
@session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>About Campus Management System</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Montserrat:wght@800&family=Raleway:ital,wght@1,300&family=Roboto+Slab:wght@600&family=Ubuntu:ital,wght@1,300&display=swap" rel="stylesheet">
<!-- FONT AWESOME LINKS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/959552e028.js" crossorigin="anonymous"></script>
<!-- STYLESHEETS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
  background-image: url('images/about_bg.jpeg');
  background-size: cover;
  background-repeat: no repeat;
}


html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
  display: flex;
  flex-direction: column;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.card .container {
  padding: 2px 14px;
  flex: 1;
  display: flex;
  flex-direction: column;
}

.about-section {
  padding: 50px;
  text-align: center;



}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}
.name{
  padding-top:10px;
  font-family: 'Montserrat', sans-serif;
}
.desc{
  font-family: 'Ubuntu', sans-serif;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
<link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <?php include 'include/navbar.php' ?>

<div class="about-section">
  <h1 id="intro-head" style="padding-top:50px; padding-bottom:130px;">About </h1>
  <h5 id="intro-text">The mission is to share precise amount of information that would be benificial to many students throughout their Campus life!!
  <br> I want to connect the students who have knowledge to those who need it.</h5>
  <h5 id="intro-text">Club's motto is to bring together bnmitians at a same platform so as to ask, answer and get information.
  <br> Their regular visit on our website will be most valued.</h5>
</div>

<h2 style="text-align:center; margin-top:5rem;" class="map-head" >Our Team</h2>
<div class="col d-flex justify-content-center">
  <div class="col-lg-3">
  <div row>
    <div class="card">
    <img src="images/Sreyansh.jpg" alt="Avatar" style="width:100%" style="height:100%">
    <div class="container">
    <h4 class='name'><b>Sreyansh Baranwal</b></h4>
    <p class='desc'>Student at BNMIT</p>
    </div>
    </div>
  </div>
  <div row>
    <div class="card">
    <img src="images/Soham.jpg" alt="Avatar" style="width:100%" style="height:100%">
    <div class="container">
    <h4 class='name'><b>Soham K Chattopadhyay</b></h4>
    <p class='desc'>Student at BNMIT</p>
    </div>
    </div>
  </div>
  </div>
</div>

<?php include 'include/scripts.php' ?>

</body>
</html>
