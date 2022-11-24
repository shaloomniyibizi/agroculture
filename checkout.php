<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");

?>
<?php
if(!isset($_SESSION['customer_email'])){
include("customer/customer_login.php");
}else{
include("payment_options.php");
}
?>

<?php
include("includes/footer.php");
?>
<script src="js/jquery.min.js"> </script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>
