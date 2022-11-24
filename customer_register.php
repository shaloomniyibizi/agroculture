<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");


?>

<body>
    <div class="flex items-center min-h-screen p-6 bg-gray-50 ">
      <div
        class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl "
      >
        <div class="flex flex-col overflow-y-auto md:flex-row">
          <div class="h-32 md:h-auto md:w-1/2">
            <img
              aria-hidden="true"
              class="object-cover w-full h-full"
              src="asset/image/blog-5.jpg"
              alt="Office"
            />
          </div>
          <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
            <div class="w-full">
              <h1
                class="mb-4 text-xl font-semibold text-gray-700"
              >
                Create account
              </h1>
              <form action="customer_register.php" method="post" enctype="multipart/form-data" >
              <label class="block text-sm">
                <span class="text-gray-700 ">Name</span>
                <input
                  class="block w-full mt-1 text-sm rounded-lg focus:border-primarycolor focus:outline-none focus:shadow-outline-primarycolor form-input"
                  placeholder="Jane Doe"
                  type="text"
                  name="c_name" required
                />
              </label>
              <label class="block text-sm">
                <span class="text-gray-700 ">Email</span>
                <input
                  class="block w-full mt-1 text-sm rounded-lg focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input"
                  placeholder="Jane Doe"
                  type="email"
                  name="c_email" required
                />
              </label>
              <label class="block mt-4 text-sm">
                <span class="text-gray-700 ">Password</span>
                <span class="input-group-addon"><!-- input-group-addon Starts -->
                <i class="fa fa-check tick1"> </i>
                <i class="fa fa-times cross1"> </i>
                </span>
                <input
                  class="block w-full mt-1 text-sm rounded-lg focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input"
                  placeholder="***************"
                  type="password"
                  name="c_pass" required
                  id="pass"
                />
                <span class="input-group-addon"><!-- input-group-addon Starts -->
                  <div id="meter_wrapper"><!-- meter_wrapper Starts -->
                  <span id="pass_type"> </span>
                  <div id="meter"> </div>
                  </div><!-- meter_wrapper Ends -->
                </span>
              </label>
              <label class="block mt-4 text-sm">
                <span class="text-gray-700"> Confirm password </span>
                <span class="input-group-addon"><!-- input-group-addon Starts -->
                  <i class="fa fa-check tick2"> </i>
                  <i class="fa fa-times cross2"> </i>
                </span>
                <input
                  class="block w-full mt-1 text-sm rounded-lg focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input"
                  placeholder="***************"
                  type="password"
                  name="con_pass"
                  id="con_pass" required
                />
              </label>
              <label class="block text-sm">
                <span class="text-gray-700 ">Country</span>
                <input
                  class="block w-full mt-1 text-sm rounded-lg focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input"
                  placeholder="Rwanda"
                  type="text"
                  name="c_country" required
                />
              </label>
              <label class="block text-sm">
                <span class="text-gray-700 ">City</span>
                <input
                  class="block w-full mt-1 text-sm rounded-lg focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input"
                  placeholder="Rusizi"
                  type="text"
                  name="c_city" required
                />
              </label>
              <label class="block text-sm">
                <span class="text-gray-700 ">Contact</span>
                <input
                  class="block w-full mt-1 text-sm rounded-lg focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input"
                  placeholder="+250 789 104 307"
                  type="text"
                  name="c_contact" required
                />
              </label>
              <label class="block text-sm">
                <span class="text-gray-700 ">Address</span>
                <input
                  class="block w-full mt-1 text-sm rounded-lg focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input"
                  placeholder="western - rwanda"
                  type="text"
                  name="c_address" required
                />
              </label>
              <label class="block text-sm">
                <span class="text-gray-700 ">Image</span>
                <input
                  class="block w-full mt-1 text-sm rounded-lg focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input"
                  placeholder="choose your image"
                  type="file"
                  name="c_address" required
                />
              </label>
              <div class="flex mt-6 text-sm">
                <label class="flex items-center">
                  <input
                    type="checkbox"
                    class="text-primarycolor form-checkbox focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                  />
                  <span class="ml-2">
                    I agree to the
                    <span class="underline">privacy policy</span>
                  </span>
                </label>
              </div>
              <!-- You should use a button here, as the anchor is only used for the example  -->
              <button type="submit" name="register"
                class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-whit transition-colors duration-150 bg-primarycolor border border-transparent rounded-lg active:bg-primarycolor hover:scale-105 focus:outline-none focus:shadow-outline-primarycolor"
              >
                <i class="fa fa-user-md mx-2"></i> Create account
              </button>
              <hr class="my-8" />
              <button
                class="flex items-center justify-center w-full px-4 py-2 text-sm font-medium leading-5 text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray"
              >
                <svg
                  class="w-4 h-4 mr-2"
                  aria-hidden="true"
                  viewBox="0 0 24 24"
                  fill="currentColor"
                >
                  <path
                    d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"
                  />
                </svg>
                Github
              </button>
              <button
                class="flex items-center justify-center w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray"
              >
                <svg
                  class="w-4 h-4 mr-2"
                  aria-hidden="true"
                  viewBox="0 0 24 24"
                  fill="currentColor"
                >
                  <path
                    d="M23.954 4.569c-.885.389-1.83.654-2.825.775 1.014-.611 1.794-1.574 2.163-2.723-.951.555-2.005.959-3.127 1.184-.896-.959-2.173-1.559-3.591-1.559-2.717 0-4.92 2.203-4.92 4.917 0 .39.045.765.127 1.124C7.691 8.094 4.066 6.13 1.64 3.161c-.427.722-.666 1.561-.666 2.475 0 1.71.87 3.213 2.188 4.096-.807-.026-1.566-.248-2.228-.616v.061c0 2.385 1.693 4.374 3.946 4.827-.413.111-.849.171-1.296.171-.314 0-.615-.03-.916-.086.631 1.953 2.445 3.377 4.604 3.417-1.68 1.319-3.809 2.105-6.102 2.105-.39 0-.779-.023-1.17-.067 2.189 1.394 4.768 2.209 7.557 2.209 9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63.961-.689 1.8-1.56 2.46-2.548l-.047-.02z"
                  />
                </svg>
                Twitter
              </button>
              </form>
              <p class="mt-4">
                <a
                  class="text-sm font-medium text-purple-600 dark:text-purple-400 hover:underline"
                  href="customer/customer_login.php"
                >
                  Already have an account? Login
                </a>
              </p>
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

