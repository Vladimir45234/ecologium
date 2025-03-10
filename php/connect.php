<?php

  require_once "config.php";

  $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
  
  if(!$conn){
    die("DB ERROR CONNECT ".mysqli_connect_error());
  }
