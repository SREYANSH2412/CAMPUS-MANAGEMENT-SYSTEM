<?php

$mykey1=$_REQUEST['key1'];

$con = mysqli_connect("localhost", "root", "");

if (!$con) {
  die();
}

mysqli_select_db($con, "campus_cauldron");
mysqli_query($con,"delete from event where event_id = '$mykey1'");
echo "<script>location.href='view_events.php'</script>"

?> 