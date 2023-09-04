<?php
include('conn.php');
$comment_id = $_GET['id'];
$sql = "SELECT * FROM `comment` WHERE c_id = $comment_id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

if (isset($_POST['up'])) {

	$uname = $_POST['c_name'];
	$title = $_POST['c_title'];
	$comment = $_POST['text'];
	$sql = "UPDATE `comment` SET `c_username`='$uname', `c_title`='$title', `c_comment`='$comment' WHERE c_id = $comment_id";

	mysqli_query($conn, $sql);
	header("Location: comments.php");
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
	<section class="section d-flex justify-content-center align-items-center">>
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-7 col-xl-8">
					<div class="row">
						<!-- section title -->
						<div class="col-12">
							<h2 class="section__title section__title--lg">Edit Comments</h2>
						</div>
						<!-- end section title -->

						<div class="col-12">
							<form class="form form--contacts" method="post">
								<div class="row row--form">
									<div class="col-12 col-xl-6">
										<input type="text" class="form__input" placeholder="Username" name="c_name" value="<?php echo $row[1]; ?>">
									</div>

									<div class="col-12">
										<input type="text" class="form__input" placeholder="Title" name="c_title" value="<?php echo $row[2]; ?>">
									</div>
									<div class="col-12">

										<textarea id="text" name="text" class="form__textarea" placeholder="Add comment"><?php echo $row[3]; ?></textarea>

									</div>
									<div class="col-12">
										<button type="submit" class="form__btn" name="up"> Send</button>

									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


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

<!-- Mirrored from cineflix.volkovdesign.com/main/details.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Jun 2023 08:05:34 GMT -->

</html>