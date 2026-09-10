<?php
/**
 * Template Name: Blog page
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
if( have_rows('blog_edit') ):

// Loop through rows.
while ( have_rows('blog_edit') ) : the_row();

    // Case: Paragraph layout.
    if( get_row_layout() == 'inner_banner' ):
        $inner_label = get_sub_field('inner_label');
        $inner_title = get_sub_field('inner_title');
        $inner_desc = get_sub_field('inner_desc');
        $inner_btn = get_sub_field('inner_btn');
        $url = get_the_post_thumbnail_url();
?> <section class="container inner-banner blog-banner" style="background: url(<?php echo $url; ?>) center center/cover no-repeat;">
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
    elseif( get_row_layout() == 'blog_section' ): 
        $blog_bg = get_sub_field('blog_bg');
        $blog_category = get_sub_field('blog_category');
        $blog_date = get_sub_field('blog_date');
        $blog_title = get_sub_field('blog_title');
        $blog_desc = get_sub_field('blog_desc');
        $blog_link = get_sub_field('blog_link');
?> <section class="container featured-blog-section">
    <div class="row">
        <div class="featured-blog-box">
            <div class="featured-blog-image">
                <img src="<?php echo $blog_bg; ?>" alt="">
            </div>
            <div class="featured-blog-content">
                <span class="blog-category"><?php echo $blog_category; ?></span>
                <span class="blog-date"><?php echo $blog_date; ?></span>
                <h2><?php echo $blog_title; ?></h2>
                <p><?php echo $blog_desc; ?></p>
                <a href="<?php echo $blog_link['url']; ?>" title="<?php echo $blog_link['title']; ?>" class="theme-btn"><?php echo $blog_link['title']; ?></a>
            </div>
        </div>
    </div>
</section> <?php


    elseif( get_row_layout() == 'explore_section' ): 
        $explore_label = get_sub_field('explore_label');
        $explore_title = get_sub_field('explore_title');
        $explore_desc = get_sub_field('explore_desc');
        $blog_card = get_sub_field('blog_card');
?> <section class="container blog-grid-section">
    <div class="row">
        <div class="section-heading">
            <span class="section-subtitle"><?php echo $explore_label; ?></span>
            <h2><?php echo $explore_title; ?></strong></h2>
            <p><?php echo $explore_desc; ?></p>
        </div>
        <div class="blog-grid-wrapper">
            <?php foreach ($blog_card as $card) {
                ?> <div class="blog-card">
                <div class="blog-card-image">
                    <img src="<?php echo $card['card_bg']; ?>" alt="">
                </div>
                <div class="blog-card-content">
                    <div class="blog-meta">
                        <span><?php echo $card['card_label']; ?></span>
                        <span><?php echo $card['card_span']; ?></span>
                    </div>
                    <h3><?php echo $card['card_title']; ?></h3>
                    <p><?php echo $card['card_desc']; ?></p>
                    <a href="<?php echo $card['card_link']['url']; ?>" title="<?php echo $card['card_link']['title']; ?>" class="theme-btn"><?php echo $card['card_link']['title']; ?></a>
                </div>
            </div> <?php
            } ?>
        </div>
    </div>
</section> <?php


    elseif( get_row_layout() == 'categories_section' ): 
        $categories_label = get_sub_field('categories_label');
        $categories_title = get_sub_field('categories_title');
        $categories_desc = get_sub_field('categories_desc');
        $blog_card = get_sub_field('blog_card');
?> <section class="container blog-tab-section">
    <div class="row">
        <div class="section-heading">
            <span class="section-subtitle"><?php echo $categories_label; ?></span>
            <h2><?php echo $categories_title; ?></h2>
            <p><?php echo $categories_desc; ?></p>
        </div>
        <div class="blog-tabs">
            <ul>
                <?php $i = 1; foreach ($blog_card as $blog) {
                    $card_tab = $blog['card_tab'];
                    ?> <li><a href="#blog-<?php echo $i; ?>" title="<?php echo $card_tab; ?>"><?php echo $card_tab; ?></a></li> <?php $i++;
                } ?>
            </ul>
        </div>
      <div class="tab-sec">
        <?php $i = 1; foreach ($blog_card as $blog) {
            $card_content = $blog['card_content'];
           ?> <div class="blog-tab-content" id="blog-<?php echo $i; ?>">
            <?php foreach ($card_content as $blog_dp) {
                ?> <div class="blog-card">
                <img src="<?php echo $blog_dp['content_bg']; ?>" alt="">
                <h3><?php echo $blog_dp['content_title']; ?></h3>
                <p><?php echo $blog_dp['content_desc']; ?></p>
            </div> <?php
            }?>
        </div> <?php $i++;
        } ?>
      </div>
    </div>
</section> <?php


    elseif( get_row_layout() == 'letter_section' ): 
        $letter_label = get_sub_field('letter_label');
        $letter_title = get_sub_field('letter_title');
        $letter_desc = get_sub_field('letter_desc');
?> <section class="container newsletter-section">
    <div class="row">
        <div class="newsletter-box">
            <div class="newsletter-content">
                <span class="section-subtitle"><?php echo $letter_label; ?></span>
                <h2><?php echo $letter_title; ?></h2>
                <p><?php echo $letter_desc; ?></p>
            </div>
            <?php echo do_shortcode('[contact-form-7 id="c3a8205" title="Blog form"]'); ?>
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
<!-- <section class="container inner-banner blog-banner">
        <div class="row">
            <div class="inner-banner-content">
                <span class="section-subtitle">our blog</span>
                <h1>Latest News & <strong>Creative Insights</strong></h1>
                <p>Explore our latest articles, design trends and digital solutions.</p>
                <div class="breadcrumb">
                    <a href="#">Home</a>
                    <span>/</span>
                    <span>Blog</span>
                </div>
            </div>
        </div>
</section> -->
<!-- inner banner end -->

<!-- featured blog section start -->
<!-- <section class="container featured-blog-section">
    <div class="row">
        <div class="featured-blog-box">
            <div class="featured-blog-image">
                <img src="<?php echo get_template_directory_uri(); ?>/images/blog-bg.jpg" alt="">
            </div>
            <div class="featured-blog-content">
                <span class="blog-category">Design</span>
                <span class="blog-date">27 July, 2026</span>
                <h2>Latest Design Trends To Grow Your Creative Business</h2>
                <p>
                    Discover modern design ideas, digital strategies and creative solutions that help your business build a strong online presence.
                </p>
                <a href="#" class="theme-btn">Read More</a>
            </div>
        </div>
    </div>
</section> -->
<!-- featured blog section end -->
<!-- blog grid section start -->
<!-- <section class="container blog-grid-section">
    <div class="row">
        <div class="section-heading">
            <span class="section-subtitle">latest articles</span>
            <h2>Explore Our <strong>Latest Blogs</strong></h2>
            <p>Read our latest articles, creative ideas and digital marketing updates.</p>
        </div>
        <div class="blog-grid-wrapper">
            <div class="blog-card">
                <div class="blog-card-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/grid-1.jpg" alt="">
                </div>
                <div class="blog-card-content">
                    <div class="blog-meta">
                        <span>Design</span>
                        <span>27 July, 2026</span>
                    </div>
                    <h3>Modern Web Design Trends For Creative Businesses</h3>
                    <p>Discover the latest design techniques and ideas to improve your online presence.</p>
                    <a href="#" class="theme-btn">Read More</a>
                </div>
            </div>
            <div class="blog-card">
                <div class="blog-card-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/grid-2.jpg" alt="">
                </div>
                <div class="blog-card-content">
                    <div class="blog-meta">
                        <span>Development</span>
                        <span>20 July, 2026</span>
                    </div>
                    <h3>Why Website Performance Matters For Business Growth</h3>
                    <p>Learn how a fast and optimized website creates better user experiences.</p>
                    <a href="#" class="theme-btn">Read More</a>
                </div>
            </div>
            <div class="blog-card">
                <div class="blog-card-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/grid-3.jpg" alt="">
                </div>
                <div class="blog-card-content">
                    <div class="blog-meta">
                        <span>Marketing</span>
                        <span>15 July, 2026</span>
                    </div>
                    <h3>Digital Marketing Strategies That Actually Work</h3>
                    <p>Explore smart marketing solutions to grow your brand digitally.</p>
                    <a href="#" class="theme-btn">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- blog grid section end -->

<!-- blog tab section start -->
<!-- <section class="container blog-tab-section">
    <div class="row">
        <div class="section-heading">
            <span class="section-subtitle">categories</span>
            <h2>Explore Our <strong>Blogs</strong></h2>
            <p>Select category and read latest creative articles.</p>
        </div>
        <div class="blog-tabs">
            <button class="blog-tab-btn active" data-tab="all">All</button>
            <button class="blog-tab-btn" data-tab="design">Design</button>
            <button class="blog-tab-btn" data-tab="development">Development</button>
            <button class="blog-tab-btn" data-tab="marketing">Marketing</button>
            <button class="blog-tab-btn" data-tab="branding">Branding</button>
        </div>
        <div class="blog-tab-content active" id="all">
            <div class="blog-card">
                <img src="<?php echo get_template_directory_uri(); ?>/images/tabing-1.jpg" alt="">
                <h3>Creative Design Trends</h3>
                <p>Latest UI UX and design updates.</p>
            </div>
            <div class="blog-card">
                <img src="<?php echo get_template_directory_uri(); ?>/images/tabing-2.jpg" alt="">
                <h3>Website Development</h3>
                <p>Modern development techniques.</p>
            </div>
            <div class="blog-card">
                <img src="<?php echo get_template_directory_uri(); ?>/images/tabing-3.jpg" alt="">
                <h3>Digital Marketing</h3>
                <p>Grow your online business.</p>
            </div>
        </div>
        <div class="blog-tab-content" id="design">
            <div class="blog-card">
              <img src="<?php echo get_template_directory_uri(); ?>/images/tabing-2.jpg" alt="">
                <h3>UI UX Design Ideas</h3>
                <p>Creative design solutions.</p>
            </div>
        </div>
        <div class="blog-tab-content" id="development">
            <div class="blog-card">
                <img src="<?php echo get_template_directory_uri(); ?>/images/tabing-2.jpg" alt="">
                <h3>Web Development Tips</h3>
                <p>Latest coding techniques.</p>
            </div>
        </div>
        <div class="blog-tab-content" id="marketing">
            <div class="blog-card">
                <img src="<?php echo get_template_directory_uri(); ?>/images/tabing-3.jpg" alt="">
                <h3>Marketing Strategy</h3>
                <p>Digital growth solutions.</p>
            </div>
        </div>
        <div class="blog-tab-content" id="branding">
            <div class="blog-card">
                <img src="<?php echo get_template_directory_uri(); ?>/images/tabing-1.jpg" alt="">
                <h3>Brand Identity</h3>
                <p>Create powerful brands.</p>
            </div>
        </div>
    </div>
</section> -->
<!-- blog tab section end -->

<!-- newsletter section start -->
<!-- <section class="container newsletter-section">
    <div class="row">
        <div class="newsletter-box">
            <div class="newsletter-content">
                <span class="section-subtitle">newsletter</span>
                <h2>Stay Updated With Our <strong>Latest Insights</strong></h2>
                <p>
                    Subscribe to receive the latest blogs, creative ideas and digital updates directly in your inbox.
                </p>
            </div>
            <div class="newsletter-form">
                <form>
                    <input type="email" placeholder="Enter Your Email Address">
                    <button type="submit" class="theme-btn">Subscribe</button>
                </form>
            </div>
        </div>
    </div>
</section> -->
<!-- newsletter section end -->

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
