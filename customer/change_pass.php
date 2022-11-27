    <div class="flex items-center p-6 bg-gray-50">
      <div
        class="flex-1 h-fit max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl"
      >
        <div class="flex flex-col overflow-y-auto md:flex-row">
          <div class="h-32 md:h-auto md:w-1/2">
            <img
              aria-hidden="true"
              class="object-cover w-full h-full"
              src="../asset/image/blog-4.jpg"
              alt="Office"
            />
          </div>
          <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
            <div class="w-full">
              <h1
                class="mb-4 text-xl font-semibold text-gray-700 "
              >
                Change password
              </h1>
              <form action="" method="post">
              <label class="block text-sm">
                <span class="text-gray-700">Current Password</span>
                <input
                  class="block w-full mt-1 text-sm  focus:border-primarycolor focus:outline-none focus:shadow-outline-primarycolor rounded-lg form-input"
                  placeholder="********************"
                  type="password" name="old_pass"
                  required />
              </label>
              <label class="block text-sm">
                <span class="text-gray-700">Your New Password</span>
                <input
                  class="block w-full mt-1 text-sm  focus:border-primarycolor focus:outline-none focus:shadow-outline-primarycolor rounded-lg form-input"
                  placeholder="********************"
                  type="password" name="new_pass"
                  required />
              </label>
              <label class="block text-sm">
                <span class="text-gray-700">Confirm Password</span>
                <input
                  class="block w-full mt-1 text-sm  focus:border-primarycolor focus:outline-none focus:shadow-outline-primarycolor rounded-lg form-input"
                  placeholder="********************"
                  type="password" name="new_pass_again" required
                />
              </label>
              <button
                class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-whitej transition-colors duration-150 bg-primarycolor border border-transparent rounded-lg active:bg-primarycolor hover:scale-105 focus:outline-none focus:shadow-outline-primarycolor"
                type="submit" name="submit">
                <i class="fa fa-user-md"> </i> Change Password
              </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php
if(isset($_POST['submit'])){
$c_email = $_SESSION['customer_email'];
$old_pass = $_POST['old_pass'];
$new_pass = $_POST['new_pass'];
$new_pass_again = $_POST['new_pass_again'];
$sel_old_pass = "select * from customers where customer_pass='$old_pass'";
$run_old_pass = mysqli_query($con,$sel_old_pass);
$check_old_pass = mysqli_num_rows($run_old_pass);
if($check_old_pass==0){
echo "<script>alert('Your Current Password is not valid try again')</script>";
exit();
}
if($new_pass!=$new_pass_again){
echo "<script>alert('Your New Password dose not match')</script>";
exit();
}
$update_pass = "update customers set customer_pass='$new_pass' where customer_email='$c_email'";
$run_pass = mysqli_query($con,$update_pass);
if($run_pass){
echo "<script>alert('your Password Has been Changed Successfully')</script>";
echo "<script>window.open('my_account.php?my_orders','_self')</script>";
}}
?>







