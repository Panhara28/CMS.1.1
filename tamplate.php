<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/foundation.css">
<link rel="stylesheet" href="styles/main.css">
<nav class="menu-right">
  <ul class="menu">
  <?php
    echo "<li><a href='index.php'>Home</a></li>";
    if(userlogIn()){
      echo "<li><a href='index.php'>Profile</a></li>\t";
      echo "<li><a href='logout.php'>logout</a></li>\t";
    }

    if(userLevel("user_level") == "Admin"){
      echo "<li><a href='admin.php'>Admin Panel</a></li>\t";
    }else {
      echo "<li><a href='login.php'>Login</a></li> \t";
    }
  ?>
  </ul>
</nav>
