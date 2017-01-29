<?php
  require_once 'connection/connection.php';
  session_start();
  $conn = Connection($dbhost,$dbuser,$dbpass,$dbname);
	function userlogIn(){
		if(isset($_SESSION["user_id"])){
			return true;
		} else {
			return false;
		}
	}

	function userLevel($field_name){
		global $conn;
		$user_id = $_SESSION["user_id"];
		$query = "SELECT $field_name FROM registeration WHERE id='$user_id'";
		$result = mysqli_query($conn,$query);
		$row = mysqli_fetch_assoc($result);
		return $row[$field_name];
	}

	function DynamicNav($id){
    global $conn;
    $query = "SELECT * FROM addwidget WHERE id='$id'";
    $result = mysqli_query($conn,$query);
    while($nav = mysqli_fetch_assoc($result)){
      echo "<li><a href='".$nav['link']."'>".$nav['widget']."</a></li>";
    }
  }

  function form_for($type,$class,$name,$value,$placeholder){
    $typeOfForm = array(
      "text","number","email","submit","color",
      "date","datetime","datetime-local","email","month",
      "range","search","tel","time","url","week"
    );
    for ($i=0; $i <count($typeOfForm) ; $i++) {
      if ($typeOfForm[$i] == $type) {
        echo "<input type='$typeOfForm[$i]' class='$class' name='$name' value='$value' placeholder='$placeholder'>";
      }
    }
  }

  function getPost($id){
    global $conn;
    $query = "SELECT * FROM post WHERE id=$id";
    $result = mysqli_query($conn,$query);
    while ($post = mysqli_fetch_assoc($result)) {
        if ($id==$post['id']) {
        echo "
              <h3>".$post['title']."</h3>
              <p>".$post['description']."</p>
             ";
      }
    }
  }

  function DynamicPages($conn){
    $query = "SELECT * FROM pages";
    $result = mysqli_query($conn,$query);
    while ($nav = mysqli_fetch_assoc($result)) {
      echo "<li><a href='pages.php?page=".$nav['id']."'>".$nav['title']."</a></li>";
    }
  }

  function data_page($conn,$id){
    $query = "SELECT * FROM pages WHERE id = $id";
    $result = mysqli_query($conn,$query);
    $data = mysqli_fetch_assoc($result);
    return $data;
  }

 ?>
