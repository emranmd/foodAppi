<?php include('important/header.php') ?>

<main class="mainContent_area">
    <div class="container max-w mt-4 mb-5 pb-3">
        <a href="index.php" class="back_btn"><i class="fa-solid fa-arrow-right-to-bracket"></i> Back to Home</a>
        <form action="" method="post">
            <div class="changePassword_formArea mt-4">
                <h5 class="title mb-3">Change Password</h5>
                <div class="formGroup mb-4">
                    <label>Old Password</label>
                    <input type="password" name="old_password" class="form-control inputStyle1">
                </div>
                <div class="d-flex align-items-center gap_20">
                    <div class="formGroup mb-4">
                        <label>New Password</label>
                        <input type="password" name="new_password" class="form-control inputStyle1">
                    </div>
                    <div class="formGroup mb-4">
                        <label>Retype New Password</label>
                        <input type="password" name="retype_new_password" class="form-control inputStyle1">
                    </div>
                </div>
                <button type="submit" class="btn formSubmit_btn">Change password</button>
            </div>
        </form>
    </div>
</main>

<?php include('important/footer.php') ?>