<script>

$(document).ready(function(){

$('.tick1').hide();
$('.cross1').hide();

$('.tick2').hide();
$('.cross2').hide();


$('.confirm').focusout(function(){

var password = $('#pass').val();

var confirmPassword = $('#con_pass').val();

if(password == confirmPassword){

$('.tick1').show();
$('.cross1').hide();

$('.tick2').show();
$('.cross2').hide();



}
else{

$('.tick1').hide();
$('.cross1').show();

$('.tick2').hide();
$('.cross2').show();


}


});


});

</script>

<script>

$(document).ready(function(){

$("#pass").keyup(function(){

check_pass();

});

});

function check_pass() {
 var val=document.getElementById("pass").value;
 var meter=document.getElementById("meter");
 var no=0;
 if(val!="")
 {
// If the password length is less than or equal to 6
if(val.length<=6)no=1;

 // If the password length is greater than 6 and contain any lowercase alphabet or any number or any special character
  if(val.length>6 && (val.match(/[a-z]/) || val.match(/\d+/) || val.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/)))no=2;

  // If the password length is greater than 6 and contain alphabet,number,special character respectively
  if(val.length>6 && ((val.match(/[a-z]/) && val.match(/\d+/)) || (val.match(/\d+/) && val.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/)) || (val.match(/[a-z]/) && val.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/))))no=3;

  // If the password length is greater than 6 and must contain alphabets,numbers and special characters
  if(val.length>6 && val.match(/[a-z]/) && val.match(/\d+/) && val.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/))no=4;

  if(no==1)
  {
   $("#meter").animate({width:'50px'},300);
   meter.style.backgroundColor="red";
   document.getElementById("pass_type").innerHTML="Very Weak";
  }

  if(no==2)
  {
   $("#meter").animate({width:'100px'},300);
   meter.style.backgroundColor="#F5BCA9";
   document.getElementById("pass_type").innerHTML="Weak";
  }

  if(no==3)
  {
   $("#meter").animate({width:'150px'},300);
   meter.style.backgroundColor="#FF8000";
   document.getElementById("pass_type").innerHTML="Good";
  }

  if(no==4)
  {
   $("#meter").animate({width:'200px'},300);
   meter.style.backgroundColor="#00FF40";
   document.getElementById("pass_type").innerHTML="Strong";
  }
 }

 else
 {
  meter.style.backgroundColor="";
  document.getElementById("pass_type").innerHTML="";
 }
}

