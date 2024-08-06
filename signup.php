<?php include('important/header.php') ?>

<main class="mainContent_area">
    <div class="container max-w-sm py-5">
        <div class="bg-white-color rounded p-4">
            <h5 class="login_title">Let’s get started</h5>
            <div class="formGroup mb-4">
                <label>Mobile Number</label>
                <div class="user_phone_input d-flex align-items-center">
                    <button type="button" class="country_phone">BD <span class="phone_code">+880</span>
                        <input type="hidden" name="phone_code" class="d-none">
                    </button>
                    <input type="phone" name="phone" class="form-control inputStyle2">
                </div>
            </div>
            <button type="submit" class="btn formSubmit_btn">Next</button>
            <div class="mt-4 text-center f-family-r f-s14 text_gray">Don’t have an account?<a href="login.php" class="text_cyan">Log in</a></div>
            
        </div>
    </div>
</main>

<?php include('important/footer.php') ?>