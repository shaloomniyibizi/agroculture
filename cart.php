<?php
session_start();
include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");
?>

	<body class="bg-gray-100">
		<div class="container mx-auto mt-10">
			<div class="flex shadow-md -my-10">
				<div class="w-3/4 bg-white px-8 py-8">
					<div class="flex justify-between border-b pb-10">
						<h1 class="font-semibold text-2xl">Shopping Cart</h1>
						<form action="" method="post">
						<?php
						$ip_add = getRealUserIp();
						$select_cart = "select * from cart where ip_add='$ip_add'";
						$run_cart = mysqli_query($con,$select_cart);
						$count = mysqli_num_rows($run_cart);
						?>
						<h2 class="font-semibold text-2xl"><?php echo $count; ?> Item(s)</h2>
					</div>
					<div class="flex mt-10 mb-5">
						<h3 class="font-semibold text-gray-600 text-xs uppercase w-2/5">
							Product Details
						</h3>
						<h3
							class="font-semibold text-gray-600 text-xs uppercase w-1/5 text-center"
						>
							Quantity
						</h3>
						<h3
							class="font-semibold text-gray-600 text-xs uppercase w-1/5 text-center"
						>
							Price
						</h3>
						<h3
							class="font-semibold text-gray-600 text-xs uppercase w-1/5 text-center"
						>
							Total
						</h3>
					</div>
					<?php
					$total = 0;
					while($row_cart = mysqli_fetch_array($run_cart)){
					$pro_id = $row_cart['p_id'];
					$pro_size = $row_cart['size'];
					$pro_qty = $row_cart['qty'];
					$only_price = $row_cart['p_price'];
					$get_products = "select * from products where product_id='$pro_id'";
					$run_products = mysqli_query($con,$get_products);
					while($row_products = mysqli_fetch_array($run_products)){
					$product_title = $row_products['product_title'];
					$product_img1 = $row_products['product_img1'];
					$sub_total = $only_price*$pro_qty;
					$_SESSION['pro_qty'] = $pro_qty;
					$total += $sub_total;

					if ($total > 0 && $total<=10000) {
						$shipping = 500;
						$totals = $total + $shipping;
					} elseif ($total > 10000 && $total<=100000) {
						$shipping = 2000;
						$totals = $total + $shipping;
					} else {
						$shipping = 5000;
						$totals = $total + $shipping ;
					}
					

					$manufacturer_id = $row_products['manufacturer_id'];
					$get_manufacturer = "select * from manufacturers where manufacturer_id='$manufacturer_id'";
					$run_manufacturer = mysqli_query($db,$get_manufacturer);
					$row_manufacturer = mysqli_fetch_array($run_manufacturer);
					$manufacturer_name = $row_manufacturer['manufacturer_title'];
					?>
					<div class="flex items-center hover:bg-gray-100 -mx-8 px-6 py-5">
						<div class="flex w-2/5">
							<!-- product -->
							<div class="w-20">
								<img
									class="h-24"
									src="admin_area/product_images/<?php echo $product_img1; ?>"
									alt="<?=$product_title ?>"
								/>
							</div>
							<div class="flex flex-col justify-between ml-4 flex-grow">
								<span class="font-bold text-sm"><?php echo $product_title; ?></span>
								<span class="text-red-500 text-xs"><?=$manufacturer_name ?></span>
								<a
									href="cart_del.php?p_id=<?=$pro_id; ?>"
									class="font-semibold hover:text-red-500 text-gray-500 text-xs"
									>Remove</a
								>
							</div>
						</div>
						<div class="flex justify-center items-center text-center w-1/5 quantity-desc border-2 border-gray-700 ">
							<?php
							$quantity = 1;  
							?>
								<a href="javascript:" id="minus2" onclick="decrementValue()" name="sub" class="minus py-2 px-4  text-gray-600 w-8"
								>
									<i class="fas fa-minus"></i> </a>
								<input type="text" id="qty2" name="product_qty" min="1" value="<?php echo $_SESSION['pro_qty']; ?>" data-product_id="<?php echo $pro_id; ?>" class="num quantity p-2 cursor-text border-none focus:border-none w-12 text-xl bg-transparent text-center focus:ring-0">
								
								<a href="javascript:" id="add2" onclick="incrementValue()" name="add" class="plus py-2 px-4 text-gray-600 w-8">
									<i class="fas fa-plus"></i> </a>
						</div>
						<span class="text-center w-1/5 font-semibold text-sm">$<?php echo $only_price; ?>.00</span>
						<span class="text-center w-1/5 font-semibold text-sm">$<?php echo $sub_total; ?>.00</span>
					</div>
					<?php } } ?>
					<a href="index.php" class="flex font-semibold text-indigo-600 text-sm mt-10">
						<svg
							class="fill-current mr-2 text-indigo-600 w-4"
							viewBox="0 0 448 512"
						>
							<path
								d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z"
							/>
						</svg>
						Continue Shopping
					</a>
				</div>

				<div id="summary" class="w-1/4 px-8 py-10">
					<h1 class="font-semibold text-2xl border-b pb-8 ">Order Summary</h1>
					<p class="border-b text-sm font-thin py-2">Shipping and additional costs are calculated based on the values you have entered</p>
					<div class="flex justify-between mt-10 mb-5">
						<span class="font-semibold text-sm uppercase">Item(s) <?php echo $count; ?> </span>
						<span class="font-semibold text-sm"> <?php echo $total; ?>.00 rwf</span>
					</div>
					<div>
						<label class="font-medium inline-block mb-2 text-sm uppercase"
							>Payments details</label>
							<div class="flex flex-col rounded-md">
								<div class="pt-4 flex justify-between">
									<span class="text-gray-300">Order Subtotal</span>
									<div class="font-semibold"><?=$total?> rwf</div>
								</div>
								<div class="pt-4 flex justify-between">
									<span class="text-gray-300">Shipping and handling</span>
									<div class="font-semibold"><?=$shipping?> rwf</div>
								</div>
								<div class="pt-4 flex justify-between">
									<span class="text-gray-300">Taxes</span>
									<div class="font-semibold">0.00 rwf</div>
								</div>
							</div>
					</div>
					<div class="py-10">
						<label
							for="promo"
							class="font-semibold inline-block mb-3 text-sm uppercase"
							>Promo Code</label
						>
						<input
							type="text"
							name="code"
							id="promo"
							placeholder="Enter your code"
							class="p-2 text-sm w-full"
						/>
					</div>
					<button name="apply_coupon"
						class="bg-primarycolor text-white rounded-lg hover:scale-105 px-5 py-2 text-sm uppercase"
					>
						Apply
					</button>
					<div class="border-t mt-8">
						<div
							class="flex font-semibold justify-between py-6 text-sm uppercase"
						>
							<span>Total cost</span>
							<span><?php echo $totals;?> rwf</span>
						</div>
						<a href="checkout.php" class="block text-center bg-primarycolor font-semibold hover:scale-105 py-3 text-sm rounded-lg text-white uppercase w-full"
						> Checkout
						</a>
					</div>
					</form>
					<?php

					if(isset($_POST['apply_coupon'])){
					$code = $_POST['code'];
					if($code == ""){
					}
					else{
					$get_coupons = "select * from coupons where coupon_code='$code'";
					$run_coupons = mysqli_query($con,$get_coupons);
					$check_coupons = mysqli_num_rows($run_coupons);
					if($check_coupons == 1){
					$row_coupons = mysqli_fetch_array($run_coupons);
					$coupon_pro = $row_coupons['product_id'];
					$coupon_price = $row_coupons['coupon_price'];
					$coupon_limit = $row_coupons['coupon_limit'];
					$coupon_used = $row_coupons['coupon_used'];
					if($coupon_limit == $coupon_used){
					echo "<script>alert('Your Coupon Code Has Been Expired')</script>";
					}
					else{
					$get_cart = "select * from cart where p_id='$coupon_pro' AND ip_add='$ip_add'";
					$run_cart = mysqli_query($con,$get_cart);
					$check_cart = mysqli_num_rows($run_cart);
					if($check_cart == 1){
					$add_used = "update coupons set coupon_used=coupon_used+1 where coupon_code='$code'";
					$run_used = mysqli_query($con,$add_used);
					$update_cart = "update cart set p_price='$coupon_price' where p_id='$coupon_pro' AND ip_add='$ip_add'";
					$run_update = mysqli_query($con,$update_cart);
					echo "<script>alert('Your Coupon Code Has Been Applied')</script>";
					echo "<script>window.open('cart.php','_self')</script>";
					}
					else{
					echo "<script>alert('Product Does Not Exist In Cart')</script>";
					}
					}
					}
					else{
					echo "<script> alert('Your Coupon Code Is Not Valid') </script>";
					}
					}
					}?>
				</div>
			</div>
		</div>
		<script type="text/javascript">
    var qty2 = document.querySelector("#qty2");
    function decrementValue(){
		if(!isNaN(qty2.value) && qty2.value > 0 ) {
			qty2.value--;
		}
    }
    function incrementValue(){
        if(!isNaN(qty2.value)) {
            qty2.value++;
        }
    }
</script>
	</body>
</html>
