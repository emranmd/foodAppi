<!-- Modal -->
<div class="modal fade item_variationModal" id="item_variationModal" tabindex="-1" aria-labelledby="item_variationModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header border-none">
                <div class="itemDetails">
                    <div class="itemImage">
                        <img src="assets/images/chicken_dumplings-thumb.png" class="rounded">
                    </div>
                    <div class="itemDetailsContent">
                        <div class="d-flex flex-column">
                            <span class="itemName">Chai Latte <button type="button" class="infoIcon_btn transition" data-toggle="modal" data-target="#item_infoModal"><i class="fa-solid fa-circle-info"></i></button></span>
                            <p class="m-0 description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos sed, laboriosam quae.Dolor sit amet consectetur, adipisicing elit. Dignissimos sed, laboriosam quae</p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="price">$6.00</span>
                        </div>
                    </div>
                </div>
                <button type="button" class="close p-3" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fa-regular fa-xmark-circle"></i></span>
                </button>
            </div>
            <div class="modal-body pt-0">
                <div class="d-flex align-items-center gap_10">
                    <h6 class="m-0 item_quantity">Quantity:</h6>
                    <div class="quantityInput_btn">
                        <button class="btn quantity_btn transition"><i class="fa fa-minus"></i></button>
                        <input readonly="" type="text" name="item_quantity" class="item_quantityInput" value="1">
                        <button class="btn quantity_btn increment_btn transition"><i class="fa fa-plus"></i></button>
                    </div>
                </div>
                <div class="itemsSizeButton mb-3">
                    <span class="f-family-r">Size</span>
                    <div class="d-flex align-items-center mt-1 gap_10" >
                        <div class="sizeBtn_group">
                            <input type="radio" class="custom-radio-field d-none" name="item_size" id="regular" checked>
                            <label for="regular" class="size_btn_label m-0 transition">
                                <div class="custom-radio"></div>
                                <span class="text">Regular - 8 pcs..</span>
                            </label>
                        </div>
                        <div class="sizeBtn_group">
                            <input type="radio" class="custom-radio-field d-none" name="item_size" id="big">
                            <label for="big" class="size_btn_label m-0 transition">
                                <div class="custom-radio"></div>
                                <div class="d-flex flex-column">
                                    <span class="text">Big - 12 pcs</span>
                                    <span class="price_text">+$1.00</span>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="mb-3 addons_area">
                    <div class="title">Addons</div>
                    <div class="addons_swiper swiper">
                        <div class="swiper-wrapper transition">
                            <div class="swiper-slide width_fit">
                                <div class="swiper_slide position-relative">
                                    <div class="addons_inputBtn">
                                        <input type="checkbox" name="addons[]" value="1" class="addons_checkboxInput d-none" id="addons1">
                                        <label for="addons1" class="addons_item m-0 transition">
                                            <div class="img_box">
                                                <img src="assets/images/chicken_dumplings-thumb.png" >
                                            </div>
                                            <div class="contentBox">
                                                <span class="itemName">Soda(can)</span>
                                                <span class="price">$2.00</span>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="addon_itemQuantity">
                                        <button type="button" class="infoIcon_btn transition" data-toggle="modal" data-target="#item_infoModal"><i class="fa-solid fa-circle-info"></i></button>
                                        <div class="quantityInput_btn">
                                            <button class="btn quantity_btn transition"><i class="fa fa-minus"></i></button>
                                            <input readonly="" type="text" name="item_quantity" class="item_quantityInput" value="1">
                                            <button class="btn quantity_btn increment_btn transition"><i class="fa fa-plus"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide width_fit">
                                <div class="swiper_slide position-relative">
                                    <div class="addons_inputBtn">
                                        <input type="checkbox" name="addons[]" value="1" class="addons_checkboxInput d-none" id="addons2">
                                        <label for="addons2" class="addons_item m-0 transition">
                                            <div class="img_box">
                                                <img src="assets/images/cappuccino-thumb.png" >
                                            </div>
                                            <div class="contentBox">
                                                <span class="itemName">cappuccino</span>
                                                <span class="price">$1.50</span>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="addon_itemQuantity">
                                        <button type="button" class="infoIcon_btn transition" data-toggle="modal" data-target="#item_infoModal"><i class="fa-solid fa-circle-info"></i></button>
                                        <div class="quantityInput_btn">
                                            <button class="btn quantity_btn transition"><i class="fa fa-minus"></i></button>
                                            <input readonly="" type="text" name="item_quantity" class="item_quantityInput" value="1">
                                            <button class="btn quantity_btn increment_btn transition"><i class="fa fa-plus"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide width_fit">
                                <div class="swiper_slide position-relative">
                                    <div class="addons_inputBtn">
                                        <input type="checkbox" name="addons[]" value="1" class="addons_checkboxInput d-none" id="addons2">
                                        <label for="addons2" class="addons_item m-0 transition">
                                            <div class="img_box">
                                                <img src="assets/images/cappuccino-thumb.png" >
                                            </div>
                                            <div class="contentBox">
                                                <span class="itemName">cappuccino</span>
                                                <span class="price">$1.50</span>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="addon_itemQuantity">
                                        <button type="button" class="infoIcon_btn transition" data-toggle="modal" data-target="#item_infoModal"><i class="fa-solid fa-circle-info"></i></button>
                                        <div class="quantityInput_btn">
                                            <button class="btn quantity_btn transition"><i class="fa fa-minus"></i></button>
                                            <input readonly="" type="text" name="item_quantity" class="item_quantityInput" value="1">
                                            <button class="btn quantity_btn increment_btn transition"><i class="fa fa-plus"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide width_fit">
                                <div class="swiper_slide position-relative">
                                    <div class="addons_inputBtn">
                                        <input type="checkbox" name="addons[]" value="1" class="addons_checkboxInput d-none" id="addons2">
                                        <label for="addons2" class="addons_item m-0 transition">
                                            <div class="img_box">
                                                <img src="assets/images/cappuccino-thumb.png" >
                                            </div>
                                            <div class="contentBox">
                                                <span class="itemName">cappuccino</span>
                                                <span class="price">$1.50</span>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="addon_itemQuantity">
                                        <button type="button" class="infoIcon_btn transition" data-toggle="modal" data-target="#item_infoModal"><i class="fa-solid fa-circle-info"></i></button>
                                        <div class="quantityInput_btn">
                                            <button class="btn quantity_btn transition"><i class="fa fa-minus"></i></button>
                                            <input readonly="" type="text" name="item_quantity" class="item_quantityInput" value="1">
                                            <button class="btn quantity_btn increment_btn transition"><i class="fa fa-plus"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-4 order_notesArea">
                    <div class="title">Special Instructions</div>
                    <textarea name="order_notes" class="form-control orderNotes_textarea" rows="2" placeholder="Add note (extra mayo, cheese, etc.)" ></textarea>
                </div>
                <button type="submit" class="addTo_cartBtn">Add to Cart - $4.00</button>
            </div>
        </div>
    </div>
</div>