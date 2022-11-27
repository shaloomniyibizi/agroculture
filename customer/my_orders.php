<h1>My Orders</h1>

<p class="lead"> Your orders on one place.</p>

<div class="-m-2 text-center">
  <div class="p-2">
    <div class="inline-flex items-center bg-white leading-none text-pink-600 rounded-full p-2 shadow text-teal text-sm">
      <span class="inline-flex bg-pink-600 text-white rounded-full h-6 px-3 justify-center items-center">Pink</span>
      <span class="inline-flex px-2">
        If you have any questions, please feel free to &nbsp;<a href="../contact.php" class="text-primarycolor font-bold" > contact us, </a> &nbsp; our customer service center is working for you 24/7.
      </span>
    </div>
  </div>
</div>
<div class="w-full overflow-hidden rounded-lg shadow-xs">
							<div class="w-full overflow-x-auto">
								<table class="w-full whitespace-no-wrap">
									<thead>
										<tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b">
                                            <th class="px-4 py-3">#</th>
                                            <th class="px-4 py-3">Amount</th>
                                            <th class="px-4 py-3">Invoice</th>
                                            <th class="px-4 py-3">Qty</th>
                                            <th class="px-4 py-3">Size</th>
                                            <th class="px-4 py-3">Order Date</th>
                                            <th class="px-4 py-3">Status</th>
                                            <th class="px-4 py-3">Action</th>
										</tr>
									</thead>
									<tbody class="bg-white divide-y">
                                        <?php
                                            $customer_session = $_SESSION['customer_email'];
                                            $get_customer = "select * from customers where customer_email='$customer_session'";
                                            $run_customer = mysqli_query($con,$get_customer);
                                            $row_customer = mysqli_fetch_array($run_customer);
                                            $customer_id = $row_customer['customer_id'];
                                            $get_orders = "select * from customer_orders where customer_id='$customer_id'";
                                            $run_orders = mysqli_query($con,$get_orders);
                                            $i = 0;
                                            while($row_orders = mysqli_fetch_array($run_orders)){
                                            $order_id = $row_orders['order_id'];
                                            $due_amount = $row_orders['due_amount'];
                                            $invoice_no = $row_orders['invoice_no'];
                                            $qty = $row_orders['qty'];
                                            $size = $row_orders['size'];
                                            $order_date = substr($row_orders['order_date'],0,11);
                                            $order_status = $row_orders['order_status'];
                                            $i++;
                                            if($order_status=='pending'){
                                            $order_status = "<b style='color:red;'>Unpaid</b>";
                                            }
                                            else{
                                            $order_status = "<b style='color:green;'>Paid</b>";
                                            }
                                        ?>
										<tr class="text-gray-700">
											<th class="px-4 py-3"><?php echo $i; ?></th>
                                            <td class="px-4 py-3">$<?php echo $due_amount; ?></td>
                                            <td class="px-4 py-3"><?php echo $invoice_no; ?></td>
                                            <td class="px-4 py-3"><?php echo $qty; ?></td>
                                            <td class="px-4 py-3"><?php echo $size; ?></td>
                                            <td class="px-4 py-3"><?php echo $order_date; ?></td>
                                            <td class="px-4 py-3"><?php echo $order_status; ?></td>
                                            <td class="px-4 py-3 text-center text-white bg-primarycolor rounded-lg">
                                            <a href="confirm.php?order_id=<?php echo $order_id; ?>" target="blank" class="btn btn-success btn-xs" > Confirm If Paid </a>
                                            </td>
                                        </tr><!-- tr Ends -->
                                        <?php } ?>
									</tbody>
								</table>
							</div>
							<div
								class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 "
							>
								<span class="flex items-center col-span-3">
									Showing 21-30 of 100
								</span>
								<span class="col-span-2"></span>
								<!-- Pagination -->
								<span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
									<nav aria-label="Table navigation">
										<ul class="inline-flex items-center">
											<li>
												<button
													class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple"
													aria-label="Previous"
												>
													<svg
														class="w-4 h-4 fill-current"
														aria-hidden="true"
														viewBox="0 0 20 20"
													>
														<path
															d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
															clip-rule="evenodd"
															fill-rule="evenodd"
														></path>
													</svg>
												</button>
											</li>
											<li>
												<button
													class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
												>
													1
												</button>
											</li>
											<li>
												<button
													class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
												>
													2
												</button>
											</li>
											<li>
												<button
													class="px-3 py-1 text-white transition-colors duration-150 bg-primarycolor border border-r-0 border-purple-600 rounded-md focus:outline-none focus:shadow-outline-purple"
												>
													3
												</button>
											</li>
											<li>
												<button
													class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
												>
													4
												</button>
											</li>
											<li>
												<span class="px-3 py-1">...</span>
											</li>
											<li>
												<button
													class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
												>
													8
												</button>
											</li>
											<li>
												<button
													class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
												>
													9
												</button>
											</li>
											<li>
												<button
													class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple"
													aria-label="Next"
												>
													<svg
														class="w-4 h-4 fill-current"
														aria-hidden="true"
														viewBox="0 0 20 20"
													>
														<path
															d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
															clip-rule="evenodd"
															fill-rule="evenodd"
														></path>
													</svg>
												</button>
											</li>
										</ul>
									</nav>
								</span>
							</div>
						</div>
