<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");

?>
  <body>
    <div class="flex items-center min-h-screen p-6 bg-gray-50">
      <div
        class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl"
      >
        <div class="flex flex-col overflow-y-auto md:flex-row">
          <div class="h-32 md:h-auto md:w-1/2">
            <img
              aria-hidden="true"
              class="object-cover w-full h-full"
              src="./asset/image/blog-4.jpg"
              alt="Office"
            />
          </div>
          <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
            <div class="w-full">
              <h1
                class="mb-4 text-xl font-semibold text-gray-700 "
              >
                Forgot password
              </h1>
              <form action="" method="post">
              <label class="block text-sm">
                <span class="text-gray-700">Email</span>
                <input
                  class="block w-full mt-1 text-sm  focus:border-primarycolor focus:outline-none focus:shadow-outline-primarycolor form-input"
                  placeholder="shaloomniyibizi@gmail.com"
                  type="email"
                  name="c_email"
                />
              </label>

              <!-- You should use a button here, as the anchor is only used for the example  -->
              <button
                class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-whitej transition-colors duration-150 bg-primarycolor border border-transparent rounded-lg active:bg-primarycolor hover:scale-105 focus:outline-none focus:shadow-outline-primarycolor"
                type="submit" name="forgot_pass"
              >
                Recover password
              </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>


<?php

include("includes/footer.php");

?>

<script src="js/jquery.min.js"> </script>

<script src="js/bootstrap.min.js"></script>

</body>
</html>

<?php

if(isset($_POST['forgot_pass'])){

$c_email = $_POST['c_email'];

$sel_c = "select * from customers where customer_email='$c_email'";

$run_c = mysqli_query($con,$sel_c);

$count_c = mysqli_num_rows($run_c);

$row_c = mysqli_fetch_array($run_c);

$c_name = $row_c['customer_name'];

$c_pass = $row_c['customer_pass'];

if($count_c == 0){

echo "<script> alert('Sorry, We do not have your email') </script>";

exit();

}
else{

$message = "

<h1 align='center'> Your Password Has Been Sent To You </h1>

<h2 align='center'> Dear $c_name </h2>

<h3 align='center'>

Your Password is : <span> <b>$c_pass</b> </span>

</h3>

<h3 align='center'>

<a href='localhost/ecom_store/checkout.php'>

Click Here To Login Your Account

</a>

</h3>

";

$from = "sad.ahmed22224@gmail.com";

$subject = "Your Password";

$headers = "From: $from\r\n";

$headers .= "Content-type: text/html\r\n";

mail($c_email,$subject,$message,$headers);

echo "<script> alert('Your Password has been sent to you, check your inbox ') </script>";

echo "<script>window.open('checkout.php','_self')</script>";

}

}

?>
