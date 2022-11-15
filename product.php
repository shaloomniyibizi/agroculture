<?php include 'includes/header.php';
include("functions/functions.php"); ?>
	<body
		class="font-serif text-textcolor bg-gray-50 transition-all duration-500"
	>
		<?php include 'includes/menu.inc.php' ?>

		<div
			class="wish-list fixed bottom-8 right-2 bg-primarycolor p-4 grid place-items-center shadow-bs shadow-primarycolor-dark z-10"
		>
			<i class="fas fa-heart text-2xl text-white"></i>
			<div
				class="absolute -top-2 -left-2 bg-white border-2 border-primarycolor w-7 h-7 font-semibold rounded-full grid place-items-center"
			>
				1
			</div>
		</div>

		<main class="px-[9%] py-8 bg-gray-100">
			<section class="">
				<div
					class="product-detail-container flex flex-col gap-10 m-10 mt-16 text-[#324d67] md:flex-row"
				>
					<div class="">
						<div class="image-container">
							<img
								class="product-detail-image w-96 h-96 object-contain rounded-2xl border-primarycolor border-2 cursor-pointer overflow-hidden transition-all hover:scale-105"
								src="./asset/image/product-1.jpg"
								alt=""
							/>
						</div>
						<!-- <div class="small-images-container">
							<img class="" src="./asset/image/product-1.jpg" alt="">
						</div> -->
					</div>
					<div class="product-detail-desc flex-1">
						<h1 class="mt-3 text-3xl font-bold">Product name</h1>
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
							Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae
							aliquid, beatae eligendi nesciunt doloremque dolore at labore
							aperiam officia expedita impedit ab saepe natus, omnis iste soluta
							atque sapiente numquam.
						</p>
						<div class="price-wrapper flex gap-8 mt-5 items-center">
							<h3 class="text-xl font-semibold">Price:</h3>
							<p class="price font-bold text-2xl text-primarycolor">500 rwf</p>
						</div>
						<div class="quanttity flex gap-8 mt-2 items-center">
							<h3 class="text-xl font-semibold">Quantity:</h3>
							<p class="quantity-desc border-2 border-gray-900 p-2">
								<span
									class="minus text-base py-2 px-4 cursor-pointer border-r-2"
								>
									<i class="fas fa-minus"></i>
								</span>
								<span class="num py-2 px-4 cursor-pointer border-r-2 text-xl">
									1
								</span>
								<span class="plus text-base py-2 px-4 cursor-pointer">
									<i class="fas fa-plus"></i>
								</span>
							</p>
						</div>
						<div class="buttons flex gap-8 mt-8">
							<button
								type="button"
								class="add-to-cart py-3 px-6 border rounded-md border-primarycolor text-lg font-semibold bg-white w-52 text-primarycolor cursor-pointer scale-100 transition-all duration-500 hover:scale-105"
							>
								Add to Cart
							</button>
							<button
								type="button"
								class="buy-now py-3 px-6 rounded-md text-lg font-semibold bg-primarycolor text-white w-52 cursor-pointer scale-100 transition-all duration-500 hover:scale-105"
							>
								Buy Now
							</button>
						</div>
					</div>
				</div>
				<div class="mylike-product-wrapper mt-32">
					<h2 class="text-center m-12 font-bold text-3xl">You may olso like</h2>
					<div class="marquee relative h-[500px] w-full overflow-x-hidden">
						<div
							class="mylike-product-container track flex gap-8 absolute whitespace-nowrap will-change-transform animate-marquee w-[180%]"
						>
							<?php getProducts();  ?>
						</div>
					</div>
				</div>
			</section>
		</main>

		<footer
			class="footer-distributed p-8 text-center bg-textcolor text-white grid place-items-center"
		>
			<h1 class="text-5xl font-bold">About Us</h1>

			<div class="grid gap-4 md:grid-cols-2 lg:grid-cols-3 mt-8 gap-y-20">
				<div class="footer-left text-left">
					<h3 class="text-3xl font-semibold">AgroCulture &copy;</h3>
					<!--	<div class="logo">
    <a href="index.php"><img src="images/logo.png" width="200px"></a>
   </div>-->
					<p class="mt-8">Your product Our market !!!</p>
				</div>

				<div class="footer-center flex flex-col justify-center">
					<div class="flex items-center space-x-2">
						<i
							class="fa fa-map-marker p-2 rounded-full text-lg bg-graycolor hover:scale-110 transition-all"
						></i>
						<p class="text-xl leading-4">
							Agro Culture Fam <br /><span
								class="text-xs tracking-widest text-graycolor"
								>Shaloom</span
							>
						</p>
					</div>
					<div class="flex items-center space-x-4 pt-8">
						<i
							class="fa fa-phone p-2 rounded-full text-lg bg-graycolor hover:scale-110 transition-all"
						></i>
						<p class="text-xl">0789104307</p>
					</div>
					<div class="flex items-center space-x-4 pt-8">
						<i
							class="fa fa-envelope p-2 rounded-full text-lg bg-graycolor hover:scale-110 transition-all"
						></i>
						<p class="text-xl">
							<a href="mailto:agroculture@gmail.com" style="color: white"
								>shaloomniyibizi@gmail.com</a
							>
						</p>
					</div>
				</div>

				<div class="footer-right text-left">
					<span class="font-semibold text-3xl">About AgroCulture</span>
					<p class="footer-company-about pt-8 leading-none">
						AgroCulture is e-commerce trading platform for grains &
						grocerries...
					</p>
					<div class="footer-icons pt-8 flex gap-x-6">
						<a href="#">
							<i
								class="fab fa-facebook bg-graycolor p-2 rounded-sm text-2xl hover:scale-110 transition-all"
							></i>
						</a>
						<a href="#">
							<i
								class="fab fa-instagram bg-graycolor p-2 rounded-sm text-2xl hover:scale-110 transition-all"
							></i>
						</a>
						<a href="#">
							<i
								class="fab fa-youtube bg-graycolor p-2 rounded-sm text-2xl hover:scale-110 transition-all"
							></i>
						</a>
					</div>
				</div>
			</div>
		</footer>
		<div class="copyright text-center bg-[#4e5963] text-white py-2">
			<p class="">
				&copy; Copyrights 2021. Desing By
				<a href="#" class="text-primarycolor text-shadow hover:underline"
					>Shaloom Niyibizi</a
				>
			</p>
		</div>
	</body>
</html>
