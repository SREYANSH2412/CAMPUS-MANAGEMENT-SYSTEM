<?php

$mykey1=$_REQUEST['key1'];

include 'conn.php';
mysqli_query($con,"delete from q_and_a where id = '$mykey1'");
echo "<script>location.href='ques_ans.php'</script>"

?> 