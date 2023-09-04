<?php
include('conn.php');

if (isset($_GET['id'])) {
    $review_id = $_GET['id'];

   

    $sql = "DELETE FROM `review_detail` WHERE `u_id` = $review_id";
    $result = mysqli_query($conn, $sql);

    if ($result) {
       header("Location: reviews.php" );
    } 
} 
?>
