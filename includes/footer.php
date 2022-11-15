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

		<script>
			let stxt = document.getElementById('stxt');
			let search = document.getElementById('search');
			stxt.addEventListener('click', function () {
				search.classList.toggle('hidden');
			});
			let menu = document.getElementById('menu');
			let nav = document.getElementById('nav');
			menu.addEventListener('click', function () {
				nav.classList.toggle('hidden');
			});

			let cartbtn = document.getElementById('cartbtn');
			let cart = document.getElementById('cart');
			let closecart = document.getElementById('closecart');
			cartbtn.addEventListener('click', function () {
				cart.classList.toggle('hidden');
			});
			closecart.addEventListener('click', function () {
				cart.classList.toggle('hidden');
			});
		</script>
	</body>
</html>