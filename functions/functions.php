<?php

$db = mysqli_connect("localhost","root","","ecom_store");

/// IP address code starts /////
function getRealUserIp(){
    switch(true){
      case (!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
      case (!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
      case (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];
      default : return $_SERVER['REMOTE_ADDR'];
    }
 }
/// IP address code Ends /////


// items function Starts ///

function items(){

global $db;

$ip_add = getRealUserIp();

$get_items = "select * from cart where ip_add='$ip_add'";

$run_items = mysqli_query($db,$get_items);

$count_items = mysqli_num_rows($run_items);

echo $count_items;

}


// items function Ends ///

// total_price function Starts //

function total_price(){

global $db;

$ip_add = getRealUserIp();

$total = 0;

$select_cart = "select * from cart where ip_add='$ip_add'";

$run_cart = mysqli_query($db,$select_cart);

while($record=mysqli_fetch_array($run_cart)){

$pro_id = $record['p_id'];

$pro_qty = $record['qty'];


$sub_total = $record['p_price']*$pro_qty;

$total += $sub_total;






}

echo "$" . $total;



}



// total_price function Ends //

// getPro function Starts //

function getPro(){

global $db;

$get_products = "select * from products order by 1 DESC LIMIT 0,8";

$run_products = mysqli_query($db,$get_products);

while($row_products=mysqli_fetch_array($run_products)){

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

<li class='max-w-md mx-auto shadow-bs relative border border-gray-100 flex flex-col'>
<p class='status absolute -top-1 -right-1 bg-primarycolor text-white transform rotate-3 px-2 text-2xl font-semibold leading-none'> $pro_label </p>
<div class='product' >

<a href='$pro_url' >

<img class='w-full aspect-[3/2] object-cover' src='./assets/image/$pro_img1 alt=$pro_img1 />

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

// getPro function Ends //


/// getProducts Function Starts ///

function getProducts(){

/// getProducts function Code Starts ///

global $db;

$aWhere = array();

/// Manufacturers Code Starts ///

if(isset($_REQUEST['man'])&&is_array($_REQUEST['man'])){

foreach($_REQUEST['man'] as $sKey=>$sVal){

if((int)$sVal!=0){

$aWhere[] = 'manufacturer_id='.(int)$sVal;

}

}

}

/// Manufacturers Code Ends ///

/// Products Categories Code Starts ///

if(isset($_REQUEST['p_cat'])&&is_array($_REQUEST['p_cat'])){

foreach($_REQUEST['p_cat'] as $sKey=>$sVal){

if((int)$sVal!=0){

$aWhere[] = 'p_cat_id='.(int)$sVal;

}

}

}

/// Products Categories Code Ends ///

/// Categories Code Starts ///

if(isset($_REQUEST['cat'])&&is_array($_REQUEST['cat'])){

foreach($_REQUEST['cat'] as $sKey=>$sVal){

if((int)$sVal!=0){

$aWhere[] = 'cat_id='.(int)$sVal;

}

}

}

/// Categories Code Ends ///

$per_page=6;

if(isset($_GET['page'])){

$page = $_GET['page'];

}else {

$page=1;

}

$start_from = ($page-1) * $per_page ;

$sLimit = " order by 1 DESC LIMIT $start_from,$per_page";

$sWhere = (count($aWhere)>0?' WHERE '.implode(' or ',$aWhere):'').$sLimit;

$get_products = "select * from products  ".$sWhere;

$run_products = mysqli_query($db,$get_products);

while($row_products=mysqli_fetch_array($run_products)){

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

$product_price = "<del> $pro_price rwf </del>";

$product_psp_price = "| $pro_psp_price rwf";

}
else{

$product_psp_price = "";

$product_price = "$pro_price rwf";

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

<li class='max-w-md mx-auto shadow-bs relative border border-gray-100 flex flex-col'>
<p class='status absolute -top-1 -right-1 bg-primarycolor text-white transform rotate-3 px-2 text-2xl font-semibold leading-none'> $pro_label </p>
<div class='product' >

<a href='$pro_url' >

<img class='w-full aspect-[3/2] object-cover' src='./assets/image/$pro_img1' alt=$pro_img1 />

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
									>$product_price $product_psp_price </a
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
                <i class='fa fa-shopping-cart'></i> Add To Cart
              </a>
							</button>
						</div>

</li>

";

}
/// getProducts function Code Ends ///



}


/// getProducts Function Ends ///


/// getPaginator Function Starts ///

function getPaginator(){

/// getPaginator Function Code Starts ///

$per_page = 6;

global $db;

$aWhere = array();

$aPath = '';

/// Manufacturers Code Starts ///

if(isset($_REQUEST['man'])&&is_array($_REQUEST['man'])){

foreach($_REQUEST['man'] as $sKey=>$sVal){

if((int)$sVal!=0){

$aWhere[] = 'manufacturer_id='.(int)$sVal;

$aPath .= 'man[]='.(int)$sVal.'&';

}

}

}

/// Manufacturers Code Ends ///

/// Products Categories Code Starts ///

if(isset($_REQUEST['p_cat'])&&is_array($_REQUEST['p_cat'])){

foreach($_REQUEST['p_cat'] as $sKey=>$sVal){

if((int)$sVal!=0){

$aWhere[] = 'p_cat_id='.(int)$sVal;

$aPath .= 'p_cat[]='.(int)$sVal.'&';

}

}

}

/// Products Categories Code Ends ///

/// Categories Code Starts ///

if(isset($_REQUEST['cat'])&&is_array($_REQUEST['cat'])){

foreach($_REQUEST['cat'] as $sKey=>$sVal){

if((int)$sVal!=0){

$aWhere[] = 'cat_id='.(int)$sVal;

$aPath .= 'cat[]='.(int)$sVal.'&';

}

}

}

/// Categories Code Ends ///

$sWhere = (count($aWhere)>0?' WHERE '.implode(' or ',$aWhere):'');

$query = "select * from products ".$sWhere;

$result = mysqli_query($db,$query);

$total_records = mysqli_num_rows($result);

$total_pages = ceil($total_records / $per_page);

echo "<p><a class='px-7 py-4 text-gray-700' href='index.php?page=1";

if(!empty($aPath)){ echo "&".$aPath; }

echo "' >".'&larr; First Page'."</a></p>";

for ($i=1; $i<=$total_pages; $i++){

echo "<p><a href='index.php?page=".$i.(!empty($aPath)?'&'.$aPath:'')."' > <span class='block px-7'>$i</span> </a></p>";

};

echo "<p><a class='px-7 py-4 text-gray-700' href='index.php?page=$total_pages";

if(!empty($aPath)){ echo "&".$aPath; }

echo "' >".'Last Page &rarr;'."</a></p>";

/// getPaginator Function Code Ends ///

}

/// getPaginator Function Ends ///



?>