</script>

</body>

</html>

<?php

if(isset($_POST['register'])){

// $secret = "6LcHnoQaAAAAAF3_pqQ55sZMDgaWCGcXq4ucLgkH";

// $response = $_POST['g-recaptcha-response'];

$remoteip = $_SERVER['REMOTE_ADDR'];

// $url = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response&remoteip=$remoteip");

// $result = json_decode($url, TRUE);

if($result['success'] == 0){

$c_name = $_POST['c_name'];

$c_email = $_POST['c_email'];

$c_pass = $_POST['c_pass'];

$c_country = $_POST['c_country'];

$c_city = $_POST['c_city'];

$c_contact = $_POST['c_contact'];

$c_address = $_POST['c_address'];

$c_image = $_FILES['c_image']['name'];

$c_image_tmp = $_FILES['c_image']['tmp_name'];

$c_ip = getRealUserIp();

move_uploaded_file($c_image_tmp,"customer/customer_images/$c_image");

$get_email = "select * from customers where customer_email='$c_email'";

$run_email = mysqli_query($con,$get_email);

$check_email = mysqli_num_rows($run_email);

if($check_email == 1){

echo "<script>alert('This email is already registered, try another one')</script>";

exit();

}

$customer_confirm_code = mt_rand();

$subject = "Email Confirmation Message";

$from = "sad.ahmed22224@gmail.com";

$message = "

<h2>
Email Confirmation By Computerfever.com $c_name
</h2>

<a href='localhost/ecom_store/customer/my_account.php?$customer_confirm_code'>

Click Here To Confirm Email

</a>

";

$headers = "From: $from \r\n";

$headers .= "Content-type: text/html\r\n";

mail($c_email,$subject,$message,$headers);

$insert_customer = "insert into customers (customer_name,customer_email,customer_pass,customer_country,customer_city,customer_contact,customer_address,customer_image,customer_ip,customer_confirm_code) values ('$c_name','$c_email','$c_pass','$c_country','$c_city','$c_contact','$c_address','$c_image','$c_ip','$customer_confirm_code')";


$run_customer = mysqli_query($con,$insert_customer);

$sel_cart = "select * from cart where ip_add='$c_ip'";

$run_cart = mysqli_query($con,$sel_cart);

$check_cart = mysqli_num_rows($run_cart);

if($check_cart>0){

$_SESSION['customer_email']=$c_email;

echo "<script>alert('You have been Registered Successfully')</script>";

echo "<script>window.open('checkout.php','_self')</script>";

}else{

$_SESSION['customer_email']=$c_email;

echo "<script>alert('You have been Registered Successfully')</script>";

echo "<script>window.open('index.php','_self')</script>";


}


}
else{

echo "<script>alert('Please Select Captcha, Try Again')</script>";

}


}

?>
