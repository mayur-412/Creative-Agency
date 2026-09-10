<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package creativw_agency
 */
$footer_logo = get_field('footer_logo', 'option');
?>

<footer class="container">
	<div class="row">
		<div class="footer-logo">
			<a href="#" title="logo"><img src="<?php echo $footer_logo; ?>" alt=""></a>	
		</div>
		<div class="footer-menu">
			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
	        ?>
		</div>
		<p class="company-label">Copyright © 2020 All Rights Reserved</p>
	</div>
</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
