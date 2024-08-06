<header class="topMenuArea">
    <div class="container d-flex justify-content-between align-items-center">
        <div class="top_logo">
            <a href="" class="w-100 h-100 d-flex">
                <img src="assets/images/theme-logo.png">
            </a>
        </div>
        <ul class="navbar_nav">
            <li class="nav_item">
                <a href="index.php" class="nav_link">Home</a>
            </li>
            <li class="nav_item">
                <a href="menu.php" class="nav_link">Menu</a>
            </li>
            <li class="nav_item">
                <a href="offers.php" class="nav_link">Offer</a>
            </li>
        </ul>
        <div class="d-flex align-items-center gap">
            <div class="header_searchBox transition">
                <button type="submit" class="header_searchSubmit"><i class="fa-solid fa-magnifying-glass"></i></button>
                <input type="search" class="form-control search_input" placeholder="Search">
                <button type="button" class="header_search_btn transition"><i class="fa-regular fa-circle-xmark"></i></button>
            </div>
            <div class="dropdown_languesGroup position-relative">
                <button type="button" class="dropdown_btn">
                    <img src="assets/images/flag/english.png" class="flag_images">
                    <span class="languesName">English</span>
                </button>
                <ul class="dropdown_listArea rounded transition">
                    <li class="d-flex align-items-center list_item">
                        <img src="assets/images/flag/english.png" class="flag_images">
                        <span class="languesName f-w600 text_gray">English</span>
                    </li>
                    <li class="d-flex align-items-center list_item">
                        <img src="assets/images/flag/arabic.png" class="flag_images">
                        <span class="languesName f-w600 text_gray">Arabic</span>
                    </li>
                    <li class="d-flex align-items-center list_item">
                        <img src="assets/images/flag/german.png" class="flag_images">
                        <span class="languesName f-w600 text_gray">German</span>
                    </li>
                </ul>
            </div>
            <button type="button" class="itemsCart_btn click_button"><i class="fa fa-shopping-bag mr-1"></i>$0.00</button>
            <a href="login.php" class="login_button"><i class="fa-regular fa-circle-user mr-1"></i>Log In</a>
            <div class="dropdown accountDropdown_btn">
                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa-regular fa-circle-user mr-1"></i>Account <i class="fa-solid fa-chevron-down"></i>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <div class="d-flex align-items-center user_profileArea gap_10">
                        <div class="profile_avatar position-relative">
                            <img src="assets/images/profile.png" id="photo">
                            <!-- <input type="file" id="input_file" name="images">
                            <label for="input_file" class="m-0 avatar_label"></label> -->
                        </div>
                        <div class="user_detailsContent">
                            <h5 class="userName m-0">Emran Hossen</h5>
                            <h6 class="user_email m-0">emarn@gmail.com</h6>
                            <span class="price">$2.00</span>
                        </div>
                    </div>
                    <div class="menu_link px-3">
                        <a href="my_orders.php" class="paper_link d-flex align-items-center gap_12">
                            <span class="icon"><i class="fa-solid fa-basket-shopping"></i></span>
                            <h6 class="title m-0">My Order</h6>
                        </a>
                        <a href="edit_profile.php" class="paper_link d-flex align-items-center gap_12">
                            <span class="icon"><i class="fa-regular fa-pen-to-square"></i></span>
                            <h6 class="title m-0">Edit Profile</h6>
                        </a>
                        <a href="address.php" class="paper_link d-flex align-items-center gap_12">
                            <span class="icon"><i class="fa-solid fa-map-location-dot"></i></span>
                            <h6 class="title m-0">Address</h6>
                        </a>
                        <a href="change_password.php" class="paper_link d-flex align-items-center gap_12">
                            <span class="icon"><i class="fa-solid fa-key"></i></span>
                            <h6 class="title m-0">Change Password</h6>
                        </a>
                        <a href="" class="paper_link d-flex align-items-center gap_12">
                            <span class="icon"><i class="fa-solid fa-right-from-bracket"></i></span>
                            <h6 class="title m-0">Logout</h6>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- footer fixed navbar -->
<nav class="footer_fixedNavbar w-100">
<ul class="fixed_navbar w-100 d-flex align-items-center justify-content-between">
    <li class="nav_item">
        <a href="index.php" class="nav_link">
        <span class="icon"><i class="fa-solid fa-home"></i></span>
        Home
        </a>
    </li>
    <li class="nav_item">
        <a href="menu.php" class="nav_link">
        <span class="icon"><i class="fa-solid fa-layer-group"></i></span>    
        Menu
        </a>
    </li>
    <li class="nav_item">
        <button type="button" class="btn position-relative click_button"><i class="fa-solid fa-lock"></i></button>
    </li>
    <li class="nav_item">
        <a href="offers.php" class="nav_link">
        <span class="icon"><i class="fa-solid fa-tags"></i></span>
        Offer
        </a>
    </li>
    <!-- <li class="nav_item">
        <a href="login.php" class="nav_link">
        <span class="icon"><i class="fa-solid fa-circle-user"></i></span>
        Log In
        </a>
    </li> -->
    <li class="nav_item">
        <button type="button" class="nav_link open_profile">
        <span class="icon"><i class="fa-solid fa-circle-user"></i></span>
            profile
        </button>
    </li>
</ul>
</nav>