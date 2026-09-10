<?php
/**
 * Template Name: Gallery page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package creativw_agency
 */

get_header();
?>

<?php // Check value exists.
if( have_rows('gallery_editer') ):

// Loop through rows.
while ( have_rows('gallery_editer') ) : the_row();

    // Case: Paragraph layout.
    if( get_row_layout() == 'inner_banner' ):
        $inner_label = get_sub_field('inner_label');
        $inner_title = get_sub_field('inner_title');
        $inner_desc = get_sub_field('inner_desc');
        $inner_btn = get_sub_field('inner_btn');
        $url = get_the_post_thumbnail_url();
?> <section class="inner-banner gallery-banner container" style="background: url(<?php echo $url; ?>) center center/cover no-repeat;">
        <div class="row">
            <div class="inner-banner-content">
                <span class="section-subtitle"><?php echo $inner_label; ?></span>
                <h1><?php echo $inner_title; ?></h1>
                <p><?php echo $inner_desc; ?></p>
                <div class="breadcrumb">
                    <?php foreach ($inner_btn as $btn) {
                        ?> <a href="<?php echo $btn['inner_link']['url']; ?>" title="<?php echo $btn['inner_link']['title']; ?>" ><?php echo $btn['inner_link']['title']; ?></a> <?php
                    } ?>
                </div>
            </div>
        </div>
</section> <?php

    // Case: Download layout.
    elseif( get_row_layout() == 'showcase_section' ): 
        $showcase_label = get_sub_field('showcase_label');
        $showcase_title = get_sub_field('showcase_title');
        $showcase_desc = get_sub_field('showcase_desc');
        $showcase_card = get_sub_field('showcase_card');
?> <section class="container gallery-showcase-section">
    <div class="row">
        <div class="section-heading">
            <span class="section-subtitle"><?php echo $showcase_label; ?></span>
            <h2><?php echo $showcase_title; ?></h2>
            <p><?php echo $showcase_desc; ?></p>
        </div>
        <div class="gallery-grid">
            <?php foreach ($showcase_card as $card) {
                ?> <div class="gallery-item <?php if(!empty($card['card_calss'])){ ?> <?php echo $card['card_calss']; ?> <?php } ?> ">
                <a href="<?php if(!empty($card['bg_one'])){ ?> <?php echo $card['bg_one']; ?> <?php } ?>" class="gallery-popup">
                    <img src="<?php echo $card['bg_two']; ?>" alt="">
                    <div class="gallery-overlay">
                        <i class="<?php echo $card['card_icon']; ?>"></i>
                    </div>
                </a>
            </div> <?php
            } ?>
            </div>
        </div>
    </div>
</section> <?php


    elseif( get_row_layout() == 'category_section' ): 
        $category_label = get_sub_field('category_label');
        $category_title = get_sub_field('category_title');
        $category_desc = get_sub_field('category_desc');
        $category_tab = get_sub_field('category_tab');
?> <section class="container gallery-filter-section">
    <div class="row">
        <div class="section-heading">
            <span class="section-subtitle"><?php echo $category_label; ?></span>
            <h2><?php echo $category_title; ?></h2>
            <p><?php echo $category_desc; ?></p>
        </div>
        <div class="gallery-filter-tabs">
            <ul>
                <?php $i = 1;
                 foreach ($category_tab as $pro) {
                   $category_text = $pro['category_text'];
                   ?> <li><a href="#top-<?php echo $i; ?>" title="<?php echo $category_text; ?>"><?php echo $category_text; ?></a></li> <?php $i++;
                } ?>
            </ul>
        </div>
 <div class="tab-sec">
    <?php $i = 1; foreach ($category_tab as $pro) {
        $category_content = $pro['category_content'];
        ?> <div class="gallery-filter-grid" id="top-<?php echo $i; ?>">
            <?php foreach ($category_content as $make) {
                $image_one = $make['image_one'];
                ?> <div class="gallery-filter-item web">
                <a href="<?php echo $image_one; ?>" class="gallery-popup">
                    <img src="<?php echo $image_one; ?>" alt="">
                </a>
            </div> <?php
            } ?>
        </div> <?php $i++;
    } ?>
     </div>
    </div>
