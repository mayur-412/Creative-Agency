<?php
/**
 * Template Name: About page
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

<?php 
// Check value exists.
if( have_rows('page_editer') ):

    // Loop through rows.
    while ( have_rows('page_editer') ) : the_row();

    // Case: Paragraph layout.
    if( get_row_layout() == 'inner_banner' ):
        $banner_label = get_sub_field('banner_label');
        $banner_title = get_sub_field('banner_title');
        $banner_desc = get_sub_field('banner_desc');
        $banner_link = get_sub_field('banner_link');
        $url = get_the_post_thumbnail_url();
?> <section class="container inner-banner blog-banner" style="background: url(<?php echo $url; ?>) center center/cover no-repeat;">
        <div class="row">
            <div class="inner-banner-content">
                <span class="section-subtitle"><?php echo $banner_label; ?></span>
                <h1><?php echo $banner_title; ?></h1>
                <p><?php echo $banner_desc; ?></p>
                <div class="breadcrumb">
                    <?php foreach ($banner_link as $btn) {
                      ?> <a href="<?php echo $btn['banner_btn']['url']; ?>" title="<?php echo $btn['banner_btn']['title']; ?>"><?php echo $btn['banner_btn']['title']; ?></a> <?php
                    } ?>
                </div>
            </div>
        </div>
</section> <?php

    // Case: Download layout.
    elseif( get_row_layout() == 'profile_section' ): 
        $profile_bg = get_sub_field('profile_bg');
        $profile_label = get_sub_field('profile_label');
        $profile_title = get_sub_field('profile_title');
        $profile_desc = get_sub_field('profile_desc');
        $profile_number = get_sub_field('profile_number');
        $profile_date = get_sub_field('profile_date');
        $profile_card = get_sub_field('profile_card');
        $profile_link = get_sub_field('profile_link');
?> <section class="container about-profile-section">
    <div class="row">
        <div class="about-profile-wrapper">
            <div class="about-profile-image">
                <div class="about-profile-main">
                    <img src="<?php echo $profile_bg; ?>" alt="About Profile">
                </div>
                <div class="experience-card">
                    <h3><?php echo $profile_number; ?>+</h3>
                    <span><?php echo $profile_date; ?></span>
                </div>
            </div>
            <div class="about-profile-content">
                <span class="section-subtitle"><?php echo $profile_label; ?></span>
                <h2><?php echo $profile_title; ?></h2>
                <p><?php echo $profile_desc; ?></p>
                <div class="about-profile-info">
                    <?php foreach ($profile_card as $card) {
                        ?> <div class="about-info-item">
                        <h4><?php echo $card['card_tx']; ?></h4>
                        <span><?php echo $card['card_label']; ?></span>
                    </div> <?php
                    } ?>
                </div>
                <div class="about-profile-btn">
                    <a href="<?php echo $profile_link['url']; ?>" title="<?php echo $profile_link['title']; ?>" class="theme-btn"><?php echo $profile_link['title']; ?></a>
                </div>
            </div>
        </div>
    </div>
</section> <?php

    elseif( get_row_layout() == 'skill_section' ): 
        $skill_lable = get_sub_field('skill_lable');
        $skill_title = get_sub_field('skill_title');
        $skill_desc = get_sub_field('skill_desc');
        $skill_item = get_sub_field('skill_item');
        $skill_bg = get_sub_field('skill_bg');
?> <section class="container about-skills-section">
    <div class="row">
        <div class="about-skills-wrapper">

            <div class="about-skills-content">
                <span class="section-subtitle"><?php echo $skill_lable; ?></span>
                <h2><?php echo $skill_title; ?></h2>
                <p><?php echo $skill_desc; ?></p>
                <?php foreach ($skill_item as $skill) {
                    ?> <div class="skill-item">
                    <div class="skill-title">
                        <span><?php echo $skill['item_title']; ?></span>
                        <span><?php echo $skill['item_number']; ?>%</span>
                    </div>
                    <div class="skill-bar">
                        <div class="skill-fill" style="width:<?php echo $skill['item_no']; ?>%;"></div>
                    </div>
                </div> <?php
                } ?>
            </div>
            <div class="about-skills-image">
                <div class="skills-image-box">
                    <img src="<?php echo $skill_bg; ?>" alt="">
                </div>
            </div>

        </div>
    </div>
</section> <?php

    elseif( get_row_layout() == 'counter_section' ): 
        $counter_label = get_sub_field('counter_label');
        $counter_title = get_sub_field('counter_title');
        $counter_desc = get_sub_field('counter_desc');
        $counter_box = get_sub_field('counter_box');
?> <section class="container about-counter-section" id="about-counter">
    <div class="row">
        <div class="section-heading">
            <span class="section-subtitle"><?php echo $counter_label; ?></span>
            <h2><?php echo $counter_title; ?></h2>
            <p><?php echo $counter_desc; ?></p>
        </div>
        <div class="about-counter-grid">
            <?php foreach ($counter_box as $key => $box) {
               ?> <div class="about-counter-item">
                <div class="about-counter-icon">
                    <i class="<?php echo $box['icon']; ?>"></i>
                </div>
                <h3><span class="counter" data-number="<?php echo $box['counter']; ?>">0</span>+</h3>
                <p><?php echo $box['counter_tx']; ?></p>
            </div> <?php
            } ?>
        </div>
    </div>
</section> <?php

    elseif( get_row_layout() == 'choice_section' ): 
        $choice_label = get_sub_field('choice_label');
        $choice_title = get_sub_field('choice_title');
        $choice_desc = get_sub_field('choice_desc');
        $choice_bg = get_sub_field('choice_bg');
        $choice_card = get_sub_field('choice_card');
        $choice_link = get_sub_field('choice_link');
?> <section class="container about-choose-section">
    <div class="row">
        <div class="section-heading">
            <span class="section-subtitle"><?php echo $choice_label; ?></span>
            <h2><?php echo $choice_title; ?></h2>
            <p><?php echo $choice_desc; ?></p>
        </div>
        <div class="about-choose-wrapper">
            <div class="about-choose-image">
                <img src="<?php echo $choice_bg; ?>" alt="">
                <div class="choose-badge">
                    <i class="fa-solid fa-medal"></i>
                    <span>100% Quality Work</span>
                </div>
            </div>
            <div class="about-choose-content">
                <div class="choose-list">
                    <?php foreach ($choice_card as $key => $choice) {
                        ?> <div class="choose-item">
                        <div class="choose-icon">
                            <i class="<?php echo $choice['c_icon']; ?>"></i>
                        </div>
                        <div class="choose-text">
                            <h4><?php echo $choice['choice_text']; ?></h4>
                            <p><?php echo $choice['choice_date']; ?></p>
                        </div>
                    </div> <?php
                    } ?>
                </div>
                <a href="<?php echo $choice_link['url']; ?>" title="<?php echo $choice_link['title']; ?>" class="theme-btn"><?php echo $choice_link['title']; ?></a>
            </div>
        </div>
    </div>
</section> <?php


    elseif( get_row_layout() == 'journey_section' ): 
        $journey_label = get_sub_field('journey_label');
        $journey_title = get_sub_field('journey_title');
        $journey_desc = get_sub_field('journey_desc');
        $timeline = get_sub_field('timeline');
?> <section class="container about-timeline-section">
    <div class="row">
        <div class="section-heading">
            <span class="section-subtitle"><?php echo $journey_label; ?></span>
            <h2><?php echo $journey_title; ?></h2>
            <p><?php echo $journey_desc; ?></p>
        </div>
        <div class="about-timeline">
            <?php foreach ($timeline as $key => $time) {
               ?> <div class="timeline-item">
                <div class="timeline-year">
                    <span><?php echo $time['years']; ?></span>
                </div>
                <div class="timeline-content">
                    <h3><?php echo $time['time_title']; ?></h3>
                    <p><?php echo $time['time_desc']; ?></p>
                </div>
            </div> <?php
            } ?>
        </div>
    </div>
</section> <?php



    elseif( get_row_layout() == 'clients_section' ): 
        $clients_label = get_sub_field('clients_label');
        $clients_title = get_sub_field('clients_title');
        $clients_desc = get_sub_field('clients_desc');
        $clients_card = get_sub_field('clients_card');
?> <section class="container about-testimonial-section">
    <div class="row">
        <div class="section-heading">
            <span class="section-subtitle"><?php echo $clients_label; ?></span>
            <h2><?php echo $clients_title; ?></h2>
            <p><?php echo $clients_desc; ?></p>
        </div>
        <div class="about-testimonial-slider owl-carousel">
            <?php foreach ($clients_card as $key => $client) {
                $star = $client['star'];
                ?> <div class="testimonial-item">
                <div class="testimonial-rating">
                    <?php foreach ($star as $rateing) {
                        ?> <i class="<?php echo $rateing['star_icon']; ?>"></i> <?php
                    } ?>
                </div>
                <p><?php echo $client['card_desc']; ?></p>

                <div class="testimonial-author">
                    <img src="<?php echo $client['clients_bg']; ?>" alt="">
                    <div class="author-info">
                        <h4><?php echo $client['clients_name']; ?></h4>
                        <span><?php echo $client['clients_post']; ?></span>
                    </div>
                </div>
            </div> <?php
            } ?>
        </div>
    </div>
</section> <?php


elseif( get_row_layout() == 'product_section' ): 
        $product_label = get_sub_field('product_label');
        $product_title = get_sub_field('product_title');
        $product_desc = get_sub_field('product_desc');
        $product_box = get_sub_field('product_box');
?> <section class="container about-expertise-section">
    <div class="row">
        <div class="section-heading">
            <span class="section-subtitle"><?php echo $product_label; ?></span>
            <h2><?php echo $product_title; ?></h2>
            <p><?php echo $product_desc; ?></p>
        </div>
        <div class="about-expertise-grid">
            <?php foreach ($product_box as  $product) {
                ?> <div class="expertise-item">
                <div class="expertise-icon">
                    <i class="<?php echo $product['product_icon']; ?>"></i>
                </div>
                <h3><?php echo $product['product_head']; ?></h3>
                <p><?php echo $product['product_content']; ?></p>
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
        $cta_bg = get_sub_field('cta_bg');
?> <section class="container about-cta-section">
    <div class="row">
        <div class="about-cta-wrapper">
            <div class="about-cta-content">
                <span class="section-subtitle"><?php echo $cta_label; ?></span>
                <h2><?php echo $cta_title; ?></h2>
                <p><?php echo $cta_desc; ?></p>
                <div class="about-cta-btn">
                    <?php foreach ($cta_link as $key => $cta_link) {
                        $cta_btn = $cta_link['cta_btn'];
                        ?> <a href="<?php echo $cta_btn['url']; ?>" title="<?php echo $cta_btn['title']; ?>" class="theme-btn"><?php echo $cta_btn['title']; ?></a> <?php
                    } ?>
                </div>
            </div>
            <div class="about-cta-image">
                <img src="<?php echo $cta_bg; ?>" alt="">
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
<!-- <section class="container inner-banner blog-banner">
        <div class="row">
            <div class="inner-banner-content">
                <span class="section-subtitle">our blog</span>
                <h1>Latest News & <strong>Creative Insights</strong></h1>
                <p>Explore our latest articles, design trends and digital solutions.</p>
                <div class="breadcrumb">
                    <a href="#">Home</a>
                    <span>/</span>
                    <span>About Us</span>
                </div>
            </div>
        </div>
</section> -->
<!-- inner banner end -->

<!-- about profile section start -->
<!-- <section class="container about-profile-section">
    <div class="row">
        <div class="about-profile-wrapper">
            <div class="about-profile-image">
                <div class="about-profile-main">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/item-3.jpg" alt="About Profile">
                </div>
                <div class="experience-card">
                    <h3>10+</h3>
                    <span>Years Experience</span>
                </div>
            </div>
            <div class="about-profile-content">
                <span class="section-subtitle">about me</span>
                <h2>Creative <strong>Developer</strong> & UI/UX Designer</h2>
                <p>I specialize in creating modern, user-friendly websites and digital experiences that combine beautiful design with powerful functionality. Every project is crafted with creativity, performance and attention to detail.</p>
                <div class="about-profile-info">
                    <div class="about-info-item">
                        <h4>Name</h4>
                        <span>John Anderson</span>
                    </div>
                    <div class="about-info-item">
                        <h4>Email</h4>
                        <span>info@example.com</span>
                    </div>
                    <div class="about-info-item">
                        <h4>Experience</h4>
                        <span>10+ Years</span>
                    </div>
                    <div class="about-info-item">
                        <h4>Location</h4>
                        <span>Ahmedabad, India</span>
                    </div>
                </div>
                <div class="about-profile-btn">
                    <a href="#" class="theme-btn">Download CV</a>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- about profile section end -->

<!-- about skills section start -->
<!-- <section class="container about-skills-section">
    <div class="row">
        <div class="about-skills-wrapper">

            <div class="about-skills-content">
                <span class="section-subtitle">my expertise</span>
                <h2>Professional <strong>Skills</strong></h2>
                <p>I build modern websites with clean code, responsive layouts and engaging user experiences. My goal is to create fast, scalable and visually appealing digital products.</p>

                <div class="skill-item">
                    <div class="skill-title">
                        <span>UI / UX Design</span>
                        <span>95%</span>
                    </div>
                    <div class="skill-bar">
                        <div class="skill-fill" style="width:95%;"></div>
                    </div>
                </div>

                <div class="skill-item">
                    <div class="skill-title">
                        <span>WordPress Development</span>
                        <span>98%</span>
                    </div>
                    <div class="skill-bar">
                        <div class="skill-fill" style="width:98%;"></div>
                    </div>
                </div>

                <div class="skill-item">
                    <div class="skill-title">
                        <span>HTML / CSS</span>
                        <span>100%</span>
                    </div>
                    <div class="skill-bar">
                        <div class="skill-fill" style="width:100%;"></div>
                    </div>
                </div>

                <div class="skill-item">
                    <div class="skill-title">
                        <span>JavaScript / jQuery</span>
                        <span>90%</span>
                    </div>
                    <div class="skill-bar">
                        <div class="skill-fill" style="width:90%;"></div>
                    </div>
                </div>

            </div>

            <div class="about-skills-image">

                <div class="skills-image-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/cta.jpg" alt="">
                </div>

                <div class="skills-card">
                    <i class="fa-solid fa-award"></i>
                    <h3>150+</h3>
                    <span>Projects Completed</span>
                </div>

            </div>

        </div>
    </div>
</section> -->
<!-- about skills section end -->

<!-- about counter section start -->
<!-- <section class="container about-counter-section" id="about-counter">
    <div class="row">
        <div class="section-heading">
            <span class="section-subtitle">our achievements</span>
            <h2>Numbers That <strong>Speak</strong></h2>
            <p>Our passion, dedication and creativity have helped us achieve remarkable milestones.</p>
        </div>

        <div class="about-counter-grid">

            <div class="about-counter-item">
                <div class="about-counter-icon">
                    <i class="fa-solid fa-diagram-project"></i>
                </div>
                <h3><span class="counter" data-number="250">0</span>+</h3>
                <p>Projects Completed</p>
            </div>

            <div class="about-counter-item">
                <div class="about-counter-icon">
                    <i class="fa-solid fa-users"></i>
                </div>
                <h3><span class="counter" data-number="180">0</span>+</h3>
                <p>Happy Clients</p>
            </div>

            <div class="about-counter-item">
                <div class="about-counter-icon">
                    <i class="fa-solid fa-award"></i>
                </div>
                <h3><span class="counter" data-number="25">0</span>+</h3>
                <p>Industry Awards</p>
            </div>

            <div class="about-counter-item">
                <div class="about-counter-icon">
                    <i class="fa-solid fa-mug-hot"></i>
                </div>
                <h3><span class="counter" data-number="1500">0</span>+</h3>
                <p>Cups Of Coffee</p>
            </div>

        </div>
    </div>
</section> -->
<!-- about counter section end -->

<!-- why choose section start -->
<!-- <section class="container about-choose-section">
    <div class="row">
        <div class="section-heading">
            <span class="section-subtitle">why choose me</span>
            <h2>Building Modern Digital Experiences That Deliver Results</h2>
            <p>I combine creativity, clean code and modern technologies to build websites that are visually impressive, responsive and performance focused.</p>

        </div>
        <div class="about-choose-wrapper">
            <div class="about-choose-image">
                <img src="<?php echo get_template_directory_uri(); ?>/images/choose.jpg" alt="">
                <div class="choose-badge">
                    <i class="fa-solid fa-medal"></i>
                    <span>100% Quality Work</span>
                </div>
            </div>
            <div class="about-choose-content">
                <div class="choose-list">
                    <div class="choose-item">
                        <div class="choose-icon">
                            <i class="fa-solid fa-check"></i>
                        </div>
                        <div class="choose-text">
                            <h4>Creative UI / UX Design</h4>
                            <p>Beautiful and user-friendly interface designs for better engagement.</p>
                        </div>
                    </div>
                    <div class="choose-item">
                        <div class="choose-icon">
                            <i class="fa-solid fa-check"></i>
                        </div>
                        <div class="choose-text">
                            <h4>Clean Development</h4>
                            <p>Optimized, maintainable and scalable development with modern standards.</p>
                        </div>
                    </div>
                    <div class="choose-item">
                        <div class="choose-icon">
                            <i class="fa-solid fa-check"></i>
                        </div>
                        <div class="choose-text">
                            <h4>Responsive Layout</h4>
                            <p>Perfect experience across desktop, tablet and mobile devices.</p>
                        </div>
                    </div>
                </div>
                <a href="#" class="theme-btn">Learn More</a>
            </div>
        </div>
    </div>
</section> -->
<!-- why choose section end -->

<!-- about timeline section start -->
<!-- <section class="container about-timeline-section">
    <div class="row">
        <div class="section-heading">
            <span class="section-subtitle">my journey</span>
            <h2>Professional <strong>Journey</strong></h2>
            <p>Every milestone reflects my dedication to creativity, innovation and continuous learning.</p>
        </div>

        <div class="about-timeline">

            <div class="timeline-item">
                <div class="timeline-year">
                    <span>2018</span>
                </div>
                <div class="timeline-content">
                    <h3>Started Freelancing</h3>
                    <p>Began working as a freelance web designer and developer, helping startups and local businesses establish their online presence.</p>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-year">
                    <span>2020</span>
                </div>
                <div class="timeline-content">
                    <h3>WordPress Specialist</h3>
                    <p>Focused on custom WordPress development, responsive websites and performance optimization for clients worldwide.</p>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-year">
                    <span>2022</span>
                </div>
                <div class="timeline-content">
                    <h3>Creative Agency</h3>
                    <p>Expanded services into branding, UI/UX and complete digital solutions with a growing creative team.</p>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-year">
                    <span>2025</span>
                </div>
                <div class="timeline-content">
                    <h3>Global Projects</h3>
                    <p>Successfully delivered hundreds of projects for international clients with a strong focus on quality and long-term partnerships.</p>
                </div>
            </div>

        </div>
    </div>
</section> -->
<!-- about timeline section end -->

<!-- about expertise section start -->
<!-- <section class="container about-expertise-section">
    <div class="row">
        <div class="section-heading">
            <span class="section-subtitle">my expertise</span>
            <h2>What I <strong>Do Best</strong></h2>
            <p>I deliver complete digital solutions with modern design, clean development and user-focused experiences.</p>
        </div>

        <div class="about-expertise-grid">

            <div class="expertise-item">
                <div class="expertise-icon">
                    <i class="fa-solid fa-laptop-code"></i>
                </div>
                <h3>Web Development</h3>
                <p>Custom responsive websites built with clean, scalable and optimized code.</p>
            </div>

            <div class="expertise-item">
                <div class="expertise-icon">
                    <i class="fa-solid fa-palette"></i>
                </div>
                <h3>UI / UX Design</h3>
                <p>Creative and intuitive interfaces focused on user experience and conversions.</p>
            </div>

            <div class="expertise-item">
                <div class="expertise-icon">
                    <i class="fa-brands fa-wordpress"></i>
                </div>
                <h3>WordPress</h3>
                <p>Custom WordPress themes, ACF development and high-performance websites.</p>
            </div>

            <div class="expertise-item">
                <div class="expertise-icon">
                    <i class="fa-solid fa-mobile-screen-button"></i>
                </div>
                <h3>Responsive Design</h3>
                <p>Pixel-perfect layouts that work beautifully across all screen sizes.</p>
            </div>

            <div class="expertise-item">
                <div class="expertise-icon">
                    <i class="fa-solid fa-chart-line"></i>
                </div>
                <h3>SEO Optimization</h3>
                <p>Fast loading, SEO-friendly websites designed to improve search visibility.</p>
            </div>

            <div class="expertise-item">
                <div class="expertise-icon">
                    <i class="fa-solid fa-headset"></i>
                </div>
                <h3>Support & Maintenance</h3>
                <p>Reliable website maintenance, updates and technical support whenever needed.</p>
            </div>

        </div>
    </div>
</section> -->
<!-- about expertise section end -->

<!-- about testimonial section start -->
<!-- <section class="container about-testimonial-section">
    <div class="row">
        <div class="section-heading">
            <span class="section-subtitle">testimonials</span>
            <h2>What My <strong>Clients Say</strong></h2>
            <p>Building long-term relationships through quality work, creativity and trust.</p>
        </div>

        <div class="about-testimonial-slider owl-carousel">

            <div class="testimonial-item">
                <div class="testimonial-rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>

                <p>"Excellent work! The website exceeded our expectations with modern design and outstanding performance."</p>

                <div class="testimonial-author">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/profile-1.png" alt="">
                    <div class="author-info">
                        <h4>James Walker</h4>
                        <span>CEO, Creative Studio</span>
                    </div>
                </div>
            </div>

            <div class="testimonial-item">
                <div class="testimonial-rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>

                <p>"Professional, responsive and highly skilled. The final result was exactly what we needed."</p>

                <div class="testimonial-author">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/profile-2.png" alt="">
                    <div class="author-info">
                        <h4>Emily Johnson</h4>
                        <span>Marketing Director</span>
                    </div>
                </div>
            </div>

            <div class="testimonial-item">
                <div class="testimonial-rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>

                <p>"Fantastic experience from start to finish. Highly recommended for modern web development."</p>

                <div class="testimonial-author">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/profile-3.png" alt="">
                    <div class="author-info">
                        <h4>Michael Brown</h4>
                        <span>Business Owner</span>
                    </div>
                </div>
            </div>

            <div class="testimonial-item">
                <div class="testimonial-rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>

                <p>"Excellent work! The website exceeded our expectations with modern design and outstanding performance."</p>

                <div class="testimonial-author">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/profile-4.png" alt="">
                    <div class="author-info">
                        <h4>James Walker</h4>
                        <span>CEO, Creative Studio</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section> -->
<!-- about testimonial section end -->

<!-- about cta section start -->
<!-- <section class="container about-cta-section">
    <div class="row">
        <div class="about-cta-wrapper">
            <div class="about-cta-content">
                <span class="section-subtitle">let's work together</span>
                <h2>Have A Project In Mind?<br>Let's Build Something Amazing Together.</h2>
                <p>I create modern websites, WordPress solutions and digital experiences that help businesses grow.</p>
                <div class="about-cta-btn">
                    <a href="#" class="theme-btn">Start Your Project</a>
                    <a href="#" class="theme-btn border-btn">View Portfolio</a>
                </div>
            </div>
            <div class="about-cta-image">
                <img src="<?php echo get_template_directory_uri(); ?>/images/cta.jpg" alt="">
            </div>
        </div>
    </div>
</section> -->
<!-- about cta section end -->

<?php
get_footer();
