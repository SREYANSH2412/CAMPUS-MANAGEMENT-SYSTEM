<?php

$mykey1=$_REQUEST['key1'];

include 'conn.php';
mysqli_query($con,"UPDATE q_and_a SET answer='NULL', ans_approved=0 where id=$mykey1");
echo "<script>location.href='ques_ans.php'</script>"
?>