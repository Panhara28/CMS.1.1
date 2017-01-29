<?php
  include 'function/function.php';
  if (isset($_GET['page'])) {
    $pageid = $_GET['page'];
  }else{
    $pageid = 1;
  }
  $page = data_page($conn,$pageid);

 ?>
