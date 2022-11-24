<?php

session_start();

include("includes/db.php");

if (isset($_GET['p_id'])) {
    $remove_id = $_GET['p_id'];
    $delete_product = "delete from cart where p_id='$remove_id'";
    $run_delete = mysqli_query($con,$delete_product);
    if ($run_delete) {
        header("location:cart.php");
    }
}