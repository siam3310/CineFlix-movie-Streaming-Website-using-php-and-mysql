<?php
session_start();
if (isset($_POST['sub'])) {
	include('conn.php');
	$uname = $_POST['name'];
	$uemail = $_POST['email'];
	$upass = $_POST['pass'];
	$created_time = date("Y-m-d H:i:s");
	$sql = "INSERT INTO `signup`(`u_name`, `u_email`, `u_pass`) VALUES ('$uname','$uemail','$upass')";
	$result = mysqli_query($conn, $sql);

	if ($result) {
	
		$user_id = mysqli_insert_id($conn);
		$_SESSION['user_id'] = $user_id;

	
		header("Location: pricing.php");
	} else {
	
		echo "<script>alert('Registration failed. Please try again.');</script>";
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
	<link rel="icon" type="image/png" href="icon/cine.png">
	<link rel="apple-touch-icon" href="icon/cine.png">


	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Dmitry Volkov">
	<title>CineFlix – Online Movies, TV Shows & Cinema HTML Template</title>
</head>

<body class="body">
	
	<div class="sign section--bg" data-bg="img/section/section.jpg">
	
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="sign__content">
						<!-- registration form -->
						<form class="sign__form" method="post">
							<a href="#" class="sign__logo">
								<img src="img/123.png" alt="">
							</a>

							<div class="sign__group">
								<input type="text" class="sign__input" placeholder="Name" name="name">
							</div>

							<div class="sign__group">
								<input type="text" class="sign__input" placeholder="Email" name="email">
							</div>

							<div class="sign__group">
								<input type="password" class="sign__input" placeholder="Password" name="pass">
							</div>



							<button class="sign__btn" type="submit" name="sub">Sign up</button>



							<span class="sign__text">Already have an account? <a href="signin.php">Sign in!</a></span>
						</form>
						<!-- registration form -->
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