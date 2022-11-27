<?php

session_start();

include("includes/db.php");
include("includes/headers.php");
include("functions/functions.php");
// include("includes/main.php");

?>

<body class="font-serif text-textcolor bg-gray-50 transition-all duration-500" >
  <?php include 'includes/main.php' ?>
  <div class="wish-list fixed bottom-8 right-2 bg-primarycolor p-4 grid place-items-center shadow-bs shadow-primarycolor-dark z-10">
    <i class="fas fa-heart text-2xl text-white"></i>
    <div
      class="absolute -top-2 -left-2 bg-white border-2 border-primarycolor w-7 h-7 font-semibold rounded-full grid place-items-center"
    >
      1
    </div>
  </div>
<?php

$product_id = @$_GET['pro_id'];

$get_product = "select * from products where product_url='$product_id'";

$run_product = mysqli_query($con,$get_product);

$check_product = mysqli_num_rows($run_product);

if($check_product == 0){

echo "<script> window.open('index.php','_self') </script>";

}
else{



$row_product = mysqli_fetch_array($run_product);

$p_cat_id = $row_product['p_cat_id'];

$pro_id = $row_product['product_id'];

$pro_title = $row_product['product_title'];

$pro_price = $row_product['product_price'];

$pro_desc = $row_product['product_desc'];

$pro_img1 = $row_product['product_img1'];

$pro_img2 = $row_product['product_img2'];

$pro_img3 = $row_product['product_img3'];

$pro_label = $row_product['product_label'];

$pro_psp_price = $row_product['product_psp_price'];

$pro_features = $row_product['product_features'];

$pro_video = $row_product['product_video'];

$status = $row_product['status'];

$pro_url = $row_product['product_url'];

if($pro_label == ""){


}
else{

$product_label = "

<a class='label sale' href='#' style='color:black;'>

<div class='thelabel'>$pro_label</div>

<div class='label-background'> </div>

</a>

";

}

$get_p_cat = "select * from product_categories where p_cat_id='$p_cat_id'";

$run_p_cat = mysqli_query($con,$get_p_cat);

$row_p_cat = mysqli_fetch_array($run_p_cat);

$p_cat_title = $row_p_cat['p_cat_title'];




?>

<main class="px-[9%] py-8 bg-gray-100">
			<section class="">
				<div
					class="product-detail-container flex flex-col gap-10 m-10 mt-16 text-[#324d67] md:flex-row"
				>
					<div class="">
						<div class="image-container">
							<img
								class="product-detail-image w-96 h-96 object-contain rounded-2xl border-primarycolor border-2 cursor-pointer overflow-hidden transition-all hover:scale-105"
								src="./assets/image/<?=$pro_img1?>"
								alt=""
							/>
						</div>
						<!-- <div class="small-images-container">
							<img class="" src="./asset/image/product-1.jpg" alt="">
						</div> -->
					</div>
          <div class="product-detail-desc flex-1">
						<h1 class="mt-3 text-3xl font-bold"> <?php echo $pro_title; ?> </h1>
						<div class="reviews text-primarycolor mt-2 flex gap-2 items-center">
							<div class="text-xs">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star-half-alt"></i>
								<i class="far fa-star"></i>
							</div>
							<p class="">(20 views)</p>
						</div>
						<h4 class="font-bold mt-2">Details:</h4>
            <p class="mt3">
							<?php echo $pro_desc; ?>
						</p>
						<div class="price-wrapper flex gap-8 mt-5 items-center">
              <?php

if($status == "product"){




if($pro_label == "Sale" or $pro_label == "Gift"){

echo "

<h3 class='text-xl font-semibold'>Product Price:</h3>
<p class='price font-bold text-2xl text-primarycolor'> $pro_price rwf</p></br>
<h3 class='text-xl font-semibold'>Product sale Price:</h3>
<p class='price font-bold text-2xl text-primarycolor'><del> $pro_psp_price rwf</del></p></br>

";

}
else{

echo "

<p class='price font-bold text-2xl text-primarycolor'>$pro_price rwf</p></br>
<h3 class='text-xl font-semibold'>Product sale Price:</h3>

";

}

}
else{


if($pro_label == "Sale" or $pro_label == "Gift"){

echo "

<h3 class='text-xl font-semibold'>Bundle Price:</h3>
<p class='price font-bold text-2xl text-primarycolor'>$pro_price rwf</p></br>
<h3 class='text-xl font-semibold'>Bundle sale Price:</h3>
<p class='price font-bold text-2xl text-primarycolor'><del> $pro_psp_price rwf</del></p></br>

";

}
else{

echo "

<h3 class='text-xl font-semibold'>Bundle Price:</h3>
<p class='price font-bold text-2xl text-primarycolor'>$pro_price rwf</p></br>

";

}


}

?>
						</div>
						<form action="" method="post" class="form-horizontal" ><!-- form-horizontal Starts -->
						<?php
if ($status == "product") {
    $a = 1;
    ?>
						<div class="quanttity flex gap-8 mt-2 items-center">
							<h3 class="text-xl font-semibold">Product Quantity:</h3>
							<?php
							$quantity = 1;  
							?>
							<p class="quantity-desc border-2 border-gray-900 p-2">
								<a href="javascript:" id="minus2" onclick="decrementValue()" name="sub" class="minus text-base py-2 px-4 cursor-pointer border-r-2"
								>
									<i class="fas fa-minus"></i>
								</a>
								<input type="text" id="qty2" name="product_qty" min="1" value="<?php echo $quantity; ?>" class="num p-2 cursor-text border-none focus:border-none w-12 text-xl bg-transparent text-center focus:ring-0">
								
								<a href="javascript:" id="add2" onclick="incrementValue()" name="add" class="plus text-base py-2 px-4 cursor-pointer">
									<i class="fas fa-plus"></i> </a>
							</p>
						</div>
						<div class="buttons flex gap-8 mt-8">
							<button
								type="submit"
								name="add_cart"
								class="add-to-cart py-3 px-6 border rounded-md border-primarycolor text-lg font-semibold bg-white w-52 text-primarycolor cursor-pointer scale-100 transition-all duration-500 hover:scale-105"
							>
								<i class="fa fa-shopping-cart" ></i> Add to Cart
							</button>
							<button
								type="submit"
								name="add_wishlist"
								class="buy-now py-3 px-6 rounded-md text-lg font-semibold bg-primarycolor text-white w-52 cursor-pointer scale-100 transition-all duration-500 hover:scale-105"
							>
								Buy Now
							</button>
						</div>
						<?php } else {  ?>
							
							<div class="quanttity flex gap-8 mt-2 items-center">
							<h3 class="text-xl font-semibold">Bundle Quantity :</h3>
							<?php

    $quantity = 1;  
?>


							<p class="quantity-desc border-2 border-gray-900 p-2">
								<a href="javascript:" id="minus2" onclick="decrementValue()" name="sub" class="minus text-base py-2 px-4 cursor-pointer border-r-2"
								>
									<i class="fas fa-minus"></i>
								</a>
								<input type="text" id="qty2" name="product_qty" min="1" value="<?php echo $quantity; ?>" class="num p-2 cursor-text border-none focus:border-none w-12 text-xl bg-transparent text-center focus:ring-0">
								
								<a href="javascript:" id="add2" onclick="incrementValue()" name="add" class="plus text-base py-2 px-4 cursor-pointer">
									<i class="fas fa-plus"></i> </a>
							</p>
						</div>
						<div class="buttons flex gap-8 mt-8">
							<button
								type="submit"
								name="add_cart"
								class="add-to-cart py-3 px-6 border rounded-md border-primarycolor text-lg font-semibold bg-white w-52 text-primarycolor cursor-pointer scale-100 transition-all duration-500 hover:scale-105"
							>
								<i class="fa fa-shopping-cart" ></i> Add to Cart
							</button>
							<button
								type="submit"
								name="add_wishlist"
								class="buy-now py-3 px-6 rounded-md text-lg font-semibold bg-primarycolor text-white w-52 cursor-pointer scale-100 transition-all duration-500 hover:scale-105"
							>
								Buy Now
							</button>
						</div>
						<?php } ?>
						</form>
					</div>
					
        </div>
<?php
if(isset($_POST['add_cart'])){

$ip_add = getRealUserIp();

$p_id = $pro_id;

$product_qty = $_POST['product_qty'];

$product_size = $_POST['product_size'];


$check_product = "select * from cart where ip_add='$ip_add' AND p_id='$p_id'";

$run_check = mysqli_query($con,$check_product);

if(mysqli_num_rows($run_check)>0){

echo "<script>alert('This Product is already added in cart')</script>";

echo "<script>window.open('$pro_url','_self')</script>";

}
else {

$get_price = "select * from products where product_id='$p_id'";

$run_price = mysqli_query($con,$get_price);

$row_price = mysqli_fetch_array($run_price);

$pro_price = $row_price['product_price'];

$pro_psp_price = $row_price['product_psp_price'];

$pro_label = $row_price['product_label'];

if($pro_label == "Sale" or $pro_label == "Gift"){

$product_price = $pro_psp_price;

}
else{

$product_price = $pro_price;

}

$query = "insert into cart (p_id,ip_add,qty,p_price,size) values ('$p_id','$ip_add','$product_qty','$product_price','$product_size')";

$run_query = mysqli_query($db,$query);

echo "<script>window.open('$pro_url','_self')</script>";

}

}


?>


<?php

if(isset($_POST['add_wishlist'])){

if(!isset($_SESSION['customer_email'])){

echo "<script>alert('You Must Login To Add Product In Wishlist')</script>";

echo "<script>window.open('checkout.php','_self')</script>";

}
else{

$customer_session = $_SESSION['customer_email'];

$get_customer = "select * from customers where customer_email='$customer_session'";

$run_customer = mysqli_query($con,$get_customer);

$row_customer = mysqli_fetch_array($run_customer);

$customer_id = $row_customer['customer_id'];

$select_wishlist = "select * from wishlist where customer_id='$customer_id' AND product_id='$pro_id'";

$run_wishlist = mysqli_query($con,$select_wishlist);

$check_wishlist = mysqli_num_rows($run_wishlist);

if($check_wishlist == 1){

echo "<script>alert('This Product Has Been already Added In Wishlist')</script>";

echo "<script>window.open('$pro_url','_self')</script>";

}
else{

$insert_wishlist = "insert into wishlist (customer_id,product_id) values ('$customer_id','$pro_id')";

$run_wishlist = mysqli_query($con,$insert_wishlist);

if($run_wishlist){

echo "<script> alert('Product Has Inserted Into Wishlist') </script>";

echo "<script>window.open('$pro_url','_self')</script>";

}

}

}

}

?>


<?php

if($status == "product"){
?>

		<div class="mylike-product-wrapper mt-32">
					<h2 class="text-center m-12 font-bold text-3xl">You may olso like</h2>
					<div class="marquee relative h-[500px] w-full overflow-x-hidden">
						<div
							class="mylike-product-container track flex gap-8 absolute whitespace-nowrap will-change-transform animate-marquee w-[180%]"
						>

<?php

$get_products = "select * from products order by rand() LIMIT 0,5";

$run_products = mysqli_query($con,$get_products);

while($row_products = mysqli_fetch_array($run_products)) {

$pro_id = $row_products['product_id'];

$pro_title = $row_products['product_title'];

$pro_price = $row_products['product_price'];

$pro_img1 = $row_products['product_img1'];

$pro_label = $row_products['product_label'];

$manufacturer_id = $row_products['manufacturer_id'];

$get_manufacturer = "select * from manufacturers where manufacturer_id='$manufacturer_id'";

$run_manufacturer = mysqli_query($db,$get_manufacturer);

$row_manufacturer = mysqli_fetch_array($run_manufacturer);

$manufacturer_name = $row_manufacturer['manufacturer_title'];

$pro_psp_price = $row_products['product_psp_price'];

$pro_url = $row_products['product_url'];


if($pro_label == "Sale" or $pro_label == "Gift"){

$product_price = "<del> $$pro_price </del>";

$product_psp_price = "| $$pro_psp_price";

}
else{

$product_psp_price = "";

$product_price = "$$pro_price";

}


if($pro_label == ""){


}
else{

$product_label = "

<a class='label sale' href='#' style='color:black;'>

<div class='thelabel'>$pro_label</div>

<div class='label-background'> </div>

</a>

";

}


echo "

<li class=' mx-auto shadow-bs relative border border-gray-100 flex flex-col'>
<p class='status absolute -top-1 -right-1 bg-primarycolor text-white transform rotate-3 px-2 text-2xl font-semibold leading-none'> $pro_label </p>
<div class='product' >

<a href='$pro_url' >

<img class='w-full aspect-[3/2] object-cover' src='./asset/image/gallery-img-3.jpg' alt='p1' />

</a>

<h2 class='name -mt-6 text-center transform skew-x-[-5deg] -rotate-2' >
<a class='bg-primarycolor px-2 text-white text-3xl leading-tight text-shadow hover:underline' href='$pro_url'>$pro_title</a></h2>
<p class='desc leading-none pt-4 px-8'> $manufacturer_name </p>
<div class='flex flex-col justify-center items-center flex-1 mt-2'>
							<span class='inline-flex text-yellowcolor'>
								<i class='fas fa-star'></i>
								<i class='fas fa-star'></i>
								<i class='fas fa-star'></i>
								<i class='fas fa-star'></i>
								<i class='fas fa-star-half-alt'></i>
							</span>
							<p class='mt-2 font-semibold text-graycolor'>
								Starting at
								<a
									href='#'
									class='text-primarycolor text-shadow px-2 py-1 text-lg'
									>$product_price $product_psp_price rwf</a
								>
							</p>
						</div><div
							class='mt-4 btns grid grid-cols-2 divide-x divide-gray-300 border-t border-gray-300'
						>
							<button
								class='py-3 hover:bg-primarycolor-dark bg-gray-200 font-semibold hover:text-gray-200 transition-all duration-500'
							>
								<a href='$pro_url' class='btn btn-default' >View Details</a>
							</button>
							<button
								class='py-3 hover:bg-primarycolor-dark bg-gray-200 font-semibold hover:text-gray-200 transition-all duration-500'
							>
							<a href='$pro_url' class='btn btn-danger'>
                <i class='fa indexping-cart'></i> Add To Cart
              </a>
							</button>
						</div>

</li>

";


}


?>

<?php } else { ?>

<div class="box same-height"><!-- box same-height Starts -->

<h3 class="text-center"> Bundle Products </h3>

</div><!-- box same-height Ends -->

<?php

$get_bundle_product_relation = "select * from bundle_product_relation where bundle_id='$pro_id'";

$run_bundle_product_relation = mysqli_query($con,$get_bundle_product_relation);

while($row_bundle_product_relation = mysqli_fetch_array($run_bundle_product_relation)){

$bundle_product_relation_product_id = $row_bundle_product_relation['product_id'];

$get_products = "select * from products where product_id='$bundle_product_relation_product_id'";


$run_products = mysqli_query($con,$get_products);

while($row_products = mysqli_fetch_array($run_products)){
$pro_id = $row_products['product_id'];

$pro_title = $row_products['product_title'];

$pro_price = $row_products['product_price'];

$pro_img1 = $row_products['product_img1'];

$pro_label = $row_products['product_label'];

$manufacturer_id = $row_products['manufacturer_id'];

$get_manufacturer = "select * from manufacturers where manufacturer_id='$manufacturer_id'";

$run_manufacturer = mysqli_query($db,$get_manufacturer);

$row_manufacturer = mysqli_fetch_array($run_manufacturer);

$manufacturer_name = $row_manufacturer['manufacturer_title'];

$pro_psp_price = $row_products['product_psp_price'];

$pro_url = $row_products['product_url'];


if($pro_label == "Sale" or $pro_label == "Gift"){

$product_price = "<del> $$pro_price </del>";

$product_psp_price = "| $$pro_psp_price";

}
else{

$product_psp_price = "";

$product_price = "$$pro_price";

}


if($pro_label == ""){


}
else{

$product_label = "

<a class='label sale' href='#' style='color:black;'>

<div class='thelabel'>$pro_label</div>

<div class='label-background'> </div>

</a>

";

}


echo "

<li class='mx-auto shadow-bs relative border border-gray-100 flex flex-col'>
<p class='status absolute -top-1 -right-1 bg-primarycolor text-white transform rotate-3 px-2 text-2xl font-semibold leading-none'> $pro_label </p>
<div class='product' >

<a href='$pro_url' >

<img class='w-full aspect-[3/2] object-cover' src='./asset/image/gallery-img-3.jpg' alt='p1' />

</a>

<h2 class='name -mt-6 text-center transform skew-x-[-5deg] -rotate-2' >
<a class='bg-primarycolor px-2 text-white text-3xl leading-tight text-shadow hover:underline' href='$pro_url'>$pro_title</a></h2>
<p class='desc leading-none pt-4 px-8'> $manufacturer_name </p>
<div class='flex flex-col justify-center items-center flex-1 mt-2'>
							<span class='inline-flex text-yellowcolor'>
								<i class='fas fa-star'></i>
								<i class='fas fa-star'></i>
								<i class='fas fa-star'></i>
								<i class='fas fa-star'></i>
								<i class='fas fa-star-half-alt'></i>
							</span>
							<p class='mt-2 font-semibold text-graycolor'>
								Starting at
								<a
									href='#'
									class='text-primarycolor text-shadow px-2 py-1 text-lg'
									>$product_price $product_psp_price rwf</a
								>
							</p>
						</div><div
							class='mt-4 btns grid grid-cols-2 divide-x divide-gray-300 border-t border-gray-300'
						>
							<button
								class='py-3 hover:bg-primarycolor-dark bg-gray-200 font-semibold hover:text-gray-200 transition-all duration-500'
							>
								<a href='$pro_url' class='btn btn-default' >View Details</a>
							</button>
							<button
								class='py-3 hover:bg-primarycolor-dark bg-gray-200 font-semibold hover:text-gray-200 transition-all duration-500'
							>
							<a href='$pro_url' class='btn btn-danger'>
                <i class='fa indexping-cart'></i> Add To Cart
              </a>
							</button>
						</div>

</li>
";
}
}
?>
<?php } ?>

							
						</div>
					</div>
				</div>
      </section>
</main>
<?php

include("includes/footer.php");

?>

<script type="text/javascript">
    var qty2 = document.getElementById("qty2");
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

<?php } ?>
