<?php get_header(); ?>

    <!-- Main -->
    <main>
        <!-- Featured Section -->
        <section class="featured">
            <div class="featured-container">
                <div class="featured-text">
                    <h1>Find Clothes That Match Your Style</h1>
                    <p>Browse through our diverse range of meticulously crafted garments, designed to bring out your individuality and cater to your sense of style.</p>
                    <a href="#" class="shop-now-btn" aria-label="Shop Now">Shop Now</a>
                </div>
                <div class="featured-image">
                    <picture>
                        <source media="(max-width: 768px)" srcset="./assets/images/featured/featured-image-small.png">
                        <source media="(min-width: 769px)" srcset="./assets/images/featured/featured-image-large.png">
                        <img src="./assets/images/featured/featured-image-large.png" alt="two fashion models showcasing clothing styles">
                    </picture>
                    
                </div>
            </div>
        </section>

        <!-- Brands Section -->
        <section class="brands">
            <div class="brands-content">
                <ul>
                    <li><a href="#"><img src="./assets/images/brands/versace-logo.png" alt="Versace"></a></li>
                    <li><a href="#"><img src="./assets/images/brands/zara-logo.png" alt="Zara"></a></li>
                    <li><a href="#"><img src="./assets/images/brands/gucci-logo.png" alt="Gucci"></a></li>
                    <li><a href="#"><img src="./assets/images/brands/prada-logo.png" alt="Prada"></a></li>
                    <li><a href="#"><img src="./assets/images/brands/calvin-klein-logo.png" alt="Calvin Klein"></a></li>
                </ul>
            </div>
        </section>

        <!-- New Arrivals Section -->
        <section class="new-arrivals">
            <h2>New Arrivals</h2>
            <div class="new-arrivals-container">
                <article>
                    <a href="#">
                        <img src="./assets/images/arivals/arrival_1.png" alt="T-shirt with Tape Details">
                        <h3>T-shirt with Tape Details</h3>
                        <p>$120</p>
                    </a>
                </article>
                <article>
                    <a href="#">
                        <img src="./assets/images/arivals/arrival_2.png" alt="Skinny Fit Jeans">
                        <h3>Skinny Fit Jeans</h3>
                        <p>$240</p>
                    </a>
                </article>
                <article>
                    <a href="#">
                        <img src="./assets/images/arivals/arrival_3.png" alt="Checkered Shirt">
                        <h3>Checkered Shirt</h3>
                        <p>$180</p>
                    </a>
                </article>
                <article>
                    <a href="#">
                        <img src="./assets/images/arivals/arrival_4.png" alt="Sleeve Striped T-shirt">
                        <h3>Sleeve Striped T-shirt</h3>
                        <p>$130</p>
                    </a>
                </article>
            </div>
            <div class="view-all-btn-container">
                <a href="#" class="view-all-btn">View All</a>
            </div>
        </section>

        <!-- Browse by Dress Style Section -->
        <section class="dress-style">
            <h2>Browse by Dress Style</h2>
            <div class="dress-style-container">
                <div class="dress-style-item">
                    <article>
                        <img src="./assets/images/styles/casual.png" alt="Casual style">
                        <h3>Casual</h3>
                    </article>
                </div>
                <div class="dress-style-item">
                    <article>
                        <img src="./assets/images/styles/formal.png" alt="Formal style">
                        <h3>Formal</h3>
                    </article>
                </div>
                <div class="dress-style-item">
                    <article>
                        <img src="./assets/images/styles/party.png" alt="Party style">
                        <h3>Party</h3>
                    </article>
                </div>
                <div class="dress-style-item">
                    <article>
                        <img src="./assets/images/styles/gym.png" alt="Gym style">
                        <h3>Gym</h3>
                    </article>
                </div>
            </div>
        </section>

        <!-- Customer Reviews Section -->
        <section class="reviews" aria-labelledby="reviews-heading">
            <div class="reviews-header" >
                <h2 id="reviews-heading">Our Happy Customers</h2>
                <div class="arrows-container">
                    <button class="carousel-prev"><img src="./assets/images/arrow-left.svg" alt="left arrow"  /></button>
                    <button class="carousel-next"><img src="./assets/images/arrow-right.svg" alt="right arrow" /></button>
                </div>
            </div>
            <div class="reviews-container">
                <article class="reviews-item">
                    <div class="review-rating">
                        <img src="./assets/images/Star.svg">
                        <img src="./assets/images/Star.svg">
                        <img src="./assets/images/Star.svg">
                        <img src="./assets/images/Star.svg">
                        <img src="./assets/images/Star.svg">
                    </div>
                    <h3>Sarah M. <span class="verified"><img src="./assets/images/verified.svg"></span></h3>
                    <p>"I'm blown away by the quality and style of the clothes I received from Shop.co. From casual wear to elegant dresses, every piece I've bought has exceeded my expectations."</p>
                </article>
            
                <article class="reviews-item">
                    <div class="review-rating">
                        <img src="./assets/images/Star.svg">
                        <img src="./assets/images/Star.svg">
                        <img src="./assets/images/Star.svg">
                        <img src="./assets/images/Star.svg">
                        <img src="./assets/images/Star.svg">
                    </div>
                    <h3>Alex K. <span class="verified"><img src="./assets/images/verified.svg"></span></h3>
                    <p>"Finding clothes that align with my personal style used to be a challenge until I discovered Shop.co. The range of options they offer is truly remarkable, catering to a variety of tastes and occasions."</p>
                </article>
            
                <article class="reviews-item">
                    <div class="review-rating">
                        <img src="./assets/images/Star.svg">
                        <img src="./assets/images/Star.svg">
                        <img src="./assets/images/Star.svg">
                        <img src="./assets/images/Star.svg">
                        <img src="./assets/images/Star.svg">
                    </div>
                    <h3>James L. <span class="verified"><img src="./assets/images/verified.svg"></span></h3>
                    <p>"As someone who's always on the lookout for unique fashion pieces, I'm thrilled to have stumbled upon Shop.co. The selection of clothes is not only diverse but also on-point with the latest trends."</p>
                </article>

                <article class="reviews-item">
                    <div class="review-rating">
                        <img src="./assets/images/Star.svg">
                        <img src="./assets/images/Star.svg">
                        <img src="./assets/images/Star.svg">
                        <img src="./assets/images/Star.svg">
                        <img src="./assets/images/Star.svg">
                    </div>
                    <h3>Moora S. <span class="verified"><img src="./assets/images/verified.svg"></span></h3>
                    <p>"Shopping at Shop.co has been a game-changer for me. The fit and quality of the clothes are unmatched, and their customer service is always helpful!"</p>
                </article>
        
                <article class="reviews-item">
                    <div class="review-rating">
                        <img src="./assets/images/Star.svg">
                        <img src="./assets/images/Star.svg">
                        <img src="./assets/images/Star.svg">
                        <img src="./assets/images/Star.svg">
                        <img src="./assets/images/Star.svg">
                    </div>
                    <h3>Pola S. <span class="verified"><img src="./assets/images/verified.svg"></span></h3>
                    <p>"Shopping at Shop.co has been a game-changer for me. The fit and quality of the clothes are unmatched, and their customer service is always helpful!"</p>
                </article>
            </div>
        </section>

        <!-- Newsletter Signup Section -->
        <section class="newsletter" aria-labelledby="newsletter-heading">
            <div class="newsletter-container">
                <h2 id="newsletter-heading">Stay up to date about our latest offers</h2>
                <div class="form-wrapper">
                    <form action="">
                        <div class="newsletter-form">
                            <div class="input-group">
                                <img src="./assets/images/email.png" class="email-icon" alt="email input">
                                <input class="email-input" type="email" aria-label="Enter your email address" placeholder="Enter your email address" aria-describedby="newsletter-button">
                            </div>
                            <button type="submit" class="newtletter-btn" id="newsletter-button">Subscribe to Newsletter</button>
                        </div>
                    </form>
                </div>

            </div>
        </section>
    </main>

<?php get_footer(); ?>
