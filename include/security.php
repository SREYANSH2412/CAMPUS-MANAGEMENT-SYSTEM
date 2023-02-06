<?php
include('conn.php');

if ($dbconfig) {
//  echo "Datbase Connected";
}
else {
  header('Location: conn.php');
}


if(!$_SESSION['username'])
{
  header('Location: admin_login.php');
}
