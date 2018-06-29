<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hopehealinghappiness
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Hope, Healing & Happiness Counseling Services" />
	<meta property="og:description" content="Counseling services located in Fanwood, New Jersey" />
	<meta property="og:url" content="http://www.hopehealinghappinesscounseling.com" />
	<meta property="og:site_name" content="Hope, Healing & Happiness Counseling Services" />
	<meta property="og:image" content="http://hopehealinghappinesscounseling.com/wp-content/uploads/2018/06/hopehealinghappiness-og-image.png" />

	<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'hopehealinghappiness' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding" style="border-bottom: 5px solid #73729b;">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$hopehealinghappiness_description = get_bloginfo( 'description', 'display' );
			if ( $hopehealinghappiness_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $hopehealinghappiness_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<div class="phone-info">
			<p>Call for Appointment: (908) 312-0417</p>
		</div>

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'hopehealinghappiness' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
