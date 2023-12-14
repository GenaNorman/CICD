<?php
  //establishing connection between database and php file
  $conn = mysqli_connect('localhost','T-chala','admin123','login');

  //verify sucess of connectoin
  if($conn) {
    # code...
    echo'CONNNECTED SUCCESSFULY';
  }
  else {
    echo'connection error:' . mysqli_connect_error();
}
?>