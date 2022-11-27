<?php

$customer_session = $_SESSION['customer_email'];

$get_customer = "select * from customers where customer_email='$customer_session'";

$run_customer = mysqli_query($con,$get_customer);

$row_customer = mysqli_fetch_array($run_customer);

$customer_id = $row_customer['customer_id'];

$customer_name = $row_customer['customer_name'];

$customer_email = $row_customer['customer_email'];

$customer_country = $row_customer['customer_country'];

$customer_city = $row_customer['customer_city'];

$customer_contact = $row_customer['customer_contact'];

$customer_address = $row_customer['customer_address'];

$customer_image = $row_customer['customer_image'];

?>

<div class="flex items-center min-h-screen p-6 bg-gray-50 ">
      <div
        class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl "
      >
        <div class="flex flex-col overflow-y-auto md:flex-row">
          <div class="h-32 md:h-auto md:w-1/2">
            <img
              aria-hidden="true"
              class="object-cover w-full h-full"
              img src="customer_images/<?php echo $customer_image; ?>"
              alt="<?php echo $customer_name; ?>"
            />
          </div>
          <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
            <div class="w-full">
              <h1
                class="mb-4 text-xl font-semibold text-gray-700"
              >
                Edit Your Account
              </h1>
              <form action="" method="post" enctype="multipart/form-data" >
              <label class="block text-sm">
                <span class="text-gray-700 ">Customer Name</span>
                <input
                  class="block w-full mt-1 text-sm rounded-lg focus:border-primarycolor focus:outline-none focus:shadow-outline-primarycolor form-input"
                  placeholder="Jane Doe"
                  type="text"
                  name="c_name" required
                  value="<?php echo $customer_name; ?>"
                />
              </label>
              <label class="block text-sm">
                <span class="text-gray-700 ">Customer Email</span>
                <input
                  class="block w-full mt-1 text-sm rounded-lg focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input"
                  placeholder="Jane Doe"
                  type="email"
                  name="c_email" required
                  value="<?php echo $customer_email; ?>" />
              </label>
              <label class="block text-sm">
                <span class="text-gray-700 ">Country</span>
                <input
                  class="block w-full mt-1 text-sm rounded-lg focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input"
                  placeholder="Rwanda"
                  type="text"
                  name="c_country" required
                  value="<?php echo $customer_country; ?>" />
              </label>
              <label class="block text-sm">
                <span class="text-gray-700 ">City</span>
                <input
                  class="block w-full mt-1 text-sm rounded-lg focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input"
                  placeholder="Rusizi"
                  type="text"
                  name="c_city" required
                  value="<?php echo $customer_city; ?>"/>
              </label>
              <label class="block text-sm">
                <span class="text-gray-700 ">Contact</span>
                <input
                  class="block w-full mt-1 text-sm rounded-lg focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input"
                  placeholder="+250 789 104 307"
                  type="text"
                  name="c_contact" required
                  value="<?php echo $customer_contact; ?>"/>
              </label>
              <label class="block text-sm">
                <span class="text-gray-700 ">Address</span>
                <input
                  class="block w-full mt-1 text-sm rounded-lg focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input"
                  placeholder="western - rwanda"
                  type="text"
                  name="c_address" required
                  value="<?php echo $customer_address; ?>"
                />
              </label>
              <label class="block text-sm">
                <span class="text-gray-700 ">Image</span>
                <input
                  class="block w-full mt-1 text-sm rounded-lg focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input"
                  placeholder="choose your image"
                  type="file"
                  name="c_image" required
                />
                  
              </label>
              <!-- You should use a button here, as the anchor is only used for the example  -->
              <button type="submit" name="update"
                class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-whit transition-colors duration-150 bg-primarycolor border border-transparent rounded-lg active:bg-primarycolor hover:scale-105 focus:outline-none focus:shadow-outline-primarycolor"
              >
                <i class="fa fa-user-md mx-2" ></i> Update Now
              </button>
              
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>


<?php

if(isset($_POST['update'])){

$update_id = $customer_id;

$c_name = $_POST['c_name'];

$c_email = $_POST['c_email'];

$c_country = $_POST['c_country'];

$c_city = $_POST['c_city'];

$c_contact = $_POST['c_contact'];

$c_address = $_POST['c_address'];

$c_image = $_FILES['c_image']['name'];

$c_image_tmp = $_FILES['c_image']['tmp_name'];

move_uploaded_file($c_image_tmp,"customer_images/$c_image");

$update_customer = "update customers set customer_name='$c_name',customer_email='$c_email',customer_country='$c_country',customer_city='$c_city',customer_contact='$c_contact',customer_address='$c_address',customer_image='$c_image' where customer_id='$update_id'";

$run_customer = mysqli_query($con,$update_customer);

if($run_customer){

echo "<script>alert('Your account has been updated please login again')</script>";

echo "<script>window.open('logout.php','_self')</script>";

}

}


?>