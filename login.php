<?php include('important/header.php') ?>

<main class="mainContent_area">
    <div class="container max-w-sm py-5">
        <div class="bg-white-color rounded p-4">
            <h5 class="login_title">Welcome Back</h5>
            <div class="formGroup mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control inputStyle1">
            </div>
            <div class="formGroup mb-2">
                <label>Password</label>
                <input type="password" name="password" class="form-control inputStyle1">
            </div>
            <div class="d-flex align-items-center justify-content-between mb-3">
                <div class="d-flex align-items-center gap_10">
                    <input type="checkbox" name="remember" id="checkbox1" class="checkbox_input">
                    <label for="checkbox1" class="m-0 checkbox_label">Remember Me</label>
                </div>
                <a href="" class="forget_link">Forget Password</a>
            </div>
            <button type="submit" class="btn formSubmit_btn">Login</button>
            <div class="mt-4 text-center f-family-r f-s12">Don’t have an account?<a href="signup.php" class="text_cyan">Signup</a></div>
            <p class="my-3 text_center f-family-r">OR</p>
            <button type="submit" class="btn guest_btn">Login As Guest</button>
        </div>
    </div>
</main>

<?php include('important/footer.php') ?>