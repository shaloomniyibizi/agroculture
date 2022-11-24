<?php

session_start();
unset($_SESSION['customer_email']);
session_destroy();

echo "<script>window.open('index.php','_self')</script>";


?>