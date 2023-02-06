<?php
$mykey1 = $_REQUEST['key1'];
include 'conn.php';


$ins = mysqli_query($con, "UPDATE q_and_a SET ans_approved=1 where id=$mykey1");
if ($ins == 1) {
  echo "<script type='text/javascript'>alert('Answer has been approved!'); window.location.href = 'ques_ans.php';</script>";
}
?>