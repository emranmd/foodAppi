<?php include('important/header.php') ?>

<main class="mainContent_area mb-5">
    <div class="container max-w-xl my-4">
        <a href="index.php" class="back_btn"><i class="fa-solid fa-arrow-right-to-bracket"></i> Back to Home</a>
        <div class="row mt-4">
            <div class="col-lg-6 col-md-6">
                <div class="ordersProducts_list">
                    <h5 class="title mb-4">Active Orders</h5>
                    <div class="p-3 bg-white-color rounded">
                        <div class="orderItems_list">
                            <span class="icon"><i class="fa-solid fa-basket-shopping"></i></span>
                            <div class="item_details">
                                <div class="d-flex align-items-center gap_20" >
                                    <p class="order_id m-0">Order ID: <span>#42437</span></p>
                                    <span class="status pending">pending</span>
                                </div>
                                <p class="m-0 order_time">03:11 PM, 15-07-2024</p>
                                <p class="m-0 sm_text">Delivery</p>
                                <div class="d-flex align-items-center justify-content-between">
                                    <h6 class="totalPrice m-0">Total: <span class="f-w500">$23.00</span></h6>
                                    <a href="order_details.php" class="order_detailsBtn">See Details <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="orderItems_list">
                            <span class="icon"><i class="fa-solid fa-basket-shopping"></i></span>
                            <div class="item_details">
                                <div class="d-flex align-items-center gap_20" >
                                    <p class="order_id m-0">Order ID: <span>#42437</span></p>
                                    <span class="status accept">accept</span>
                                </div>
                                <p class="m-0 order_time">03:11 PM, 15-07-2024</p>
                                <p class="m-0 sm_text">Delivery</p>
                                <div class="d-flex align-items-center justify-content-between">
                                    <h6 class="totalPrice m-0">Total: <span class="f-w500">$23.00</span></h6>
                                    <a href="order_details.php" class="order_detailsBtn">See Details <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="orderItems_list">
                            <span class="icon"><i class="fa-solid fa-basket-shopping"></i></span>
                            <div class="item_details">
                                <div class="d-flex align-items-center gap_20" >
                                    <p class="order_id m-0">Order ID: <span>#43337</span></p>
                                    <span class="status out_for_deliver">Out for delivery</span>
                                </div>
                                <p class="m-0 order_time" >03:11 PM, 15-07-2024</p>
                                <p class="m-0 sm_text">Delivery</p>
                                <div class="d-flex align-items-center justify-content-between">
                                    <h6 class="totalPrice m-0">Total: <span class="f-w500">$20.00</span></h6>
                                    <a href="order_details.php" class="order_detailsBtn">See Details <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="ordersProducts_list">
                    <h5 class="title mb-4">Previous Orders</h5>
                    <div class="p-3 bg-white-color rounded">
                        <div class="orderItems_list">
                            <span class="icon"><i class="fa-solid fa-basket-shopping"></i></span>
                            <div class="item_details">
                                <div class="d-flex align-items-center gap_20" >
                                    <p class="order_id m-0">Order ID: <span>#42437</span></p>
                                    <span class="status delivered">Delivered</span>
                                </div>
                                <p class="m-0 order_time">03:11 PM, 15-07-2024</p>
                                <p class="m-0 sm_text">Takeaway</p>
                                <div class="d-flex align-items-center justify-content-between">
                                    <h6 class="totalPrice m-0">Total: <span class="f-w500">$23.00</span></h6>
                                    <a href="order_details.php" class="order_detailsBtn">See Details <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="orderItems_list">
                            <span class="icon"><i class="fa-solid fa-basket-shopping"></i></span>
                            <div class="item_details">
                                <div class="d-flex align-items-center gap_20" >
                                    <p class="order_id m-0">Order ID: <span>#42437</span></p>
                                    <span class="status delivered">Delivered</span>
                                </div>
                                <p class="m-0 order_time">03:11 PM, 15-07-2024</p>
                                <p class="m-0 sm_text">Takeaway</p>
                                <div class="d-flex align-items-center justify-content-between">
                                    <h6 class="totalPrice m-0">Total: <span class="f-w500">$23.00</span></h6>
                                    <a href="order_details.php" class="order_detailsBtn">See Details <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main><!-- mainContent_area -->

<?php include('important/footer.php') ?>