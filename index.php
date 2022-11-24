<?php include 'includes/header.php';
include("functions/functions.php"); ?>

	<body
		class="font-serif text-textcolor bg-gray-50"
	>
		<?php include 'includes/main.php' ?>
		<section class="banner relative hidden sm:block">
			<div
				x-data="{swiper: null}"
				x-init="swiper = new Swiper($refs.container, {
      loop: true,
      slidesPerView: 1,
      spaceBetween: 0,
  
      breakpoints: {
        640: {
          slidesPerView: 1,
          spaceBetween: 0,
        },
        768: {
          slidesPerView: 1,
          spaceBetween: 0,
        },
        1024: {
          slidesPerView: 1,
          spaceBetween: 0,
        },
      },
    })"
				class="relative w-full mx-auto flex flex-row overflow-hidden"
			>
				<div class="absolute inset-y-0 left-0 z-10 flex items-center">
					<button
						@click="swiper.slidePrev()"
						class="bg-white -ml-2 lg:-ml-4 flex justify-center items-center w-10 h-10 rounded-full shadow focus:outline-none"
					>
						<svg
							viewBox="0 0 20 20"
							fill="currentColor"
							class="chevron-left w-6 h-6"
						>
							<path
								fill-rule="evenodd"
								d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
								clip-rule="evenodd"
							></path>
						</svg>
					</button>
				</div>

				<div class="swiper-container w-full flex flex-col" x-ref="container">
					<div class="swiper-wrapper">
						<!-- Slides -->
						<div class="swiper-slide px-2">
							<div class="flex flex-col rounded shadow overflow-hidden">
								<div class="flex-shrink-0">
									<img
										class="h-96 w-full object-cover"
										src="./asset/image/banner-1.jpg"
										alt=""
									/>
								</div>
							</div>
						</div>

						<div class="swiper-slide px-4">
							<div class="flex flex-col rounded shadow overflow-hidden">
								<div class="flex-shrink-0">
									<img
										class="h-96 w-full object-cover"
										src="./asset/image/banner-2.jpg"
										alt=""
									/>
								</div>
							</div>
						</div>

						<div class="swiper-slide px-4">
							<div class="flex flex-col rounded shadow overflow-hidden">
								<div class="flex-shrink-0">
									<img
										class="h-96 w-full object-cover"
										src="./asset/image/banner-3.jpg"
										alt=""
									/>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="absolute inset-y-0 right-0 z-[99] flex items-center">
					<button
						@click="swiper.slideNext()"
						class="bg-white -mr-2 lg:-mr-4 flex justify-center items-center w-10 h-10 rounded-full shadow focus:outline-none"
					>
						<svg
							viewBox="0 0 20 20"
							fill="currentColor"
							class="chevron-right w-6 h-6"
						>
							<path
								fill-rule="evenodd"
								d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
								clip-rule="evenodd"
							></path>
						</svg>
					</button>
				</div>
			</div>
			<div class="absolute inset-0 z-50 text-center flex flex-col items-center">
				<h1
					class="sm:text-3xl sm:first-letter:text-5xl lg:text-5xl lg:first-letter:text-9xl font-semibold"
				>
					Agroculture <span class="text-primarycolor">Products</span>
				</h1>
				<div class="max-w-lg mx-auto">
					<h2 class="text-2xl font-semibold sm:mt-2 md:mt-4 lg:mt-8">
						Fresh And Organic Products For Your
					</h2>
					<p class="mt-2 leading-tight">
						Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Aliquam
						Libero Nostrum Veniam Facere Tempore Nisi.
					</p>
					<button
						class="ring-2 ring-primarycolor lg:px-6 sm:px-6 lg:py-2 sm:py-1 mt-2 md:mt-6 text-xl font-semibold hover:bg-primarycolor hover:text-white rounded-lg transition-all duration-500"
					>
						Shop Now
					</button>
				</div>
			</div>
		</section>

		<main class="px-[9%] py-8 bg-gray-100 g-gray-700">
			<!-- <section
				class="banner-container grid lg:grid-cols-3 md:grid-cols-2 gap-4 text-[100%]"
			>
				<div class="banner relative h-[15rem] max-w-md mx-auto">
					<img
						src="./asset/image/banner-1.jpg"
						alt=""
						class="w-full h-full object-cover"
					/>
					<div
						class="content absolute top-1/2 left-8 transform -translate-y-1/2"
					>
						<span>limited sales</span>
						<h3 class="font-semibold tracking-normal pt-2">upto 50% off</h3>
						<button
							class="btn px-4 py-2 mt-2 bg-primarycolor text-white hover:scale-105 rounded-lg transition-all duration-500"
						>
							shop now
						</button>
					</div>
				</div>

				<div class="banner relative h-[15rem] max-w-md mx-auto">
					<img
						src="./asset/image/banner-2.jpg"
						alt=""
						class="w-full h-full object-cover"
					/>
					<div
						class="content absolute top-1/2 left-8 transform -translate-y-1/2"
					>
						<span>limited sales</span>
						<h3 class="font-semibold tracking-normal pt-2">upto 50% off</h3>
						<button
							class="btn px-4 py-2 mt-2 bg-primarycolor text-white hover:scale-105 rounded-lg transition-all duration-500"
						>
							shop now
						</button>
					</div>
				</div>

				<div class="banner relative h-[15rem] max-w-md mx-auto">
					<img
						src="./asset/image/banner-3.jpg"
						alt=""
						class="w-full h-full object-cover"
					/>
					<div
						class="content absolute top-1/2 left-8 transform -translate-y-1/2"
					>
						<span>limited sales</span>
						<h3 class="font-semibold tracking-normal pt-2">upto 50% off</h3>
						<button
							class="btn px-4 py-2 mt-2 bg-primarycolor text-white hover:scale-105 rounded-lg transition-all duration-500"
						>
							shop now
						</button>
					</div>
				</div>
			</section> -->

			<div
				class="cart-wraper w-[100vw] bg-gray-700/50 fixed right-0 top-0 z-50 will-change-transform transition-all duration-1000"
			>
				<div
					id="cart"
					class="cart-container hidden h-[100vh] w-[600px] shadow-bs bg-white float-right py-10 px-3 relative"
				>
					<button
						id="closecart"
						type="button"
						onclick=""
						class="cart-heading flex items-center text-lg font-medium cursor-pointer gap-1 ml-3 bg-transparent"
					>
						<i class="fas fa-less-than"></i>
						<span class="heading ml-3">Your Cart</span>
						<span class="cart-num-items ml-3 text-primarycolor">(2 items)</span>
					</button>

					<div class="empty-cart m-10 text-center hidden">
						<i class="fas fa-shopping-bag text-9xl"></i>
						<h3 class="font-semibold text-xl mt-4">
							Your shopping bag is empty
						</h3>
						<a href="#">
							<button
								onclick=""
								class="btn w-full max-w-[400px] py-3 px-2 rounded-2xl text-lg mt-3 mb-10 uppercase bg-primarycolor text-white cursor-pointer transform scale-100 transition-transform duration-500 hover:scale-110"
							>
								Continue Shopping
							</button>
						</a>
					</div>

					<div
						class="product-container mt-4 overflow-auto max-h-[70vh] py-5 px-3"
					>
						<div class="product flex gap-8 p-5">
							<img
								class="cart-product-image w-44 h-36 rounded-2xl object-cover"
								src="./asset/image/product-1.jpg"
								alt=""
							/>
							<div class="item-desc">
								<div class="flex top justify-between w-80">
									<h5 class="font-bold text-2xl">Product name</h5>
									<h4 class="font-bold text-xl">500 rwf</h4>
								</div>
								<div class="bottom mt-14">
									<div class="flex items-center justify-between">
										<p class="quantity-desc border-2 border-gray-900 p-2">
											<span
												class="minus text-base py-2 px-4 cursor-pointer border-r-2"
											>
												<i class="fas fa-minus"></i>
											</span>
											<span
												class="num py-2 px-4 cursor-pointer border-r-2 text-xl"
											>
												1
											</span>
											<span class="plus text-base py-2 px-4 cursor-pointer">
												<i class="fas fa-plus"></i>
											</span>
										</p>
										<button
											class="remove-item w-6 h-6 flex items-center justify-center rounded-full ring-2 ring-[#f024] ring-offset-2 text-2xl text-[#f02d34] rotate-45 cursor-pointer bg-transparent"
											type="button"
											onclick=""
										>
											<i class="fas fa-plus"></i>
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="cart-bottom absolute bottom-3 right-2 w-full py-8 px-16">
						<div class="total flex justify-between items-center">
							<h3 class="font-semibold text-xl">Subtotal:</h3>
							<h3 class="font-semibold text-xl">500 rwf</h3>
						</div>
						<div class="btn-container w-[400px] m-auto">
							<button
								type="button"
								onclick=""
								class="btn w-full max-w-[400px] py-3 px-2 rounded-2xl text-lg mt-3 mb-10 uppercase bg-primarycolor text-white cursor-pointer transform scale-100 transition-transform duration-500 hover:scale-110"
							>
								pay with mobile money
							</button>
						</div>
					</div>
				</div>
			</div>
			<section class="product">
				<div class="page-title text-center pt-8 pb-8 bg-primarycolor/20">
					<h1 class="font-semibold text-3xl">Best Selling Products</h1>
					<p class="">agriculture products</p>
					<!-- <hr class="h-[3px] w-full bg-primarycolor" /> -->
				</div>
				<!-- view only -->
				<div class="mt-4 inline-flex border divide-x divide-gray-200">
					<a
						href="#"
						aria-disabled="true"
						class="flex flex-shrink-0 px-7 py-4 pointer-events-none text-gray-500 bg-primarycolor-dark"
						>View products by >></a
					>
					<a href="#" class="px-7 py-4 hover:font-semibold hover:underline"
						>Vegetables</a
					>
					<a href="#" class="px-7 py-4 hover:font-semibold hover:underline"
						>Fruits</a
					>
					<a href="#" class="px-7 py-4 hover:font-semibold hover:underline"
						>Grain</a
					>
				</div>
				<!-- products -->
				<ul
					class="mt-6 grid gap-16 md:grid-cols-2 lg:grid-cols-3 place-items-center"
				>
					<?php getProducts();  ?>
				</ul>
				<!-- pagination -->
				<div class="text-center">
					<div class="mt-8 py-4 inline-flex border divide-x divide-gray-200">
						<?php getPaginator(); ?>
					</div>
				</div>
			</section>

			<section
				class="subscribe flex flex-col items-center p-16 bg-primarycolor/20 space-y-2 mt-8"
			>
				<h1 class="text-4xl font-semibold">Subscribe For Latest Updates</h1>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
					eiusmod tempor
				</p>
				<span class="w-full flex mt-2">
					<input
						id="search"
						class="w-full h-10 border-0 focus:ring-0 border-b-2 border-gray-400 focus:border-primarycolor rounded-l-lg"
						type="text"
						placeholder="Enter Email To Subscribe ..."
					/>
					<button
						class="bg-primarycolor px-2 rounded-r-lg font-semibold text-white hover:bg-primarycolor-dark"
					>
						Subscribe
					</button>
				</span>
			</section>

			<section class="mt-8">
				<div class="page-title text-center pt-8 pb-8 bg-primarycolor/20">
					<h1 class="text-3xl font-semibold">Client Testimonials</h1>
					<!-- <hr class="h-[3px] w-full bg-primarycolor" /> -->
				</div>
				<div class="mt-8 marquee relative h-[300px] w-full overflow-x-hidden">
					<ul
						class="swiper-container mt-4 track flex gap-4 absolute whitespace-normal will-change-transform animate-marquee w-[180%]"
					>
						<li
							class="testimonial min-w-[400px] max-w-md mx-auto bg-white relative px-8 py-4 flex flex-col shadow-bs rounded-lg"
						>
							<q class="leading-tight flex-1">
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque
								enim rerum accusantium! Reprehenderit accusantium eaque eveniet
								recusandae voluptas, qui harum quo nemo explicabo, voluptatibus
								quis! Deserunt nobis provident dolor? Eveniet?
							</q>
							<a href="#" class="details flex items-center mt-5">
								<div
									class="imgbx relative flex flex-shrink-0 w-14 h-14 rounded-full overflow-hidden mr-3 ring-2 ring-primarycolor"
								>
									<img
										src="./asset/image/pic-2.png"
										alt=""
										class="absolute top-0 left-0 w-full h-full object-cover hover:scale-105"
									/>
								</div>
								<h3
									class="text-lg font-semibold leading-none text-primarycolor"
								>
									Sameone famous <br /><span
										class="text-xs tracking-widest text-graycolor"
										>creative designer</span
									>
								</h3>
							</a>
						</li>
						<li
							class="testimonial min-w-[400px] max-w-md mx-auto bg-white relative px-8 py-4 flex flex-col shadow-bs rounded-lg"
						>
							<q class="leading-tight flex-1">
								Lorem ipsum dolor sit amet consectetur, adipisicing elit.
								Architecto laborum, natus excepturi dolore nemo non neque aut
								beatae quidem a.
							</q>
							<a href="#" class="details flex items-center mt-5">
								<div
									class="imgbx relative flex flex-shrink-0 w-14 h-14 rounded-full overflow-hidden mr-3 ring-2 ring-primarycolor"
								>
									<img
										src="./asset/image/pic-1.png"
										alt=""
										class="absolute top-0 left-0 w-full h-full object-cover hover:scale-105"
									/>
								</div>
								<h3
									class="text-lg font-semibold leading-none text-primarycolor"
								>
									Sameone famous <br /><span
										class="text-xs tracking-widest text-graycolor"
										>creative designer</span
									>
								</h3>
							</a>
						</li>
						<li
							class="testimonial min-w-[400px] max-w-md mx-auto bg-white relative px-8 py-4 flex flex-col shadow-bs rounded-lg"
						>
							<q class="leading-tight flex-1">
								Lorem ipsum dolor, sit amet consectetur adipisicing elit.
								Voluptatem, officia vitae ipsa sit illo enim? Repellendus magnam
								esse dicta sapiente iure sunt rem minima officiis?</q
							>
							<a href="#" class="details flex items-center mt-5">
								<div
									class="imgbx relative flex flex-shrink-0 w-14 h-14 rounded-full overflow-hidden mr-3 ring-2 ring-primarycolor"
								>
									<img
										src="./asset/image/pic-3.png"
										alt=""
										class="absolute top-0 left-0 w-full h-full object-cover hover:scale-105"
									/>
								</div>
								<h3
									class="text-lg font-semibold leading-none text-primarycolor"
								>
									Sameone famous <br /><span
										class="text-xs tracking-widest text-graycolor"
										>creative designer</span
									>
								</h3>
							</a>
						</li>
						<li
							class="testimonial min-w-[400px] max-w-md mx-auto bg-white relative px-8 py-4 flex flex-col shadow-bs rounded-lg"
						>
							<q class="leading-tight flex-1">
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam
								molestiae modi possimus reprehenderit sequi incidunt.
							</q>
							<a href="#" class="details flex items-center mt-5">
								<div
									class="imgbx relative flex flex-shrink-0 w-14 h-14 rounded-full overflow-hidden mr-3 ring-2 ring-primarycolor"
								>
									<img
										src="./asset/image/pic-2.png"
										alt=""
										class="absolute top-0 left-0 w-full h-full object-cover hover:scale-105"
									/>
								</div>
								<h3
									class="text-lg font-semibold leading-none text-primarycolor"
								>
									Sameone famous <br /><span
										class="text-xs tracking-widest text-graycolor"
										>creative designer</span
									>
								</h3>
							</a>
						</li>
						<li
							class="testimonial min-w-[400px] max-w-md mx-auto bg-white relative px-8 py-4 flex flex-col shadow-bs rounded-lg"
						>
							<q class="leading-tight flex-1">
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint
								harum sapiente est ipsum quam odio.
							</q>
							<a href="#" class="details flex items-center mt-5">
								<div
									class="imgbx relative flex flex-shrink-0 w-14 h-14 rounded-full overflow-hidden mr-3 ring-2 ring-primarycolor"
								>
									<img
										src="./asset/image/pic-1.png"
										alt=""
										class="absolute top-0 left-0 w-full h-full object-cover hover:scale-105"
									/>
								</div>
								<h3
									class="text-lg font-semibold leading-none text-primarycolor"
								>
									Sameone famous <br /><span
										class="text-xs tracking-widest text-graycolor"
										>creative designer</span
									>
								</h3>
							</a>
						</li>
						<li
							class="testimonial min-w-[400px] max-w-md mx-auto bg-white relative px-8 py-4 flex flex-col shadow-bs rounded-lg"
						>
							<q class="leading-tight flex-1">
								Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab,
								vero.
							</q>
							<a href="#" class="details flex items-center mt-5">
								<div
									class="imgbx relative flex flex-shrink-0 w-14 h-14 rounded-full overflow-hidden mr-3 ring-2 ring-primarycolor"
								>
									<img
										src="./asset/image/pic-3.png"
										alt=""
										class="absolute top-0 left-0 w-full h-full object-cover hover:scale-105"
									/>
								</div>
								<h3
									class="text-lg font-semibold leading-none text-primarycolor"
								>
									Sameone famous <br /><span
										class="text-xs tracking-widest text-graycolor"
										>creative designer</span
									>
								</h3>
							</a>
						</li>
					</ul>
				</div>
			</section>

			<section class="blog">
				<div class="page-title text-center pt-8 pb-8 bg-primarycolor/20">
					<h1 class="font-semibold text-3xl">Blogs</h1>
					<p class=""></p>
					<!-- <hr class="h-[3px] w-full bg-primarycolor" /> -->
				</div>
				<ul class="grid gap-8 mt-8 md:grid-cols-2 lg:grid-cols-3">
					<li
						class="blog max-w-sm mx-auto shadow-bs border rounded-lg overflow-hidden flex flex-col"
					>
						<!-- blog image -->
						<img
							src="./asset/image/blog-1.jpg"
							alt=""
							class="w-full aspect-[3/2]"
						/>

						<div class="blog-info p-3 flex flex-col flex-1">
							<div class="text-sm text-graycolor font-thin tracking-widest">
								<div class="flex justify-between">
									<span
										><i class="fas fa-user text-primarycolor pr-2"></i>By
										Shaloom</span
									>
									<span
										><i class="fas fa-calendar text-primarycolor pr-2"></i
										>21<sup>st</sup> may 2021</span
									>
								</div>
								<hr class="w-full h-[2px] bg-primarycolor" />
							</div>
							<h2 class="text-xl py-2 font-semibold">Blogs Title Goes Here</h2>
							<p class="flex-1 leading-none line-clamp-3">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis
								accusamus necessitatibus, aperiam explicabo dignissimos porro
								autem perspiciatis veritatis
							</p>
						</div>
						<button
							class="px-6 py-2 m-3 ring-2 ring-primarycolor rounded-lg font-semibold hover:bg-primarycolor hover:text-white transition-all duration-500"
						>
							Read more
						</button>
					</li>
					<li
						class="blog max-w-sm mx-auto shadow-bs border rounded-lg overflow-hidden flex flex-col"
					>
						<!-- blog image -->
						<img
							src="./asset/image/blog-1.jpg"
							alt=""
							class="w-full aspect-[3/2]"
						/>

						<div class="blog-info p-3 flex flex-col flex-1">
							<div class="text-sm text-graycolor font-thin tracking-widest">
								<div class="flex justify-between">
									<span
										><i class="fas fa-user text-primarycolor pr-2"></i>By
										Shaloom</span
									>
									<span
										><i class="fas fa-calendar text-primarycolor pr-2"></i
										>21<sup>st</sup> may 2021</span
									>
								</div>
								<hr class="w-full h-[2px] bg-primarycolor" />
							</div>
							<h2 class="text-xl py-2 font-semibold">Blogs Title Goes Here</h2>
							<p class="flex-1 leading-none line-clamp-3">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis
								accusamus necessitatibus, aperiam explicabo dignissimos porro
								autem perspiciatis veritatis
							</p>
						</div>
						<button
							class="px-6 py-2 m-3 ring-2 ring-primarycolor rounded-lg font-semibold hover:bg-primarycolor hover:text-white transition-all duration-500"
						>
							Read more
						</button>
					</li>
					<li
						class="blog max-w-sm mx-auto shadow-bs border rounded-lg overflow-hidden flex flex-col"
					>
						<!-- blog image -->
						<img
							src="./asset/image/blog-2.jpg"
							alt=""
							class="w-full aspect-[3/2]"
						/>

						<div class="blog-info p-3 flex flex-col flex-1">
							<div class="text-sm text-graycolor font-thin tracking-widest">
								<div class="flex justify-between">
									<span
										><i class="fas fa-user text-primarycolor pr-2"></i>By
										Shaloom</span
									>
									<span
										><i class="fas fa-calendar text-primarycolor pr-2"></i
										>21<sup>st</sup> may 2021</span
									>
								</div>
								<hr class="w-full h-[2px] bg-primarycolor" />
							</div>
							<h2 class="text-xl py-2 font-semibold">Blogs Title Goes Here</h2>
							<p class="flex-1 leading-none line-clamp-3">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis
								accusamus necessitatibus, aperiam explicabo dignissimos porro
								autem perspiciatis veritatis
							</p>
						</div>
						<button
							class="px-6 py-2 m-3 ring-2 ring-primarycolor rounded-lg font-semibold hover:bg-primarycolor hover:text-white transition-all duration-500"
						>
							Read more
						</button>
					</li>
				</ul>
			</section>

			<section class="contact mt-8" id="contact">
				<div class="page-title text-center pt-8 pb-8 bg-primarycolor/20">
					<h1 class="font-semibold text-3xl">Contact us</h1>
					<p class="">Say samething to us</p>
					<!-- <hr class="h-[3px] w-full bg-primarycolor" /> -->
				</div>

				<div class="mt-8 row flex flex-col lg:flex-row gap-4">
					<iframe
						class="map basis-[25rem] lg:basis-[42rem] rounded-lg"
						src="https://maps.google.com/maps?q=iprc+tumba&output=embed"
					></iframe>

					<form
						action=""
						class="p-8 lg:basis-[42rem] shadow-bs border-2 border-primarycolor text-center rounded-lg accent-primarycolor"
					>
						<h3 class="text-5xl p-4 font-semibold">get in touch</h3>
						<input
							type="text"
							placeholder="your name"
							class="box mb-3 rounded-lg w-full focus:border-primarycolor focus:ring-primarycolor"
						/>
						<input
							type="email"
							placeholder="your email"
							class="box mb-3 rounded-lg w-full focus:border-primarycolor focus:ring-primarycolor"
						/>
						<input
							type="tel"
							placeholder="subject"
							class="box mb-3 rounded-lg w-full focus:border-primarycolor focus:ring-primarycolor"
						/>
						<textarea
							placeholder="your message"
							class="box mb-3 rounded-lg w-full focus:border-primarycolor focus:ring-primarycolor"
							cols="30"
							rows="3"
						></textarea>
						<button
							class="px-6 py-2 m-3 ring-2 ring-primarycolor rounded-lg font-semibold hover:bg-primarycolor hover:text-white transition-all duration-500"
						>
							Send Message
						</button>
					</form>
				</div>
			</section>
		</main>

