<?php
session_start();
include('conn.php');

if (isset($_POST['sub'])) {

  $signup_id = $_SESSION['user_id'];

  $p_id = $_GET['pid'];

  // Retrieve other payment data from the form
  $card1 = $_POST['card1'];
  $cardholder_name = $_POST['username'];
  $expire_date = $_POST['expire_date'];
  $cvv = $_POST['cvv'];

  $sql_payment = "INSERT INTO `payment`(`u_id`, `p_id`, `card2`, `cardholder_name`, `expire_date`, `cvv`) VALUES 
    ('$signup_id', '$p_id', '$card1', '$cardholder_name', '$expire_date', '$cvv')";
  $result_payment = mysqli_query($conn, $sql_payment);

  if ($result_payment) {
    header("Location: index.php");
  } else {
    echo "<script>alert('Payment registration failed. Please try again.');</script>";
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Payment</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body style="background-image: url('img/section/section.jpg');"></body>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<style>
  .custom-form-control {
    font-size: 14px;
    /* Adjust the font size as needed */
    padding: 10px;
    /* Adjust the padding as needed */
  }

  button.btn.btn.btn-lg.btn.custom-button:hover {
    background-color: #c2970c !important;
  }
</style>
<br><br><br>

<body style="background-image: url('img/section/section.jpg');"></body>
<section class="p-3 p-md-4" ;>
  <div class="row d-flex justify-content-center">
    <div class="col-md-10 col-lg-8 col-xl-4" style="background-color: #222028;">
      <div class="card rounded-3" style="background-color: #222028;">
        <div class="card-body p-2" style="background-color: #222028;">
          <br>
          <center><br>
            <h2 style="color: #FFC300;font-weight: bold;">
              Credit / Debit Payments</h2>
            <br>
          </center>
          <center>
            <form method="post" style="background-color: #222028;">

              <div class="d-flex flex-row align-items-center mb-3 pb-1">

                <div class="flex-fill mx-4">
                  <div class="form-outline">
                    <input type="text" id="formControlLgXc" name="card1" class="form-control custom-form-control" placeholder="**** **** **** 3193" style="background-color: #dddddd;" />
                    <label class="form-label" for="formControlLgXc" style="color:WHITE ;">Card Number</label>
                  </div>
                </div>

              </div>

              <div class="row mb-4">
                <div class="col-7">
                  <div class="form-outline" mb-3>
                    <input type="text" id="formControlLgXM" name="username" class="form-control custom-form-control" placeholder="John Doe" style="background-color: #dddddd;" />

                    <label class="form-label" for="formControlLgXM" style="color:WHITE ;">Cardholder's Name</label>
                  </div>
                </div>
                <div class="col-3">
                  <div class="form-outline">
                    <input type="password" id="formControlLgExpk" name="expire_date" class="form-control custom-form-control" placeholder="MM/YYYY" style="background-color: #dddddd;" />

                    <label class="form-label" for="formControlLgExpk" style="color:WHITE ;">Expire</label>
                  </div>
                </div>
                <div class="col-2">
                  <div class="form-outline">

                    <input type="password" id="formControlLgcvv" name="cvv" class="form-control custom-form-control" placeholder="Cv" style="background-color: #dddddd;" />

                    <label class="form-label" for="formControlLgcvv" style="color:WHITE ;">CVV</label>
                  </div>
                </div>
              </div>

              <button class="btn btn btn-lg btn custom-button" name="sub" type="submit" style="margin-bottom: 20px; outline: 2px solid #FFC300; background-color: #222028; color: white;">Start Membership</button>

            </form>
          </center>
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

</html>