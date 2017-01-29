<?php
  include 'dbuser/dbuser.php';
  function Connection($dbhost,$dbuser,$dbpass,$dbname){
    $connection = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    return $connection;
  }
 ?>
