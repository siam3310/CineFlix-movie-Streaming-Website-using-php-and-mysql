<?php
session_start();
if (isset($_SESSION['id'])) {
	header("Location: index.php");
	exit;
}
if (isset($_POST['sub'])) {
	include('conn.php');
	$email = $_POST['email'];
	$pass = $_POST['pass'];


	$sql = "SELECT * FROM `signup` WHERE `u_email`='$email' AND `u_pass`='$pass'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result);
	$num = mysqli_num_rows($result);

	if ($num) {
		$_SESSION['e'] = $email;
		$_SESSION['name'] = $row['u_name'];
		$_SESSION['id']=$row['u_id'];
		header('Location: index.php');
	} else {
		echo "invalid";
	}
}
?>





<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- CSS -->
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" href="css/nouislider.min.css">
	<link rel="stylesheet" href="css/ionicons.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/plyr.css">
	<link rel="stylesheet" href="css/photoswipe.css">
	<link rel="stylesheet" href="css/default-skin.css">
	<link rel="stylesheet" href="css/main.css">

	<!-- Favicons -->
	<link rel="icon" type="image/png" href="icon/favicon-32x32.png" sizes="32x32">
	<link rel="apple-touch-icon" href="icon/favicon-32x32.png">

	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Dmitry Volkov">
	<title>HotFlix – Online Movies, TV Shows & Cinema HTML Template</title>
</head>

<body class="body">

	<div class="sign section--bg" data-bg="img/section/section.jpg">
	
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="sign__content">
						<!-- authorization form -->
						<form class="sign__form" method="post">
							<a href="signin.php" class="sign__logo">
								<img src="img/123.png" alt="">
							</a>

							<div class="sign__group">
								<input type="text" class="sign__input" placeholder="Email" name="email" required>
							</div>

							<div class="sign__group">
								<input type="password" class="sign__input" placeholder="Password" name="pass" required>
							</div>



							<button class="sign__btn" type="submit" name="sub">Sign in</button>

							<span class="sign__delimiter">or</span>


							<span class="sign__text">Don't have an account? <a href="signup.php">Sign up!</a></span>

							<span class="sign__text"><a href="forgot.php">Forgot password?</a></span>
							
						</form>
						<!-- end authorization form -->
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- JS -->
	<script src="js/jquery-3.5.1.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/jquery.mousewheel.min.js"></script>
	<script src="js/jquery.mCustomScrollbar.min.js"></script>
	<script src="js/wNumb.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/plyr.min.js"></script>
	<script src="js/photoswipe.min.js"></script>
	<script src="js/photoswipe-ui-default.min.js"></script>
	<script src="js/main.js"></script>
</body>


</html>