</section> <?php



    elseif( get_row_layout() == 'journey_section' ): 
        $journey_label = get_sub_field('journey_label');
        $journey_title = get_sub_field('journey_title');
        $journey_desc = get_sub_field('journey_desc');
        $journey_item = get_sub_field('journey_item');
?> <section class="container gallery-counter-section">
    <div class="row">

        <div class="section-heading">
            <span class="section-subtitle"><?php echo $journey_label; ?></span>
            <h2><?php echo $journey_title; ?></h2>
            <p><?php echo $journey_desc; ?></p>
        </div>
        <div id="counter-box" class="gallery-counter-wrapper">
            <?php foreach ($journey_item as $item) {
                ?> <div class="gallery-counter-item">
                <div class="counter-icon">
                    <i class="<?php echo $item['item_icon']; ?>"></i>
                </div>
                <h3>
                    <span class="counter" data-number="<?php echo $item['item_number']; ?>">0</span>+
                </h3>
                <p><?php echo $item['item_title']; ?></p>
            </div> <?php
            } ?>
        </div>
    </div>
</section> <?php


    elseif( get_row_layout() == 'creative_section' ): 
        $creative_bg = get_sub_field('creative_bg');
        $creative_label = get_sub_field('creative_label');
        $creative_title = get_sub_field('creative_title');
        $creative_desc = get_sub_field('creative_desc');
        $creative_item = get_sub_field('creative_item');
        $creative_link = get_sub_field('creative_link');
?> <section class="container featured-project-section">
    <div class="row align-items-center">
        <div class="featured-project-image">
            <img src="<?php echo $creative_bg; ?>" alt="Featured Project">
        </div>
        <div class="featured-project-content">
            <span class="section-subtitle"><?php echo $creative_label; ?></span>
            <h2><?php echo $creative_title; ?></strong></h2>
            <p><?php echo $creative_desc; ?></p>
            <ul class="featured-list">
                <?php foreach ($creative_item as $creat) {
                    ?> <li><i class="<?php echo $creat['creative_item_icon']; ?>"></i> <?php echo $creat['creative_item_text']; ?>li> <?php
                } ?>
            </ul> 
            <a href="<?php echo $creative_link['url']; ?>" title="<?php echo $creative_link['title']; ?>" class="theme-btn"><?php echo $creative_link['title']; ?></a>
        </div>
    </div>
</section> <?php


    elseif( get_row_layout() == 'clients_section' ): 
        $clients_label = get_sub_field('clients_label');
        $clients_title = get_sub_field('clients_title');
        $clients_desc = get_sub_field('clients_desc');
        $clients_slide = get_sub_field('clients_slide');
?> <section class="container gallery-testimonial-section">
    <div class="row">
        <div class="section-heading">
            <span class="section-subtitle"><?php echo $clients_label; ?></span>
            <h2><?php echo $clients_title; ?></h2>
            <p><?php echo $clients_desc; ?></p>
        </div>
        <div class="gallery-testimonial-slider owl-carousel">
            <?php foreach ($clients_slide as $slide) {
                $rate_icon =  $slide['rate_icon'];
                ?> <div class="gallery-testimonial-item">
                <div class="testimonial-rating">
                    <?php foreach ($rate_icon as $rate) {
                        ?> <i class="<?php echo $rate['rating']; ?>"></i> <?php
                    } ?>
                </div>
                <p><?php echo $slide['slide_desc']; ?></p>
                <div class="testimonial-author">
                    <img src="<?php echo $slide['slide_bg']; ?>" alt="">
                    <div>
                        <h4><?php echo $slide['slide_title']; ?></h4>
                        <span><?php echo $slide['slide_label']; ?></span>
                    </div>
                </div>
            </div> <?php
            } ?>
        </div>
    </div>
</section> <?php


    elseif( get_row_layout() == 'cta_section' ): 
        $cta_label = get_sub_field('cta_label');
        $cta_title = get_sub_field('cta_title');
        $cta_desc = get_sub_field('cta_desc');
        $cta_link = get_sub_field('cta_link');
