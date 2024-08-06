<?php include('important/header.php') ?>

<main class="mainContent_area mb-4">
    <div class="container">
        <?php include('category_menu.php') ?>
        <div class="d-flex gap_10">
            <button type="button" class="btn searchItems_btn">
                <img src="assets/images/non-veg.png" class="h-22 w-22">
                <span class="name">Non-Veg</span>
                <span class="search_closeBtn text_red" ><i class="fa-regular fa-circle-xmark"></i></span>
            </button>
            <button type="button" class="btn searchItems_btn">
                <img src="assets/images/veg.png" class="h-22 w-22">
                <span class="name">Veg</span>
                <span class="search_closeBtn text_red" ><i class="fa-regular fa-circle-xmark"></i></span>
            </button>
        </div>
        <div class="title d-flex justify-content-between align-items-center mt-5">
            <h4 class="m-0 text_cyan" >Appetizers</h4>
            <div class="d-flex gap_10">
                <button type="button" class="btn vertical_systemBtn p-0 active text_gray f-s20"><i class="fa-solid fa-table-columns"></i></button>

                <button type="button" class="btn vertical_systemBtn vertical_row p-0 f-s20 text_gray"> <i class="fa-solid fa-table-cells-large"></i></button>
            </div>
        </div>
        <div class="grid_verticalSystem transition vertical_system mt-4">
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
                        <button class="btn addToCartBtn transition data-toggle=" modal"="" data-target="#item_variationModal" "=""><i class="fa fa-shopping-bag mr-1 f-s11"></i> Add</button>
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
                        <button class="btn addToCartBtn transition data-toggle=" modal"="" data-target="#item_variationModal" "=""><i class="fa fa-shopping-bag mr-1 f-s11" ></i> Add</button>
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
                        <button class="btn addToCartBtn transition data-toggle=" modal"="" data-target="#item_variationModal" "=""><i class="fa fa-shopping-bag mr-1 f-s11"></i> Add</button>
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
                        <button class="btn addToCartBtn transition data-toggle=" modal"="" data-target="#item_variationModal" "=""><i class="fa fa-shopping-bag mr-1 f-s11"></i> Add</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>

<?php include('important/footer.php') ?>