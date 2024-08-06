<?php include('important/header.php') ?>

<main class="mainContent_area">
    <div class="container">
        <div class="banner_swiper mb-2">
            <div class="top_BannerArea swiper-wrapper">
                <div class="swiperBanner_images swiper-slide">
                    <img src="assets/images/slider_one-cover.png" class="rounded">
                </div>
                <div class="swiperBanner_images swiper-slide">
                    <img src="assets/images/slider_two-cover.png" class="rounded">
                </div>
                <div class="swiperBanner_images swiper-slide">
                    <img src="assets/images/slider_three-cover.png" class="rounded">
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
        <?php include('category_menu.php') ?>
        <div class="featureItemsArea">
            <div class="title d-flex justify-content-between align-items-center mt-4">
                <h4 class="m-0">Featured Items</h4>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="itemCardArea transition">
                        <div class="itemImages">
                            <img src="assets/images/cappuccino-cover.png" alt="">
                        </div>
                        <div class="itemDetailsContent">
                            <div class="d-flex flex-column gap_5">
                                <div class="d-flex align-items-center gap_5">
                                    <h6>Homemade Lemonade</h6>
                                    <button type="button" class="infoIcon_btn transition" data-toggle="modal" data-target="#item_infoModal">
                                        <i class="fa-solid fa-circle-info"></i>
                                    </button>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos sed, laboriosam quae consequatur asperiores nostrum aut explicabo accusantium laudantium natus.</p>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price"><del>$3.50</del> $6.00</span>
                                <button class="btn addToCartBtn transition" data-toggle="modal" data-target="#item_variationModal"><i class="fa fa-shopping-bag mr-1 f-s11"></i> Add</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="itemCardArea transition">
                        <div class="itemImages">
                            <img src="assets/images/american_bbq_double-cover.png" alt="">
                        </div>
                        <div class="itemDetailsContent">
                            <div class="d-flex flex-column gap_5" >
                                <div class="d-flex align-items-center gap_5">
                                    <h6>Homemade Lemonade</h6>
                                    <button type="button" class="infoIcon_btn transition" data-toggle="modal" data-target="#item_infoModal">
                                        <i class="fa-solid fa-circle-info"></i>
                                    </button>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos sed, laboriosam quae consequatur asperiores nostrum aut explicabo accusantium laudantium natus.</p>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">$6.00</span>
                                <button class="btn addToCartBtn transition" data-toggle="modal" data-target="#item_variationModal"><i class="fa fa-shopping-bag mr-1  f-s11"></i> Add</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="itemCardArea transition">
                        <div class="itemImages">
                            <img src="assets/images/bbq_pulled_pork-cover.png" alt="">
                        </div>
                        <div class="itemDetailsContent">
                            <div class="d-flex flex-column gap_5" >
                                <div class="d-flex align-items-center gap_5">
                                    <h6>Homemade Lemonade</h6>
                                    <button type="button" class="infoIcon_btn transition" data-toggle="modal" data-target="#item_infoModal">
                                        <i class="fa-solid fa-circle-info"></i>
                                    </button>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos sed, laboriosam quae consequatur asperiores nostrum aut explicabo accusantium laudantium natus.</p>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">$6.00</span>
                                <button class="btn addToCartBtn transition" data-toggle="modal" data-target="#item_variationModal"><i class="fa fa-shopping-bag mr-1 ont_size11"></i> Add</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="itemCardArea transition">
                        <div class="itemImages">
                            <img src="assets/images/beef_with_broccoli-cover.png" alt="">
                        </div>
                        <div class="itemDetailsContent">
                            <div class="d-flex flex-column gap_5">
                                <div class="d-flex align-items-center gap_5">
                                    <h6>Homemade Lemonade</h6>
                                    <button type="button" class="infoIcon_btn transition" data-toggle="modal" data-target="#item_infoModal">
                                        <i class="fa-solid fa-circle-info"></i>
                                    </button>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos sed, laboriosam quae.</p>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">$6.00</span>
                                <button class="btn addToCartBtn transition" data-toggle="modal" data-target="#item_variationModal"><i class="fa fa-shopping-bag mr-1  f-s11"></i> Add</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="itemCardArea transition">
                        <div class="itemImages">
                            <img src="assets/images/beef_with_mix_vegetables-cover.png" alt="">
                        </div>
                        <div class="itemDetailsContent">
                            <div class="d-flex flex-column gap_5" >
                                <div class="d-flex align-items-center gap_5">
                                    <h6>Homemade Lemonade</h6>
                                    <button type="button" class="infoIcon_btn transition" data-toggle="modal" data-target="#item_infoModal">
                                        <i class="fa-solid fa-circle-info"></i>
                                    </button>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos sed, laboriosam quae.Dolor sit amet consectetur, adipisicing elit. Dignissimos sed, laboriosam quae</p>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">$6.00</span>
                                <button class="btn addToCartBtn transition"><i class="fa fa-shopping-bag mr-1  f-s11"></i> Add</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="itemCardArea transition">
                        <div class="itemImages">
                            <img src="assets/images/cappuccino-cover.png" alt="">
                        </div>
                        <div class="itemDetailsContent">
                            <div class="d-flex flex-column gap_5" >
                                <div class="d-flex align-items-center gap_5">
                                    <h6>Homemade Lemonade</h6>
                                    <button type="button" class="infoIcon_btn transition" data-toggle="modal" data-target="#item_infoModal">
                                        <i class="fa-solid fa-circle-info"></i>
                                    </button>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos sed, laboriosam quae.Dolor sit amet consectetur, adipisicing elit. Dignissimos sed, laboriosam quae</p>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">$6.00</span>
                                <button class="btn addToCartBtn transition"><i class="fa fa-shopping-bag mr-1  f-s11"></i> Add</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="itemCardArea transition">
                        <div class="itemImages">
                            <img src="assets/images/chicken_mushroom-cover.png" alt="">
                        </div>
                        <div class="itemDetailsContent">
                            <div class="d-flex flex-column gap_5">
                                <div class="d-flex align-items-center gap_5">
                                    <h6>Homemade Lemonade</h6>
                                    <button type="button" class="infoIcon_btn transition" data-toggle="modal" data-target="#item_infoModal">
                                        <i class="fa-solid fa-circle-info"></i>
                                    </button>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos sed, laboriosam quae.Dolor sit amet consectetur, adipisicing elit. Dignissimos sed, laboriosam quae</p>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">$6.00</span>
                                <button class="btn addToCartBtn transition"><i class="fa fa-shopping-bag mr-1  f-s11"></i> Add</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="itemCardArea transition">
                        <div class="itemImages">
                            <img src="assets/images/classic_caesar_salad-cover.png" alt="">
                        </div>
                        <div class="itemDetailsContent">
                            <div class="d-flex flex-column gap_5" >
                                <div class="d-flex align-items-center gap_5">
                                    <h6>Homemade Lemonade</h6>
                                    <button type="button" class="infoIcon_btn transition" data-toggle="modal" data-target="#item_infoModal">
                                        <i class="fa-solid fa-circle-info"></i>
                                    </button>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos sed, laboriosam quae.</p>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">$5.00</span>
                                <button class="btn addToCartBtn transition"><i class="fa fa-shopping-bag mr-1  f-s11"></i> Add</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="itemsOffer_section">
            <div class="row">
                <div class="col-lg-6 col-md-6" >
                    <a href="" class="h-100 w-100 d-flex">
                        <img src="assets/images/new_kings_collection_off_$49-cover.png" class="rounded h-140">
                    </a>
                </div>
                <div class="col-lg-6 col-md-6" >
                    <a href="" class="h-100 w-100 d-flex">
                        <img src="assets/images/new_kings_collection-cover.png" class="rounded h-140" >
                    </a>
                </div>
                <div class="col-lg-6 col-md-6">
                    <a href="" class="h-100 w-100 d-flex">
                        <img src="assets/images/free_fiery_chicken-cover.png" class="rounded h-140" >
                    </a>
                </div>
                <div class="col-lg-6 col-md-6">
                    <a href="" class="h-100 w-100 d-flex">
                        <img src="assets/images/offer_banner.jpg" class="rounded h-140" >
                    </a>
                </div>
            </div>
        </section><!-- itemsOffer_section -->
        <section class="mostPopularItemsSection">
            <div class="title d-flex justify-content-between align-items-center my-4">
                <h4 class="m-0">Most Popular Items</h4>
            </div>
            <div class="grid_verticalSystem transition">
                <div class="itemCardArea transition">
                    <div class="itemImages">
                        <img src="assets/images/classic_caesar_salad-cover.png" alt="">
                    </div>
                    <div class="itemDetailsContent">
                        <div class="d-flex flex-column gap_5">
                            <div class="d-flex align-items-center gap_5">
                                <h6>Homemade Lemonade</h6>
                                <button type="button" class="infoIcon_btn transition" data-toggle="modal" data-target="#item_infoModal">
                                    <i class="fa-solid fa-circle-info"></i>
                                </button>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur.</p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="price"><del>$6.00</del>$5.00</span>
                            <button class="btn addToCartBtn transition" data-toggle="modal" data-target="#item_variationModal"><i class="fa fa-shopping-bag mr-1 f-s11"></i> Add</button>
                        </div>
                    </div>
                </div>
                <div class="itemCardArea transition">
                    <div class="itemImages">
                        <img src="assets/images/classic_caesar_salad-cover.png" alt="">
                    </div>
                    <div class="itemDetailsContent">
                        <div class="d-flex flex-column gap_5">
                            <div class="d-flex align-items-center gap_5">
                                <h6>Homemade Lemonade</h6>
                                <button type="button" class="infoIcon_btn transition" data-toggle="modal" data-target="#item_infoModal">
                                    <i class="fa-solid fa-circle-info"></i>
                                </button>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos sed, laboriosam quae.</p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="price">$5.00</span>
                            <button class="btn addToCartBtn transition" data-toggle="modal" data-target="#item_variationModal"><i class="fa fa-shopping-bag mr-1 f-s11"></i> Add</button>
                        </div>
                    </div>
                </div>
                <div class="itemCardArea transition">
                    <div class="itemImages">
                        <img src="assets/images/classic_caesar_salad-cover.png" alt="">
                    </div>
                    <div class="itemDetailsContent">
                        <div class="d-flex flex-column gap_5" >
                            <div class="d-flex align-items-center gap_5">
                                <h6>Homemade Lemonade</h6>
                                <button type="button" class="infoIcon_btn transition" data-toggle="modal" data-target="#item_infoModal">
                                    <i class="fa-solid fa-circle-info"></i>
                                </button>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos sed, laboriosam quae.</p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="price">$5.00</span>
                            <button class="btn addToCartBtn transition data-toggle="modal" data-target="#item_variationModal""><i class="fa fa-shopping-bag mr-1 f-s11"></i> Add</button>
                        </div>
                    </div>
                </div>
                <div class="itemCardArea transition">
                    <div class="itemImages">
                        <img src="assets/images/classic_caesar_salad-cover.png" alt="">
                    </div>
                    <div class="itemDetailsContent">
                        <div class="d-flex flex-column gap_5" >
                            <div class="d-flex align-items-center gap_5">
                                <h6>Homemade Lemonade</h6>
                                <button type="button" class="infoIcon_btn transition" data-toggle="modal" data-target="#item_infoModal">
                                    <i class="fa-solid fa-circle-info"></i>
                                </button>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos sed, laboriosam quae.</p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="price">$5.00</span>
                            <button class="btn addToCartBtn transition data-toggle="modal" data-target="#item_variationModal""><i class="fa fa-shopping-bag mr-1 f-s11"></i> Add</button>
                        </div>
                    </div>
                </div>
                <div class="itemCardArea transition">
                    <div class="itemImages">
                        <img src="assets/images/classic_caesar_salad-cover.png" alt="">
                    </div>
                    <div class="itemDetailsContent">
                        <div class="d-flex flex-column gap_5" >
                            <div class="d-flex align-items-center gap_5">
                                <h6>Homemade Lemonade</h6>
                                <button type="button" class="infoIcon_btn transition" data-toggle="modal" data-target="#item_infoModal">
                                    <i class="fa-solid fa-circle-info"></i>
                                </button>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos sed, laboriosam quae.</p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="price">$5.00</span>
                            <button class="btn addToCartBtn transition data-toggle="modal" data-target="#item_variationModal""><i class="fa fa-shopping-bag mr-1 f-s11"></i> Add</button>
                        </div>
                    </div>
                </div>
                <div class="itemCardArea transition">
                    <div class="itemImages">
                        <img src="assets/images/classic_caesar_salad-cover.png" alt="">
                    </div>
                    <div class="itemDetailsContent">
                        <div class="d-flex flex-column gap_5" >
                            <div class="d-flex align-items-center gap_5">
                                <h6>Homemade Lemonade</h6>
                                <button type="button" class="infoIcon_btn transition" data-toggle="modal" data-target="#item_infoModal">
                                    <i class="fa-solid fa-circle-info"></i>
                                </button>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos sed, laboriosam quae.</p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="price">$5.00</span>
                            <button class="btn addToCartBtn transition data-toggle="modal" data-target="#item_variationModal""><i class="fa fa-shopping-bag mr-1 f-s11"></i> Add</button>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- mostPopularItemsSection -->
    </div>
</main>

<?php include('important/footer.php') ?>