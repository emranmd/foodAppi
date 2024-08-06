<?php include('important/header.php') ?>

<main class="mainContent_area mb-5">
    <div class="container max-w-xl my-4">
        <a href="index.php" class="back_btn"><i class="fa-solid fa-arrow-right-to-bracket"></i> Back to Home</a>
        <div class="row mt-4">
            <div class="col-lg-6 col-md-6">
                <div class="p-3 bg-white-color rounded mb-3">
                    <h6 class="f-family-r f-w500 f-s14" >Order ID: <span class="text_info">#1507244</span></h6>
                    <p class="m-0 order_time">03:11 PM, 15-07-2024</p>
                    <h6 class="order_type_text">Order Type: <span class="status"> Delivery</span></h6>

                    <!-- this is for order pending -->
                    <div class="deliver_timeArea">
                        <img src="assets/images/out_for_delivery.gif" >
                        <span class="order_delivery_text">Got your order Will Smith!</span>
                    </div>
                    <ul class="delivery_statusSystem my-4">
                        <li class="order_status active">
                            <span class="content">Order Placed</span>
                        </li>
                        <li class="order_status">
                            <span class="content">Order Accept</span>
                        </li>
                        <li class="order_status">
                            <span class="content">Order Processing</span>
                        </li>
                        <li class="order_status">
                            <span class="content">Order Out For Delivery</span>
                        </li>
                        <li class="order_status">
                            <span class="content">Order Delivered</span>
                        </li>
                    </ul>
                    <!-- this is for order pending -->

                    <!-- this is for order accept -->
                    <div class="deliver_timeArea pt-5">
                        <img src="assets/images/placed.gif" >
                        <span class="order_delivery_text">Your order is Accepted.</span>
                    </div>
                    <ul class="delivery_statusSystem my-4">
                        <li class="order_status active">
                            <span class="content">Order Placed</span>
                        </li>
                        <li class="order_status">
                            <span class="content">Order Accept</span>
                        </li>
                        <li class="order_status">
                            <span class="content">Order Processing</span>
                        </li>
                        <li class="order_status">
                            <span class="content">Order Out For Delivery</span>
                        </li>
                        <li class="order_status">
                            <span class="content">Order Delivered</span>
                        </li>
                    </ul>
                    <!-- this is for order accept -->

                    <!-- this is for order delivery -->
                    <div class="deliver_timeArea pt-5">
                        <p class="title m-0">Estimated delivery time</p>
                        <h5 class="m-0 f-family-r">30 min</h5>
                        <img src="assets/images/out_for_delivery.gif" >
                        <span class="order_delivery_text">The delivery man is on the way with your food.</span>
                    </div>
                    <ul class="delivery_statusSystem my-4">
                        <li class="order_status active">
                            <span class="content">Order Placed</span>
                        </li>
                        <li class="order_status active">
                            <span class="content">Order Accept</span>
                        </li>
                        <li class="order_status active">
                            <span class="content">Order Processing</span>
                        </li>
                        <li class="order_status">
                            <span class="content">Order Out For Delivery</span>
                        </li>
                        <li class="order_status">
                            <span class="content">Order Delivered</span>
                        </li>
                    </ul>
                    <!-- this is for order delivery -->

                    <!-- this is for order delivered -->
                    <div class="deliver_timeArea pt-5">
                        <h5 class="m-0 f-family-r">Your order has been delivered</h5>
                        <img src="assets/images/delivered.gif" >
                        <span class="order_delivery_text">Enjoy your food!.</span>
                    </div>
                    <ul class="delivery_statusSystem my-4">
                        <li class="order_status active">
                            <span class="content">Order Placed</span>
                        </li>
                        <li class="order_status active">
                            <span class="content">Order Accept</span>
                        </li>
                        <li class="order_status active">
                            <span class="content">Order Processing</span>
                        </li>
                        <li class="order_status active">
                            <span class="content">Order Out For Delivery</span>
                        </li>
                        <li class="order_status active">
                            <span class="content">Order Delivered</span>
                        </li>
                    </ul>
                    <!-- this is for order delivered -->

                    <div class="customer_mainAddressArea">
                        <span class="title">Mirpur-1 (main)</span>
                        <div class="d-flex align-items-center mt-2 gap_20">
                            <div class="d-flex gap_12">
                                <span class="text_gray f-s14"><i class="fa fa-location-dot"></i></span>
                                <p class="main_address m-0">House : 25, Road No: 2, Block A, Mirpur-1, Dhaka 1216</p>
                            </div>
                            <div class="d-flex justify-content-center gap_10" >
                                <a href="" class="customer_contact"><i class="fa fa-comments"></i></a>
                                <a href="" class="customer_contact"><i class="fa fa-phone-volume"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-3 bg-white-color rounded mb-3">
                    <span class="address_title">Delivery Address</span>
                    <div class="d-flex mt-2 gap_15">
                        <span  class="text_gray f-s14"><i class="fa fa-location-dot"></i></span>
                        <p class="main_address m-0">916, Mirpur 2, Dhaka Bangladesh</p>
                    </div>
                </div>
                <div class="p-3 bg-white-color rounded mb-3">
                    <span class="address_title">Payment Info</span>
                    <p class="m-0 paymentMethod">Method: <span class="text_gray_dark">Cash On Delivery</span></p>
                    <p class="m-0 paymentStatus">Status: <span class="text_gray_dark">Unpaid / Paid</span></p>
                    <a href="" class="btn formSubmit_btn mt-3">Pay Now</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="p-3 bg-white-color rounded mb-3">
                    <h6 class="itemsName">Orders Details</h6>
                    <div class="order_itemListArea mt-3">
                        <div class="itemList">
                            <div class="orderItem_images position-relative">
                                <img src="assets/images/chicken_dumplings-thumb.png">
                                <span class="total_items">2</span>
                            </div>
                            <div class="orderItem_content">
                                <h6>Kung Pao Chicken</h6>
                                <p>Quantity Choice: 6 pcs</p>
                                <p class="price m-0">$4.00</p>
                            </div>
                        </div>
                        <div class="itemList">
                            <div class="orderItem_images position-relative">
                                <img src="assets/images/vegan_royale-cover.png">
                                <span class="total_items">3</span>
                            </div>
                            <div class="orderItem_content">
                                <h6>Kung Pao Chicken</h6>
                                <p>Quantity Choice: 4 pcs</p>
                                <p class="price m-0">$2.00</p>
                            </div>
                        </div>
                    </div>
                    <hr class="border_bottom">
                    <div class="delivery_total_price mb-4">
                        <ul class="p-3  d-flex flex-column gap_12">
                            <li class="d-flex align-items-center justify-content-between">
                                <h6>Subtotal</h6>
                                <h6>$5.00</h6>
                            </li>
                            <li class="d-flex align-items-center justify-content-between">
                                <h6>Discount</h6>
                                <h6>$2.00</h6>
                            </li>
                            <li class="d-flex align-items-center justify-content-between">
                                <h6>Delivery Charge</h6>
                                <h6 class="text_success">$1.00</h6>
                            </li>
                        </ul>
                        <div class="total_delivery_price p-3">
                            <h6>Total</h6>
                            <h6>$6.00</h6>
                        </div>
                    </div>
                    <button Type="submit" class="btn print_btn"><i class="fa fa-print mr-2"></i>Print Invoice</button>
                    <button Type="submit" class="btn print_btn mt-1 bg_danger">Cancel Order</button>
                </div>
            </div>
        </div>
    </div>
</main><!-- mainContent_area -->

<?php include('important/footer.php') ?>