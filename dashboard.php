<?php require_once 'function/function.php'; ?>
<?php
if(!userlogIn() || userLevel("user_level") != "Admin"){
	header("location: login.php");
}
?>
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
	</body>
</html>