?> <section class="cta-section container">
        <div class="row">
            <div class="cta-box">
                <div class="cta-content">
                    <span class="section-subtitle"><?php echo $cta_label; ?></span>
                    <h2><?php echo $cta_title; ?></h2>
                    <p><?php echo $cta_desc; ?></p>
                    <a href="<?php echo $cta_link['url']; ?>" title="<?php echo $cta_link['title']; ?>" class="theme-btn"><?php echo $cta_link['title']; ?></a>
                </div>
            </div>
        </div>
</section> <?php

    endif;

// End loop.
endwhile;

// No value.
else :
    // Do something...
endif; ?>


<!-- inner banner start -->
<!-- <section class="inner-banner gallery-banner container">
        <div class="row">
            <div class="inner-banner-content">
                <span class="section-subtitle">our gallery</span>
                <h1>Creative <strong>Gallery</strong></h1>
                <p>
                    Explore our latest creative works, successful projects and digital experiences that showcase our passion for innovation and design.
                </p>
                <div class="breadcrumb">
                    <a href="index.html">Home</a>
                    <span>/</span>
                    <span>Gallery</span>
                </div>
            </div>
        </div>
</section> -->
<!-- inner banner end -->

<!-- gallery showcase start -->
<!-- <section class="container gallery-showcase-section">
    <div class="row">
        <div class="section-heading">
            <span class="section-subtitle">our gallery</span>
            <h2>Creative <strong>Showcase</strong></h2>
            <p>Explore our latest creative works, digital projects and inspiring designs.</p>
        </div>

        <div class="gallery-grid">

            <div class="gallery-item">
                <a href="<?php echo get_template_directory_uri(); ?>/images/item-1.jpg" class="gallery-popup">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/item-1.jpg" alt="">
                    <div class="gallery-overlay">
                        <i class="fa-solid fa-magnifying-glass-plus"></i>
                    </div>
                </a>
            </div>

            <div class="gallery-item">
                <a href="<?php echo get_template_directory_uri(); ?>/images/item-2.jpg" class="gallery-popup">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/item-2.jpg" alt="">
                    <div class="gallery-overlay">
                        <i class="fa-solid fa-magnifying-glass-plus"></i>
                    </div>
                </a>
            </div>

            <div class="gallery-item">
                <a href="<?php echo get_template_directory_uri(); ?>/images/pro-1.jpg" class="gallery-popup">
                   <img src="<?php echo get_template_directory_uri(); ?>/images/pro-1.jpg" alt="">
                    <div class="gallery-overlay">
                        <i class="fa-solid fa-magnifying-glass-plus"></i>
                    </div>
                </a>
            </div>

            <div class="gallery-item gallery-large">
                <a href="<?php echo get_template_directory_uri(); ?>/images/why-1.jpg" class="gallery-popup">
                   <img src="<?php echo get_template_directory_uri(); ?>/images/why-1.jpg" alt=""> 
                    <div class="gallery-overlay">
                        <i class="fa-solid fa-magnifying-glass-plus"></i>
                    </div>
                </a>
            </div>

            <div class="gallery-item">
                <a href="<?php echo get_template_directory_uri(); ?>/images/tabing-2.jpg" class="gallery-popup">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/tabing-2.jpg" alt="">
                    <div class="gallery-overlay">
                        <i class="fa-solid fa-magnifying-glass-plus"></i>
                    </div>
                </a>
            </div>

            <div class="gallery-item">
                <a href="<?php echo get_template_directory_uri(); ?>/images/why-small.jpg" class="gallery-popup">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/why-small.jpg" alt="">
                    <div class="gallery-overlay">
                        <i class="fa-solid fa-magnifying-glass-plus"></i>
                    </div>
                </a>
            </div>

        </div>
    </div>
</section> -->
<!-- gallery showcase end -->

