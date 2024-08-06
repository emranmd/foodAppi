<?php include('important/header.php') ?>

<main class="mainContent_area mb-5">
    <div class="container max-w-xxl my-4">
        <a href="index.php" class="back_btn"><i class="fa-solid fa-arrow-right-to-bracket"></i> Back to Home</a>
        <div class="row mt-4">
            <div class="col-lg-7 col-md-7">
                <div class="p-3 bg-white-color rounded mb-3">
                    <h6 class="checkout_title">Select Branch</h6>
                    <div class="customer_branch_area mt-3">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <input type="radio" class="d-none" name="branch" value="1" id="radio1" checked>
                                <label for="radio1" class="nav-link tab_label_btn active" data-id="mirpur">Mirpur-1 (main)</label>
                            </li>
                            <li class="nav-item">
                                <input type="radio" class="d-none" name="branch" value="1" id="radio2">
                                <label for="radio2" class="nav-link tab_label_btn" data-id="gulshan">Gulshan-1</label>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab_pane mirpur active">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29205.39646249395!2d90.33325871286223!3d23.794600601082813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0e96fce29dd%3A0x6ccd9e51aba9e64d!2sMirpur-1%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1722676444146!5m2!1sen!2sbd" width="100%" height="170px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <div class="tab_pane gulshan">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10326.80976711076!2d90.4093829846142!3d23.780214996410702!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c79ebfc24eab%3A0xea7dab563f12457a!2sGulshan%201%2C%20Dhaka%201212!5e0!3m2!1sen!2sbd!4v1722676589974!5m2!1sen!2sbd" width="100%" height="170px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="my-3">
                        <div class="takeaway_address customer_address takeaway">
                            <span class="text_cyan"><i class="fa-solid fa-location-dot"></i></span>
                            <p class="m-0">House : 25, Road No: 2, Block A, Mirpur-1, Dhaka 1216</p>
                        </div>
                        <div class="delivery_address customer_address delivery flex-column active">
                            <div class="d-flex align-items-center justify-content-between">
                                <h6 class="m-0 f-family-r">Delivery Address</h6>
                                <div class="d-flex align-items-center gap_10">
                                    <button type="button" class="btn address_edit_btn" data-toggle="modal" data-target="#editAddressModal"><i class="fa-solid fa-pencil"></i>Edit</button>
                                    <button type="button" class="btn address_add_btn" data-toggle="modal" data-target="#addressModal"><i class="fa-solid fa-circle-plus"></i>Add</button>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mt-3 gap_15">
                                <div class="select_address">
                                    <input type="radio" class="d-none" name="address" id="address1" checked value="1">
                                    <label for="address1" class="m-0 delivery_addressLabel">
                                        <h6 class="address_type position-relative">Home</h6>
                                        <p>653, Gulshan 2, Dhaka Bangladesh</p>
                                    </label>
                                </div>
                                <div class="select_address">
                                    <input type="radio" class="d-none" name="address" id="address2"  value="2">
                                    <label for="address2" class="m-0 delivery_addressLabel">
                                        <h6 class="address_type position-relative">Work</h6>
                                        <p>653, Gulshan 2, Dhaka Bangladesh</p>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 deliveryTimeFrame">
                        <h5 class="deliveryFrameTitle ">Preferred Time Frame For Delivery</h5>
                        <div class="timeFrameBtn swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide width_fit">
                                    <label for="today_time" class="m-0 deliveryFrameBtn timeFrame_btn active" data-id="today">
                                        <div class="custom-radio">
                                            <input type="radio" id="today_time" name="time_frame_btn" class="custom-radio-field" value="1" checked>
                                            <span class="custom-radio-span"></span>
                                        </div>
                                        <p class="m-0">Today</p>
                                    </label>
                                </div>
                                <div class="swiper-slide width_fit">
                                    <label for="tomorrow_time" class="m-0 deliveryFrameBtn timeFrame_btn" data-id="tomorrow">
                                        <div class="custom-radio">
                                            <input type="radio" id="tomorrow_time" name="time_frame_btn" class="custom-radio-field" value="1">
                                            <span class="custom-radio-span"></span>
                                        </div>
                                        <p class="m-0">Tomorrow</p>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- Today Time Frame Start -->
                        <div class="timeFrameBtn swiper delivery_timeFrame today mt-3 active">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide width_fit">
                                    <label for="now" class="m-0 deliveryFrameBtn">
                                        <div class="custom-radio">
                                            <input type="radio" id="now" class="custom-radio-field" name="today_delivery_time" value="now" checked>
                                            <span class="custom-radio-span"></span>
                                        </div>
                                        <p class="m-0">Now</p>
                                    </label>
                                </div>
                                <div class="swiper-slide width_fit">
                                    <label for="today1" class="m-0 deliveryFrameBtn">
                                        <div class="custom-radio">
                                            <input type="radio" id="today1" name="today_delivery_time" class="custom-radio-field" value="today1">
                                            <span class="custom-radio-span"></span>
                                        </div>
                                        <p class="m-0">07:30 PM - 08:00 PM</p>
                                    </label>
                                </div>
                                <div class="swiper-slide width_fit">
                                    <label for="today2" class="m-0 deliveryFrameBtn">
                                        <div class="custom-radio">
                                            <input type="radio" id="today2" name="today_delivery_time" class="custom-radio-field" value="today2">
                                            <span class="custom-radio-span"></span>
                                        </div>
                                        <p class="m-0">08:00 PM - 08:30 PM</p>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- Today Time Frame End -->

                        <!-- Tomorrow Time Frame Start -->
                        <div class="timeFrameBtn swiper delivery_timeFrame tomorrow mt-3">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide width_fit">
                                    <label for="tomorrow1" class="m-0 deliveryFrameBtn">
                                        <div class="custom-radio">
                                            <input type="radio" id="tomorrow1" name="tomorrow_delivery_time" class="custom-radio-field" value="tomorrow1" checked>
                                            <span class="custom-radio-span"></span>
                                        </div>
                                        <p class="m-0">12:00 AM - 12:30 AM</p>
                                    </label>
                                </div>
                                <div class="swiper-slide width_fit">
                                    <label for="tomorrow2" class="m-0 deliveryFrameBtn">
                                        <div class="custom-radio">
                                            <input type="radio" id="tomorrow2" name="tomorrow_delivery_time" class="custom-radio-field" value="tomorrow2">
                                            <span class="custom-radio-span"></span>
                                        </div>
                                        <p class="m-0">12:30 AM - 01:00 AM</p>
                                    </label>
                                </div>
                                <div class="swiper-slide width_fit">
                                    <label for="tomorrow3" class="m-0 deliveryFrameBtn">
                                        <div class="custom-radio">
                                            <input type="radio" id="tomorrow3" name="tomorrow_delivery_time" class="custom-radio-field" value="tomorrow3">
                                            <span class="custom-radio-span"></span>
                                        </div>
                                        <p class="m-0">01:00 AM - 01:30 AM</p>
                                    </label>
                                </div>
                                <div class="swiper-slide width_fit">
                                    <label for="tomorrow4" class="m-0 deliveryFrameBtn">
                                        <div class="custom-radio">
                                            <input type="radio" id="tomorrow4" name="delivery_time" class="custom-radio-field" value="tomorrow4">
                                            <span class="custom-radio-span"></span>
                                        </div>
                                        <p class="m-0">01:30 AM - 02:00 AM</p>
                                    </label>
                                </div>
                                <div class="swiper-slide width_fit">
                                    <label for="tomorrow5" class="m-0 deliveryFrameBtn">
                                        <div class="custom-radio">
                                            <input type="radio" id="tomorrow5" name="delivery_time" class="custom-radio-field" value="tomorrow5">
                                            <span class="custom-radio-span"></span>
                                        </div>
                                        <p class="m-0">02:00 AM - 02:30 AM</p>
                                    </label>
                                </div>
                                <div class="swiper-slide width_fit">
                                    <label for="tomorrow6" class="m-0 deliveryFrameBtn">
                                        <div class="custom-radio">
                                            <input type="radio" id="tomorrow6" name="delivery_time" class="custom-radio-field" value="tomorrow6">
                                            <span class="custom-radio-span"></span>
                                        </div>
                                        <p class="m-0">02:30 AM - 03:00 AM</p>
                                    </label>
                                </div>
                                <div class="swiper-slide width_fit">
                                    <label for="tomorrow7" class="m-0 deliveryFrameBtn">
                                        <div class="custom-radio">
                                            <input type="radio" id="tomorrow7" name="delivery_time" class="custom-radio-field" value="tomorrow7">
                                            <span class="custom-radio-span"></span>
                                        </div>
                                        <p class="m-0">03:00 AM - 03:30 AM</p>
                                    </label>
                                </div>
                                <div class="swiper-slide width_fit">
                                    <label for="tomorrow8" class="m-0 deliveryFrameBtn">
                                        <div class="custom-radio">
                                            <input type="radio" id="tomorrow8" name="delivery_time" class="custom-radio-field" value="tomorrow8">
                                            <span class="custom-radio-span"></span>
                                        </div>
                                        <p class="m-0">03:30 AM - 04:00 AM</p>
                                    </label>
                                </div>
                                <div class="swiper-slide width_fit">
                                    <label for="tomorrow9" class="m-0 deliveryFrameBtn">
                                        <div class="custom-radio">
                                            <input type="radio" id="tomorrow9" name="delivery_time" class="custom-radio-field" value="tomorrow9">
                                            <span class="custom-radio-span"></span>
                                        </div>
                                        <p class="m-0">04:00 AM - 04:30 AM</p>
                                    </label>
                                </div>
                                <div class="swiper-slide width_fit">
                                    <label for="tomorrow10" class="m-0 deliveryFrameBtn">
                                        <div class="custom-radio">
                                            <input type="radio" id="tomorrow10" name="delivery_time" class="custom-radio-field" value="tomorrow10">
                                            <span class="custom-radio-span"></span>
                                        </div>
                                        <p class="m-0">04:30 AM - 05:00 AM</p>
                                    </label>
                                </div>
                                <div class="swiper-slide width_fit">
                                    <label for="tomorrow11" class="m-0 deliveryFrameBtn">
                                        <div class="custom-radio">
                                            <input type="radio" id="tomorrow11" name="delivery_time" class="custom-radio-field" value="tomorrow11">
                                            <span class="custom-radio-span"></span>
                                        </div>
                                        <p class="m-0">05:00 AM - 05:30 AM</p>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- Tomorrow Time Frame End -->
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-5">
                <div class="p-3 bg-white-color rounded mb-3">
                    <h6 class="checkout_title">Cart Summary</h6>
                    <div class="cartSwitch_group d-flex">
                        <div class="cart_switch_btn">
                            <input type="radio" class="d-none" name="delivery_address" id="switch1" checked>
                            <label for="switch1" class="m-0 cart_switch_label active" data-id="delivery">Delivery</label>
                        </div>
                        <div class="cart_switch_btn">
                            <input type="radio" class="d-none" name="delivery_address" id="switch2">
                            <label for="switch2" class="m-0 cart_switch_label" data-id="takeaway">Takeaway</label>
                        </div>
                    </div>
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
                            <li class="d-flex align-items-center justify-content-between customer_address delivery active">
                                <h6>Delivery Charge</h6>
                                <h6 class="text_success">$1.00</h6>
                            </li>
                        </ul>
                        <div class="total_delivery_price p-3">
                            <h6>Total</h6>
                            <h6>$6.00</h6>
                        </div>
                    </div>
                    <button type="submit" class="btn print_btn"><i class="fa-brands fa-whatsapp mr-1 icon_size20"></i> Proceed To WhatsApp</button>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include('edit_address_modal.php') ?>
<?php include('add_address_modal.php') ?>
<?php include('important/footer.php') ?>