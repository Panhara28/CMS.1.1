<?php include 'setup.php'; ?>
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
		<div class="expanded row ctr-widget">
			<div class="large-12 columns no-padding">
				<nav class="menu-right">
					<ul class="menu">
						<?php DynamicNav("1"); ?>
            <?php DynamicPages($conn); ?>
            <?php DynamicNav("2"); ?>
            <?php DynamicNav("3"); ?>
					</ul>
				</nav>
			</div>
		</div>


		<script src="js/vendor/jquery.js"></script>
		<script src="js/vendor/foundation.min.js"></script>
		<script>
			$(document).foundation();
		</script>
	</body>
</html>