<!-- gallery filter section start -->
<!-- <section class="container gallery-filter-section">
    <div class="row">
        <div class="section-heading">
            <span class="section-subtitle">our works</span>
            <h2>Browse By <strong>Category</strong></h2>
            <p>Discover our creative projects across different categories.</p>
        </div>

        <div class="gallery-filter-tabs">
            <button class="gallery-filter-btn active" data-filter="all">All</button>
            <button class="gallery-filter-btn" data-filter="web">Web Design</button>
            <button class="gallery-filter-btn" data-filter="branding">Branding</button>
            <button class="gallery-filter-btn" data-filter="uiux">UI / UX</button>
            <button class="gallery-filter-btn" data-filter="marketing">Marketing</button>
        </div>

        <div class="gallery-filter-grid">

            <div class="gallery-filter-item web">
                <a href="<?php echo get_template_directory_uri(); ?>/images/grid-1.jpg" class="gallery-popup">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/grid-1.jpg" alt="">
                </a>
            </div>

            <div class="gallery-filter-item branding">
                <a href="<?php echo get_template_directory_uri(); ?>/images/grid-2.jpg" class="gallery-popup">
                   <img src="<?php echo get_template_directory_uri(); ?>/images/grid-2.jpg" alt="">
                </a>
            </div>

            <div class="gallery-filter-item uiux">
                <a href="<?php echo get_template_directory_uri(); ?>/images/grid-3.jpg" class="gallery-popup">
                   <img src="<?php echo get_template_directory_uri(); ?>/images/grid-3.jpg" alt="">
                </a>
            </div>

            <div class="gallery-filter-item marketing">
                <a href="<?php echo get_template_directory_uri(); ?>/images/grid-3.jpg" class="gallery-popup">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/grid-3.jpg" alt="">
                </a>
            </div>

            <div class="gallery-filter-item web">
                <a href="<?php echo get_template_directory_uri(); ?>/images/grid-1.jpg" class="gallery-popup">
                   <img src="<?php echo get_template_directory_uri(); ?>/images/grid-1.jpg" alt="">
                </a>
            </div>

            <div class="gallery-filter-item branding">
                <a href="<?php echo get_template_directory_uri(); ?>/images/grid-2.jpg" class="gallery-popup">
                   <img src="<?php echo get_template_directory_uri(); ?>/images/grid-2.jpg" alt="">
                </a>
            </div>

        </div>
    </div>
</section> -->
<!-- gallery filter section end -->

<!-- gallery counter section start -->
<!-- <section class="container gallery-counter-section">
    <div class="row">

        <div class="section-heading">
            <span class="section-subtitle">our achievements</span>
            <h2>Creative <strong>Journey</strong></h2>
            <p>Our work reflects years of dedication, creativity and successful collaborations.</p>
        </div>

        <div id="counter-box" class="gallery-counter-wrapper">

            <div class="gallery-counter-item">
                <div class="counter-icon">
                    <i class="fa-solid fa-images"></i>
                </div>
                <h3>
                    <span class="counter" data-number="250">0</span>+
                </h3>
                <p>Gallery Photos</p>
            </div>

            <div class="gallery-counter-item">
                <div class="counter-icon">
                    <i class="fa-solid fa-briefcase"></i>
                </div>
                <h3>
                    <span class="counter" data-number="120">0</span>+
                </h3>
                <p>Projects</p>
            </div>

            <div class="gallery-counter-item">
                <div class="counter-icon">
                    <i class="fa-solid fa-users"></i>
                </div>
                <h3>
                    <span class="counter" data-number="80">0</span>+
                </h3>
                <p>Happy Clients</p>
            </div>

            <div class="gallery-counter-item">
                <div class="counter-icon">
                    <i class="fa-solid fa-award"></i>
                </div>
                <h3>
                    <span class="counter" data-number="15">0</span>+
                </h3>
                <p>Years Experience</p>
            </div>

        </div>

    </div>
</section> -->
<!-- gallery counter section end -->

<!-- featured project section start -->
<!-- <section class="container featured-project-section">
    <div class="row align-items-center">
        <div class="featured-project-image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/blog-bg.jpg" alt="Featured Project">
        </div>
        <div class="featured-project-content">
            <span class="section-subtitle">featured project</span>
            <h2>Creative <strong>Brand Identity</strong></h2>
            <p>We create modern digital experiences that combine creativity, innovation and technology to help businesses build a strong brand and deliver exceptional user experiences.</p>
            <ul class="featured-list">
                <li><i class="fa-solid fa-circle-check"></i> Modern UI / UX Design</li>
                <li><i class="fa-solid fa-circle-check"></i> Responsive Development</li>
                <li><i class="fa-solid fa-circle-check"></i> Creative Brand Strategy</li>
                <li><i class="fa-solid fa-circle-check"></i> SEO Friendly Structure</li>
                <li><i class="fa-solid fa-circle-check"></i> High Performance Website</li>
                <li><i class="fa-solid fa-circle-check"></i> Premium Design Quality</li>
            </ul>
            <a href="#" class="theme-btn">View Project</a>
        </div>
    </div>
