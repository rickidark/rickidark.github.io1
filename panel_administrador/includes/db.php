<?php 
// After uploading to   server, change this connection accordingly

$con = mysqli_connect("localhost","tienda","online","joyeria");
mysqli_set_charset($con, "utf8");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


?>