<?php get_header(); ?>


<section class="hero">
    <img class="hero-img" src="/wp-content/themes/coffee-theme/assets/images/hero-image.png" alt="">
    <div class="hero-content-background">
        <div class="hero-content">
            <h1>Move forward </br>with confidence</h1>
            <div class="hero-buttons">
                <button class="button">Find a bespoke orthosis</button>
                <button class="button">Transform your patients' lives</button>
            </div>
        </div>
    </div>
</section>



<section class="features">
    <div class="container">
        <h2>Life-enhancing orthotics created in minutes</h2>
        <p>At 3D Ortho-Pro, we are the top, UK 3D print orthotics supplier. Within minutes, you can be scanned directly by one of our clinicians, and work together with them to modify and align a 100% personalised orthotis with unrivalled comfort, longevity, and ultimately, life-enhancing results.</p>

        <div class="feature-icons">
            <div class="feature">
                <img src="/wp-content/themes/coffee-theme/assets/images/icon-uk-based.png" alt="UK Based">
                <p>Only UK 3D print supplier</p>
            </div>
            <div class="feature">
                <img src="/wp-content/themes/coffee-theme/assets/images/icon-printing.png" alt="Printing accuracy">
                <p>99.7% printing accuracy</p>
            </div>
            <div class="feature">
                <img src="/wp-content/themes/coffee-theme/assets/images/icon-guarantee.png" alt="Delivery Guarantee">
                <p>2 week arrival guarantee</p>
            </div>
            <div class="feature">
                <img src="/wp-content/themes/coffee-theme/assets/images/icon-waste.png" alt="Less Waste">
                <p>Up to 95% less waste</p>
            </div>
        </div>

        <div class="cta-center">
            <a href="#" class="button">Find out more</a>
        </div>
    </div>
</section>

<section class="products">
    <div class="container">
        <h2>Innovation starts here</h2>

        <div class="product-grid">
            <div class="product">
                <img src="/wp-content/themes/coffee-theme/assets/images/product-piro.png" alt="Piro AFO/SMO">
                <h3>Piro AFO/SMO</h3>
            </div>
            <div class="product">
                <img src="/wp-content/themes/coffee-theme/assets/images/product-raptor.png" alt="Raptor Mask">
                <h3>Raptor Mask</h3>
            </div>
            <div class="product">
                <img src="/wp-content/themes/coffee-theme/assets/images/product-augo.png" alt="Augo">
                <h3>Augo</h3>
            </div>
            <div class="product">
                <img src="/wp-content/themes/coffee-theme/assets/images/product-8sole.png" alt="8 Sole">
                <h3>8 Sole</h3>
            </div>
        </div>

        <div class="product-highlight">
            <div class="product-logo">
                <img src="/wp-content/themes/coffee-theme/assets/images/piro-logo.png" alt="Piro Logo">
                <a href="#" class="button">Discover Piro</a>
            </div>

            <div class="product-info">
                <p>AFOs and SMOs for children with cerebral palsy and neurological conditions</p>
                <p>The thinnest and lightest AFOs and SMOs that help children feel comfortable and confident.</p>
            </div>
            <div class="product-benefits">
                <p>Suitable for patients with:</p>
                <ul>
                    <li>Low Tone Pronation</li>
                    <li>High Tone Pronation / Supination</li>
                    <li>Toe Walking</li>
                    <li>Knee Hyperextension</li>
                    <li>Crouching</li>
                    <li>Non-Ambulatory</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="technology">
    <div class="container">
        <div class="tech-content">
            <h2>3D printed for a tailored fit</h2>
            <p>Unable to get that image, used a placeholder > </p>
            <p>3D scanning and printing truly exceeds traditional methods. The process lets clinicians scan on a sub-millimetre level, using algorithms to prepare and print, as well as revolutionary design possibilities to create 100% custom fit orthoses. With a process that reduces manual input and adjustments, it lets you streamline practice processes and reduce turnaround time.</p>
            <p>It is predicted that one in three custom-made O&P products will be 3D printed by 2027. Ready to be part of the future?</p>
            <a href="#" class="button">More about our technology</a>
        </div>
        <div class="tech-image">
            <img src="/wp-content/themes/coffee-theme/assets/images/placeholder.gif" alt="3D Printing Technology">
        </div>
    </div>
</section>

<section class="articles">
    <div class="container">
        <h2>Dive deeper</h2>

        <div class="article-grid">
            <?php
            // Set up custom query to get only 3 posts
            $args = array(
                'posts_per_page' => 3,
                'orderby' => 'date',
                'order' => 'DESC'
            );

            $recent_posts = new WP_Query($args);

            // Loop through the posts
            while ($recent_posts->have_posts()) {
                $recent_posts->the_post(); ?>
                <div class="article">
                    <?php the_post_thumbnail('full'); ?>
                    <h3><?php the_title() ?></h3>
                    <p><?php the_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>" class="text-link">Read more</a>
                </div>
            <?php
            }
            // Reset post data
            wp_reset_postdata();
            ?>
        </div>

        <div class="cta-center">
            <a href="#" class="text-link">View all articles</a>
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="container">
        <div class="cta-image">
            <img src="/wp-content/themes/coffee-theme/assets/images/cta-image.png" alt="Family hugging">
        </div>
        <div class="cta-content">
            <h2>Let's take on the future together</h2>
            <p>Whether you are a clinician looking to revamp your technology, process or products, or wanting an innovative, 100% bespoke orthosis for yourself, we have got an award-winning range that will help you.</p>
            <a href="#" class="button">Get in touch</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>