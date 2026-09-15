<?php
/**
 * Template Name: Home page
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
if( have_rows('home_date') ):

    // Loop through rows.
    while ( have_rows('home_date') ) : the_row();

        // Case: Paragraph layout.
        if( get_row_layout() == 'banner_section' ):
            $banner_title = get_sub_field('banner_title');
            $banner_content = get_sub_field('banner_content');
            $banner_link = get_sub_field('banner_link');
            $banner_img = get_sub_field('banner_img');
            ?>
<section class="banner-section container">
	<div class="row">
		<div class="table">
			<div class="left-bg">
				<h1><?php echo $banner_title; ?></h1>
				<p><?php echo $banner_content; ?></p>
				<a class="btn" href="<?php echo $banner_link['url']; ?>" title="<?php echo $banner_link['title']; ?>"><?php echo $banner_link['title']; ?></a>
			</div>
			<div class="right-bg">
				<img src="<?php echo $banner_img; ?>" alt="">
			</div>
		</div>
	</div>
</section>
            <?php

        // Case: Download layout.
        elseif( get_row_layout() == 'hero_section' ): 
            $hero_title = get_sub_field('hero_title');
            $hero_box = get_sub_field('hero_box');
            ?>
<section class="container hero-section">
	<div class="row">
		<h2 class="main-title"><?php echo $hero_title; ?></h2>
		<div class="box-section">
			<div class="mrg">
				<?php
				foreach ($hero_box as $box) {
					$box_img = $box['box_img'];
					$box_title = $box['box_title'];
					$box_content = $box['box_content'];
					$box_link = $box['box_link'];
				?>
				<div class="box">
					<div class="box-img">
						<img src="<?php echo $box_img; ?>" alt="">
					</div>
					<div class="box-text">
						<div class="tx-box">
							<h3><?php echo $box_title; ?></h3>
						<p><?php echo $box_content; ?></p>
						<a class="box-btn" href="<?php echo $box_link['url']; ?>" title="<?php echo $box_link['title']; ?>"><?php echo $box_link['title']; ?></a>
						</div>
					</div>
				</div>
				<?php
				}
				?>
			</div>
		</div>
		 <div class="button">
			<a class="btn" href="#" title="more services">more services</a>
		 </div>
	</div>
</section>
            <?php

elseif( get_row_layout() == 'statistic_section' ): 
            $counter_box = get_sub_field('counter_box');
            ?>
            <section class="container statistic-section">
	<div class="row">
		<div class="box-section">
			<div class="mrg">
				<?php
				foreach ($counter_box as $key => $count) {
					   $counter_number =  $count['counter_number'];
					   $counter_title =  $count['counter_title'];
					?>
					<div class="box">
					    <div id="counter-box">
					  	<span class="counter" data-number="<?php echo $counter_number; ?>"></span>
				        <h2><?php echo $counter_title; ?></h2>
				        </div>
				    </div>
					<?php
				}
				?>
			</div>
		</div>
	</div>
</section>
            <?php


elseif( get_row_layout() == 'service_section' ): 
            $service_title = get_sub_field('service_title');
            $service_box = get_sub_field('service_box');
            ?>
            <section class="container services-section">
	<div class="row">
		<h2 class="main-title"><?php echo $service_title; ?></h2>
		<div class="box-section">
			<div class="mrg">
				<?php
				foreach ($service_box as $service) {
					$service_img = $service['service_img'];
					$service_sub_img = $service['service_sub_img'];
					$service_head = $service['service_head'];
					$service_content = $service['service_content'];
					$service_link = $service['service_link'];
					?>
					<div class="box">
					<div class="box-spacing">
						<img src="<?php echo $service_img; ?>" alt="">
					<div>
						<div class="text-box">
							<h3><?php echo $service_head; ?></h3>
							<p><?php echo $service_content; ?></p>
							<a class="box-btn" href="<?php echo $service_link['url']; ?>" title="<?php echo $service_link['title']; ?>"><?php echo $service_link['title']; ?></a>
							<img src="<?php echo $service_sub_img; ?>" alt="">
						</div>
					</div>
					</div>
				</div>
					<?php
				}
				?>
				
			</div>
		</div>
	</div>
</section>
            <?php

elseif( get_row_layout() == 'profile_section' ): 
            $profile_title = get_sub_field('profile_title');
            $profile_box = get_sub_field('profile_box');

            ?>
            <section class="container profile-section">
	<div class="row">
		<h2 class="main-title"><?php echo $profile_title; ?></h2>
		<div class="box-section">
			<div class="mrg">
				<div class="owl-carousel owl-theme">
				<?php
				foreach ($profile_box as $profile) {
					$profile_img = $profile['profile_img'];
					$profile_head = $profile['profile_head'];
					$profile_label = $profile['profile_label'];
					?>
					<div class="item">
					<div class="box">
					<div class="box-color">
						<div class="box-bg">
						<img src="<?php echo $profile_img; ?>" alt="">
					</div>
					<div class="box-tx">
						<h3><?php echo $profile_head; ?></h3>
						<p><?php echo $profile_label; ?></p>
					</div>
					</div>
				</div>
			</div>
					<?php
				}
				?>
			   </div>
			</div>
		</div>
	</div>
</section>
            <?php

elseif( get_row_layout() == 'blog_section' ): 
            $blog_title = get_sub_field('blog_title');
            $blog_box = get_sub_field('blog_box');

            ?>
            <section class="container blog-section"> 
	<div class="row">
		<h2 class="main-title">latest blog</h2>
		<div class="box-section">
			<div class="mrg">
				<?php
				foreach ($blog_box as $blog) {
					$blog_img = $blog['blog_img'];
					$blog_head = $blog['blog_head'];
					$blog_label = $blog['blog_label'];
					$blog_content = $blog['blog_content'];
					$blog_link = $blog['blog_link'];
					?>
					<div class="box">
					<div class="box-img">
						<img src="<?php echo $blog_img ; ?>" alt="">
					</div>
					<div class="box-text">
						<span><?php echo $blog_label ; ?></span>
						<h3><?php echo $blog_head ; ?></h3>
						<p><?php echo $blog_content ; ?></p>
						<a class="box-btn" href="<?php echo $blog_link['url'] ; ?>" title="<?php echo $blog_link['title'] ; ?>"><?php echo $blog_link['title'] ; ?></a>
					</div>
				</div>
					<?php
				}
				?>	
			</div>
		</div>
	</div>
</section>
            <?php

elseif( get_row_layout() == 'about_section' ): 
            $about_label = get_sub_field('about_label');
            $about_title = get_sub_field('about_title');
            $about_content = get_sub_field('about_content');
            $about_link = get_sub_field('about_link');
            $bg_one = get_sub_field('bg_one');
            $bg_two = get_sub_field('bg_two');
            $bg_three = get_sub_field('bg_three');
             
             ?>
             <section class="container about-section">
	<div class="row">
		<div class="table">
			<div class="left">
			<span><?php echo $about_label; ?></span>
			<h2><?php echo $about_title; ?></h2>
			<p><?php echo $about_content; ?></p>
			<a href="<?php echo $about_link['url']; ?>" title="<?php echo $about_link['title']; ?>"><?php echo $about_link['title']; ?></a>
			</div>
			<div class="right">
				<div class="top-bg" style="background: url(<?php echo $bg_one; ?>) no-repeat top center; background-size: cover;">
					<img src="<?php echo $bg_one; ?>" alt="">
				</div>
				<div class="bg-box">
					<div class="bg-left" style="background: url(<?php echo $bg_two; ?>) no-repeat top center; background-size: cover;">
						<img src="<?php echo $bg_two; ?>" alt="">
					</div>
					<div class="bg-right" style="background: url(<?php echo $bg_three; ?>) no-repeat top center; background-size: cover;">
						<img src="<?php echo $bg_three; ?>" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
             <?php

        endif;

    // End loop.
    endwhile;

// No value.
else :
    // Do something...
endif;
?>

<?php
get_footer();