<!-- <nav
					id="nav"
					class="hidden bg-white h-screen sm:h-auto sm:bg-transparent z-50 py-8 px-4 sm:px-0 sm:py-0 sm:my-4 lg:my-0 sm:flex justify-end flex-1 flex-wrap items-center lg:items-stretch"
				>
					
					<a
						href="#"
						class="relative group px-4 pt-8 sm:pt-0 tex-sm uppercase flex-shrink-0 lg:px-6 lg:text-lg flex items-center"
					>
						<span
							class="absolute top-0 left-0 w-1 h-full bg-gray-200 transform skew-x-[-20deg] hidden sm:block"
						></span>
						<span class="relative"
							>on-sell
							<span
								class="absolute w-full h-1 bg-primarycolor -bottom-1 left-0 rounded-sm scale-x-0 group-hover:scale-x-100 transition ease-bloop duration-400"
							></span>
						</span>
					</a>
					<a
						href="#"
						class="relative group px-4 pt-8 sm:pt-0 tex-sm uppercase flex-shrink-0 lg:px-6 lg:text-lg flex items-center"
					>
						<span
							class="absolute top-0 left-0 w-1 h-full bg-gray-200 transform skew-x-[-20deg] hidden sm:block"
						></span>
						<span class="relative"
							>blogs
							<span
								class="absolute w-full h-1 bg-primarycolor -bottom-1 left-0 rounded-sm scale-x-0 group-hover:scale-x-100 transition ease-bloop duration-400"
							></span>
						</span>
					</a>
					<a
						id="cartbtn"
						href="#"
						class="relative group px-4 pt-8 sm:pt-0 tex-sm uppercase flex-shrink-0 lg:px-6 lg:text-lg flex items-center"
					>
						<span
							class="absolute top-0 left-0 w-1 h-full bg-gray-200 transform skew-x-[-20deg] hidden sm:block"
						></span>
						<span class="relative"
							><span class="flex items-center gap-2"
								>cart<span
									class="w-6 h-6 rounded-full bg-primarycolor text-gray-100 flex items-center justify-center"
									>1</span
								></span
							>
							<span
								class="absolute w-full h-1 bg-primarycolor -bottom-1 left-0 rounded-sm scale-x-0 group-hover:scale-x-100 transition ease-bloop duration-400"
							></span>
						</span>
					</a>
					<a
						href="#"
						class="relative group px-4 pt-8 sm:pt-0 tex-sm uppercase flex-shrink-0 lg:px-6 lg:text-lg flex items-center"
					>
						<span
							class="absolute top-0 left-0 w-1 h-full bg-gray-200 transform skew-x-[-20deg] hidden sm:block"
						></span>
						<span class="relative"
							>Account
							<span
								class="absolute w-full h-1 bg-primarycolor -bottom-1 left-0 rounded-sm scale-x-0 group-hover:scale-x-100 transition ease-bloop duration-400"
							></span>
						</span>
					</a>
				</nav> -->
