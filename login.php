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
			if(userlogIn()){
				header("location: dashboard.php");
			}
		?>
		<?php
			if($_SERVER['REQUEST_METHOD'] == "POST"){
				$username = $_POST["username"];
				$password = md5($_POST["password"]);
				if(empty($username&&$password)){
					$error = "Empty";
				} else {
					$sql = "SELECT id FROM registeration WHERE username='$username' AND password='$password'";
					$result = mysqli_query($conn,$sql);
					$row = mysqli_num_rows($result);
					if($row == true){
						$row = mysqli_fetch_assoc($result);
						$user_id = $row['id'];
						$_SESSION['user_id'] = $user_id;
						header("location: dashboard.php");
					} else {
						$error = "Username or Password Incorrect.";
					}
				}
			}
			?>

			<div class="expanded row ctr-widget">
		    <div class="large-12 columns no-padding">
		      <nav class="menu-right">
		        <?php include("tamplate.php"); ?>
		      </nav>
		    </div>
		  </div>
			<h3>Login Account</h3>
		  <br>

		  <div class="row align-center">
		    <div class="large-3 columns">
					<form method="POST">
						<p><?php echo $error; ?></p>
						<input type="text" name="username" placeholder="Username">
						<input type="password" name="password" placeholder="Pasword">
						<input class="button" type="submit" name="submit" value="Submit">
					</form>
		    </div>
		  </div>
	</body>
</html>
