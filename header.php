<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php bloginfo('description'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<!-- Header -->
    <header>
        <div class="promo-bar">
            <div class="promo-bar-content">
                <p>Sign up and get 20% off on your first order. <a href="#">Sign Up Now</a></p>
                <button class="promo-bar-close-btn"><img src="./assets/images/close-icon.png" alt="close" ></button>
            </div>
        </div>
        <nav class="nav-bar">
            <div class="menu-wrapper">
                <div class="mobile-menu" id="mobile-menu">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
                <div class="logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>">SHOP.CO</a>
                </div>
                <ul class="nav-links" id="nav-links">
					<?php
						wp_nav_menu(array(
							'theme_location' => 'main-menu',
							'container' => false, // Removes the default <div> container
							'items_wrap' => '%3$s', // Removes the <ul> wrapper
							'depth' => 2, // Allows submenus
							'fallback_cb' => false, // Don't display a fallback if no menu is set
						));
                    ?>
                </ul>
            </div>
            
            <div class="search-cart-profile">
                <div class="input-group search-input">
                    <button class="search-btn" type="button" id="search-button"><img src="./assets/images/search-icon.png" alt="search"></button>
                    <input type="search" aria-label="Search for products" placeholder="Search for products..." aria-describedby="search-button">
                </div>
                <button class="cart-btn" aria-label="View Cart" ><img src="./assets/images/search-icon-mobile.png" alt="shopping cart"></button>
                <button class="cart-btn" aria-label="View Cart" ><img src="./assets/images/shopping-cart-icon.png" alt="shopping cart"></button>
                <button class="profile-btn"aria-label="View Profile" ><img src="./assets/images/user-icon.png" alt="user account"></button>
            </div>
        </nav>
    </header>