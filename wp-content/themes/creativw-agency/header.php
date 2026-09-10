<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package creativw_agency
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<?php
	$header_logo = get_field('header_logo', 'option');
	?>
	<header class="container">
		<div class="row">
			<div class="mobile-menu">
				<a href="#menu">
					<img src="<?php echo get_template_directory_uri(); ?>/images/menu.png" alt="">
					<img src="<?php echo get_template_directory_uri(); ?>/images/close.png" alt="">
				</a>
			</div>
			<div class="d-flex">
				<div class="logo">
					<a href="#" title="logo"><img src="<?php echo $header_logo; ?>" alt=""></a>
				</div>
				<nav>
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
								'container'      => false,
							)
						);
			        ?>
				</nav>
				<div class="search-box">
					<a class="search" href="#" title="search"><img src="<?php echo get_template_directory_uri(); ?>/images/search.png" alt=""></a>
				</div>
			</div>
		</div>
	</header>

	<div class="mobile-opened">
		<nav id="menu">
			<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'menu-open',
								'container'      => false,
							)
						);
			        ?>
		</nav>
	</div>


