<header class="shadow-md bg-gray-50 sticky top-0 left-0 z-[99]">
    <!-- topline -->
    <div class="page-header__topline bg-primarycolor px-4 py-1 sticky top-0 left-0 z-[99]">
      <div class="container clearfix clear-both px-28 mx-auto flex justify-between items-center">

        <div class="currency flex-1">
          <a class="currency__change" href="customer/my_account.php?my_orders">
          <?php
          if(!isset($_SESSION['customer_email'])){
          echo "Welcome :Guest"; 
          }
          else
          { 
              echo "Welcome : " . $_SESSION['customer_email'] . "";
            }
?>
          </a>
        </div>

        <ul class="login flex px-8 space-x-4">

<li class="login__item px-8">
<?php
if(!isset($_SESSION['customer_email'])){
  echo '<a href="customer_register.php" class="login__link">Register</a>';
} 
  else
  { 
      echo '<a href="customer/my_account.php?my_orders" class="login__link">My Account</a>';
  }   
?>  
</li>


<li class="login__item px-8">
<?php
if(!isset($_SESSION['customer_email'])){
  echo '<a href="checkout.php" class="login__link">Sign In</a>';
} 
  else
  { 
      echo '<a href="./logout.php" class="login__link">Logout</a>';
  }   
?>  
  
</li>
</ul>
<div class="basket px-8">
          <a href="cart.php" class="btn btn--basket">
            <i class="icon-basket"></i>
            <?php items(); ?> items
          </a>
        </div>
      
      </div>
    </div>
    <!-- bottomline -->
    <div class="container flex items-center justify-between h-full px-4 mx-auto text-primarycolor">
				<div class="text-xl font-semibold ">Agro-culture</div>
				<!-- Mobile hamburger -->
				<button
					class="p-1 mr-5 -ml-1 rounded-md md:hidden focus:outline-none focus:shadow-outline-purple"
					@click="toggleSideMenu"
					aria-label="Menu"
				>
					<svg
						class="w-6 h-6"
						aria-hidden="true"
						fill="currentColor"
						viewBox="0 0 20 20"
					>
						<path
							fill-rule="evenodd"
							d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
							clip-rule="evenodd"
						></path>
					</svg>
				</button>
				<!-- Search input -->
				<div class="flex justify-center flex-1">
					<div
						class="relative w-full max-w-xl mr-6 focus-within:text-purple-500"
					>
						<div class="absolute inset-y-0 flex items-center pl-2">
							<svg
								class="w-4 h-4"
								aria-hidden="true"
								fill="currentColor"
								viewBox="0 0 20 20"
							>
								<path
									fill-rule="evenodd"
									d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
									clip-rule="evenodd"
								></path>
							</svg>
						</div>
						<input
							class="w-full pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md laceholder-gray-500 ocus:shadow-outline-gray ocus:placeholder-gray-600 g-gray-700 ext-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input"
							type="search"
							placeholder="Search for Product"
							aria-label="Search"
						/>
					</div>
				</div>
				<ul class="flex items-center flex-shrink-0 space-x-6">
					<li class="relative group hidden md:block">
						<a
							href="#"
							class="px-4 py-8 tex-sm uppercase flex-shrink-0 lg:px-6 lg:text-lg flex items-center"
						>
							<span
								class="absolute top-0 left-0 w-1 h-full bg-gray-200 transform skew-x-[-20deg] block g-gray-700"
							></span>
							<span class="relative ">Products
								<span
									class="absolute w-full h-1 bg-primarycolor -bottom-1 left-0 rounded-sm scale-x-0 group-hover:scale-x-100 transition ease-bloop duration-400"
								></span>
							</span>
						</a>
					</li>
					<li class="relative group hidden md:block">
						<a
							href="#"
							class="px-4 py-8 tex-sm uppercase flex-shrink-0 lg:px-6 lg:text-lg flex items-center"
						>
							<span
								class="absolute top-0 left-0 w-1 h-full bg-gray-200 transform skew-x-[-20deg] block"
							></span>
							<span class="relative ">Products
								<span class="absolute w-full h-1 bg-primarycolor -bottom-1 left-0 rounded-sm scale-x-0 group-hover:scale-x-100 transition ease-bloop duration-400"
								></span>
							</span>
						</a>
					</li>
					<li class="relative group hidden md:block">
						<a
							href="#"
							class="px-4 py-8 tex-sm uppercase flex-shrink-0 lg:px-6 lg:text-lg flex items-center"
						>
							<span
								class="absolute top-0 left-0 w-1 h-full bg-gray-200 transform skew-x-[-20deg] block"
							></span>
							<span class="relative ">Products
								<span
									class="absolute w-full h-1 bg-primarycolor -bottom-1 left-0 rounded-sm scale-x-0 group-hover:scale-x-100 transition ease-bloop duration-400"
								></span>
							</span>
						</a>
					</li>
					<li class="relative group hidden md:block">
						<a
							href="#"
							class="px-4 py-8 tex-sm uppercase flex-shrink-0 lg:px-6 lg:text-lg flex items-center"
						>
							<span
								class="absolute top-0 left-0 w-1 h-full bg-gray-200 transform skew-x-[-20deg] block"
							></span>
							<span class="relative"
								>bkjhk
								<span
									class="absolute w-full h-1 bg-primarycolor -bottom-1 left-0 rounded-sm scale-x-0 group-hover:scale-x-100 transition ease-bloop duration-400"
								></span>
							</span>
						</a>
					</li>
					
				</ul>
			</div>
  </header>