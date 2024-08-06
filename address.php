<?php include('important/header.php') ?>

<main class="mainContent_area">
    <div class="container max-w-xl my-4">
        <div class="customer_addressArea">
            <div class="d-flex justify-content-between align-items-center">
                <h3 class="m-0 title">Address</h3>
                <button type="button" class="btn add_newAddress transition" data-toggle="modal" data-target="#addressModal"><i class="fa fa-circle-plus"></i> Add New</button>
            </div>
            <div class="row mt-3">
                <div class="col-lg-6 col-md-6">
                    <div class="address_details">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center gap_10">
                                <span class="icon text_info" ><i class="fa fa-home"></i></span>
                                <h6>Home</h6>
                            </div>
                            <div class="address_action_btn d-flex align-items-center gap_10">
                                <button type="button" class="btn edit_icon p-0"><i class="fa-solid fa-pencil"></i></button>
                                <button type="button" class="btn remove_icon p-0"><i class="fa-regular fa-trash-can"></i></button>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap_10">
                            <span class="icon text_secondary" ><i class="fa fa-location-dot"></i></span>
                            <p class="m-0 f-family-r f-s14">234, Gulshan 2, Dhaka Bangladesh</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="address_details">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center gap_10">
                                <span class="icon text_info" ><i class="fa-solid fa-briefcase"></i></span>
                                <h6>Work</h6>
                            </div>
                            <div class="address_action_btn d-flex align-items-center gap_10">
                                <button type="button" class="btn edit_icon p-0"><i class="fa-solid fa-pencil"></i></button>
                                <button type="button" class="btn remove_icon p-0"><i class="fa-regular fa-trash-can"></i></button>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap_10">
                            <span class="icon text_secondary"><i class="fa fa-location-dot"></i></span>
                            <p class="m-0 f-family-r f-s14">230,Mirpur 7,Dhaka Bangladesh,</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include('add_address_modal.php') ?>
<?php include('important/footer.php') ?>