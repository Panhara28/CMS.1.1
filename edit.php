
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="styles/main.css">
		<title></title>
	</head>
	<body>
		<?php require_once 'function/function.php'; ?>

    <?php
    if(!userlogIn() || userLevel("user_level") != "Admin"){
    	header("location: edit.php");
    }
    ?>

    <div class="expanded row ctr-widget">
      <div class="large-12 columns no-padding">
        <nav class="menu-right">
          <ul class="menu">
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="widget.php">Add Widget</a></li>
            <li><a href="edit.php">Post</a></li>
            <li><a href="setting.php">Setting</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </nav>
      </div>
    </div>
			<h3>Add Post</h3>
		  <br>

      <div class="row align-center">
				<div class="large-12 columns">
					<form id="form" action="post.php" method="POST">
            <label id="result"></label>
						<?php form_for("text","","title","","Title Here");?>
						<?php form_for("text","","header","","Header"); ?>
            <textarea name="description" rows="8" cols="80"></textarea>
            <button class="button" id="submit">Publish</button>
					</form>
				</div>
			</div>

      <script src="js/vendor/jquery.js"></script>
  	  <script src="main.js"></script>
  	  <script src="js/vendor/foundation.min.js"></script>
  	  <script>
  	    $(document).foundation();
  	  </script>
	</body>
</html>
