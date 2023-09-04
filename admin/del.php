<?php
include('conn.php');

if (isset($_GET['id'])) {
    $comment_id = $_GET['id'];

   

    $sql = "DELETE FROM `comment` WHERE `c_id` = $comment_id";
    $result = mysqli_query($conn, $sql);

    if ($result) {
       header("Location: comments.php" );
    } 
} 
?>
