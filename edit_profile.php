<?php include('important/header.php') ?>

<main class="mainContent_area">
    <div class="container max-w mt-4 mb-5 pb-3">
        <a href="index.php" class="back_btn"><i class="fa-solid fa-arrow-right-to-bracket"></i> Back to Home</a>
        <form action="" method="post">
            <div class="changePassword_formArea mt-4">
                <h5 class="title mb-3">Edit Profile</h5>
                <div class="d-flex align-items-center gap_20">
                    <div class="formGroup mb-4">
                        <label>first name</label>
                        <input type="text" name="first_name" class="form-control inputStyle1" value="Emran">
                    </div>
                    <div class="formGroup mb-4">
                        <label>Last name</label>
                        <input type="text" name="last_name" class="form-control inputStyle1" value="Hossen">
                    </div>
                </div>
                <div class="d-flex align-items-center gap_20">
                    <div class="formGroup mb-4">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control inputStyle1" value="emran@gmail.com">
                    </div>
                    <div class="formGroup mb-4">
                        <label>Phone</label>
                        <div class="user_phone_input d-flex align-items-center">
                            <button type="button" class="country_phone">BD <span class="phone_code">+880</span>
                                <input type="hidden" name="phone_code" class="d-none">
                            </button>
                            <input type="phone" name="phone" class="form-control inputStyle2" value="12642753">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn formSubmit_btn">Update Profile</button>
            </div>
        </form>
    </div>
</main>

<?php include('important/footer.php') ?>