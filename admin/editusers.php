<?php
include('conn.php');
$user_id = $_GET['id'];
$sql = "SELECT * FROM `signup` WHERE u_id = $user_id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

if (isset($_POST['sub'])) {

	$uname = $_POST['name'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$sql = "UPDATE `signup` SET `u_name`='$uname',`u_email`='$email', `u_pass`='$pass' WHERE u_id = $user_id";

	mysqli_query($conn, $sql);
	header("Location: users.php");
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

	<div class="container">
		<div class="row">
			<div class="col-12 col-md-7 col-xl-8">
				<div class="row">
					<!-- section title -->
					<div class="col-12">
						<h2 class="section__title section__title--lg">Edit Users</h2>
					</div>
					<!-- end section title -->

					<form class="sign__form" method="post">

						<img src="img/logo.svg" alt="">
						</a>

						<div class="sign__group">
							<input type="text" class="sign__input" placeholder="Name" name="name" value="<?php echo $row['u_name']; ?>">
						</div>

						<div class="sign__group">
							<input type="text" class="sign__input" placeholder="Email" name="email" value="<?php echo $row['u_email']; ?>">>
						</div>

						<div class="sign__group">
							<input type="password" class="sign__input" placeholder="Password" name="pass" value="<?php echo $row['u_pass']; ?>">>
						</div>



						<button class="sign__btn" type="submit" name="sub">Sign up</button>




					</form>
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