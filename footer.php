    <!--Footer -->
    <footer class="footer">
        <div class="footer-content">
            <div class="our-brand">
                <h3>SHOP.CO</h3>
                <p>We have clothes that suit your style and which you're proud to wear. From women to men.</p>
                <div class="social">
                    <a href="#" aria-label="Twitter"><img src="assets/images/social/twitterX.svg"></a>
                    <a href="#" aria-label="Facebook"><img src="assets/images/social/facebook.svg"></a>
                    <a href="#" aria-label="Instagram"><img src="assets/images/social/instagram.svg"></a>
                    <a href="#" aria-label="GitHub"><img src="assets/images/social/github.svg"></a>
                </div>
            </div>

            <div class="sitemap">
                <div class="sitemap-section">
                    <h4>COMPANY</h4>
                    <ul>
                    <?php
						wp_nav_menu(array(
							'theme_location' => 'footer-left',
							'container' => false,
							'items_wrap' => '%3$s',
							'fallback_cb' => false,
						));
					?>
                    </ul>
                </div>

                <div class="sitemap-section">
                    <h4>HELP</h4>
                    <ul>
                    <?php
						wp_nav_menu(array(
							'theme_location' => 'footer-center-left',
							'container' => false,
							'items_wrap' => '%3$s',
							'fallback_cb' => false,
						));
					?>
                    </ul>
                </div>

                <div class="sitemap-section">
                    <h4>FAQ</h4>
                    <ul>
                    <?php
						wp_nav_menu(array(
							'theme_location' => 'footer-center-right',
							'container' => false,
							'items_wrap' => '%3$s',
							'fallback_cb' => false,
						));
					?>
                    </ul>
                </div>

                <div class="sitemap-section">
                    <h4>RESOURCES</h4>
                    <ul>
                    <?php
						wp_nav_menu(array(
							'theme_location' => 'footer-right',
							'container' => false,
							'items_wrap' => '%3$s',
							'fallback_cb' => false,
						));
					?>
                    </ul>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; Shop.co 2000-2023, All Rights Reserved</p>
            <div class="payments">
                <img src="./assets/images/payments/Visa.svg" alt="Visa">
                <img src="./assets/images/payments/Mastercard.svg" alt="Mastercard">
                <img src="./assets/images/payments/Paypal.svg" alt="PayPal"> 
                <img src="./assets/images/payments/ApplePay.svg" alt="Apple Pay">
                <img src="./assets/images/payments/GooglePay.svg" alt="Google Pay">
            </div>
        </div>
    </footer>
	<?php wp_footer(); ?>
</body>
</html>