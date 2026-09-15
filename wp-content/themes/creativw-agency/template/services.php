<?php
/**
 * Template Name: Service page
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
    if( have_rows('service_editer') ):

    // Loop through rows.
    while ( have_rows('service_editer') ) : the_row();

    // Case: Paragraph layout.
    if( get_row_layout() == 'inner_banner' ):
        $inner_label = get_sub_field('inner_label');
        $inner_title = get_sub_field('inner_title');
        $inner_desc = get_sub_field('inner_desc');
        $inner_btn = get_sub_field('inner_btn');
        $url = get_the_post_thumbnail_url();
?> <section class="container inner-banner service-banner" style="background: url(<?php echo $url; ?>) center center/cover no-repeat;">
    <div class="row">
    <div class="inner-banner-content">
        <span class="section-subtitle"><?php echo $inner_label; ?></span>
        <h1><?php echo $inner_title; ?></h1>
        <p><?php echo $inner_desc; ?></p>
        <div class="breadcrumb">
            <?php foreach ($inner_btn as $link) {
               ?> <a href="<?php echo $link['inner_link']['url']; ?>" title="<?php echo $link['inner_link']['title']; ?>"><?php echo $link['inner_link']['title']; ?></a> <?php
            } ?>
        </div>
    </div>
 </div>
</section> <?php

    // Case: Download layout.
    elseif( get_row_layout() == 'service_section' ): 
        $service_label = get_sub_field('service_label');
        $service_title = get_sub_field('service_title');
        $service_desc = get_sub_field('service_desc');
        $service_btn = get_sub_field('service_btn');
        $service_bg = get_sub_field('service_bg');
        $play_icon = get_sub_field('play_icon');
?> <section class="container services-banner-section">
    <div class="row">
        <div class="table">
            <div class="services-banner-left">
                <span class="banner-subtitle"><?php echo $service_label; ?></span>
                <h1><?php echo $service_title; ?></h1>
                <p><?php echo $service_desc; ?></p>
                <div class="services-banner-btn">
                    <?php foreach ($service_btn as $btn) {
                        ?> <a href="<?php echo $btn['service_link']['url']; ?>" class="btn" title="<?php echo $btn['service_link']['title']; ?>"><?php echo $btn['service_link']['title']; ?></a> <?php
                    } ?>
                </div>
            </div>
            <div class="services-banner-right">
                <div class="banner-shape-one"></div>
                <div class="banner-shape-two"></div>
                <div class="banner-main-image">
                    <img src="<?php echo $service_bg; ?>" alt="">
                    <a href="https://www.youtube.com/watch?v=ScMzIvxBSi4" class="banner-play-btn">
                        <i class="<?php echo $play_icon; ?>"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section> <?php


    elseif( get_row_layout() == 'category_section' ): 
        $category_label = get_sub_field('category_label');
        $category_title = get_sub_field('category_title');
        $category_desc = get_sub_field('category_desc');
        $tab_section = get_sub_field('tab_section');
        $tab_content = get_sub_field('tab_content');
?> <section class="container services-section">
    <div class="row">
        <div class="services-heading">
            <span class="section-subtitle"><?php echo $category_label; ?></span>
            <h2 class="main-title"><?php echo $category_title; ?></h2>
            <p><?php echo $category_desc; ?></p>
        </div> 
        <ul class="services-filter">
            <?php $i = 1;
                 foreach ($tab_section as $tab_blok) {
                    $tab_text = $tab_blok['tab_text'];
                    ?> <li><a href="#tab-<?php echo $i; ?>" title="<?php echo $tab_text; ?>"><?php echo $tab_text; ?></a></li> <?php $i++;
            } ?>
        </ul>
        <div class="tab-sec-two">
         <?php $i = 1;
          foreach ($tab_section as $tab_blok) {
            $tab_content = $tab_blok['tab_content'];
            ?> <div class="services-grid" id="tab-<?php echo $i; ?>">
                <?php foreach ($tab_content as $tab_part) {
                    ?> <div class="services-box">
                <div class="service-bg"></div>
                <div class="services-icon">
                    <i class="<?php echo $tab_part['content_icon']; ?>"></i>
                </div>
                <h3><?php echo $tab_part['content_title']; ?></h3>
                <p><?php echo $tab_part['content_desc']; ?></p>
                <a href="<?php echo $tab_part['content_link']['url']; ?>" title="<?php echo $tab_part['content_link']['title']; ?>"><?php echo $tab_part['content_link']['title']; ?> <i class="<?php echo $tab_part['arrow_right']; ?>"></i></a>
            </div> <?php
                } ?>
        </div> <?php $i++;
         } ?>
        </div>
    </div>
</section> <?php


    elseif( get_row_layout() == 'process_section' ): 
        $process_label = get_sub_field('process_label');
        $process_title = get_sub_field('process_title');
        $process_desc = get_sub_field('process_desc');
        $process_card = get_sub_field('process_card');
?> <section class="container process-section">
    <div class="row">
        <div class="process-heading">
            <span class="section-subtitle"><?php echo $process_label; ?></span>
            <h2 class="main-title"><?php echo $process_title; ?></h2>
            <p><?php echo $process_desc; ?></p>
        </div>
        <div class="process-wrapper">
            <?php foreach ($process_card as $card) {
                ?> <div class="process-box">
                <div class="process-icon">
                    <i class="<?php echo $card['card_icon']; ?>"></i>
                </div>
                <h3><?php echo $card['card_title']; ?></h3>
                <p><?php echo $card['card_desc']; ?></p>
            </div>
                 <?php
            } ?>
        </div>
    </div>
</section> <?php


    elseif( get_row_layout() == 'digital_section' ): 
        $digital_label = get_sub_field('digital_label');
        $digital_title = get_sub_field('digital_title');
        $digital_desc = get_sub_field('digital_desc');
        $digital_bg = get_sub_field('digital_bg');
        $digital_box = get_sub_field('digital_box');
?> <section class="container why-choose-section">
    <div class="row">
        <div class="process-heading">
            <span class="section-subtitle"><?php echo $digital_label; ?></span>
            <h2 class="main-title"><?php echo $digital_title; ?></h2>
            <p><?php echo $digital_desc; ?></p>
        </div>
        <div class="table">
            <div class="why-choose-image">
                <div class="why-image-box">
                    <img src="<?php echo $digital_bg; ?>" alt="">
                </div>
            </div>
            <div class="why-choose-content">
                <div class="why-feature-list">
                    <?php foreach ($digital_box as $feature) {
                        ?> <div class="why-feature-box">
                        <div class="why-feature-icon">
                            <i class="<?php echo $feature['feature_icon']; ?>"></i>
                        </div>
                        <div class="why-feature-text">
                            <h3><?php echo $feature['feature_title']; ?></h3>
                            <p><?php echo $feature['feature_desc']; ?></p>
                        </div>
                    </div> <?php
                    } ?>
                </div>
            </div>
        </div>
    </div>
</section> <?php


    elseif( get_row_layout() == 'projects_section' ): 
        $projects_label = get_sub_field('projects_label');
        $projects_title = get_sub_field('projects_title');
        $projects_desc = get_sub_field('projects_desc');
        $projects_tab = get_sub_field('projects_tab');
?> <section class="container portfolio-section">
    <div class="row">
        <div class="portfolio-heading">
            <span class="section-subtitle"><?php echo $projects_label; ?></span>
            <h2 class="main-title"><?php echo $projects_title; ?></h2>
            <p><?php echo $projects_desc; ?></p>
        </div>
        <div class="portfolio-tabs">
            <ul>
                <?php $i = 1; foreach ($projects_tab as $pro) {
                    $projects_tab_text = $pro['projects_tab_text'];
                    ?> <li><a href="#all-<?php echo $i; ?>" title="<?php echo $pro['projects_tab_text']; ?>"><?php echo $pro['projects_tab_text']; ?></a></li> <?php
                     $i++;
                } ?> 
            </ul>
        </div>
        <div class="tab-sec">
            <?php $i = 1; foreach ($projects_tab as $pro) {
                $projects_card = $pro['projects_card'];
                ?> <div class="portfolio-content" id="all-<?php echo $i; ?>">
                <div class="portfolio-grid">
                    <?php foreach ($projects_card as $part) {
                        ?> <div class="portfolio-item">
                        <div class="portfolio-image">
                            <img src="<?php echo $part['pro_bg']; ?>" alt="">
                            <div class="portfolio-overlay">
                                <a href="#">
                                    <i class="<?php echo $part['pro_icon']; ?>"></i>
                                </a>
                                <h3><?php echo $part['pro_title']; ?></h3>
                                <span><?php echo $part['pro_label']; ?></span>
                            </div>
                        </div>
                    </div> <?php
                    } ?>
                </div>
             </div> <?php $i++;
            } ?>
        </div>
    </div>
</section> <?php


    elseif( get_row_layout() == 'clients_section' ): 
        $clients_label = get_sub_field('clients_label');
        $clients_title = get_sub_field('clients_title');
        $clients_desc = get_sub_field('clients_desc');
        $clients_box = get_sub_field('clients_box');
?> <section class="container testimonial-section">
    <div class="row">

        <div class="testimonial-heading">
            <span class="section-subtitle"><?php echo $clients_label; ?></span>
            <h2 class="main-title"><?php echo $clients_title; ?></h2>
            <p><?php echo $clients_desc; ?></p>
        </div>

        <div class="owl-carousel testimonial-slider">
            <?php foreach ($clients_box as $client) {
                $rate_icon = $client['rate_icon'];
                ?> <div class="testimonial-box">
                <div class="testimonial-quote">
                    <i class="<?php echo $client['icon_one']; ?>"></i>
                </div>
                <div class="testimonial-rating">
                    <?php foreach ($rate_icon as $rate) {
                        ?> <i class="<?php echo $rate['rateing']; ?>"></i> <?php
                    } ?>
                </div>
                <p><?php echo $client['clients_box_desc']; ?></p>
                <div class="client-info">
                    <div class="client-image">
                        <img src="<?php echo $client['clients_bg']; ?>" alt="">
                    </div>
                    <div class="client-content">
                        <h3><?php echo $client['clients_heading']; ?></h3>
                        <span><?php echo $client['clients_text']; ?></span>
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
?> <section class="container cta-section">
 <div class="row">
   <div class="cta-box">
      <div class="cta-content">
      <span class="section-subtitle"><?php echo $cta_label; ?></span>
        <h2><?php echo $cta_title; ?></h2>
        <p><?php echo $cta_desc; ?></p>
        <a href="<?php echo $cta_link['url']; ?>" title="<?php echo $cta_link['title']; ?>" class="theme-btn"><?php echo $cta_link['title']; ?></a>
        </div>
        <div class="cta-shape cta-shape-one"></div>
        <div class="cta-shape cta-shape-two"></div>
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

<!--  banner-section start -->

<!-- <section class="container inner-banner service-banner">
    <div class="row">
    <div class="inner-banner-content">
        <span class="section-subtitle">our services</span>
        <h1>Creative Digital <strong>Services</strong></h1>
        <p>We provide innovative solutions to build your brand and grow your business online.</p>
        <div class="breadcrumb">
            <a href="#">Home</a>
            <span>/</span>
            <span>Services</span>
        </div>
    </div>
 </div>
</section> -->

<!-- services banner section start -->

<!-- <section class="container services-banner-section">
    <div class="row">
        <div class="table">
            <div class="services-banner-left">
                <span class="banner-subtitle">our services</span>
                <h1>Creative Digital <strong>Solutions</strong> For Modern Business</h1>
                <p>We craft stunning websites, build powerful brands and deliver digital marketing solutions that help businesses grow faster and stand out in today's competitive market.</p>
                <div class="services-banner-btn">
                    <a href="#" class="btn" title="Explore Services">Explore Services</a>
                    <a href="#" class="banner-outline-btn" title="Get Quote">Get Quote</a>
                </div>
            </div>
            <div class="services-banner-right">
                <div class="banner-shape-one"></div>
                <div class="banner-shape-two"></div>
                <div class="banner-main-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/service-banner.png" alt="">
                    <a href="https://www.youtube.com/watch?v=ScMzIvxBSi4" class="banner-play-btn">
                        <i class="fa-solid fa-play"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section> -->

<!-- services banner section end -->

<!--  service-section start -->

<!-- services section start -->

<!-- <section class="container services-section">
    <div class="row">
        <div class="services-heading">
            <span class="section-subtitle">our services</span>
            <h2 class="main-title">Creative Services <strong>We Provide</strong></h2>
            <p>We deliver innovative digital solutions that help brands grow faster and achieve long-term success.</p>
        </div>
        <ul class="services-filter">
            <li class="active" data-filter="all">All</li>
            <li data-filter="branding">Branding</li>
            <li data-filter="design">UI / UX</li>
            <li data-filter="development">Development</li>
            <li data-filter="marketing">Marketing</li>
            <li data-filter="seo">SEO</li>
        </ul>
        <div class="services-grid">

            <div class="services-box branding">
                <div class="service-bg"></div>
                <div class="services-icon">
                    <i class="fa-solid fa-palette"></i>
                </div>
                <h3>Brand Identity</h3>
                <p>Creative branding solutions that establish a strong and memorable identity.</p>
                <a href="#">Learn More <i class="fa-solid fa-arrow-right"></i></a>
            </div>

            <div class="services-box design">
                <div class="service-bg"></div>
                <div class="services-icon">
                    <i class="fa-solid fa-pen-ruler"></i>
                </div>
                <h3>UI / UX Design</h3>
                <p>Modern interface design focused on user experience and higher conversions.</p>
                <a href="#">Learn More <i class="fa-solid fa-arrow-right"></i></a>
            </div>

            <div class="services-box development">
                <div class="service-bg"></div>
                <div class="services-icon">
                    <i class="fa-solid fa-code"></i>
                </div>
                <h3>Web Development</h3>
                <p>Fast, scalable and secure websites using the latest technologies.</p>
                <a href="#">Learn More <i class="fa-solid fa-arrow-right"></i></a>
            </div>

            <div class="services-box marketing">
                <div class="service-bg"></div>
                <div class="services-icon">
                    <i class="fa-solid fa-bullhorn"></i>
                </div>
                <h3>Digital Marketing</h3>
                <p>Performance-driven marketing campaigns that generate quality leads.</p>
                <a href="#">Learn More <i class="fa-solid fa-arrow-right"></i></a>
            </div>

            <div class="services-box seo">
                <div class="service-bg"></div>
                <div class="services-icon">
                    <i class="fa-solid fa-magnifying-glass-chart"></i>
                </div>
                <h3>SEO Optimization</h3>
                <p>Improve your search rankings and grow organic traffic consistently.</p>
                <a href="#">Learn More <i class="fa-solid fa-arrow-right"></i></a>
            </div>

            <div class="services-box development">
                <div class="service-bg"></div>
                <div class="services-icon">
                    <i class="fa-solid fa-cart-shopping"></i>
                </div>
                <h3>eCommerce Solution</h3>
                <p>High-converting online stores with seamless shopping experiences.</p>
                <a href="#">Learn More <i class="fa-solid fa-arrow-right"></i></a>
            </div>

        </div>
    </div>
</section> -->

<!--  service-section end -->

<!-- working process section start -->

<!-- <section class="container process-section">
    <div class="row">
        <div class="process-heading">
            <span class="section-subtitle">work process</span>
            <h2 class="main-title">Our Creative <strong>Working Process</strong></h2>
            <p>From idea to execution, we follow a proven process that ensures every project is delivered with creativity, precision and measurable results.</p>
        </div>
        <div class="process-wrapper">

            <div class="process-box">
                <div class="process-icon">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
                <h3>Discover</h3>
                <p>We understand your business goals, audience and project requirements before planning the strategy.</p>
            </div>

            <div class="process-arrow">
                <i class="fa-solid fa-arrow-right-long"></i>
            </div>

            <div class="process-box">
                <div class="process-icon">
                    <i class="fa-solid fa-list-check"></i>
                </div>
                <h3>Planning</h3>
                <p>We create a roadmap, define milestones and prepare the perfect execution strategy.</p>
            </div>

            <div class="process-arrow">
                <i class="fa-solid fa-arrow-right-long"></i>
            </div>

            <div class="process-box">
                <div class="process-icon">
                    <i class="fa-solid fa-laptop-code"></i>
                </div>
                <h3>Development</h3>
                <p>Our experts design and develop scalable digital solutions using modern technologies.</p>
            </div>

            <div class="process-arrow">
                <i class="fa-solid fa-arrow-right-long"></i>
            </div>

            <div class="process-box">
                <div class="process-icon">
                    <i class="fa-solid fa-rocket"></i>
                </div>
                <h3>Launch</h3>
                <p>After testing and optimization, we launch your project with complete confidence.</p>
            </div>

        </div>
    </div>
</section> -->

<!-- working process section end -->

<!-- why choose us section start -->

<!-- <section class="container why-choose-section">
    <div class="row">
        <div class="process-heading">
            <span class="section-subtitle">why choose us</span>
            <h2 class="main-title">We Create Digital Solutions <strong>That Make Difference</strong></h2>
            <p>We combine creativity, technology and strategy to deliver powerful digital experiences that help businesses grow.</p>
        </div>
        <div class="table">
            <div class="why-choose-image">
			    <div class="why-image-box">
			        <img src="<?php echo get_template_directory_uri(); ?>/images/why-1.jpg" alt="">
			    </div>
			</div>
            <div class="why-choose-content">
                <div class="why-feature-list">
                    <div class="why-feature-box">
                        <div class="why-feature-icon">
                            <i class="fa-solid fa-lightbulb"></i>
                        </div>
                        <div class="why-feature-text">
                            <h3>Creative Strategy</h3>
                            <p>Unique ideas and smart strategies to build your digital presence.</p>
                        </div>
                    </div>

                    <div class="why-feature-box">
                        <div class="why-feature-icon">
                            <i class="fa-solid fa-users"></i>
                        </div>
                        <div class="why-feature-text">
                            <h3>Expert Team</h3>
                            <p>Skilled designers and developers delivering quality solutions.</p>
                        </div>
                    </div>

                    <div class="why-feature-box">
                        <div class="why-feature-icon">
                            <i class="fa-solid fa-shield-halved"></i>
                        </div>
                        <div class="why-feature-text">
                            <h3>Quality Assurance</h3>
                            <p>Every project is tested carefully for the best performance.</p>
                        </div>
                    </div>

                    <div class="why-feature-box">
                        <div class="why-feature-icon">
                            <i class="fa-solid fa-clock"></i>
                        </div>
                        <div class="why-feature-text">
                            <h3>On Time Delivery</h3>
                            <p>Reliable process with timely delivery and support.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section> -->

<!-- why choose us section end -->

<!-- portfolio section start -->

<!-- <section class="container portfolio-section">
    <div class="row">
        <div class="portfolio-heading">
            <span class="section-subtitle">our portfolio</span>
            <h2 class="main-title">Latest Creative <strong>Projects</strong></h2>
            <p>Explore our latest work where creativity meets technology and innovative solutions.</p>
        </div>
        <div class="portfolio-tabs">
            <li class="portfolio-tab active" data-tab="all">All</li>
            <li class="portfolio-tab" data-tab="website">Website</li>
            <li class="portfolio-tab" data-tab="branding">Branding</li>
            <li class="portfolio-tab" data-tab="uiux">UI / UX</li>
            <li class="portfolio-tab" data-tab="development">Development</li>
        </div>
 <div class="portfolio-content active" id="all">
    <div class="portfolio-grid">
        <div class="portfolio-item">
            <div class="portfolio-image">
                <img src="<?php echo get_template_directory_uri(); ?>/images/pro-1.jpg" alt="">
                <div class="portfolio-overlay">
                    <a href="#">
                        <i class="fa-solid fa-plus"></i>
                    </a>
                    <h3>Creative Website</h3>
                    <span>Website</span>
                </div>
            </div>
        </div>
        <div class="portfolio-item">
            <div class="portfolio-image">
                <img src="<?php echo get_template_directory_uri(); ?>/images/pro-2.jpg" alt="">
                <div class="portfolio-overlay">
                    <a href="#">
                        <i class="fa-solid fa-plus"></i>
                    </a>
                    <h3>Brand Identity</h3>
                    <span>Branding</span>
                </div>
            </div>
        </div>
        <div class="portfolio-item">
            <div class="portfolio-image">
                <img src="<?php echo get_template_directory_uri(); ?>/images/pro-3.jpg" alt="">
                <div class="portfolio-overlay">
                    <a href="#">
                        <i class="fa-solid fa-plus"></i>
                    </a>
                    <h3>Business Website</h3>
                    <span>Website</span>
                </div>
            </div>
        </div>
    </div>
 </div>
 <div class="portfolio-content" id="website">
    <div class="portfolio-grid">
        <div class="portfolio-item">
            <div class="portfolio-image">
                <img src="<?php echo get_template_directory_uri(); ?>/images/pro-3.jpg" alt="">
                <div class="portfolio-overlay">
                    <a href="#">
                        <i class="fa-solid fa-plus"></i>
                    </a>
                    <h3>Creative Website</h3>
                    <span>Website</span>
                </div>
            </div>
        </div>
        <div class="portfolio-item">
            <div class="portfolio-image">
                <img src="<?php echo get_template_directory_uri(); ?>/images/pro-1.jpg" alt="">
                <div class="portfolio-overlay">
                    <a href="#">
                        <i class="fa-solid fa-plus"></i>
                    </a>
                    <h3>Brand Identity</h3>
                    <span>Branding</span>
                </div>
            </div>
        </div>
        <div class="portfolio-item">
            <div class="portfolio-image">
                <img src="<?php echo get_template_directory_uri(); ?>/images/pro-2.jpg" alt="">
                <div class="portfolio-overlay">
                    <a href="#">
                        <i class="fa-solid fa-plus"></i>
                    </a>
                    <h3>Business Website</h3>
                    <span>Website</span>
                </div>
            </div>
        </div>
    </div>
 </div>
 <div class="portfolio-content" id="branding">
     <div class="portfolio-grid">
        <div class="portfolio-item">
            <div class="portfolio-image">
                <img src="<?php echo get_template_directory_uri(); ?>/images/pro-2.jpg" alt="">
                <div class="portfolio-overlay">
                    <a href="#">
                        <i class="fa-solid fa-plus"></i>
                    </a>
                    <h3>Creative Website</h3>
                    <span>Website</span>
                </div>
            </div>
        </div>
        <div class="portfolio-item">
            <div class="portfolio-image">
                <img src="<?php echo get_template_directory_uri(); ?>/images/pro-1.jpg" alt="">
                <div class="portfolio-overlay">
                    <a href="#">
                        <i class="fa-solid fa-plus"></i>
                    </a>
                    <h3>Brand Identity</h3>
                    <span>Branding</span>
                </div>
            </div>
        </div>
        <div class="portfolio-item">
            <div class="portfolio-image">
                <img src="<?php echo get_template_directory_uri(); ?>/images/pro-3.jpg" alt="">
                <div class="portfolio-overlay">
                    <a href="#">
                        <i class="fa-solid fa-plus"></i>
                    </a>
                    <h3>Business Website</h3>
                    <span>Website</span>
                </div>
            </div>
        </div>
    </div>
 </div>
 <div class="portfolio-content" id="uiux">
     <div class="portfolio-grid">
        <div class="portfolio-item">
            <div class="portfolio-image">
                <img src="<?php echo get_template_directory_uri(); ?>/images/pro-3.jpg" alt="">
                <div class="portfolio-overlay">
                    <a href="#">
                        <i class="fa-solid fa-plus"></i>
                    </a>
                    <h3>Creative Website</h3>
                    <span>Website</span>
                </div>
            </div>
        </div>
        <div class="portfolio-item">
            <div class="portfolio-image">
                <img src="<?php echo get_template_directory_uri(); ?>/images/pro-2.jpg" alt="">
                <div class="portfolio-overlay">
                    <a href="#">
                        <i class="fa-solid fa-plus"></i>
                    </a>
                    <h3>Brand Identity</h3>
                    <span>Branding</span>
                </div>
            </div>
        </div>     
        <div class="portfolio-item">
            <div class="portfolio-image">
                <img src="<?php echo get_template_directory_uri(); ?>/images/pro-1.jpg" alt="">
                <div class="portfolio-overlay">
                    <a href="#">
                        <i class="fa-solid fa-plus"></i>
                    </a>
                    <h3>Business Website</h3>
                    <span>Website</span>
                </div>
            </div>
        </div>
    </div>
 </div>
 <div class="portfolio-content" id="development">
     <div class="portfolio-grid">
        <div class="portfolio-item">
            <div class="portfolio-image">
                <img src="<?php echo get_template_directory_uri(); ?>/images/pro-1.jpg" alt="">
                <div class="portfolio-overlay">
                    <a href="#">
                        <i class="fa-solid fa-plus"></i>
                    </a>
                    <h3>Creative Website</h3>
                    <span>Website</span>
                </div>
            </div>
        </div>
        <div class="portfolio-item">
            <div class="portfolio-image">
                <img src="<?php echo get_template_directory_uri(); ?>/images/pro-2.jpg" alt="">
                <div class="portfolio-overlay">
                    <a href="#">
                        <i class="fa-solid fa-plus"></i>
                    </a>
                    <h3>Brand Identity</h3>
                    <span>Branding</span>
                </div>
            </div>
        </div>
        <div class="portfolio-item">
            <div class="portfolio-image">
                <img src="<?php echo get_template_directory_uri(); ?>/images/pro-3.jpg" alt="">
                <div class="portfolio-overlay">
                    <a href="#">
                        <i class="fa-solid fa-plus"></i>
                    </a>
                    <h3>Business Website</h3>
                    <span>Website</span>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
</section> -->

<!-- portfolio section end -->


<!-- testimonial section start -->

<!-- <section class="container testimonial-section">
    <div class="row">

        <div class="testimonial-heading">
            <span class="section-subtitle">client testimonials</span>
            <h2 class="main-title">What Our <strong>Clients Say</strong></h2>
            <p>We help businesses grow with creative ideas, smart solutions and quality digital experiences.</p>
        </div>

        <div class="owl-carousel testimonial-slider">

            <div class="testimonial-box">
                <div class="testimonial-quote">
                    <i class="fa-solid fa-quote-left"></i>
                </div>
                <div class="testimonial-rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <p>
                    Working with this team was a great experience. They delivered a creative and professional website for our business.
                </p>
                <div class="client-info">
                    <div class="client-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/client-1.jpg" alt="">
                    </div>
                    <div class="client-content">
                        <h3>John Smith</h3>
                        <span>Business Owner</span>
                    </div>
                </div>
            </div>

            <div class="testimonial-box">
                <div class="testimonial-quote">
                    <i class="fa-solid fa-quote-left"></i>
                </div>
                <div class="testimonial-rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <p>
                    Amazing creativity and attention to detail. The final result exceeded our expectations.
                </p>
                <div class="client-info">
                    <div class="client-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/client-2.jpg" alt="">
                    </div>
                    <div class="client-content">
                        <h3>Sarah William</h3>
                        <span>Marketing Manager</span>
                    </div>
                </div>
            </div>

            <div class="testimonial-box">
                <div class="testimonial-quote">
                    <i class="fa-solid fa-quote-left"></i>
                </div>
                <div class="testimonial-rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <p>
                    Professional approach, fast communication and excellent quality work from start to finish.
                </p>
                <div class="client-info">
                    <div class="client-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/client-3.jpg" alt="">
                    </div>
                    <div class="client-content">
                        <h3>David Miller</h3>
                        <span>Startup Founder</span>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section> -->

<!-- testimonial section end -->

<!-- cta section start -->
<!-- <section class="container cta-section">
 <div class="row">
   <div class="cta-box">
      <div class="cta-content">
          <span class="section-subtitle">have a project?</span>
            <h2>Ready To Start Your <strong>Creative Project?</strong></h2>
            <p>Let's work together and create powerful digital experiences that help your business grow.</p>
            <a href="#" class="theme-btn">Get Started</a>
            </div>
            <div class="cta-shape cta-shape-one"></div>
            <div class="cta-shape cta-shape-two"></div>
   </div>
 </div>
</section> -->
<!-- cta section end -->

<?php
get_footer();
