<header class="header menu_fixed">
    <div id="preloader">
        <div data-loader="circle-side"></div>
    </div><!-- /Page Preload -->
    <div id="logo">
        <a href="index.html">
            <img src="img/logo-sticky.png" width="200" height="36" alt="" class="logo_normal">
            <img src="img/logo-sticky1.png" width="250" height="45" alt="" class="logo_sticky">
        </a>
    </div>
    <ul id="top_menu">
        <li><a href="cart-1.html" class="cart-menu-btn" title="Cart"><strong>4</strong></a></li>
        <li><a href="#sign-in-dialog" id="sign-in" class="login" title="Sign In">Sign In</a></li>
        <li><a href="wishlist.html" class="wishlist_bt_top" title="Your wishlist">Your wishlist</a></li>
    </ul>
    <!-- /top_menu -->
    <a href="#menu" class="btn_mobile">
        <div class="hamburger hamburger--spin" id="hamburger">
            <div class="hamburger-box">
                <div class="hamburger-inner"></div>
            </div>
        </div>
    </a>
    <nav id="menu" class="main-menu">
        <ul>
            <li><span><a href="/" class="{{ ($nvb == 'home') ? 'border-bottom' : '' }}">Home</a></span></li>
            <li><span><a href="/rooms" class="{{ ($nvb == 'rooms') ? 'border-bottom' : '' }}">Rooms</a></span></li>
            <li><span><a href="/packages" class="{{ ($nvb == 'packages') ? 'border-bottom' : '' }}">Packages</a></span></li>
            <li><span><a href="/about" class="{{ ($nvb == 'about') ? 'border-bottom' : '' }}">About</a></span></li>
        </ul>
    </nav>
</header>
