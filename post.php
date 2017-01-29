<?php
  include ('connection/connection.php');
  $conn = Connection($dbhost,$dbuser,$dbpass,$dbname);

  function AddPages($conn){
    $title = $conn->real_escape_string($_POST['title']);
    $header = $conn->real_escape_string($_POST['header']);
    $description = $conn->real_escape_string($_POST['description']);
    if (empty($title&&$description)) {
      echo "Empty";
    }else{
      $query = "INSERT INTO pages (title,header,description) VALUES('".$title."','".$header."','".$description."')";
      $result = $conn->query($query);
      echo "Post Sucessfully";
    }
  }
  AddPages($conn);


?>
