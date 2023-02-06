<?php
$con = mysqli_connect("localhost", "root", "");

if (!$con) {
  die();
}

$dbconfig=mysqli_select_db($con, "campus_cauldron");
?>