</section> -->
<!-- featured project section end -->

<!-- gallery testimonial section start -->
<!-- <section class="container gallery-testimonial-section">
    <div class="row">
        <div class="section-heading">
            <span class="section-subtitle">client feedback</span>
            <h2>What Our <strong>Clients Say</strong></h2>
            <p>We believe every successful project starts with trust and ends with a satisfied client.</p>
        </div>
        <div class="gallery-testimonial-slider owl-carousel">
            <div class="gallery-testimonial-item">
                <div class="testimonial-rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <p>"The team delivered an exceptional website with modern design and smooth user experience. Highly recommended!"</p>
                <div class="testimonial-author">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/profile-2.png" alt="">
                    <div>
                        <h4>James Anderson</h4>
                        <span>Creative Director</span>
                    </div>
                </div>
            </div>
            <div class="gallery-testimonial-item">
                <div class="testimonial-rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <p>"Professional, creative and always available throughout the project. The final result exceeded our expectations."</p>
                <div class="testimonial-author">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/profile-1.png" alt="">
                    <div>
                        <h4>Emma Wilson</h4>
                        <span>Marketing Manager</span>
                    </div>
                </div>
            </div>
            <div class="gallery-testimonial-item">
                <div class="testimonial-rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <p>"Outstanding quality and attention to detail. We loved every part of the design process."</p>
                <div class="testimonial-author">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/profile-4.png" alt="">
                    <div>
                        <h4>Michael Brown</h4>
                        <span>Business Owner</span>
                    </div>
                </div>
            </div>
            <div class="gallery-testimonial-item">
                <div class="testimonial-rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <p>"The team delivered an exceptional website with modern design and smooth user experience. Highly recommended!"</p>
                <div class="testimonial-author">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/profile-3.png" alt="">
                    <div>
                        <h4>James Anderson</h4>
                        <span>Creative Director</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- gallery testimonial section end -->
<!-- instagram gallery section start -->
<!-- <section class="container instagram-gallery-section">
    <div class="row">
        <div class="section-heading">
            <span class="section-subtitle">follow us</span>
            <h2>Instagram <strong>Gallery</strong></h2>
            <p>Follow our latest creative work and behind-the-scenes moments on Instagram.</p>
        </div>
        <div class="instagram-gallery-grid">
            <div class="instagram-gallery-item">
                <a href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/grid-1.jpg" alt="">
                    <span><i class="fa-brands fa-instagram"></i></span>
                </a>
            </div>
            <div class="instagram-gallery-item">
                <a href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/grid-2.jpg" alt="">
                    <span><i class="fa-brands fa-instagram"></i></span>
                </a>
            </div>
            <div class="instagram-gallery-item">
                <a href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/grid-3.jpg" alt="">
                    <span><i class="fa-brands fa-instagram"></i></span>
                </a>
            </div>
            <div class="instagram-gallery-item">
                <a href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/box-1.jpg" alt="">
                    <span><i class="fa-brands fa-instagram"></i></span>
                </a>
            </div>
            <div class="instagram-gallery-item">
                <a href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/box-2.jpg" alt="">
                    <span><i class="fa-brands fa-instagram"></i></span>
                </a>
            </div>
            <div class="instagram-gallery-item">
                <a href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/box-3.jpg" alt="">
                    <span><i class="fa-brands fa-instagram"></i></span>
                </a>
            </div>
        </div>
    </div>
</section> -->
<!-- instagram gallery section end -->

<!-- cta section start -->
<!-- <section class="cta-section container">
        <div class="row">
            <div class="cta-box">
                <div class="cta-content">
                    <span class="section-subtitle">let's work together</span>
                    <h2>Ready To Start Your <strong>Next Project?</strong></h2>
                    <p>
                        Let's create something creative and impactful together with our digital solutions.
                    </p>
                    <a href="#" class="theme-btn">Get Started</a>
                </div>
            </div>
        </div>
</section> -->
<!-- cta section end -->

<?php
get_footer();
