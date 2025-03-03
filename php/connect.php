<?php
  $hostname = "localhost";
  $username = "flexinyp_ecolog";
  $password = "minodo95!";
  $dbname = "flexinyp_ecolog";
  
  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Ошибка подключения к базе данных".mysqli_connect_error();
  }
?>
